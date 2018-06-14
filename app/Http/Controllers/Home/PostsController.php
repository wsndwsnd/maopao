<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Posts;
use App\Models\Postsinfo;

use  App\Http\Controllers\Admin\CateController;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * 用户添加帖子页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.posts.create',['data'=>LuntanController::getPidCates(0)]);
    }

    /**
     * 接收执行添加帖子
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $data1 = $request -> only('posts_title','cid');
        $data1['uid'] = session('user_id');
        $data1['created_at']=date('Y-m-d H:i:s',time());
        $res1 = Posts::insertGetId($data1);
        //帖子详情
        $data2 = $request->only('content');
        $data2['tid'] = $res1;
        $res2 = Postsinfo::insert($data2);
        if($res1 && $res2){
            DB::commit();

           return redirect("/home/read/$res1")->with('success','成功发表');

        }else{
            DB::rollBack();
            return back()->with('error','发布失败');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
