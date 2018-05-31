<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\User;
use App\Models\Home\Userinfo;
use DB;
class UserController extends Controller
{
    /**
     * 前台用户详情
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = session()->get('user_id');
        $data = User::find($id);
        return view('Home.user.index',['data'=>$data]);
    }

    /**
     * 登录页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Home.user.create');
    }

    /**
     * 验证登录
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取信息
        $user_name = $request -> user_name;
        $password = $request -> password;

        $user = User::where('user_name',$user_name)->where('user_password',$password)->first();
        if($user){
            //把用户数据保存到session
            session(['user_name'=>$user->user_name,'user_password'=>$user->user_password,'user_id'=>$user->id]);
            
            return redirect('/user');
        }
            dd('失败');//失败
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


         $data = User::find($id);
         return view('Home.user.edit',['data'=>$data]);
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
         DB::beginTransaction();
         $data1 = $request -> only('user_email');
         if($request->hasFile("img")){

            //获取上传信息
            $file = $request->file("img");
            //确认上传的文件是否成功
            if($file->isValid()){
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $dir_name = 'uploads/'.date('Ymd',time());//拼接路径便于存储
                $name = '/'.$dir_name.'/'.$filename;         
                $data1['img']=$name;
                $file ->move($dir_name,$filename);
            }
         }
        $data2 = $request -> only('age','sex','birthday','user_tel');
        // dump($data1);dump($data2);
        $res1 = User::where('id',$id)->update($data1);
        $res2 = Userinfo::where('user_id',$id)->update($data2);
        // dump($res1);dd($res2);
        if ($res1 && $res2) {
            DB::commit();
            return redirect('/user')->with('success','修改成功');
        }else{
            DB::rollBack();
            return back()->with('error','修改失败');
        }
    }

    /**
     * 退出
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
    }
}
