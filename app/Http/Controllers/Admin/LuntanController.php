<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;

class LuntanController extends Controller
{
    public static function getPidCates($tid=0)
    {
        $data = Cates::where('tid',$tid)->get();
        $arr = [];
        foreach($data as $key => $value){
            $value['sub'] = self::getPidCates($value->id);
        }
        return $arr;
    }

    //搜索分页
    public static function getCates($count,$title)
    {
        $data = Category::select('id','title','tid','path',\DB::raw("concat(path,',',id) as paths"))->where('title','like','%'.$title.'%')->orderBy('paths','asc')->paginate($count);
        foreach ($data as $k=>$val){
            $n = substr_count($val->paths,',');
            $data[$k]->title = str_repeat('|----',$n).$val->title;
        }
        return $data;
    }

    //添加分类
    public static function getCategory()
    {
        $data = Category::select('id','title','tid','path',\DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
        foreach ($data as $k=>$val){
            $n = substr_count($val->paths,',');
            $data[$k]->title = str_repeat('|----',$n).$val->title;
        }
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $counts = Category::count('id');
        $count = $request->input('count',$counts);
        $title = $request -> input('title','');
        return view('admin.luntan.index',['data'=>self::getCates($count,$title),'count'=>$count,'counts'=>$counts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.luntan.create',['data'=>self::getCategory()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tid = $request -> input('tid',0);
        $category = new Category;
        if($tid == 0){
            $path = 0;
        }else{
            $parent_data = Category::find($tid);
            $path = $parent_data['path'].','.$parent_data['id'];
        }
        $category -> title = $request->input('title');
        $category -> tid = $tid;
        $category -> path = $path;
        if($category->save()){
            return redirect('/admin/luntan')->with('success','添加成功');
        }{
            return back()->with('error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);

        return view('/admin/luntan/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $res = Category::where('id',$id)->update(['title'=>$request->title]);
        if($res){
            return redirect('/admin/luntan')->with('success','修改成功');
        }{
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent_data = Category::where('tid',$id)->first();
        if($parent_data){
            return back()->with('error','当前类别有子分类,不允许删除');
            exit;
        }
        if(Category::destroy($id)){
            return redirect('/admin/luntan')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
