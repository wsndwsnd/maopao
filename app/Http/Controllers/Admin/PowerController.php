<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Admin\Power;

class PowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $power = Power::paginate(5);
        $count = $request->input('count','5');
        $username = $request -> input('username','');
        
        $power = Power::where('username','like','%'.$username.'%')->paginate($count);
        return view('Admin.powers.index',['power'=>$power,'username'=>$username,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.Powers.create',['submit'=>'添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $power = new Power;
        $power -> username = $request->input('username');
        $power -> password = $request->input('password');
        $power -> power = $request->input('power');
        $res = $power -> save();
        if($res){
            return redirect('/admin')->with('success','添加成功');
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
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $power = Power::find($id);
        return view('admin.powers.edit',['power'=>$power,'submit'=>'修改','title'=>'修改用户']);
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
        $power = $request->power;
        $res = Power::where('id','=',$id)->update(['power'=>$power]);
        if($res){
            return redirect('/admin')->with('success','修改成功');
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
        $res = Power::destroy($id);
        if($res){
            return redirect('/admin')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
