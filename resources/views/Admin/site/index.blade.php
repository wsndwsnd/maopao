@extends('Admin.layout.Index')
@section('content')


@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
    <script src="/layui/layui.all.js" type="text/javascript"></script>
    <script src="/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/layui/jquery-3.2.1.min.js"></script>


<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-magic"></i>网站配置</span>
    </div>
    <div class="mws-panel-body no-padding">
       
        <div class="layui-form-item">
            <label class="layui-form-label">网站logo</label>
            <div class="layui-input-block">
              <label for="test1">
                <img width="200px"  id="logo"  src="{{ltrim($data->site_logo,'.')}}">
              </label>
               <button type="button" class="layui-btn" id="test1" style="display: none">
                      <i class="layui-icon">&#xe67c;</i>上传logo
                    </button>
            </div>
          </div>
<!-- 修改logo -->
<script>
    layui.use('upload', function(){
      var upload = layui.upload;
      //执行实例
      var uploadInst = upload.render({
        elem: '#test1' //绑定元素
        ,url: '/admin/site/logo' //上传接口
        ,method:'POST'
        ,data:{'_token':'{{csrf_token()}}'}
        ,field:'profile'
        ,done: function(res){
          //上传完毕回调
          if(res.code == 1){
            layer.msg(res.msg);
            $("#logo").attr('src',res.data.src);
          }else{
            layer.msg(res.msg);
          }
        }
        ,error: function(){
          //请求异常回调
        }
      });
    });
</script>
        <!-- 二维码 -->
        <div class="layui-form-item">
            <label class="layui-form-label">网站二维码</label>
            <div class="layui-input-block">
              <label for="test2">
                <img width="200px"  id="ewm"  src="{{ltrim($data->site_ewm,'.')}}">
              </label>
               <button type="button" class="layui-btn" id="test2" style="display: none">
                      <i class="layui-icon">&#xe67c;</i>上传ewm
                    </button>
            </div>
          </div>
                <!-- 修改logo -->
                <script>
                    layui.use('upload', function(){
                      var upload = layui.upload;
                      //执行实例
                      var uploadInst = upload.render({
                        elem: '#test2' //绑定元素
                        ,url: '/admin/site/ewm' //上传接口
                        ,method:'POST'
                        ,data:{'_token':'{{csrf_token()}}'}
                        ,field:'profile'
                        ,done: function(res){
                          //上传完毕回调
                          if(res.code == 1){
                            layer.msg(res.msg);
                            $("#ewm").attr('src',res.data.src);
                          }else{
                            layer.msg(res.msg);
                          }
                        }
                        ,error: function(){
                          //请求异常回调
                        }
                      });
                    });
                </script>
        <form class="layui-form" action="/admin/site/update/1" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
          


          <div class="layui-form-item">
            <label class="layui-form-label">网站状态</label>
            <div class="layui-input-block" id="status">
              <input type="checkbox" name="switch" id="site_status" lay-skin="switch" lay-text="开启|关闭" value="{{$data->site_status}}" >
            </div>
          </div>
          <script type="text/javascript">

            if($('#site_status').val() == '2'){
                $('#site_status').removeAttr('checked');
            }else{
                $('#site_status').attr('checked','checked');
                }
            //点击修改状态
            $('#status').click(function(){
                   var sitestatus = $('#site_status').val();
                   $.ajax({  
                        type: 'GET',    // 这是请求的方式 可以是GET方式也可以是POST方式, 默认是GET  
                        url: '/admin/site/status',   // 这是请求的连接地址 一般情况下这个地址是后台给前端的一个连接，直接写就可以  
                        dataType: 'html',  // 这是后台返回的数据类型 一般情况下都是一个json数据， 前端遍历一下就OK  
                        async: true, // 默认为true，默认为true时，所有请求均为异步请求，如果需要发送同步请求，需设置为false,  
                        timeout: 8000, // 设置请求超时时间（毫秒）。此设置将覆盖全局设置  
                        data: {  
                                'status' : sitestatus
                        },  
                        beforeSend: function () {  
                                // 在发送请求前就开始执行 （一般用来显示loading图）  
                        },  
                        success: function (data) {  
                                // 发送请求成功后开始执行，data是请求成功后，返回的数据
                               
                            $('#site_status').val(data);
                        },  
                        complete: function () {  
                                //当请求完成后开始执行，无论成功或是失败都会执行 （一般用来隐藏loading图）  
                        },  
                        error: function (xhr, textStatus, errorThrown) {  
                                //  请求失败后就开始执行，请求超时后，在这里执行请求超时后要执行的函数  
                        }  
                }).done(function () {  
                        // 这个函数是在ajax数据加载完之后，对数据进行的判断，在涉及到对ajax数据进行操作无效时，在这个函数里面写是可以起到效果的  
                });                   
            });
                
          </script>
          <div class="layui-form-item">
            <label class="layui-form-label">网站Email</label>
            <div class="layui-input-block">
              <input type="text" name="site_email" value="{{$data->site_email}}" required  lay-verify="required" autocomplete="off" class="layui-input">
            </div>
          </div>

          <div class="layui-form-item">
            <label class="layui-form-label">网站版权</label>
            <div class="layui-input-block">
              <input type="text" name="site_copyright" value="{{$data->site_copyright}}" required  lay-verify="required" autocomplete="off" class="layui-input">
            </div>
          </div>
          <div class="layui-form-item">
            <div class="layui-input-block">
              <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            </div>
          </div>
        </form>
        
<script>
//Demo
layui.use('form', function(){
  var form = layui.form;
});
</script>











           <!--  <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/site/edit/{{$data->id}}" method="get" enctype="multipart/form-data">

            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">网站状态<span class="required">*</span></label>
	                    <div class="mws-form-item">
	                    	线上
	                    </div>
                </div>
                
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">网站LOGO<span class="required">*</span></label>
	                    <div class="mws-form-item">
	                    	<img width="200px" src="{{$data->site_logo}}">
	                    </div>
                </div>

                
                <div id="" class="mws-form-row">
                	<label class="mws-form-label">网站二维码<span class="required">*</span></label>
	                    <div class="mws-form-item">
	                    	<img width="200px" src="{{$data->site_ewm}}">
	                    </div>
                </div>
                <div id="" class="mws-form-row">
                	<label class="mws-form-label">网站邮箱<span class="required">*</span></label>
	                    <div class="mws-form-item">
	                    	{{$data->site_email}}
	                    </div>
                </div>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">网站版权<span class="required">*</span></label>
                        <div class="mws-form-item">
                            {{$data->site_copyright}}
                        </div>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="{{$data->id}}">

        <div class="mws-button-row"><button class="btn btn-warning">修改</button></div>
    </form> -->
    </div>
</div>

@endsection