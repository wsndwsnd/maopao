@extends('Home.layout.master')
@section('sidebar')
       <div class="bottombg">   

<script type="text/javascript">
go();   
</script>


<div id="wp" class="wp xuxian">


<script type="text/javascript">
var strongpw = new Array();
var pwlength = 6;
</script>

<script src="static/js/register.js?Bak" type="text/javascript"></script>

<div id="ct" class="ptm wp cl">
<div class="nfl" id="main_succeed" style="display: none">
<div class="f_c altw">
<div class="alert_right">
<p id="succeedmessage"></p>
<p id="succeedlocation" class="alert_btnleft"></p>
<p class="alert_btnleft"><a id="succeedmessage_href">如果您的浏览器没有自动跳转，请点击此链接</a></p>
</div>
</div>
</div>
<div class="mn">

<div class="bm" id="main_message">

<div class="bm_h bbs" id="main_hnav">
<span class="y">
</span>
<h3 id="layer_reginfo_t" class="xs2">
登录</h3>
</div>

<p id="returnmessage4"></p>

<form method="post"  action="/home/login">
  {{ csrf_field() }}
  
<div id="layer_reg" class="bm_c">
<div class="mtw">
<div id="reginfo_a">
<div class="rfm">
<table>
<tbody><tr>
<th><span class="rq">*</span><label for="">用户名:</label></th>
<td><input type="text" style="height:27px" class="px" name="user_name" value="{{ old('user_name')}}"></td>
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
<td><input type="text" style="height:27px" class="px" name="code"><br><br><img src="/code" onclick="rand(this)"></td>
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
<button class="layui-btn layui-btn-danger postsdel wjmm" type="button">忘记密码</button>
    <script type="text/javascript">
              $('.wjmm').click(function(){
                      layer.open({
                      type: 2,
                      title: '<font style="color:skyblue;font-weight:777;font-size:16px;">忘记密码</font>',
                      shadeClose: true,
                      shade: 0.8,
                      area: ['650px', '380px'],
                      content: '/home/wjmm'
                    }); 
                
              });
      </script>
<em>&nbsp;</em><button class="layui-btn" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1"><strong>登录</strong></button>


</span>
</td>
<td></td>
</tr>
</tbody></table>
</div>
</div>
</form>
</div>
<div id="layer_regmessage" class="f_c blr nfl" style="display: none">
<div class="c"><div class="alert_right">
<div id="messageleft1"></div>
<p class="alert_btnleft" id="messageright1"></p>
</div>
</div>

<div id="layer_bbrule" style="display: none">
<div class="c" style="width:700px;height:350px;overflow:auto"><br>
<br>
<br>
</div>
<p class="fsb pns cl hm">
<button class="pn pnc" onclick="$('agreebbrule').checked = true;hideMenu('fwin_dialog', 'dialog');"><span>同意</span></button>
<button class="pn" onclick="location.href='http://29.92zyb.com/'"><span>不同意</span></button>
</p>
</div>

<script type="text/javascript">
var ignoreEmail = false;
addFormEvent('registerform', 0);
function showBBRule() {
showDialog($('layer_bbrule').innerHTML, 'info', 'Discuz! Board 网站服务条款');
$('fwin_dialog_close').style.display = 'none';
}
</script>

</div></div>
</div></div>
 
     

	<script type="text/javascript">
	  function rand(obj){
	    obj.src = '/code?a='+Math.random();
	  }
	</script>

@stop