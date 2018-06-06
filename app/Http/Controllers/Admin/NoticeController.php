<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Notices;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return 返回公告列表页
     */
    public function index(Request $request)
    {
   
        //接收分页的条数
        $count = $request -> input('count',5);
        // $count = 1;
        $search_title = $request -> input('notice_title','');
        //以数组的方式接收所有参数
        $params = $request -> all();

        //加载视图
        $data = Notices::where('notice_title','like','%'.$search_title.'%') -> paginate($count);
        return view('admin.notice.index',['data'=>$data,'params'=>$params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return 返回公告添加页
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 执行添加操作
     */
    public function store(Request $request)
    {
        //表单验证
        $this -> validate($request,[
            'notice_title' => 'required',
            'notice_content' => 'required',
        ],[
            'notice_title.required' => '公告标题必填',
            'notice_content.required' => '公告内容必填',
        ]);
        //接收表单数据
        // dump($request -> all());

        $notice = new Notices;
        $notice -> notice_title = $request ->input('notice_title','');
        $notice -> notice_content = $request ->input('notice_content','');
        $notice -> notice_status= $request ->input('notice_status');
      

        $notice -> save();

        if($notice){
            return redirect('/admin/notice')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return 公告详情
     */
    public function show($id)
    {
        $data = Notices::where('id',$id)->first();
        return view('admin.notice.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return 返回修改页
     */
    public function edit($id)
    {
        $data = Notices::find($id);
        return view('admin.notice.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id 要修改的id 
     * @return 执行修改
     */
    public function update(Request $request, $id)
    {
        $data = $request;
        $row =Notices::find($id);
        
        $row -> notice_title= $data->notice_title;
        $row -> notice_content = $data->notice_content;
        $row -> notice_status = $data->notice_status;
        $res = $row->save();
     
        if($res){
            return redirect('/admin/notice')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        } 
    }

    /**
     * 删除
     */
    public function destroy($id)
    {   
        //执行删除 返回影响行数
        $res = Notices::destroy($id);
        if($res){
            return redirect('/admin/notice')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }

    /**
     * 公告权限-发布
     * status 状态
     */
    public function up(Request $request,$id,$status=1)
    {
        
        $data['notice_status'] = $status;
        $res =  Notices::where('id',$id)->update($data); 
        return redirect('/admin/notice');
    }

    /**
     * 公告权限-待审
     *  status 状态
     */
    public function down($id,$status=0)
    {
        $data['notice_status'] = $status;
        $res =  Notices::where('id',$id)->update($data); 
        return redirect('/admin/notice');
    }
}
