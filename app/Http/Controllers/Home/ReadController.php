<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Category;
use App\Models\Slide;
use DB;
use App\Models\Plhf;
use App\Models\Ding;

class ReadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //帖子内容
        $data = Posts::where('id',$id)->first();
         //阅读量
        $i = $data->post_view;
        $i +=1;
        Posts::where('id',$id)->update(['post_view'=>$i]);

        
        $tid = $data->cates->tid;
        //类别
        $data1 = Category::where('id',$tid)->first();
        //热图
        $data2 = Slide::where('slide_status','3')->get();
        
        //评论回复
        $data3 = Plhf::where('pid',$id)->orderBy('created_at','asc')->get();
        
        return view('home.read.index',['data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
    /**
     * 顶一下
     */
    public function ding(Request $request,$id)
    {
        if(Ding::where('uid',session('user_id'))->where('pid',$id)->first()){
            echo 3;
            exit;
        }

        $data1 = $request->only('ding');

        $res1 = Posts::where('id',$id)->update($data1);

        $res2 = Ding::insert(['pid'=>$id,'uid'=>session('user_id')]);


        if ($res1 && $res2) {
            echo 1;
        }else{
            echo 2;
        }
    }
     /**
     * 踩一下
     */
    public function cai(Request $request,$id)
    {
        if(Ding::where('uid',session('user_id'))->where('pid',$id)->first()){
            echo 3;
            exit;
        }

        $data1 = $request->only('cai');
        $res1 = Posts::where('id',$id)->update($data1);

        $res2 = Ding::insert(['pid'=>$id,'uid'=>session('user_id')]);


        if ($res1 && $res2) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
