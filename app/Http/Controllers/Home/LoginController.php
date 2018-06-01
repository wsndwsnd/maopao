<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\User;
use App\Models\home\Userinfo;
use DB;
class LoginController extends Controller
{
    /**
     * 注册页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Home.login');
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
       $this -> validate($request,[
            'user_name' => 'required|unique:users|regex:/[\w]{1,12}/',
            'password' => 'required|regex:/[\w]{6,18}/',
            'repassword' => 'required|same:password',
            'email' => 'required|email',
           ],[
            'user_name.required' => '用户名不能为空',
            'user_name.unique' => '用户名已存在',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不合法',
            'password.required' => '密码不能为空',
            'password.regex' => '请输入6-8位合法密码',
            'repassword.required' => '确认密码不能为空',
            'repassword.same' => '两次密码不一致',
           ]
       );
        $data = $request;
        $users = new User;
        $user_name= $data->user_name;
        $password = $data->password;
        $email = $data->email;
        $res1 = $users->insertGetId(['user_name'=>$user_name,'user_password'=>$password,'user_email'=>$email]);
       //用户详情
        $userinfo = new Userinfo;
        $userinfo -> user_id = $res1;
        
        $res2 = $userinfo->save();
       if($res1 && $res2){
        //成功
             DB::commit();
             return redirect('/user/create');
       }else{
        //失败
        DB::rollBack();
       }
        // dump($request -> all());

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
