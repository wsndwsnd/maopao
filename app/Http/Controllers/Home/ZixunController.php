<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Articles;

use App\Models\Comment;


class ZixunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Articles::where('article_status',1)->orderBy('id','desc')->paginate(4);

        //阅读排行
        $data1 = Articles::where('article_status',1)->orderBy('article_pview','desc')->paginate(3);
        // 推荐阅读
        $data2 = Articles::where('article_status',1)->orderBy('article_comments','desc')->paginate(3);
        return view('Home.zixun.index',['data'=>$data,'data1'=>$data1,'data2'=>$data2]);

        //推荐阅读
        $data1 = Articles::where('article_status',1)->orderBy('article_pview','desc')->paginate(3);

        return view('Home.zixun.index',['data'=>$data,'data1'=>$data1]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.zixun.create');
        
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
        $data = Articles::find($id);
        //阅读量
        $i = $data->article_pview;
        $i +=1;
        Articles::where('id',$id)->update(['article_pview'=>$i]);
        //上一篇文章
        $data1 = Articles::where('id','>',$id)->where('article_status',1)->first();
        //下一篇文章
        $data2 = Articles::where('id','<',$id)->where('article_status',1)->orderBy('id','desc')->first();

        
        //阅读排行
        $data3 = Articles::where('article_status',1)->orderBy('article_pview','desc')->paginate(3);
        //推荐阅读

        $data4 =Articles::where('article_status',1)->orderBy('article_comments','desc')->paginate(3);

        
        //显示评论
        $data5 = Comment::where('aid',$id)->paginate(5);
        
        // $data6 = Comment::where('aid',$id)->orderBy('id','desc')->first();
        

        return view('Home.zixun.show',['data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5]);

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
