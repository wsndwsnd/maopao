<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userinfo;
use DB;
use Mail;
class RegisterController extends Controller
{
    /**
     * 注册页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Home.register');
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
     * 验证注册
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        DB::beginTransaction();
        $data = $request;
        $users = new User;
        $user_name= $data->user_name;
        $password = $data->password;
        $email = $request -> input('user_email');
        $token = str_random(50);
        $id = $users->insertGetId(['user_name'=>$user_name,'user_password'=>$password,'user_email'=>$email,'token'=>$token]);
        //用户详情
        $userinfo = new Userinfo;
        $userinfo -> user_id = $id;
        $res2 = $userinfo->save();

      

       if($id && $res2){
            self::sendEmail($email,$id,$token);
            //成功
            DB::commit();
            return redirect('/user/create')->with('success','请先去激活您的账号');
       }else{
            //失败
            DB::rollBack();
            return back()->with('error','请输入合法信息');
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
	
	public function phone_code(){
		echo 999999;
	}

    /**
     * ajax 验证用户名
     *
     * @param  用户名
     * @return 1 成功 2 错误
     */
    public function ajax(Request $request)
    {
        $name = $request->uname;
        $ser = User::where('user_name',$name)->first();
        if($ser){
            //用户存在
            echo 2;
        }else{
            //用户不存在
            echo 1;
        }
    }

    //发送邮件
    public static function sendEmail($email,$id,$token)
    {
        

         Mail::send('Home.email.index', ['id' => $id,'token'=>$token,'email'=>$email], function ($m) use ($email) {
            $m->to($email)->subject('【maopao】官方 注册邮件!');
        });
    } 

    //激活账号
    public function jihuo(Request $request)
    {
        $id = $_GET['id'];
        $token = $_GET['token'];
        $res = User::find($id);

        //判断token值
        if($token != $res->token){
            return redirct('/register')->with('error','激活失败');
        }
        //判断该账号是否激活
        if($res->status == 2){
            return redirct('/register')->with('error','该账号已经激活，请不要重复激活');
        }
        //激活
        $res -> status = 2;
        $res -> token = str_random(50);
        if($res->save()){
            return redirect('/user/create')->with('success','激活成功');
        }else{
            return redirct('/register')->with('error','激活失败');
        }
    }
}
