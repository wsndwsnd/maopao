<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Category;

use App\Models\Posts;



class CateController extends Controller
{
    /**
     * [getPidCates description]
     * @param  integer $tid [父类id]
     * @return [type]       [description]
     */
    public static function getPidCates($tid=0)
    {
        $data = Category::where('tid',$tid)->get();
        $arr = [];
        foreach($data as $key => $value){
            $value['sub'] = self::getPidCates($value->id);
        }
        return $arr;
    }

    /**
     * 搜索分页
     * @param  [type] $count [显示条数]
     * @param  [type] $title [搜索内容]
     * @return [type]        [description]
     */
    public static function getCates($count,$title)
    {
        $data = Category::select('id','title','tid','path',\DB::raw("concat(path,',',id) as paths"))->where('title','like','%'.$title.'%')->orderBy('paths','asc')->paginate($count);
        foreach ($data as $k=>$val){
            $n = substr_count($val->paths,',');
            $data[$k]->title = str_repeat('|----',$n).$val->title;
        }
        return $data;
    }

    /**
     * 添加分类
     * @return [type] [description]
     */
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
     * @return 返回类别列表页
     */
    public function index(Request $request)
    {   //总条数
        $counts = Category::count('id');
        //接收显示条数
        $count = $request->input('count',$counts);
        //接收搜索内容
        $title = $request -> input('title','');
        //渲染模版
        return view('admin.cate.index',['data'=>self::getCates($count,$title),'count'=>$count,'counts'=>$counts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return 返回类别添加页
     */
    public function create()
    {
        //渲染模版
        return view('admin.cate.create',['data'=>self::getCategory()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 执行添加
     */
    public function store(Request $request)
    {
        // 设置报错信息
        $this->validate($request,[
            'title' => 'required',
            'picture' => 'required|image',
        ],[
            'title.required' => '类别必填', 
            'picture.required' => '类别图片必须上传', 
            'picture.image' => '类别格式不正确',
            
        ]);
    if($request->hasFile("picture")){
            //获取上传信息
            $file = $request->file("picture");
            //确认上传的文件是否成功
            if($file->isValid()){
                //$picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $dir_name = 'uploads/'.date('Ymd',time());//拼接路径便于存储
                $name = '/'.$dir_name.'/'.$filename;          
                $data['picture']=$name;
                $file ->move($dir_name,$filename);
            }
        }
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
        $category -> picture = $name;
        if($category->save()){
            return redirect('/admin/cate')->with('success','添加成功');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return 返回类别修改页
     */
    public function edit($id)
    {
        $data = Category::find($id);
        return view('/admin/cate/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id 要修改的id
     * @return 执行修改操作
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile("picture")){
            //获取上传信息
            $file = $request->file("picture");
            //确认上传的文件是否成功
            if($file->isValid()){
                //$picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $dir_name = 'uploads/'.date('Ymd',time());//拼接路径便于存储
                $name = '/'.$dir_name.'/'.$filename;          
                $data['picture']=$name;
                $file ->move($dir_name,$filename);
            }
             $res = Category::where('id',$id)->update(['title'=>$request->title,'picture'=>$name]);
        }else{
             $res = Category::where('id',$id)->update(['title'=>$request->title]);
        }
      
        if($res){
            return redirect('/admin/cate')->with('success','修改成功');
        }{
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 要删除的id
     * @return 执行删除操作
     */
    public function destroy($id)
    {
        //是否有子类别
        $parent_data = Category::where('tid',$id)->first();
        if($parent_data){
            return back()->with('error','当前类别有子分类,不允许删除');
            exit;
        }
        //类别下是否有帖子
        $data = Posts::where('cid',$id)->first();



        if($data){
            return back()->with('error','当前类别有帖子内容,不允许删除');
            exit;
        }
        if(Category::destroy($id)){
            return redirect('/admin/cate')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
