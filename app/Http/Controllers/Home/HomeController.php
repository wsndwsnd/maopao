<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Notices;
use App\Models\Link;
use App\Models\Articles;
use App\Models\Posts;
use App\Models\User;
use App\Models\Site;
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
        $article = Articles::take(6)->where('article_status','1')->orderBy('id','desc')->get();
        $link = Link::where('status','<','3')->get();
        $notice = Notices::where('notice_status',1)->paginate(5);
        //最新发帖
        $poststime = Posts::take(6)->orderBy('created_at','desc')->get();
        //浏览量排行8条
        $posts_view = Posts::take(8)->orderBy('post_view','desc')->get();

        //阅读排行
        $article_view = Articles::take(6)->orderBy('article_pview','desc')->get();
        //会员排行
        $data4 = User::where('status',1)->orderBy('score','desc')->paginate(7);
        //网站配置
        $site = Site::find('1');
        //把网站配置放入session中
        $site_logo = ltrim($site->site_logo,'.');
        $site_ewm = ltrim($site->site_ewm,'.');
        session(['site_ewm'=>$site_ewm,'site_logo'=>$site_logo]);

        return view('Home.index',['notice'=>$notice,'link'=>$link,'article'=>$article,'poststime'=>$poststime,'posts_view'=>$posts_view,'article_view'=>$article_view,'data4'=>$data4]);
    }

}
