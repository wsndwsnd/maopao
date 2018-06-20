<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userinfo;
use DB;
use App\Http\Controllers\CodeController;
use App\Models\Posts;
use App\Models\Articles;
use Hash;
class UserController extends Controller
{
    /**
     * 前台用户详情
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //用户信息
        $data = User::find(session('user_id'));
        //用户发的贴子
        $user_posts = Posts::where('uid',session('user_id'))->orderBy('label','desc')->get();
        //用户发的文章
        $user_article = Articles::where('uid',session('user_id'))->get(); 
        //用户收藏的文章
        $user_acollects = $data -> acollects;
        //用户收藏的帖子
        $user_pcollects = $data -> pcollects;

        return view('Home.user.index',['data'=>$data,'user_posts'=>$user_posts,'user_article'=>$user_article,'user_acollects'=>$user_acollects,'user_pcollects'=>$user_pcollects]);
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 
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
     * 修改个人信息
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
     * 执行修改
     *
     * @param  修改信息
     * @param  int  $id
     * @return 个人中心
     */
    public function update(Request $request, $id)
    {
         DB::beginTransaction();
         $data1 = $request -> only('user_email');
        $data2 = $request -> only('age','sex','user_tel');
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
     * @return 首页
     */
    public function destroy(Request $request,$id)
    {
        //清空session
        $request->session()->forget('user_name');
        $request->session()->forget('user_id');
        $request->session()->forget('user_img');
        $request->session()->forget('user_token');
        
        $url =   substr($request->input('url','/'),21);
        return redirect($url);
    }


    //上传头像
    public function uploads(Request $request)
    {
        DB::beginTransaction();
        if($request -> hasFile('profile')){
            $profile = $request -> file('profile');
            $dir_name = './uploads/'.date('Ymd');
            $file_name = str_random(20);
            $hz = $profile->getClientOriginalExtension();
            $name = '/'.$file_name.'.'.$hz;
            $res = $profile -> move($dir_name,$name);
            $userimg = $dir_name.$name; 
            if($res){
                $arr = [
                    'code' => 1,
                    'msg' => '上传成功',
                    'data' => [
                        'src' => ltrim($dir_name.$name,'.')
                    ],
                ];
            $data1['img']=$userimg;
            $id = session('user_id');
            session(['user_img'=> $userimg]);
            User::where('id',$id)->update($data1);
            DB::commit();
            }else{
                $arr = [
                    'code' => 0,
                    'msg' => '上传失败',
                    'data' => [
                        'src' => ''
                    ],
                ];
            DB::rollBack();

            }
        }

        //处理返回值
        echo json_encode($arr);
    }

    //修改密码页面 
    public function password()
    {
        return view('Home.user.uppassword');

    }
    //执行修改密码
    public function uppassword(Request $request)
    {
        DB::beginTransaction();
        $name = $request -> input('user_name');
        $password = Hash::make($request -> input('password','123'));
        $res1 = User::where('user_name',$name)->update(['user_password'=>$password]);
        // dump($res1);dd($res2);
        if ($res1) {
            DB::commit();
            return redirect('/user')->with('success','修改成功');
        }else{
            DB::rollBack();
            return back()->with('error','修改失败');
        }
    }
    //ajax 验证密码
    public function passwordajax(Request $request)
    {
        $id = $request -> id;
        $opassword = $request -> opassword;
        $res = User::select(['user_password'])->where('id',$id)->first();
        if( Hash::check($opassword, $res->user_password) ){
            //成功
            echo '0';
        }else{
            //失败
            echo '1';
        }
    }


    //访问别人的主页
    public function other(Request $request,$id)
    {
        $data = User::find($id);
        //他发的贴子
        $user_posts = Posts::where('uid',$id)->get();
        //他发的文章
        $user_article = Articles::where('uid',$id)->get(); 
        //ta收藏的文章
        $user_acollects = $data -> acollects;
        //ta收藏的帖子
        $user_pcollects = $data -> pcollects;
        
        return view('Home.user.other',['data'=>$data,'user_posts'=>$user_posts,'user_article'=>$user_article,'user_acollects'=>$user_acollects,'user_pcollects'=>$user_pcollects]);
    }
    //删除收藏帖子
    public function del1(Request $request)
    {
        $data = $request->only('pid','uid');
        $res = DB::delete('delete from p_collect where uid = :uid and pid = :pid',$data);
        if ($res) {
            echo 1;
        }else{
            echo 2;
        }
    }
     //删除收藏文章
    public function del2(Request $request)
    {
        $data = $request->only('aid','uid');
        $res = DB::delete('delete from a_collect where uid = :uid and aid = :aid',$data);
        if ($res) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
