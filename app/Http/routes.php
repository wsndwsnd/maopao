<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//前台首页
Route::get('/', function () {
	return view('Home.index');
});

//后台首页
Route::get('/admin','Admin\IndexController@index');
//后台用户管理
Route::resource('/admin/user','Admin\UserController');

//后台公告管理
Route::resource('/admin/notice','Admin\NoticeController');

//公告发布 
Route::get('/admin/notice/up/{id}','Admin\NoticeController@up');

// 公告下架
Route::get('/admin/notice/down/{id}','Admin\NoticeController@down');

//后台管理员
Route::resource('/admin/power','Admin\PowerController');

//后台帖子管理
Route::resource('/admin/posts','Admin\PostsController');
Route::get('/admin/posts/up/{id}','Admin\PostsController@up');
Route::get('/admin/posts/down/{id}','Admin\PostsController@down');

//后台帖子类别
Route::resource('/admin/cate','Admin\CateController');

//后台文章管理路由
Route::resource('/admin/article','Admin\ArticleController');
//文章发布-待审路由
Route::get('/admin/article/up/{id}','Admin\ArticleController@up');
Route::get('/admin/article/down/{id}','Admin\ArticleController@down');

//前台

//注册
Route::resource('/home/login','Home\LoginController');
//前台用户
Route::resource('/home/user','Home\UserController');

//前台帖子
Route::resource('/home/posts','Home\PostsController');

//前台咨询  文章列表
Route::resource('/home/zixun','Home\ZixunController');
