@extends('home.layout.master')
@section('sidebar') 
<!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
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
<h3 id="layer_reginfo_t" class="xs2">编辑文章</h3>
</div>

<p id="returnmessage4"></p>



<form method="post" action="/posts" enctype="multipart/form-data">
  {{ csrf_field() }}
<div id="layer_reg" class="bm_c">
<div class="mtw">
<div id="reginfo_a">

<div class="rfm">
<table>
<tbody><tr>
<th><span class="rq">*</span><label for="">帖子类别:</label></th>
  <td>
         <select size="1" name="cid" class="form-control" >
            <option value="0" >选择类别</option>
            @foreach($data as $v)
              @foreach($v->sub as $vv)
              <option value="{{$vv->id}}">{{$vv->title}}</option>
              @endforeach
            @endforeach
        </select>
  </td>       
</tr>
</tbody></table>
</div>
  
<div class="rfm">

<table>

<tbody>
  <tr>
<th><span class="rq">*</span><label for="">帖子标题:</label></th>
<td><input type="text"  class="form-control" name="posts_title" value="{{ old('posts_title') }}"></td>
</tr>
</tbody>
</table>
</div>




<div class="rfm">
<table>
<tbody>

</tbody></table>
</div>

<div class="rfm">
<table>
<tbody>
<tr>
<th><span class="rq">*</span><label for="">帖子内容:</label></th>
<td style="width:630px;">
  <script id="container" name="content" type="text/plain" style="height: 300px">{!! old('content') !!}
    </script>
  
</td>
</tr>
</tbody></table>
</div>




<div class="rfm">
<table>
<tbody>
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
<em>&nbsp;</em><button class="pn pnc" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1"><strong>提交</strong></button>
</span>
</td>
<td></td>
</tr>
</tbody></table>
</div>
</div>
</form>
<script type="text/javascript">
   
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
 

 <script type="text/javascript">
        var ue = UE.getEditor('container', {
          toolbars: [
              ['indent','redo','time','date','simpleupload','insertimage']
              ],
              
          });
    </script>
@endsection