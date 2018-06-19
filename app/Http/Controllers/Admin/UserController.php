<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserInsertRequest;
use App\Http\Requests\UserEditRequest;

use App\Models\User;
use App\Models\Userinfo;
use App\Models\Acollect;

use Hash;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return 用户列表
     */
    public function index(Request $request)
    {
        $count = $request->input('count','5');
        $username = $request -> input('user_name','');
        
        $data = User::where('user_name','like','%'.$username.'%')->paginate($count);
        // 总条数
        $num = User::count('id');
        return view('Admin.user.index',['data'=>$data,'user_name'=>$username,'num'=>$num,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return 添加页面
     */
    public function create()
    {
        return view('Admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 执行添加
     */
    public function store(UserInsertRequest $request)
    {
         DB::beginTransaction();
        // 接收users表中的字段
        $data1 = $request->only(['user_name','user_password','user_email']);
        $data1['user_password'] = Hash::make($data1['user_password']);
        //判断是否上传文件
        if($request->hasFile("img")){
        //获取上传信息
        $file = $request->file("img");
        //确认上传的文件是否成功
        if($file->isValid()){
            //$picname = $file->getClientOriginalName(); //获取上传原文件名
            $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
            //执行移动上传文件
            $filename = time().rand(1000,9999).".".$ext;
            $dir_name = 'uploads/'.date('Ymd',time());//拼接路径便于存储
            $name = '/'.$dir_name.'/'.$filename;          
            $data1['img']=$name;
            $file ->move($dir_name,$filename);
        }
    }
       
        $data2 = $request->only(['age','sex','user_tel']);
        $res1 = User::insertGetId($data1);
        $data2['user_id'] = $res1;
        $res2 = Userinfo::insert($data2);
        if ($res1 && $res2) {
            DB::commit();
            return redirect('/admin/user')->with('success','添加成功');
        }else{
            DB::rollBack();

            return back()->with('error','添加失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return 用户详细信息
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('Admin.user.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return 返回修改页面
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('Admin.user.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id 要修改的id
     * @return 执行修改操作
     */
    public function update(UserEditRequest $request, $id)
    {
        DB::beginTransaction();
        $data1 = $request -> only('user_email');
       
        //判断是否上传文件
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

        $res1 = User::where('id',$id)->update($data1);
        $res2 = Userinfo::where('user_id',$id)->update($data2);
    

        if ($res1 && $res2) {
            DB::commit();
            return redirect('/admin/user')->with('success','修改成功');
        }else{
            DB::rollBack();

            return back()->with('error','修改失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 要删除的id
     * @return 执行删除操作
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        $res1 = User::destroy($id);
        $res2 = Userinfo::where('user_id',$id)->delete();
         if ($res1 && $res2) {
            DB::commit();
            return redirect('/admin/user')->with('success','删除成功');
        }else{
            DB::rollBack();

            return back('')->with('error','删除失败');
        }
    }
    public function read($id)
    {
        $data1 = User::find($id);

        $data2 =$data1->acollects;

        $data3 =$data1->pcollects;


        return view('Admin.user.shoucang',['data2'=>$data2,'data3'=>$data3,'id'=>$id]);
    }

    /**
     * 删除文章收藏
     */
    public function del1(Request $request)
    {
        $data = $request->only('aid','uid');
        $res = DB::delete('delete from a_collect where uid = :uid and aid = :aid',$data);
        if ($res) {

            return back()->with('success','删除成功');
        }else{


            return back()->with('error','删除失败');
        }
    }
    /**
     * 删除帖子收藏
     */
    public function del2(Request $request)
    {
        $data = $request->only('pid','uid');
        $res = DB::delete('delete from p_collect where uid = :uid and pid = :pid',$data);
        if ($res) {

            return back()->with('success','删除成功');
        }else{


            return back()->with('error','删除失败');
        }
    }
}
