@extends('Home.layout.master')
@section('sidebar')  

<html>
 <head>
<!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
 </head>
 <body>
  <div class="bottombg"> 
   <div id="wp" class="wp xuxian"> 
   
    <script src="Home/forum_files/forum_post.js?Bak" type="text/javascript"></script> 
   
    <div id="pt" class="bm cl"  > 
     <div class="z">
      <a href="/" class="nvhm" title="首页">Discuz! Board</a> 
      <em>›</em> 
      <a href="/zixun">资讯</a> 
      <em>›</em> 
       发表文章 
     </div> 
    </div>
    <div style="width: 1000px;margin:10px auto;"><div class="layui-form-item">
		
    	<form class="layui-form" action="/zixun" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
			<div class="layui-form-item">
			    <label class="layui-form-label">文章标题:</label>
			    <div class="layui-input-block">
			      <input type="text" name="article_title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" value="{{ old('article_title') }} " id="article_title">
			    </div>
		    </div>
			<div class="layui-form-item">
			    <label class="layui-form-label">作者/笔名:</label>
			    <div class="layui-input-block">
			      <input type="text" name="article_author" lay-verify="title" autocomplete="off" placeholder="请输入作者/笔名" class="layui-input" value="{{ old('article_author') }} ">
			    </div>
		    </div>

			    <label class="layui-form-label">上传封面:</label>
			    
			      <input type="file" name="article_img" >
			    

			<div class="layui-form-item layui-form-text">
			    <label class="layui-form-label">内容简介</label>
			    <div class="layui-input-block">
			      <textarea placeholder="请输入内容" class="layui-textarea" name="article_dec">{{ old('article_dec') }}</textarea>
			    </div>
			 </div>
			 <div class="layui-form-item layui-form-text">
			    <label class="layui-form-label">文章内容</label>
			    <div class="layui-input-block">
			       <script id="container" name="article_content"  style="height: 300px;">
                          {!! old('article_content') !!}
                        </script>
			    </div>
			 </div>
			 <div class="layui-form-item">
			    <div class="layui-input-block">
			      <button class="layui-btn" lay-submit="" lay-filter="demo1">发表文章</button>
			      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
			    </div>
			  </div>
   		</form>
   </div>
  </div>
</div>
</div>

 </body>
 <script type="text/javascript">
        var ue = UE.getEditor('container',{
           toolbars: [
                ['fullscreen', 'source', 'undo', 'redo', 'bold','simpleupload','insertimage','italic','forecolor','backcolor','edittip' ]
            ]
        });
       
       
</script>
</html>

@endsection