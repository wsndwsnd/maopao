<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    /**
     * 注册友情链接
     *
     * @return 注册页面
     */
    public function index()
    {
        return view('Home.link.index');
    }
}
