<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
	<script src="/layui/layui.all.js" type="text/javascript"></script>
    <script src="/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/layui/jquery-3.2.1.min.js"></script>

    <script type="text/javascript">
	    @if(session('error'))
	        layer.msg("{{ session('error') }}");
	     @endif
	     @if( session('success') )
	     layer.msg("{{ session('success') }}");
	     @endif
    </script>


	<form method="post" id="form" action="/home/wjmm">
      <input type="hidden" name="phone_type" value='1'>
      {{ csrf_field() }}
	  <div class="layui-form-item">
	    <label class="layui-form-label">用户名</label>
	    <div class="layui-input-inline">
	      <input type="text" name="user_name" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input" id="user_name">
	    </div>
	    <div class="layui-form-mid layui-word-aux"><span id="xxoo1"></span></div>
	  </div>
	  <div class="layui-form-item">
	    <label class="layui-form-label">手机号</label>
	    <div class="layui-input-inline">
	      <input type="text" name="user_tel" required  lay-verify="required" placeholder="请输入注册是的手机号" autocomplete="off" class="layui-input" id="user_tel">
	      <button  class="layui-btn" href="javascript:void(0);" type="button" onclick="sendMobileCode()">获取验证码</button>
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
	    </div>
	    <div class="layui-form-mid layui-word-aux"><span id="tel"></span></div>
	  </div>
	  <div class="layui-form-item">
	    <label class="layui-form-label">验证码</label>
	    <div class="layui-input-inline">
	      <input type="text" name="phone_code" required  lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input" id="phone_code">
	    </div>
	    <div class="layui-form-mid layui-word-aux"><span id="xxoo4"></span></div>
	  </div>
	  <div class="layui-form-item">
	    <label class="layui-form-label">新的密码</label>
	    <div class="layui-input-inline">
	      <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input" id="user_password">
	    </div>
	    <div class="layui-form-mid layui-word-aux"><span id="xxoo2">请填写密码,长度为6-18位</span></div>
	  </div>
	 <div class="layui-form-item">
	    <label class="layui-form-label">确认密码</label>
	    <div class="layui-input-inline">
	      <input type="password" name="repassword" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input" id="repassword">
	    </div>
	     <div class="layui-form-mid layui-word-aux"><span id="xxoo3">请输入确认密码</span></div>
	  </div>
	 
	  
	    <div class="layui-input-block">
	      <button class="layui-btn" lay-submit lay-filter="formDemo" type="submit">提交</button>
	      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
	    </div>
	  </div>
	</form>
	 
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
                  if (msg == 2) {
                    isPhone = false;
                    $('#tel').html('<font color="#CA7D7D">手机号不存在。</font>');
                  }
                },
                // 预期服务器返回的数据类型
                dateType: 'html',
                // (默认: true) 默认设置下，所有请求均为异步请求。
                async: true
              });

              var preg_phone = /^1[3|4|5|7|8][0-9]{9}$/;
              if (preg_phone.test(phone)) {
                isPhone = true;
                // 成功
                $('#tel').html('');
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
                  if (msg == 1) {
                    isUname = false;
                    $('#xxoo1').html('<font color="#CA7D7D">用户名不存在</font>');
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
                $('#xxoo1').html('');
              } else {
                isUname = false;
                //失败
                $('#xxoo1').html('<font color="#CA7D7D">请输入正确的用户名</font>');
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
                $('#xxoo2').html('');
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
                  $('#xxoo3').html('');
                } else {
                  isRepassword = false;
                  //失败
                  $('#xxoo3').html('<font color="#CA7D7D">两次密码不一致</font>');
                }
            });
            
            $('#phone_code').blur(function(){
	        	var phone_code = $(this).val();
	            var sessioncode = '{{session("phone_code")}}';
              if(phone_code == sessioncode){
                  isCode = true;
                  // 成功
                  $('#xxoo4').html('<font color="green">验证码正确</font>');
                } else {
                  isCode = false;
                  //失败
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
</body>
</html>