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
<a href="/user/create" class="xi2">已有帐号？现在登录</a>
</span>
<h3 id="layer_reginfo_t" > 立即注册</h3>
</div>

<p id="returnmessage4"></p>

<script>
//由于模块都一次性加载，因此不用执行 layui.use() 来加载对应模块，直接使用即可：
;!function(){
  var layer = layui.layer
  ,form = layui.form;
}();
</script>


<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">手机注册</a></li>
    <li><a href="#tab2" data-toggle="tab">邮箱注册</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
           <form method="post" id="forma" action="/register">
            <input type="hidden" name="phone_type" value='1'>
            {{ csrf_field() }}
          <div id="layer_reg" class="bm_c">
          <div class="mtw">
          <div id="reginfo_a">
          <div class="rfm">
          <table>
          <tbody><tr>
          <th><span class="rq">*</span><label for="">手机号:</label></th>
          <td><input type="text" style="height:27px" class="px" name="user_tel" id="user_tel"></td>
          <td class="tipcol"><span id="ooxx"></span></td>
          <td class="tipcol"><button id="hqyzm" class="btn btn-info" >获取验证码</button></td>
          </tr>
          </tbody></table>
          
          </div>
          <div class="rfm">
          <table>
          <tbody><tr>
          <th><span class="rq">*</span><label for="">验证码:</label></th>
          <td><input type="text" style="height:27px" class="px" name="" id=""></td>
          </tr>
          </tbody></table>
          </div>

          <div class="rfm">
          <table>
          <tbody><tr>
          <th><span class="rq">*</span><label for="">用户名:</label></th>
          <td><input type="text" style="height:27px" class="px" name="user_name1" id="user_name1"></td>
          <td class="tipcol"><span id="ooxx1">请填写2-6位 合法的用户名</span></td>
          </tr>
          </tbody></table>
          </div>

          <div class="rfm">
          <table>
          <tbody><tr>
          <th><span class="rq">*</span><label for="">密码:</label></th>
          <td><input type="password" style="height:27px" class="px" name="password1" id="user_password1"></td>
          <td class="tipcol"><span id="ooxx2">请填写密码,长度为6-18位</span></td>
          </tr>
          </tbody></table>
          </div>

          <div class="rfm">
          <table>
          <tbody><tr>
          <th><span class="rq">*</span><label for="">确认密码:</label></th>
          <td><input type="password" style="height:27px" class="px" name="repassword1" id="repassword1"></td>
          <td class="tipcol"><span id="ooxx3">请输入确认密码</span></td>

          </tr>
          </tbody></table>
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
          <em>&nbsp;</em><button class="pn pnc" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1"><strong>注册</strong></button>
          </span>
          </td>
          <td></td>
          </tr>
          </tbody></table>
          </div>
          </div>
          </form>
    </div>
<script type="text/javascript">
    var isUname1 = false;
    var isPsaword1 = false;
    var isRepassword1 = false;
    $('#hqyzm').click(function(){
        var phone = $('#user_tel').val();
        //发送ajax
         $.ajax({
        // 请求服务器的地址
        url:'/registerphone',
        // 请求的方式 默认get方式
        type:'post',
        
        //发送到服务器的数据
        data:{'phone':phone, '_token':'{{csrf_token()}}'},
        //var_dump(data);
        //请求成功后的回调函数。
        success:function(msg){
          
        },
        // 预期服务器返回的数据类型
        dateType:'html',
        // (默认: true) 默认设置下，所有请求均为异步请求。
        async:true
      });
    });
    $('#user_tel').blur(function(){
      var user_tel = $(this).val();
      var preg_tel = /^[\w]{11}$/;
        if(preg_tel.test(user_tel)){
          isUname1 = true;
          // 成功
          $('#ooxx').html('<font color="#CA7D7D"></font>');
        }else{
          isUname1 = false;
          //失败
          $('#ooxx').html('<font color="#CA7D7D">合法的手机号</font>'); 
        } 
    });


    //验证用户名 user_name
    $('#user_name1').blur(function(){
        var uname = $(this).val();
        $.ajax({
        // 请求服务器的地址
        url:'/register/ajax',
        // 请求的方式 默认get方式
        type:'post',
        
        //发送到服务器的数据
        data:{'uname':uname, '_token':'{{csrf_token()}}'},
        //请求成功后的回调函数。
        success:function(msg){
          if(msg == 2){
            isUname1 = false;
            $('#ooxx').html('<font color="#CA7D7D">用户名已存在</font>');
          }
        },
        // 预期服务器返回的数据类型
        dateType:'html',
        // (默认: true) 默认设置下，所有请求均为异步请求。
        async:true
      });

        var preg_uname = /^[\w]{2,6}$/;
        if(preg_uname.test(uname1)){
          isUname1 = true;
          // 成功
          $('#ooxx1').html('<font color="#74CFA0">恭喜用户名可用</font>');
        }else{
          isUname1 = false;
          //失败
          $('#ooxx1').html('<font color="#CA7D7D">请填写2-6位 合法的用户名</font>'); 
        }
    });

    $('#user_password1').blur(function(){
        var psaaword1 = $(this).val();
        var preg_psaword1 = /^[\w]{6,18}$/;
        if(preg_psaword1.test(psaaword1)){
          isPsaword1 = true;
          // 成功
          $('#ooxx2').html('<font color="#74CFA0">恭喜密码可用</font>');
        }else{
          isPsaword1 = false;
          //失败
          $('#ooxx2').html('<font color="#CA7D7D">请填写6—18位 合法的密码</font>'); 
        }
    });

    $('#repassword1').blur(function(){
        var repsaaword1 = $(this).val();
        var psaaword1 = $('#user_password1').val();
        if(repsaaword1 == psaaword1 ){
          isRepassword1 = true;
          // 成功
          $('#ooxx3').html('<font color="#74CFA0">两次密码一致</font>');
        }else{
          isRepassword1 = false;
          //失败
          $('#ooxx3').html('<font color="#CA7D7D">两次密码不一致</font>'); 
        }
    });
    
    $('#forma').submit(function(){
      if(isUname1 && isPsaword1 && isRepassword1){
        return true;//提交
      }

      return false; //阻止form表单提交
    });
</script>

    <div class="tab-pane" id="tab2">
      <form method="post" id="forms" action="/register">
        {{ csrf_field() }}
      <div id="layer_reg" class="bm_c">
      <div class="mtw">
      <div id="reginfo_a">
        <div class="rfm">
      <table>
      <tbody><tr>
      <th><span class="rq">*</span><label for="">邮箱:</label></th>
      <td><input type="text" style="height:27px" class="px" name="user_email" id="user_email"></td>
      <td class="tipcol"><span id="xxoo">请填写合法的邮箱</span></td>
      </tr>
      </tbody></table>
      </div>
      <div class="rfm">
      <table>
      <tbody><tr>
      <th><span class="rq">*</span><label for="">用户名:</label></th>
      <td><input type="text" style="height:27px" class="px" name="user_name" id="user_name"></td>
      <td class="tipcol"><span id="xxoo1">请填写2-6位 合法的用户名</span></td>
      </tr>
      </tbody></table>
      </div>

      <div class="rfm">
      <table>
      <tbody><tr>
      <th><span class="rq">*</span><label for="">密码:</label></th>
      <td><input type="password" style="height:27px" class="px" name="password" id="user_password"></td>
      <td class="tipcol"><span id="xxoo2">请填写密码,长度为6-18位</span></td>
      </tr>
      </tbody></table>
      </div>

      <div class="rfm">
      <table>
      <tbody><tr>
      <th><span class="rq">*</span><label for="">确认密码:</label></th>
      <td><input type="password" style="height:27px" class="px" name="repassword" id="repassword"></td>
      <td class="tipcol"><span id="xxoo3">请输入确认密码</span></td>

      </tr>
      </tbody></table>
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
      <em>&nbsp;</em><button class="pn pnc" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1"><strong>注册</strong></button>
      </span>
      </td>
      <td></td>
      </tr>
      </tbody></table>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">


    var isUname = false;
    var isPsaword = false;
    var isRepassword = false;
    var isEmail = false;

    //邮箱注册
    $('#user_email').blur(function(){
      var email = $(this).val();
      var preg_email = /^[A-Za-z0-9\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
        if(preg_email.test(email)){
          isEmail = true;
          // 成功
          $('#xxoo').html('<font color="#74CFA0">恭喜邮箱可用</font>');
        }else{
          isEmail = false;
          //失败
          $('#xxoo').html('<font color="#CA7D7D">请填写合法的邮箱</font>'); 
        }
    });

    //验证用户名 user_name
    $('#user_name').blur(function(){
        var uname = $(this).val();
        $.ajax({
        // 请求服务器的地址
        url:'/register/ajax',
        // 请求的方式 默认get方式
        type:'post',
        
        //发送到服务器的数据
        data:{'uname':uname, '_token':'{{csrf_token()}}'},
        //请求成功后的回调函数。
        success:function(msg){
          if(msg == 2){
            isUname = false;
            $('#xxoo1').html('<font color="#CA7D7D">用户名已存在</font>');
          }
        },
        // 预期服务器返回的数据类型
        dateType:'html',
        // (默认: true) 默认设置下，所有请求均为异步请求。
        async:true
      });

        var preg_uname = /^[\w]{2,6}$/;
        if(preg_uname.test(uname)){
          isUname = true;
          // 成功
          $('#xxoo1').html('<font color="#74CFA0">恭喜用户名可用</font>');
        }else{
          isUname = false;
          //失败
          $('#xxoo1').html('<font color="#CA7D7D">请填写2-6位 合法的用户名</font>'); 
        }
    });

    $('#user_password').blur(function(){
        var psaaword = $(this).val();
        var preg_psaword = /^[\w]{6,18}$/;
        if(preg_psaword.test(psaaword)){
          isPsaword = true;
          // 成功
          $('#xxoo2').html('<font color="#74CFA0">恭喜密码可用</font>');
        }else{
          isPsaword = false;
          //失败
          $('#xxoo2').html('<font color="#CA7D7D">请填写6—18位 合法的密码</font>'); 
        }
    });

    $('#repassword').blur(function(){
        var repsaaword = $(this).val();
        var psaaword = $('#user_password').val();
        if(repsaaword == psaaword ){
          isRepassword = true;
          // 成功
          $('#xxoo3').html('<font color="#74CFA0">两次密码一致</font>');
        }else{
          isRepassword = false;
          //失败
          $('#xxoo3').html('<font color="#CA7D7D">两次密码不一致</font>'); 
        }
    });
    
    $('#forms').submit(function(){
      if(isUname && isPsaword && isRepassword && isEmail){
        return true;//提交
      }

      return false; //阻止form表单提交
    });
</script>

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
 

@stop