<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = $request->input('count','10');
        $slide_img = $request -> input('slide_img','');
        $num = Slide::count('slide_id');
        $data = Slide::where('slide_img','like','%'.$slide_img.'%')->paginate($count);
        return view('admin.slide.index',['data'=>$data,'slide_img'=>$slide_img,'num'=>$num,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // 设置报错信息
        $this->validate($request,[
            'slide_img' => 'required',


            'slide_url' => 'required|image',
        ],[
            'slide_img.required' => '图片名称必填', 
            'slide_url.required' => '图片必须上传', 
            'slide_url.image' => '图片格式不正确',
            
        ]);

            if($request->hasFile("slide_url")){
            //获取上传信息
            $file = $request->file("slide_url");
            //确认上传的文件是否成功
            if($file->isValid()){
                //$picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $dir_name = 'uploads/'.date('Ymd',time());//拼接路径便于存储
                $name = '/'.$dir_name.'/'.$filename;          
                $data['slide_url']=$name;
                $file ->move($dir_name,$filename);
            }
        }
        // dump($data);
        $data['slide_img'] = $request->input('slide_img');
        $data['slide_status'] = $request->input('slide_status');
        $res = Slide::insert($data);
        if ($res) {
            return redirect('/admin/slide')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        $data = Slide::find($id);
        return view('admin.slide.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Slide::find($id);
        return view('admin.slide.edit',['data'=>$data]);
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
        //判断是否上传文件
        if($request->hasFile("slide_url")){
            //获取上传信息
            $file = $request->file("slide_url");
            //确认上传的文件是否成功
            if($file->isValid()){
              
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $dir_name = 'uploads/'.date('Ymd',time());//拼接路径便于存储
                $name = '/'.$dir_name.'/'.$filename;          
                $data['slide_url']=$name;
                $file ->move($dir_name,$filename);
            }
        }
        $data['slide_img'] = $request -> input('slide_img');
        $data['slide_status'] = $request -> input('slide_status');
        $res = Slide::where('slide_id',$id)->update($data);
        if ($res) {
            return redirect('/admin/slide')->with('success','修改成功');
        }else{
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
        $res = Slide::destroy($id);
         if ($res) {
            return redirect('/admin/slide')->with('success','删除成功');
        }else{
            return back('')->with('error','删除失败');
        }
    }
}
