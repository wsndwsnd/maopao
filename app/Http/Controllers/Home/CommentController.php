<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

use App\Models\Comment;
use App\Models\Articles;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        DB::beginTransaction();

        $data = $request->only('content','uid','aid');
        
        $data['created_at']= date('Y-m-d H:i:s',time());
       
        $res = Comment::insertGetId($data); 
         //评论加积分
        $score = User::find(session('user_id'))->score;
        $score += 2;
        $res1 = User::where('id',session('user_id'))->update(['score'=>$score]);

        if ($res && $res1) {
            //添加评论量
           $article = Articles::where('id',$data['aid'])->first();
           $num = $article ->article_comments;
           $num +=1;
           Articles::where('id',$data['aid'])->update(['article_comments'=>$num]);
           DB::commit();
           // return back()->with('success','评论成功');
           echo $res;
        }else{
           DB::rollBack();
            
           // return back()->with('error','评论失败');
           echo 2;
           
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


    }
    public function del($id)
    {
        DB::beginTransaction();
        $data = Comment::where('id',$id)->first();
        $aid = $data->articles->id;
        $num = $data->articles->article_comments;
        $num -=1;
        $res1 = Articles::where('id',$aid)->update(['article_comments'=>$num]);
        $res2 = Comment::destroy($id);
        if ($res2 && $res1) {
             DB::commit();
             echo 1;         
        }else{
             DB::rollBack();           
             echo 2;
        }
    }


}
