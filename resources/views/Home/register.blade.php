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


<div class="tabbable">
            <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tab1" data-toggle="tab">手机注册</a></li>
              <!-- <li>
                <a href="#tab2" data-toggle="tab">邮箱注册</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <form method="post" id="form" action="/register">
                  <input type="hidden" name="phone_type" value='1'>
                  {{ csrf_field() }}
                  <div id="layer_reg" class="bm_c">
                    <div class="mtw">
                      <div id="reginfo_a">
                        <div class="rfm">
                          <table>
                            <tbody>
                              <tr>
                                <th>
                                  <span class="rq">*</span>
                                  <label for="">手机号:</label>
                                </th>
                                <td>
                                  <input type="text" style="height:27px" class="px" name="user_tel" id="user_tel"><span id="tel"></span>
                                </td>
                                <td class="tipcol">
                                  <button  class="layui-btn" href="javascript:void(0);" onclick="sendMobileCode()">获取验证码</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="rfm">
                          <table>
                            <tbody>
                              <tr>
                                <th>
                                  <span class="rq">*</span>
                                  <label for="">验证码:</label></th>
                                <td>
                                  <input type="text" style="height:27px" class="px" name="phone_code" id="phone_code"></td>
                                  <td class="tipcol">
                                  <span id="xxoo4"></span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="rfm">
                          <table>
                            <tbody>
                              <tr>
                                <th>
                                  <span class="rq">*</span>
                                  <label for="">用户名:</label></th>
                                <td>
                                  <input type="text" style="height:27px" class="px" name="user_name" id="user_name"></td>
                                <td class="tipcol">
                                  <span id="xxoo1">请填写2-6位用户名</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="rfm">
                          <table>
                            <tbody>
                              <tr>
                                <th>
                                  <span class="rq">*</span>
                                  <label for="">密码:</label></th>
                                <td>
                                  <input type="password" style="height:27px" class="px" name="password" id="user_password"></td>
                                <td class="tipcol">
                                  <span id="xxoo2">请填写密码,长度为6-18位</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="rfm">
                          <table>
                            <tbody>
                              <tr>
                                <th>
                                  <span class="rq">*</span>
                                  <label for="">确认密码:</label></th>
                                <td>
                                  <input type="password" style="height:27px" class="px" name="repassword" id="repassword"></td>
                                <td class="tipcol">
                                  <span id="xxoo3">请输入确认密码</span></td>
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
                        <tbody>
                          <tr>
                            <th>&nbsp;</th>
                            <td>
                              <span id="reginfo_a_btn">
                                <em>&nbsp;</em>
                                <button class="pn pnc" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1">
                                  <strong>注册</strong></button>
                              </span>
                            </td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </form>
              </div>


            </div>
          </div>
          <script>
              function sendMobileCode(){
                  // alert(11);
                  // 获取手机号
                  var phone = $('#user_tel').val();
                  // dump(phone);
                  // 发送手机验证码
                  $.get('/register/phone',{'phone':phone},function(msg){
                      if(msg.code == 2){
                          layer.msg('发送成功');
                      }else{
                          layer.msg(msg.msg);
                      }
                  },'json');
                }
          </script>
          <script type="text/javascript">

            var isUname = false;
            var isPassword = false;
            var isRepassword = false;
            var isPhone = false;
            var isCode = false;
            //验证手机
            $('#user_tel').blur(function() {
              var phone = $(this).val();
              $.ajax({
                // 请求服务器的地址
                url: '/register/ajax1',
                // 请求的方式 默认get方式
                type: 'post',

                //发送到服务器的数据
                data: {
                  'phone': phone,
                  '_token': '{{csrf_token()}}'
                },
                //请求成功后的回调函数。
                success: function(msg) {
                  if (msg == 1) {
                    isPhone = false;
                    $('#tel').html('<font color="#CA7D7D">手机号已存在</font>');
                  }
                },
                // 预期服务器返回的数据类型
                dateType: 'html',
                // (默认: true) 默认设置下，所有请求均为异步请求。
                async: true
              });

              var preg_phone = /^1[3|4|6|5|7|8][0-9]{9}$/;
              if (preg_phone.test(phone)) {
                isPhone = true;
                // 成功
                $('#tel').html('<font color="#74CFA0">恭喜手机号可用</font>');
              } else {
                isPhone = false;
                //失败
                $('#tel').html('<font color="#CA7D7D">请填写正确的手机号</font>');
              }
            });

            //验证用户名 user_name
            $('#user_name').blur(function() {
              var uname = $(this).val();
              $.ajax({
                // 请求服务器的地址
                url: '/register/ajax',
                // 请求的方式 默认get方式
                type: 'post',

                //发送到服务器的数据
                data: {
                  'uname': uname,
                  '_token': '{{csrf_token()}}'
                },
                //请求成功后的回调函数。
                success: function(msg) {
                  if (msg == 2) {
                    isUname = false;
                    $('#xxoo1').html('<font color="#CA7D7D">用户名已存在</font>');
                  }
                },
                // 预期服务器返回的数据类型
                dateType: 'html',
                // (默认: true) 默认设置下，所有请求均为异步请求。
                async: true
              });

              var preg_uname = /^[\w]{2,6}$/;
              if (preg_uname.test(uname)) {
                isUname = true;
                // 成功
                $('#xxoo1').html('<font color="#74CFA0">恭喜用户名可用</font>');
              } else {
                isUname = false;
                //失败
                $('#xxoo1').html('<font color="#CA7D7D">请填写2-6位 合法的用户名</font>');
              }
            });
            

            $('#user_password').blur(function() {
              var password = $(this).val();
              if(password==''){
                  layer.msg('请填写密吗');
              }
              var preg_password = /^[\w]{6,18}$/;
              if (preg_password.test(password)) {
                isPassword = true;
                // 成功
                $('#xxoo2').html('<font color="#74CFA0">恭喜密码可用</font>');
              } else {
                isPassword = false;
                //失败
                $('#xxoo2').html('<font color="#CA7D7D">请填写6—18位 合法的密码</font>');
              }
            });

            $('#repassword').blur(function() {
              var repassword = $(this).val();
              var password = $('#user_password').val();
                if (repassword == password ) {
                  isRepassword = true;
                  // 成功
                  $('#xxoo3').html('<font color="#74CFA0">两次密码一致</font>');
                } else {
                  isRepassword = false;
                  //失败
                  $('#xxoo3').html('<font color="#CA7D7D">两次密码不一致</font>');
                }
            });
            
             $('#phone_code').blur(function() {
              var phone_code = $(this).val();
              //从session中拿取数据（jq 不能直接拿取session中的拿取值）
              var sessioncode = '{{session("phone_code")}}';
              if(phone_code == sessioncode){
                 isCode = true;
                  $('#xxoo4').html('<font color="green">验证码正确</font>');
              }else{
                  isCode = false;
                 $('#xxoo4').html('<font color="#CA7D7D">验证码错误</font>'); 
              }
            });

            $('#form').submit(function() {
              if (isUname && isPassword && isRepassword && isPhone && isCode) {
                return true; //提交
              }

              return false; //阻止form表单提交
            });
          </script>
   
  </div>
</div>



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