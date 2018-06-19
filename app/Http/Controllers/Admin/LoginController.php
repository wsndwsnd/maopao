<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Power;
use Hash;
use App\Http\Controllers\CodeController;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.login.login');
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
        $username = $request->input('username','');
       
        $password = $request->input('password','');
        $data = Power::where('username',$username)->first();
        $res = CodeController::check($request -> input('code'));

        if(!$res){
             return back()->with('error','验证码错误');
        }
               
         
        
      
        if ($data &&  Hash::check($password,$data->password)) {
                session(['admin_username'=>$username]);
                // dd(session('admin_username'));
                return redirect('/admin')->with('success','登陆成功');
         }else{
                return back()->with('error','账号或密码错误');
         }

    }

    public function logout(Request $request)
    {

        $res = $request->session()->forget('admin_username');

        if (!$res) {
             return redirect('/admin/login')->with('success','已退出,请重新登录');
        }else{
             return back()->with('error','未成功退出,请重新退出');

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
