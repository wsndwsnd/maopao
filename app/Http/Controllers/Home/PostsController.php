<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\User;
use App\Models\Home\Posts;
use App\Models\Home\Postsinfo;
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
        //
        echo '帖子 index';
    }

    /**
     * 用户添加帖子页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.posts.create');
    }

    /**
     * 接收执行添加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        if($request->hasFile("pic")){

            //获取上传信息
            $file = $request->file("pic");
            //确认上传的文件是否成功
            if($file->isValid()){
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $dir_name = 'pic/'.date('Ymd',time());//拼接路径便于存储
                $name = '/'.$dir_name.'/'.$filename;         
                $file ->move($dir_name,$filename);
            }
         }

        $res1 = Posts::insertGetId(['cid'=>1,'uid'=>21,'posts_title'=>$request->posts_title,'created_at'=>date('Y-m-d H:i:s',time())]);
        // dd($res1);
        //帖子详情
        $postsinfo = new Postsinfo;
        //获取tid 
        $postsinfo->tid = $res1;
        $postsinfo->content = $request -> content;
        $postsinfo->pic = $name;
        $res2 = $postsinfo->save();

        if($res1 && $res2){
            DB::commit();
            dump('成功');
        }else{
            DB::rollBack();
            dump('失败');
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
