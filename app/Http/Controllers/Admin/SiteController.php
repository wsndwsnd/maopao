<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Site;
use DB;
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Site::find(1);
        return view('Admin/site/index',['data'=>$data]);
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
        //
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
        $data1 = $request -> only('site_email','site_copyright');
        $res1 = Site::where('id',$id)->update($data1);
        if ($res1) {
            DB::commit();
            return redirect('/admin/site')->with('success','修改成功');
        }else{
            DB::rollBack();
            return back()->with('error','修改失败');
        }
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

    //修改logo
    public function logo(Request $request)
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
            $data1['site_logo']=$userimg;

            Site::where('id','1')->update($data1);
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


    //修改logo
    public function ewm(Request $request)
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
            $data1['site_ewm']=$userimg;

            Site::where('id','1')->update($data1);
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

    //网站配置
    public function status(Request $request)
    {
        
        DB::beginTransaction();
        //获取网站状态
        $data = $request->status;
        //进行判断
        if($data == '1'){
            $site_status = '2';
        }elseif($data == '2'){
            $site_status = '1';
        }
        //修改数据库
        $res = Site::where('id','1')->update(['site_status'=>$site_status]);

        if($res){
            echo $site_status;
            DB::commit();
        }else{
            echo 0;
            DB::rollBack();
        }
    }

}
