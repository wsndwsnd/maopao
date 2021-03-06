@extends('Home.layout.master')
@section('sidebar')

      <div id="wp" class="wp xuxian">
        <div id="pt" class="bm cl">
          <div class="z">
            <a href="./" class="nvhm" title="首页">Discuz! Board</a>
            <em>&rsaquo;</em>
            <a href="home.php?mod=spacecp">设置</a>
            <em>&rsaquo;</em>个人资料</div></div>
        <div id="ct" class="ct2_a wp cl">
          <div class="mn">
            <div class="bm bw0">
              <h1 class="mt">个人资料</h1>
              <!--don't close the div here-->
              <ul class="tb cl">
                <li class="a">
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=base">基本资料</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=contact">联系方式</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=edu">教育情况</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=work">工作情况</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=info">个人信息</a></li>
                  <li>
                  <a href="/userposts/{{session('user_id')}}">我发的帖子</a></li>
              </ul>
              <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
              <table cellspacing="0" cellpadding="0" class="tfm" id="profilelist">
                  <tr>
                      <th>头像</th>
                        <td>
                          <label for="test1">
                          <img width="60px" height="60px" style="border-radius: 10px;" id="pic"  src="{{ ltrim($data->img,'.') }}"> 
                          </label>
                          <button type="button" class="layui-btn" id="test1" style="display: none">
                      <i class="layui-icon">&#xe67c;</i>上传头像
                    </button>
                    
                        </td>
                    </tr>
                   
                    <script>
                      layui.use('upload', function(){
                        var upload = layui.upload;
                        //执行实例
                        var uploadInst = upload.render({
                          elem: '#test1' //绑定元素
                          ,url: '/usertx/uploads' //上传接口
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
                      </script>
               </table>
              <form action="/user/{{$data->id}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field() }}
              	{{ method_field('PUT') }} 
                <input type="hidden" value="316f8b52" name="formhash" />
                <table cellspacing="0" cellpadding="0" class="tfm" id="profilelist">
                  <tr>
                    <th>用户名</th>
                    <td> {{ $data->user_name }} </td>
                    <td>&nbsp;</td>
                </tr>
                
                  <tr>
                    <th>性别</th>
                    <td>
                      <select name="sex" id="sex" class="form-control" style="width: 100px" tabindex="1">
                        <option value="x" @if($data->userinfo->sex == 'x') selected @endif >保密</option>
                        <option value="m" @if($data->userinfo->sex == 'm') selected @endif >男</option>
                        <option value="w" @if($data->userinfo->sex == 'w') selected @endif >女</option></select>
                      <div class="rq mtn" id="showerror_gender"></div>
                      <p class="d"></p>
                    </td>
                   
                  </tr>
                  <tr>
                    <th>生日</th>
                    <td id="td_birthday">
                      <input type="text" name="birthday" id="birthday" class="form-control input-sm" style="width: 300px" value="{{ $data->userinfo->birthday }}"  tabindex="1" />
                      <div class="rq mtn" id="showerror_birthday"></div>
                      <p class="d"></p>
                    </td>
                  </tr>
                   <tr id="tr_birthday">
                    <th id="th_birthday">年龄</th>
                    <td id="td_birthday">
                      <input type="text" name="age" id="age" class="form-control input-sm" style="width: 300px" value="{{ $data->userinfo->age }}"  tabindex="1" />
                      <div class="rq mtn" id="showerror_birthday"></div>
                      <p class="d"></p>
                    </td>
                  </tr>
                  <tr id="tr_realname">
                    <th id="th_realname">电话</th>
                    <td id="td_realname">
                      <input type="text" name="user_tel" id="user_tel" class="form-control input-sm" style="width: 300px" value="{{ $data->userinfo->user_tel }}" tabindex="1" />
                      <div class="rq mtn" id="showerror_realname"></div>
                      <p class="d"></p>
                    </td>
                  </tr>
                  <tr id="tr_realname">
                    <th>邮箱</th>
                    <td>
                      <input type="text" name="user_email" id="user_email" class="form-control input-sm" style="width: 300px" value="{{ $data->user_email }}" tabindex="1" />
                      <div class="rq mtn" id="showerror_realname"></div>
                      <p class="d"></p>
                    </td>
                  </tr>
                  <tr>
                    <th>&nbsp;</th>
                    <td colspan="2">
                      <input type="hidden" name="profilesubmit" value="true" />
                      <button type="submit" value="true" class="pn pnc" />
                      <strong>保存</strong></button>
                      <span id="submit_result" class="rq"></span>
                    </td>
                  </tr>
                </table>
              </form>
              <script type="text/javascript">function show_error(fieldid, extrainfo) {
                  var elem = $('th_' + fieldid);
                  if (elem) {
                    elem.className = "rq";
                    fieldname = elem.innerHTML;
                    extrainfo = (typeof extrainfo == "string") ? extrainfo: "";
                    $('showerror_' + fieldid).innerHTML = "请检查该资料项 " + extrainfo;
                    $(fieldid).focus();
                  }
                }
                function show_success(message) {
                  message = message == '' ? '资料更新成功': message;
                  showDialog(message, 'right', '提示信息',
                  function() {
                    top.window.location.href = top.window.location.href;
                  },
                  0, null, '', '', '', '', 3);
                }
                function clearErrorInfo() {
                  var spanObj = $('profilelist').getElementsByTagName("div");
                  for (var i in spanObj) {
                    if (typeof spanObj[i].id != "undefined" && spanObj[i].id.indexOf("_")) {
                      var ids = explode('_', spanObj[i].id);
                      if (ids[0] == "showerror") {
                        spanObj[i].innerHTML = '';
                        $('th_' + ids[1]).className = '';
                      }
                    }
                  }
                }</script>
            </div>
          </div>
          <div class="appl">
            <div class="tbn">
              <h2 class="mt bbda">设置</h2>
              <ul>
                <li>
	                  <a href="/user">个人资料</a>
	              </li>
	              <li class="a">
	                  	<a href="/user/{{$data->id}}/edit">修改个人资料</a>
	              </li>
	              <li>
	                  <a href="">修改密码</a>
	              </li>
	                <li>
	                  <a href="">关注的人</a>
	              </li>
	              <li>
	                  <a href="">收藏的帖子</a>
	              </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
	  

@stop