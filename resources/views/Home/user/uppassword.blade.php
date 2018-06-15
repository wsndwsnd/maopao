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


	<form method="post" id="form" action="/home/uppassword">
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
	    <label class="layui-form-label">密码</label>
	    <div class="layui-input-inline">
	      <input type="password" name="opassword" required  lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input" id="opassword">
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
            var isOpassword = false;
            //验证用户名 user_name
            $('#user_name').blur(function() {

              var uname = $(this).val();
              var sessionuname = '{{session("user_name")}}';
              // alert(sessionuname+'.'+uname);  
              if(uname != sessionuname){
                 isUname = false;
                $('#xxoo1').html('<font color="#CA7D7D">请输入您的用户名</font>');
              }else{
                isUname = true;
                $('#xxoo1').html('');
              }
            });
            //验证密码
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
            
            $('#opassword').blur(function(){
	        	  var opassword = $(this).val();
              var id = '{{session("user_id")}}';
	            $.ajax({
                // 请求服务器的地址
                url: '/home/passwordajax',
                // 请求的方式 默认get方式
                type: 'post',
                //发送到服务器的数据
                data: {
                  'id':id,
                  'opassword': opassword,
                  '_token': '{{csrf_token()}}'
                },
                //请求成功后的回调函数。
                success: function(msg) {
                  if (msg == 1) {
                    isopassword = false;
                    $('#xxoo4').html('<font color="#CA7D7D">密码错误</font>');
                  }else{
                    isOpassword = true;
                    $('#xxoo4').html('');
                  }
                },
                // 预期服务器返回的数据类型
                dateType: 'html',
                // (默认: true) 默认设置下，所有请求均为异步请求。
                async: true
              });
            });

            $('#form').submit(function() {
              if (isUname && isPassword && isRepassword && isOpassword) {
                    return true; //提交
              }
              return false; //阻止form表单提交
            });
          </script>
</body>
</html>