<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userinfo;
use DB;
use Mail;
use Hash;
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
        if($request -> input('phone_type') == 1){
            $phone = $request -> input('user_tel');
            $code = $request -> input('phone_code','');
             //判断验证码是否正确
            if($code != session('phone_code')){
                return back()->with('error','验证码错误');
            }
            
            $username = $request -> input('user_name'); 
            $pass = Hash::make($request -> input('password','123'));
            $token = str_random(50);
            $created_at = date('Y-m-d H:i:s',time());
            $img = './uploads/yh.jpg';
            $id = User::insertGetId(['user_tel'=>$phone,'user_name'=>$username,'created_at'=>$created_at,'user_password'=>$pass,'token'=>$token,'img'=>$img]);

           
            $userinfo = new Userinfo;
            $userinfo -> user_id = $id;
            $uid = $userinfo -> save();
            // dump(session('phone_code'));    
            // dump($code);
             if($id > 0 && $uid > 0){
                //注册成功
                return redirect('/user/create')->with('success','注册成功,请登录!');
            }else{
                //注册失败
                return back()->with('error','注册失败');
            }
        }
        

        // 不建议使用邮箱注册
       //  DB::beginTransaction();
       //  $data = $request;
       //  $users = new User;
       //  $user_name= $data->user_name;
       //  $password = $data->password;
       //  $email = $request -> input('user_email');
       //  $token = str_random(50);
       //  $id = $users->insertGetId(['user_name'=>$user_name,'user_password'=>$password,'user_email'=>$email,'token'=>$token]);
       //  //用户详情
       //  $userinfo = new Userinfo;
       //  $userinfo -> user_id = $id;
       //  $res2 = $userinfo->save();

      

       // if($id && $res2){
       //      self::sendEmail($email,$id,$token);
       //      //成功
       //      DB::commit();
       //      return redirect('/user/create')->with('success','请先去激活您的账号');
       // }else{
       //      //失败
       //      DB::rollBack();
       //      return back()->with('error','请输入合法信息');
       // }
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
	//发送验证码
	public function phone_code(Request $request)
    {
        // dd($request -> all());
        $phone = $request -> input('phone');
        $pcode = rand(1000,9999);
        session(['phone_code'=>$pcode]);
        $url = 'http://106.ihuyi.com/webservice/sms.php?method=Submit&format=json&account=C94735578&password=598a6a89fa5a24db51ee099d66a6b592&mobile='.$phone.'&content=您的验证码是：'.$pcode.'。请不要把验证码泄露给其他人。';
        $curlHandler = curl_init(); //curl  模拟http请求
        curl_setopt($curlHandler, CURLOPT_URL, $url);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curlHandler);
        echo $result;

    }


    //验证手机号
    public function ajax1(Request $request)
    {
        $phone = $request -> input('phone');
    
        $res = User::where('user_tel',$phone)->first();
        if ($res) {
            echo '1';
        }else{
            echo '2';
        }
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
    // public static function sendEmail($email,$id,$token)
    // {
        

    //      Mail::send('Home.email.index', ['id' => $id,'token'=>$token,'email'=>$email], function ($m) use ($email) {
    //         $m->to($email)->subject('【maopao】官方 注册邮件!');
    //     });
    // } 

    //激活账号
    // public function jihuo(Request $request)
    // {
    //     $id = $_GET['id'];
    //     $token = $_GET['token'];
    //     $res = User::find($id);

    //     //判断token值
    //     if($token != $res->token){
    //         return redirct('/register')->with('error','激活失败');
    //     }
    //     //判断该账号是否激活
    //     if($res->status == 2){
    //         return redirct('/register')->with('error','该账号已经激活，请不要重复激活');
    //     }
    //     //激活
    //     $res -> status = 2;
    //     $res -> token = str_random(50);
    //     if($res->save()){
    //         return redirect('/user/create')->with('success','激活成功');
    //     }else{
    //         return redirct('/register')->with('error','激活失败');
    //     }
    // }
}
