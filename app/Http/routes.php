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

Route::get('/', function () {
    return view('welcome');
});
//后台显示主页面
// Route::get('/admin','Admin\IndexController@index');
//后台用户管理
Route::resource('/admin/user','Admin\UserController');
//后台公告管理
Route::resource('/admin/notice','Admin\NoticeController');
Route::get('/admin/notice/up/{id}','Admin\NoticeController@up');
Route::get('/admin/notice/down/{id}','Admin\NoticeController@down');
//后台管理员
Route::resource('/admin/power','Admin\PowerController');

//后台帖子管理
Route::resource('/admin/posts','Admin\PostsController');
Route::get('/admin/posts/up/{id}','Admin\PostsController@up');
Route::get('/admin/posts/down/{id}','Admin\PostsController@down');

//后台论坛
Route::resource('/admin/luntan','Admin\LuntanController');


//前台论坛
Route::resource('/home/luntan','Home\LuntanController');

