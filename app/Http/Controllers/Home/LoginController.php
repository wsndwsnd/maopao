<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userinfo;
use DB;
use Hash;
use App\Http\Controllers\CodeController;
class LoginController extends Controller
{
    //登录页面
    public function dl()
    {
        return view('Home.login.create');
    }

    //验证登录
    public function yzdl(Request $request)
    {
        $res = CodeController::check($request -> input('code'));
        if(!$res){
            return back()->with('error','验证码错误');
        }
        //获取信息
        $user_name = $request -> user_name;
        $password = $request -> password;
        $user = User::where('user_name',$user_name)->first();
        if($user && Hash::check($password,$user->user_password)){
             //把用户数据保存到session

            session(['user_name'=>$user->user_name,'user_id'=>$user->id,'user_img'=>$user->img,'user_token'=>$user->token]);

            // dd(session('user_img'));
            return redirect('/');
        }else{
             return back()->with('error','用户或密码错误');
        }
    }

    //忘记密码页面
    public function wjmm()
    {
        return view('Home.login.wjmm');
    }

    //验证忘记密码
    public function yzwjmm(Request $request)
    {
        $code = $request -> input('phone_code','');
         //判断验证码是否正确
        if($code != session('phone_code')){
            return back()->with('error','验证码错误');
        }
        $username = $request -> input('user_name'); 
        $data['user_password'] = Hash::make($request -> input('password','123'));
        
         $res = User::where('user_name',$username)->update($data);
         if($res){
            //修改成功
            return redirect('/user/create')->with('success','成功,请登录!');
        }else{
            //失败
            return back()->with('error','失败');
        }
    }
}
