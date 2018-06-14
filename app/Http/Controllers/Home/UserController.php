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
    public function destroy($id)
    {
        //清空session
        Session()->flush();
        return redirect('/');
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
}
