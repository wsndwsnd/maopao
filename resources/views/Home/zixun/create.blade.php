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
    <div id="pt" class="bm cl"> 
     <div class="z">
      <a href="/" class="nvhm" title="首页">Discuz! Board</a> 
      <em>›</em> 
      <a href="/zixun">资讯</a> 
      <em>›</em> 
       发表文章 
     </div> 
    </div>
    <div style="width: 800px;margin:10px auto;">

    <form class="form-horizontal" action="/zixun" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputEmail3"  name="article_title" placeholder="标题">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">作者/笔名</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" id="inputPassword3" name="article_author" placeholder="作者/笔名">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">内容简介</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" id="inputPassword3" placeholder="内容简介" name="article_dec"></textarea>  
	    </div>
	  </div>
	      <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">上传封面</label>
		    <div class="col-sm-10">
		      <img src="/uploads/1.jpg" alt="" width="100px" id="pic">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">文章主体</label>
	    <div class="col-sm-10">
	      <script id="container" name="article_content" type="text/plain" class="small" style="height: 400px;">
                {!! old('article_content') !!}
           </script>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">发表文章</button>
	    </div>
	  </div>
</form>
   </div>
  </div>
 </body>
 <script type="text/javascript">
        var ue = UE.getEditor('container',{
           toolbars: [
                ['fullscreen', 'source', 'undo', 'redo', 'bold','simpleupload','insertimage','italic','forecolor','backcolor','edittip' ]
            ]
        });

        $('#pic').click(function(){
        	 layui.use('upload', function(){
	            var upload = layui.upload;
	            //执行实例
	            var uploadInst = upload.render({
	              elem: '#test1' //绑定元素
	              ,url: '//uploads' //上传接口
	              ,method:'POST'
	              ,data:{'_token':'{{csrf_token()}}'}
	              ,field:'profile'
	              ,done: function(res){
	                //上传完毕回调
	                if(res.code == 1){
	                  layer.msg(res.msg);
	                  $("#pic").attr('src',res.data.src);
	                }else{
	                  layer.msg(res.msg);
	                }
	              }
	              ,error: function(){
	                //请求异常回调
	              }
	            });
	          });
        });
</script>
</html>

@endsection