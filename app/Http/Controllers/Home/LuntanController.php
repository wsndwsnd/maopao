<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Posts;

class LuntanController extends Controller
{
    public static function getPidCates($tid)
    {
        $data = Category::where('tid',$tid)->get();
        $arr = [];
        foreach($data as $key => $value){
            $value['sub'] = self::getPidCates($value->id);
            $arr[] = $value;
        }
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(self::getPidCates(0));
        // $ddd = Category::get()->posts;
        return view('home.cates.luntan',['data'=>self::getPidCates(0)]);
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
     * @param  $data1   分类标题
     * @param  $data2   论坛分区  
     * @param  $data    帖子标题
     * @param  $data3   帖子内容标题
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data1 = Category::where('id',$id)->first();
        $data2 = Category::where('id',$data1->tid)->first();
        $data3 = Posts::where('cid',$id)->get();
        // dump($data2);
        return view('home.cates.show',[
            'data'=>self::getPidCates($id),
            'data1'=>$data1,'data2'=>$data2,
            'data3'=>$data3
        ]);
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
}
