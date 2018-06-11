<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Plhf;

use DB;
class PcommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->only('pid','content');
        $data['uid'] = session('user_id');
        $data['created_at'] = date('Y-m-d H:i:s',time());
        $res = Plhf::insert($data);
        if ($res) {
            return back()->with('success','评论成功');
        }else{
            return back()->with('error','评论失败');
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
    public function del($id)
    {
        DB::beginTransaction();
        $res1 = Plhf::destroy($id);

        if(Plhf::where('hid',$id)->first())
        {
                $res2 = DB::delete('delete from plhf where hid = ?',[$id]);
                if ($res1 && $res2) {
                    
                    echo 1;
                    DB::commit();
                    exit;
                }else{
                     echo 2;
                    DB::rollBack();
                    exit;

                }
        }

        if ($res1) {
                    
                    echo 1;
                    DB::commit();
                }else{
                     echo 2;
                    DB::rollBack();

                }

    }
}
