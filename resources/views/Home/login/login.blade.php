<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
    <script src="/layui/layui.all.js" type="text/javascript"></script>

    <script src="/layui/layui.js" charset="utf-8"></script>
    <!-- <script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js" charset="utf-8"></script> -->

    <script type="text/javascript" src="/layui/jquery-3.2.1.min.js"></script>

    <script src="/Home/jquery-1.8.3.min.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="/home/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/home/css/style_16_common.css" />
    <link rel="stylesheet" type="text/css" href="/home/css/style_16_forum_forumdisplay.css"/>
    <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
</head>
<body>

    <script type="text/javascript">
     @if(session('error'))
        layer.msg("{{ session('error') }}");
      @endif
       @if(session('success'))
        layer.msg("{{ session('success') }}");
      @endif
    </script>
    @if(session('success'))
        <script type="text/javascript">
            layer.msg('{{ session("success")}}');
            function guanbi(){
            var index = parent.layer.getFrameIndex(window.name);
            parent.layer.close(index);//关闭当前页
            window.parent.location.replace('http://www.maopao.com'+'{{ session("path")}}');//刷新父级页面
        }
            function dsq(){setTimeout("guanbi();",1000);}
            dsq();
        </script>
        <button type="button" class="layui-btn layui-btn-primary layui-btn-xs" onclick="guanbi()" style="margin-left: 270px;margin-top:160px;background-color:skyblue; ">关闭当前页面</button>
    @else

	<form method="post"  action="/home/login">
  {{ csrf_field() }}
  
<div id="layer_reg" class="bm_c">
<div class="mtw">
<div id="reginfo_a">
<div class="rfm">
<table>
<tbody><tr>
<th><span class="rq">*</span><label for="">用户名:</label></th>
<td><input type="text" style="height:27px" class=" px" name="user_name" value="{{ old('user_name')}}"></td>
</tr>
</tbody></table>
</div>

<div class="rfm">
<table>
<tbody>
<tr>
<th><span class="rq">*</span><label for="">密码:</label></th>
<td><input type="password" style="height:27px" class="px" name="password"></td>
</tr>
</tbody>
</table>
</div>

<div class="rfm">
<table>
<tbody>
<tr>
<th><span class="rq">*</span><label for="">验证码:</label></th>
<td><input type="text" style="height:27px" class="px" name="code"><br><br><img src="/code" onclick="rand(this)">
    <input type="hidden" name="path" value="{{ $path }}">
</td>
</tr>
</tbody>
</table>
</div>
</div>

</div>

</div>

<div id="layer_reginfo_b">
<div class="rfm mbw bw0">
<table width="100%">
<tbody><tr>
<th>&nbsp;</th>
<td>
<span id="reginfo_a_btn">

<button class="layui-btn" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1"><strong>登录</strong></button>


</span>
</td>
<td></td>
</tr>
</tbody></table>
</div>
</div>
</form>

</body>
</html>	
<script type="text/javascript">
	  function rand(obj){
	    obj.src = '/code?a='+Math.random();
	  }

     
</script>
@endif

