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


@if (count($errors) > 0)

    <div  class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li  style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" " action="/user">
  {{ csrf_field() }}
<div id="layer_reg" class="bm_c">
<div class="mtw">
<div id="reginfo_a">
<div class="rfm">
<table>
<tbody><tr>
<th><span class="rq">*</span><label for="">用户名:</label></th>
<td><input type="text" class="px" name="user_name"></td>
</tr>
</tbody></table>
</div>

<div class="rfm">
<table>
<tbody>
<tr>
<th><span class="rq">*</span><label for="">密码:</label></th>
<td><input type="password" class="px" name="password"></td>
</tr>
</tbody>
</table>
</div>

<div class="rfm">
<table>
<tbody>
<tr>
<th><span class="rq">*</span><label for="">验证码:</label></th>
<td><input type="text" class="px" name="code"><br><br><img src="/code" onclick="rand(this)"></td>
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
<em>&nbsp;</em><button class="pn pnc" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1"><strong>登录</strong></button>
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
 
     


<div class="ft_wp">

<div class="zjdba">
<div id="zjdb" class="wp">
<div id="gll">
<div id="gywm">
<ul>
<span id="listtitle">关于我们</span>
        <li><a href="www.tmd9.com">网站简介</a></li>
        <li><a href="www.tmd9.com">付费推广</a></li>
<li><a href="#">合作联盟</a></li>
  </ul>
</div>

<div id="bzzx">
<ul>
<span id="listtitle">帮助中心</span>
        <li><a href="#">新手上路</a></li>
        <li><a href="#">常见问题</a></li>
<li><a href="#">在线答疑</a></li>
  </ul>
</div>

<div id="lxwm">
<ul>
<span id="listtitle">联系我们</span>
        <li>咨询电话：0000 - www.tmd9.com</li>
        <li>邮箱：www.tmd9.com</li>
<li>地址：www.tmd9.com</li>
  </ul>
</div>

    <div id="yyonload">
<ul> 
    <span id="listtitle">移动客户端：</span>
<li class="a1"><a href="#"></a></li>
<li class="a2"><a href="#"></a></li>    
<li class="a3"><a href="#"></a></li>
</ul>
</div>  

<div id="gzwm">
<ul>
<span id="listtitle">关注我们：</span>
        <li>微信公众号：</li>
        <li>123cwyy</li>
<li>扫描二维码加关注</li>
  </ul>
</div>

<div id="erwm">
<p></p>
</div>


</div>
</div>
</div>
 
  <div id="ft" class=" cl">
  
        
  
<div id="flk" style="display:none;">

<p>
Copyright © 2001-2015 <a href="#" target="_blank">www.tmd9.com</a> All Rights Reserved <a href="#" target="_blank">京 ICP备11000000号－4</a></p>

<p>
<a href="archiver/">Archiver</a><span class="pipe">|</span><a href="forum.php?mobile=yes">手机版</a><span class="pipe">|</span><a href="forum.php?mod=misc&amp;action=showdarkroom">小黑屋</a><span class="pipe">|</span><a href="http://www.comsenz.com/" target="_blank">Comsenz Inc.</a>
</p>

</div>

<div id="ftl">
<p>Powered by <a href="http://www.tmd9.com" target="_blank">Discuz!</a> <em>X3.4</em>
Copyright <br> © 2001-2013 <a href="http://www.tmd9.com" target="_blank">www.tmd9.com Inc.</a></p>
</div>


<div id="frt">

            
            <p>
<a href="archiver/">Archiver</a><span class="pipe">|</span><a href="forum.php?mobile=yes">手机版</a><span class="pipe">|</span><a href="forum.php?mod=misc&amp;action=showdarkroom">小黑屋</a><span class="pipe">|</span><a href="http://www.comsenz.com/" target="_blank">Comsenz Inc.</a>
</p><p>GMT+8, 2018-5-28 20:05                   , Processed in 1.062500 second(s), 8 queries.</p>
</div></div>
</div>
</div>
<script type="text/javascript">
  function rand(obj){
    obj.src = '/code?a='+Math.random();
  }
</script>

@stop