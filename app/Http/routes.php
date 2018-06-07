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




//验证码
Route::get('/code','CodeController@index');
Route::get('/check','CodeController@check');



//后台首页
Route::get('/admin','Admin\IndexController@index');

//后台登录
Route::resource('/admin/login','Admin\LoginController');
//后台退出
Route::get('/admin/logout','Admin\LoginController@logout');

//网站配置管理
Route::get('/admin/site','Admin\SiteController@index');


//后台用户管理
Route::resource('/admin/user','Admin\UserController');

//后台公告管理
Route::resource('/admin/notice','Admin\NoticeController');

//轮播图
Route::resource('/admin/slide','Admin\SlideController');

//前台论坛
Route::resource('/home/luntan','Home\LuntanController');

//公告发布 
Route::get('/admin/notice/up/{id}','Admin\NoticeController@up');

// 后台公告下架
Route::get('/admin/notice/down/{id}','Admin\NoticeController@down');

//后台管理员
Route::resource('/admin/power','Admin\PowerController');

//后台帖子管理
//申请标签
Route::get('/admin/posts/uplabel/{id}','Admin\PostsController@uplabel');
//ajax删除
Route::get('/admin/postsdel/{id}','Admin\PostsController@ajaxdel');
Route::resource('/admin/posts','Admin\PostsController');
Route::get('/admin/posts/up/{id}','Admin\PostsController@up');
Route::get('/admin/posts/down/{id}','Admin\PostsController@down');
Route::post('/admin/posts/sq','Admin\PostsController@sq');
Route::get('/admin/postssqlb','Admin\PostsController@sqlb');



//后台友情链接
Route::resource('/admin/link','Admin\LinkController');
Route::post('/admin/link/audit','Admin\LinkController@audit');
Route::get('/admin/links/auditindex','Admin\LinkController@auditindex');
Route::get('/admin/link/up/{id}','Admin\LinkController@up');
Route::get('/admin/link/down/{id}','Admin\LinkController@down');

//后台帖子类别
Route::resource('/admin/cate','Admin\CateController');

//后台文章管理路由
Route::resource('/admin/article','Admin\ArticleController');
//后台文章查看评论路由
Route::get('/admin/comments/{id}','Admin\ArticleController@read');
//后台文章删除评论
Route::get('/admin/comments/del/{id}','Admin\ArticleController@del');

//文章发布-待审路由
Route::get('/admin/article/up/{id}','Admin\ArticleController@up');
Route::get('/admin/article/down/{id}','Admin\ArticleController@down');


















//前台
//前台首页
Route::get('/','Home\HomeController@index');
//注册
//发送验证码
Route::get('/register/phone','Home\RegisterController@phone_code');
//验证手机号
Route::post('/register/ajax1','Home\RegisterController@ajax1');
//验证用户名是否存在
Route::post('/register/ajax','Home\RegisterController@ajax');
Route::resource('/register','Home\RegisterController');

//前台用户
Route::resource('/user','Home\UserController');
Route::get('/userposts/{id}','Home\UserController@posts');
//修改头像
Route::post('/usertx/uploads','Home\UserController@uploads');


//前台帖子
Route::resource('/posts','Home\PostsController');

//前台帖子详情
Route::get('/home/read/{id}','Home\ReadController@index');

//前台资讯  文章列表
Route::resource('/zixun','Home\ZixunController');
//前台文章评论
Route::resource('/comment','Home\CommentController');
//前台文章评论删除
Route::get('/comment/del/{id}','Home\CommentController@del');
//文章收藏
Route::resource('/acollect','Home\AcollectController');
//文章评论 懒加载
Route::get('/commentajax','Home\ZixunController@ajax');

//前台公告
Route::resource('/notice','Home\NoticeController');

//申请友情链接
Route::get('/link','Home\LinkController@index');

//前台导读
Route::resource('/daodu','Home\DaoduController');

//瀑布流
Route::get('/pbl','Home\PblController@index');
Route::get('/pbl/ajax','Home\PblController@ajax');
