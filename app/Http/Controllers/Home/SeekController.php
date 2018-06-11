<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Articles;
use App\Models\Posts;

class SeekController extends Controller
{
    /**
     * [request] 查询条件
     * @return 查询后的页面
     */
    public function index(Request $request)
    {
        //接收查询条件
        $seek = $request->seek;
        //查询用户
        $users = User::where('user_name','like','%'.$seek.'%')->get();
        //查询文章
        $articles = Articles::where('article_title','like','%'.$seek.'%')->get();
        //查询帖子
        $posts = Posts::where('posts_title','like','%'.$seek.'%')->get();
       
        return view('Home.seek.index',['users'=>$users,'articles'=>$articles,'posts'=>$posts]);

    }
}
