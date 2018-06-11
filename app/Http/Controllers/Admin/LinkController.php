<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Link;
use DB;
class LinkController extends Controller
{
    /**
     * 列表页
     *  【request】 分页 查询条件
     * @return 审批后的友情链接
     */
    public function index(Request $request)
    {
        //分页条件
        $count = $request->input('count','5');
        //搜索条件
        $Link_text = $request -> input('Link_text','');
        
        $data = Link::where('Link_text','like','%'.$Link_text.'%')->where('status','<','3')->paginate($count);
        $num = Link::count('id');
        return view('Admin.link.index',['data'=>$data,'Link_text'=>$Link_text,'num'=>$num,'count'=>$count]);
    }

    /**
     * 添加页面
     *
     * @return 
     */
    public function create()
    {
        return view('Admin.link.create');
    }

    /**
     * 执行添加
     *
     * @param  添加信息
     * @return 列表页
     */
    public function store(Request $request)
    {
        //
        DB::beginTransaction();
        $link = new Link;

        $link -> Link_text = $request -> input('Link_text');
        $link -> Link_url = $request -> input('Link_url');
        $link -> tel = $request -> input('tel');
        $link -> created_at = date('Y-m-d H:i:s',time());
        $res1 = $link -> save();
        if ($res1) {
            DB::commit();
            return redirect('/admin/link')->with('success','添加成功');
        }else{
            DB::rollBack();

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
        //
    }

    /**
     * 修改页面
     *
     * @param  int  $id
     * @return 修改页面
     */
    public function edit($id)
    {
        //接收表单数据
        $data = Link::find($id);
        return view('Admin.Link.edit',['data'=>$data]);
    }

    /**
     * 执行修改
     *
     * @param  表单数据
     * @param  id
     * @return 列表页
     */
    public function update(Request $request, $id)
    {
        //
         DB::beginTransaction();
        $link = new Link;

        $data1 = $request -> only('Link_text','Link_url','tel');
        $res1 =  Link::where('id',$id)->update($data1);
        if ($res1) {
            DB::commit();
            return redirect('/admin/link')->with('success','修改成功');
        }else{
            DB::rollBack();

            return back()->with('error','修改失败');
        }
    }

    /**
     * 删除 
     *
     * @param  链接ID 
     * @return 列表
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        $res1 = Link::destroy($id);
         if ($res1) {
            DB::commit();
            return redirect('/admin/link')->with('success','删除成功');
        }else{
            DB::rollBack();

            return back('')->with('error','删除失败');
        }
    }

    

    /**
     * 友情链接状态-上线
     * status 状态
     */
    public function up(Request $request,$id,$status=1)
    {
        
        $data['status'] = $status;
        $res = Link::where('id',$id)->update($data); 
         return back();
    }

    /**
     * 友情链接状态-待审
     * status 状态
     */
    public function down($id,$status=0)
    {
        $data['status'] = $status;
        $res = Link::where('id',$id)->update($data); 
         return back();
    }

    //前台申请
    public function audit(Request $request)
    {
        
         DB::beginTransaction();
        $link = new Link;
        //接收申请信息
        $link -> Link_text = $request -> input('Link_text');
        $link -> Link_url = $request -> input('Link_url');
        $link -> tel = $request -> input('tel');
        $link -> created_at = date('Y-m-d H:i:s',time());
        //前台申请状态
        $link -> status = '3';
        $res1 = $link -> save();
        if ($res1) {
            DB::commit();
        }else{
            DB::rollBack();
        }
        return redirect('/')->with('success','申请成功，待审中');
    }

    //待审列表 
    public function auditindex(Request $request)
    {
        //分页条件
        $count = $request->input('count','5');
        //搜索条件
        $Link_text = $request -> input('Link_text','');
        
        $data = Link::where('Link_text','like','%'.$Link_text.'%')->where('status','3')->paginate($count);
        $num = Link::count('id');
        return view('Admin.link.audit',['data'=>$data,'Link_text'=>$Link_text,'num'=>$num,'count'=>$count]);
    }
}
