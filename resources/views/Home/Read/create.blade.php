<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
     <link rel="stylesheet" type="text/css" href="/Home/css/style_16_common.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_forum_announcement.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_forum_guide.css" />

    <!-- <link rel="stylesheet" type="text/css" href="/Home/bootstrap-3.3.7-dist/css/bootstrap.min.css"> -->
    <!-- <script type="text/javascript" src="/Home/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="/Home/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_portal_index.css" />

    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_forum_index.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_forum_viewthread.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_home_space.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_home_spacecp.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_portal_list.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_portal_view.css" />
    

    <link rel="stylesheet" type="text/css" href="/Home/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_common.css" />
    <link rel="stylesheet" type="text/css" href="/Home/css/style_16_forum_forumdisplay.css"/>
    <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
</head>
<body>

     @if(count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
            <script type="text/javascript">
              @foreach($errors->all() as $error)
                 layer.msg('{{ $error }}');
              @endforeach
          </script>
          </ul>
      </div>
    @endif

	@if(session('success'))
        <script type="text/javascript">
            layer.msg('{{ session("success")}}');
            function guanbi(){
          		var index = parent.layer.getFrameIndex(window.name);
          		parent.layer.close(index);//关闭当前页
          		window.parent.location.replace('http://www.maopao.com/home/read/'+'{{ session("pid")}}');//刷新父级页面
            }
            function dsq(){setTimeout("guanbi();",1000);}

            dsq();
        </script>
        <button type="button" class="layui-btn layui-btn-primary layui-btn-xs" onclick="guanbi()" style="margin-left: 270px;margin-top:160px;background-color:skyblue; ">关闭当前页面</button>
 	  @else
	<form method="post" action="/preply">
		{{ csrf_field() }} 
		<table style="width:600px;><tbody><tr> <td class="pls"> 
			<tr>
			<td class="plc"> 
			<div class="ksftaa"> 
				
				<div class="cl">
					<script  id="container" name="content"  style="height: 120px;width: 600px;"></script>
					<input type="hidden" name="uid" value="{{ $uid }}">
					<input type="hidden" name="pid" value="{{ $pid }}">
					<input type="hidden" name="id" value="{{ $id }}">					
				</div>
				<div id="seccheck_fastpost"></div> 
				<p class="ptm pnpost">
					<button  class="pn pnc vm" ><strong>回复</strong></button>
				</p> 
			</div> 
		  </td> 
		</tr> 
	</table>
	</form>
</body>
 <script type="text/javascript">
        var ue = UE.getEditor('container',{
           toolbars: [
                ['fullscreen', 'source', 'undo', 'redo', 'bold','simpleupload','insertimage','italic','forecolor','backcolor','edittip' ]
            ]
        });

</script>
@endif



</html>
