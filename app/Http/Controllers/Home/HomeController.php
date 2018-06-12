<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Notices;
use App\Models\Link;
use App\Models\Articles;
use App\Models\Posts;
class HomeController extends Controller
{
    /**
     * 前台首页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //文章
        $article = Articles::take(6)->orderBy('id','desc')->get();
        $link = Link::where('status','<','3')->get();
        $notice = Notices::where('notice_status',1)->paginate(5);
        //最新发帖
        $poststime = Posts::take(5)->orderBy('created_at','desc')->get();
        return view('Home.index',['notice'=>$notice,'link'=>$link,'article'=>$article,'poststime'=>$poststime]);
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
