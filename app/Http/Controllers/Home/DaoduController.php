<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Daodu;
use App\Models\Posts;

class DaoduController extends Controller
{
    /**
     * 导读页
     *
     * @return 热门，精品，置顶，普通贴
     */
    public function index()
    {


        $daodu = Daodu::get();
        //热门
        $posts1 = Posts::where('label',1)->get();
        //精品        
        $posts2 = Posts::where('label',2)->get();
        //置顶
        $posts3 = Posts::where('label',3)->get();
        //普通贴
        $posts4 = Posts::where('label',4)->get();
        return view('Home.daodu.index',['daodu'=>$daodu,'posts1'=>$posts1,'posts2'=>$posts2,'posts3'=>$posts3,'posts4'=>$posts4]);

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
