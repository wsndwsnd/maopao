<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Postsinfo;
use DB;
use  App\Http\Controllers\Admin\CateController;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return 返回帖子列表
     */
    public function index(Request $request)
    {
        //接收显示条数
        $count = $request->input('count','5');
        //接收搜索内容
        $posts_title = $request -> input('posts_title','');
        
        $data = Posts::where('posts_title','like','%'.$posts_title.'%')->paginate($count);
        $num = Posts::count('id');
        return view('Admin.posts.index',['data'=>$data,'posts_title'=>$posts_title,'num'=>$num,'count'=>$count]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return 显示添加页
     */
    public function create()
    {
        //CateController::getCategory()  遍历类别   
        return view('Admin.posts.create',['data'=>CateController::getCategory()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 执行添加
     */
    public function store(Request $request)
    {
        //开启事务
        DB::beginTransaction();
        
        $data1 = $request -> only('posts_title','cid');
        
        $data1['uid'] = '21';

        $data1['created_at']=date('Y-m-d H:i:s',time());
        $res1 = Posts::insertGetId($data1);

        $data2 = $request->only('content');
       
        $data2['tid'] = $res1;
        
        $res2 = Postsinfo::insert($data2);
        if ($res1 && $res2) {
            DB::commit();
            return redirect('/admin/posts')->with('success','添加成功');
        }else{
            DB::rollBack();

            return back()->with('error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id 要是帖子的id
     * @return 显示帖子内容
     */
    public function show($id)
    {

        $data = Posts::find($id);
        
        return view('Admin.posts.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return 返回修改页面
     */
    public function edit($id)
    {
        $data = Posts::find($id);
        return view('Admin.posts.edit',['data'=>$data,'data1'=>CateController::getCategory()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id  要修改的id
     * @return 执行修改
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $data1 = $request -> only('posts_title','cid');
        $data2 = $request -> only('content');
        
        $res1 = Posts::where('id',$id)->update($data1);
        $res2 = Postsinfo::where('tid',$id)->update($data2);
        if ($res1 && $res2) {
            DB::commit();
            return redirect('/admin/posts')->with('success','修改成功');
        }else{
            DB::rollBack();

            return back()->with('error','修改失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 要删除的ID
     * @return 执行删除
     */
    public function destroy($id)
    {
        DB::beginTransaction();

            $res1 = Posts::destroy($id);
            $res2 = Postsinfo::where('tid',$id)->delete();
             if ($res1 && $res2) {
                DB::commit();
                return redirect('/admin/posts')->with('success','删除成功');
            }else{
                DB::rollBack();

                return back()->with('error','删除失败');
            }
    }
    

     /**
     * 帖子状态-上线
     * attr 状态
     */
    public function up(Request $request,$id,$attr=1)
    {
        
        $data['attr'] = $attr;
        $res = Posts::where('id',$id)->update($data); 
        return redirect('/admin/posts');
    }

    /**
     * 帖子状态-待审
     * attr 状态
     */
    public function down($id,$attr=0)
    {
        $data['attr'] = $attr;
        $res = Posts::where('id',$id)->update($data); 
        return redirect('/admin/posts');
    }

    //前台申请标签
    public function sq(Request $request)
    {
        DB::beginTransaction();
        $id = $request -> input('pid');
        $label = $request -> input('label');
        $data['status'] = 2;
        $res = Posts::where('id',$id)->update($data);
        if($res){
            DB::commit();
            return back()->with('success','成功申请，等待处理');
        }else{
            DB::rollBack();
            return back()->with('error','申请失败');
        }
    }

    //带处理帖子
    public function sqlb(Request $request)
    {
        //接收显示条数
        $count = $request->input('count','5');
        //接收搜索内容
        $posts_title = $request -> input('posts_title','');
        
        $data = Posts::where('posts_title','like','%'.$posts_title.'%')->where('status','2')->paginate($count);
        $num = Posts::count('id');
        return view('Admin.posts.dsq',['data'=>$data,'posts_title'=>$posts_title,'num'=>$num,'count'=>$count]);
    }
}
