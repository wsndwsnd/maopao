<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Plhf;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->input('id','');
        $pid = $request->input('pid','');
        $uid = $request->input('uid','');


        return view('Home.Read.create',['id'=>$id,'pid'=>$pid,'uid'=>$uid]);
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

        $data = $request->only('pid','content');
        //评论人的id
        $uid = $request->input('uid','');
        //被回复评论的id
        $id = $request->input('id','');
        //回复者的uid
        $data['uid'] =session('user_id');
        //回复内容
        $data['created_at'] = date('Y-m-d H:i:s',time());
        //被评论的人的用户名
        $data['touname'] = User::find($uid)->user_name;
        //被评论内容
        $data['tocontent'] = Plhf::find($id)->content;
        //被评论的评论时间
        $data['toctime'] = Plhf::find($id)->created_at;
        //被回复id
        $data['hid'] = $id;
        
         //评论加积分
        $score = User::find(session('user_id'))->score;
        $score += 2;
        $res1 = User::where('id',session('user_id'))->update(['score'=>$score]);

        $res = Plhf::insert($data);
        $pid = $data['pid'];

         if ($res) {
            // return redirect("/home/read/$pid")->with('success','回复成功');
            return back()->with('success','回复成功')->with('pid', $pid);;
        }else{
            return redirect("/home/read/$pid")->with('error','回复失败');

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
