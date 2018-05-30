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
              </ul>
              <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
              <form action="/user/{{$data->id}}/edit" method="get" >
                <input type="hidden" value="316f8b52" name="formhash" />
                <table cellspacing="0" cellpadding="0" class="tfm" id="profilelist">
	                <tr>

	                    <th>用户名</th>
	                    <td>{{$data->user_name}}</td>
	                    <td>&nbsp;</td>
	                </tr>
	                <tr>
	                	<th>头像</th>
	                    <td><img width="100px"  src="{{ $data->img }}"></td>
	                    <td>&nbsp;</td>
	                </tr>
	                <tr>
	                    <th>性别</th>
	                    @if($data -> userinfo -> sex == 'x') <td>保密</td> @endif
	                    @if($data -> userinfo -> sex == 'w') <td>女</td> @endif
	                    @if($data -> userinfo -> sex == 'm') <td>男</td> @endif
	                    @if($data -> userinfo -> sex = null) <td>未填写</td> @endif
	                    <td>&nbsp;</td>
	                </tr>
                  	<tr>
	                    <th>年龄</th>
	                    @if($data -> userinfo -> age) <td>{{$data -> userinfo -> age}}</td> @else <td>未填写</td> @endif
	                    
	                    <td>&nbsp;</td>
	                </tr>
                  	<tr>
	                    <th>电话</th>
	                    @if($data -> userinfo -> user_tel) <td>{{$data -> userinfo -> user_tel}}</td> @else <td>未填写</td> @endif
	                    <td>&nbsp;</td>
	                </tr>
	                <tr>
	                    <th>邮箱</th>
	                    <td>{{$data->user_email}}</td>
	                    <td>&nbsp;</td>
	                </tr>
	                <tr>
	                	<th>生日</th>
	                     @if($data -> userinfo -> birthday) <td>{{$data -> userinfo -> birthday}}</td> @else <td>未填写</td> @endif
	                    <td>&nbsp;</td>
	                </tr>

                  <tr>
                    <th>&nbsp;</th>
                    <td colspan="2">
                      <input type="hidden" name="profilesubmit" value="true" />
                      <button type="submit" name="profilesubmitbtn"  value="true" class="pn pnc" />
                      <strong>点击修改</strong></button>
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
                  <a href="home.php?mod=spacecp&amp;ac=avatar">修改头像</a></li>
                <li class="a">
                  <a href="home.php?mod=spacecp&amp;ac=profile">个人资料</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=credit">积分</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=usergroup">用户组</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=privacy">隐私筛选</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">密码安全</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=promotion">访问推广</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

@stop
