@extends('home.layout.master') 
@section('sidebar') 
  <div class="bottombg"> 
   <script type="text/javascript">
    go(); 
    </script> 
   <div id="wp" class="wp xuxian"> 
    <link rel="stylesheet" type="text/css" href="/home/css/index.css" /> 
    <script type="text/javascript">var fid = parseInt('2'), tid = parseInt('7');</script> 
    <script src="/home/js/forum_viewthread.js" type="text/javascript"></script> 
    <script type="text/javascript">zoomstatus = parseInt(1);var imagemaxwidth = '957';var aimgcount = new Array();</script> 
    <style id="diy_style" type="text/css"></style> 
    <!--[diy=diy1]-->
    <div id="diy1" class="area"></div>
    <!--[/diy]--> 
    <div class="wp bgcc"> 
     <div class="aacd"> 
      <div id="pt" class="bm cl"> 
       <div class="z"> 
        <a href="/" class="nvhm" title="首页">Discuz! Board</a> 
        <a href="/" style="margin-left:5px;">首页</a>
        <em>›</em>
        <a href="/home/luntan">论坛</a> 
        <em>›</em> 
        <a href="/home/luntan">{{ $data1->title }}</a> 
        <em>›</em> 
        <a href="javascript:history.back(-1)">{{$data->cates->title}}</a> 
        <em>›</em> 
        <a href="#">{{$data->posts_title}}</a> 
       </div> 
      </div> 
      <!--[diy=diynavtop]--> 
      <div id="diynavtop" class="area"> 
       <div id="frameS0D0bb" class="frame move-span cl frame-1"> 
        <div id="frameS0D0bb_left" class="column frame-1-c"> 
         <div id="frameS0D0bb_left_temp" class="move-span temp"></div> 
         <div id="portal_block_87" class="ltnryrttj block move-span"> 
          <div class="blocktitle title">
           <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">热图推荐</span>
          </div>
          <div id="portal_block_87_content" class="dxb_bc">
           <div class="slidebox" slidenum="5" slidestep="5" style="display:block;"> 
            <div class="btn"> 
             <div class="slidebarup">
              <a href="javascript:void(0);" mevent="click">&lt;</a>
             </div> 
             <div class="slidebardown">
              <a href="javascript:void(0);" mevent="click">></a>
             </div> 
            </div> 
            <div class="module cl"> 
        <ul class="slideshow">
          @foreach($data2 as $val)
            <li style="width: 224px; height: 150px;" class="cc1">
                <a href="#" target="_blank">
                    <img src="{{ $val->slide_url }}" width="224" height="150"/>
                </a>
                <span class="title"><a id="ttitle" href="#">发帖测试
                </a>
                </span>
            </li>
          @endforeach
             </ul> 
            </div> 
           </div> 
           <script type="text/javascript">
    runslideshow();
    </script>
          </div>
         </div>
        </div>
       </div>
      </div>
      <!--[/diy]--> 
     </div> 
    </div> 
    <div id="ct" class="wp cl"> 
     <div id="pgta" class="pgs mbm cl "> 
      <div class="pgt"></div> 
      <span class="y pgb"><a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;page=1">返回</a></span> 
      <div class="fatie">
       <a id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&amp;action=newthread&amp;fid=2')" href="/home/javascript:;" title="发新帖">发新贴</a>
      </div>
     </div> 
     <div id="postlist" class="pl bm"> 
      <table cellspacing="0" cellpadding="0" class="aabbdd"> 
       <tbody>
        <tr> 
         <td class="pls ptn pbn sdad"> 
          <div class="hm ptn"> 
           <span class="xg1">查看:</span> 
           <span class="xi1">12</span>
           <span class="pipe">|</span>
           <span class="xg1">回复:</span> 
           <span class="xi1">0</span> 
          </div> </td> 
         <td class="plc ptm pbn vwthd sdad"> 
          <div class="y"> 
           <a href="/home/forum.php?mod=viewthread&amp;action=printable&amp;tid=7" title="打印" target="_blank"><img src="/home/picture/print.png" alt="打印" class="vm" /></a> 
           <a href="/home/forum.php?mod=redirect&amp;goto=nextoldset&amp;tid=7" title="上一主题"><img src="/home/picture/thread-prev.png" alt="上一主题" class="vm" /></a> 
           <a href="/home/forum.php?mod=redirect&amp;goto=nextnewset&amp;tid=7" title="下一主题"><img src="/home/picture/thread-next.png" alt="下一主题" class="vm" /></a> 
          </div> <h1 class="ts"> <span id="thread_subject">{{$data->posts_title}}</span> </h1> </td> 
        </tr> 
       </tbody>
      </table> 
      <div class="postaaa posta0" id="post_7">
       <table id="pid7" class="plhin" summary="pid7" cellspacing="0" cellpadding="0"> 
        <tbody>
         <tr> 
          <td class="pls" rowspan="2"> 
           <div id="favatar7" class="pls favatar"> 
            <a name="newpost"></a> 
            <a name="lastpost"></a>
            <div class="pi"> 
             <div class="authi">
              <a href="/home/home.php?mod=space&amp;uid=1" target="_blank" class="xw1">admin</a> 
             </div> 
            </div> 
            <div class="p_pop blk bui card_gender_0" id="userinfo7" style="display: none; margin-top: -11px;"> 
             <div class="m z"> 
              <div id="userinfo7_ma"></div> 
             </div> 
             <div class="i y"> 
              <div> 
               <strong><a href="/home/home.php?mod=space&amp;uid=1" target="_blank" class="xi2">admin</a></strong> 
               <em>当前离线</em> 
              </div>
              <dl class="cl"> 
               <dt>
                积分
               </dt>
               <dd>
                <a href="/home/home.php?mod=space&amp;uid=1&amp;do=profile" target="_blank" class="xi2">517</a>
               </dd> 
              </dl>
              <div class="imicn"> 
               <a href="/home/home.php?mod=space&amp;uid=1&amp;do=profile" target="_blank" title="查看详细资料"><img src="/home/picture/userinfo.gif" alt="查看详细资料" /></a> 
              </div> 
              <div id="avatarfeed">
               <span id="threadsortswait"></span>
              </div> 
             </div> 
            </div> 
            <div> 
             <div class="avatar" onmouseover="showauthor(this, 'userinfo7')">
              <a href="/home/home.php?mod=space&amp;uid=1" class="avtm" target="_blank"><img src="/home/picture/avatar.php" /></a>
             </div> 
            </div> 
            <div class="tns xg2">
             <table cellspacing="0" cellpadding="0">
              <tbody>
               <tr>
                <th><p><a href="/home/home.php?mod=space&amp;uid=1&amp;do=thread&amp;type=thread&amp;view=me&amp;from=space" class="xi2">97</a></p>主题</th>
                <th><p><a href="/home/home.php?mod=space&amp;uid=1&amp;do=thread&amp;type=reply&amp;view=me&amp;from=space" class="xi2">11</a></p>帖子</th>
                <td><p><a href="/home/home.php?mod=space&amp;uid=1&amp;do=profile" class="xi2">517</a></p>积分</td>
               </tr>
              </tbody>
             </table>
            </div> 
            <p><em><a href="/home/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=1" target="_blank">管理员</a></em></p> 
            <p><span><img src="/home/picture/star_level3.gif" alt="Rank: 9" /><img src="/home/picture/star_level3.gif" alt="Rank: 9" /><img src="/home/picture/star_level1.gif" alt="Rank: 9" /></span></p> 
            <dl class="pil cl"> 
             <dt>
              积分
             </dt>
             <dd>
              <a href="/home/home.php?mod=space&amp;uid=1&amp;do=profile" target="_blank" class="xi2">517</a>
             </dd> 
            </dl> 
            <dl class="pil cl"></dl>
            <ul class="xl xl2 o cl"> 
             <li class="pm2"><a href="/home/home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_1&amp;touid=1&amp;pmid=0&amp;daterange=2&amp;pid=7&amp;tid=7" onclick="showWindow('sendpm', this.href);" title="发消息" class="xi2">发消息</a></li> 
            </ul> 
           </div> </td> 
          <td class="plc"> 
           <div class="pi"> 
            <div id="fj" class="y"> 
             <label class="z">电梯直达</label> 
             <input type="text" class="px p_fre z" size="2" onkeyup="$('fj_btn').href='forum.php?mod=redirect&amp;ptid=7&amp;authorid=0&amp;postno='+this.value" onkeydown="if(event.keyCode==13) {window.location=$('fj_btn').href;return false;}" title="跳转到指定楼层" /> 
             <a href="/home/javascript:;" id="fj_btn" class="z" title="跳转到指定楼层"><img src="/home/picture/fj_btn.png" alt="跳转到指定楼层" class="vm" /></a> 
            </div> 
            <strong> <a href="/home/forum.php?mod=viewthread&amp;tid=7" id="postnum7" onclick="setCopy(this.href, '帖子地址复制成功');return false;"> 楼主</a> </strong> 
            <div class="pti"> 
             <div class="pdbt"> 
             </div> 
             <div class="authi"> 
              <img class="authicn vm" id="authicon7" src="/home/picture/online_admin.gif" /> 
              <em id="authorposton7">发表于 {{ $data->postsinfo->create_at }}</em> 
              <span class="pipe">|</span> 
              <a href="/home/forum.php?mod=viewthread&amp;tid=7&amp;page=1&amp;authorid=1" rel="nofollow">只看该作者</a> 
              <span class="pipe">|</span>
              <a href="/home/forum.php?mod=viewthread&amp;tid=7&amp;from=album">只看大图</a> 
              <span class="none"><img src="/home/picture/arw_r.gif" class="vm" alt="回帖奖励" /></span> 
              <span class="pipe show">|</span>
              <a href="/home/forum.php?mod=viewthread&amp;tid=7&amp;extra=page%3D1&amp;ordertype=1" class="show">倒序浏览</a> 
              <span class="pipe show">|</span>
              <a href="/home/javascript:;" onclick="readmode($('thread_subject').innerHTML, 7);" class="show">阅读模式</a> 
             </div> 
            </div> 
           </div>
           <div class="pct">
            <style type="text/css">.pcb{margin-right:0}</style>
            <div class="pcb"> 
             <div class="t_fsz"> 
              <table cellspacing="0" cellpadding="0"> 
               <tbody>
                <tr> 
                 <td class="t_f" id="postmessage_7"> {!! $data->postsinfo->content !!} </td> 
                </tr> 
               </tbody>
              </table> 
              
              <div class="pattl"> 
               <ignore_js_op> 
                <dl class="tattl attm"> 
                 <dt></dt> 
                 <dd> 
                  <p class="mbn"> <a href="/home/forum.php?mod=attachment&amp;aid=N3w1MzY0NDFmYnwxNTI4MjcyNjY1fDB8Nw%3D%3D&amp;nothumb=yes" onmouseover="showMenu({'ctrlid':this.id,'pos':'12'})" id="aid7" class="xw1" target="_blank">7.jpg</a> <em class="xg1">(88.92 KB, 下载次数: 0)</em> </p> 
                  <div class="tip tip_4" id="aid7_menu" style="display: none" disautofocus="true"> 
                   <div> 
                    <p> <a href="/home/forum.php?mod=attachment&amp;aid=N3w1MzY0NDFmYnwxNTI4MjcyNjY1fDB8Nw%3D%3D&amp;nothumb=yes" target="_blank">下载附件</a> </p> 
                    <p> <span class="y">2016-4-14 14:36 上传</span> <a href="/home/javascript:;" onclick="imageRotate('aimg_7', 1)"><img src="/home/picture/rleft.gif" class="vm" /></a> <a href="/home/javascript:;" onclick="imageRotate('aimg_7', 2)"><img src="/home/picture/rright.gif" class="vm" /></a> </p> 
                   </div> 
                   <div class="tip_horn"></div> 
                  </div> 
                  <p class="mbn"> </p> 
                  <div class="mbn savephotop"> 
                   <img id="aimg_7" aid="7" src="/home/picture/none.gif" zoomfile="data/attachment/forum/201604/14/143604hixg2y4dwu4vcgvb.jpg" file="data/attachment/forum/201604/14/143604hixg2y4dwu4vcgvb.jpg" class="zoom" onclick="zoom(this, this.src, 0, 0, 0)" width="600" alt="7.jpg" title="7.jpg" w="600" /> 
                  </div> 
                 </dd> 
                </dl> 
               </ignore_js_op> 
              </div> 
             </div> 
             <div id="comment_7" class="cm"> 
             </div> 
             <div id="post_rate_div_7"></div> 
            </div> 
           </div> </td>
         </tr> 
         <tr>
          <td class="plc plm"> 
           <div id="p_btn" class="mtw mbm hm cl"> 
            <a href="/home/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=7&amp;formhash=1a6a669d" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖"><i><img src="/home/picture/fav.gif" alt="收藏" />收藏<span id="favoritenumber" style="display:none">0</span></i></a> 
            <a id="recommend_add" href="/home/forum.php?mod=misc&amp;action=recommend&amp;do=add&amp;tid=7&amp;hash=1a6a669d" onclick="showWindow('login', this.href)" onmouseover="this.title = $('recommendv_add').innerHTML + ' 人支持'" title="顶一下"><i><img src="/home/picture/rec_add.gif" alt="支持" />支持<span id="recommendv_add" style="display:none">0</span></i></a> 
            <a id="recommend_subtract" href="/home/forum.php?mod=misc&amp;action=recommend&amp;do=subtract&amp;tid=7&amp;hash=1a6a669d" onclick="showWindow('login', this.href)" onmouseover="this.title = $('recommendv_subtract').innerHTML + ' 人反对'" title="踩一下"><i><img src="/home/picture/rec_subtract.gif" alt="反对" />反对<span id="recommendv_subtract" style="display:none">0</span></i></a> 
           </div> 
           <!-- <div class="mtw mbw"> 
            <h3 class="pbm mbm bbda">相关帖子</h3> 
            <ul class="xl xl2 cl">
             <li>． <a href="/home/forum.php?mod=viewthread&amp;tid=5" title="营养丰富的【猪肝鸭蛋汤】" target="_blank">营养丰富的【猪肝鸭蛋汤】</a></li> 
             <li>． <a href="/home/forum.php?mod=viewthread&amp;tid=6" title="妈妈的菜【河虾烩三鲜】好吃不好看" target="_blank">妈妈的菜【河虾烩三鲜】好吃不好看</a></li> 
             <li>． <a href="/home/forum.php?mod=viewthread&amp;tid=46" title="给孩子吃这些有助长高" target="_blank">给孩子吃这些有助长高</a></li> 
            </ul> 
           </div>  -->
           <div class="sign" style="max-height:120px;maxHeightIE:120px;">
            手机版可以支持用户签名了。
            <br /> 
            <img id="aimg_yqYeo" onclick="zoom(this, this.src, 0, 0, 0)" class="zoom" src="/home/picture/sign.jpg" onmouseover="img_onmouseoverfunc(this)" onload="thumbImg(this)" border="0" alt="" />
           </div> </td> 
         </tr> 
         <tr id="_postposition7"></tr> 
         <tr> 
          <td class="pls"></td> 
          <td class="plc" style="overflow:visible;"> 
           <div class="po hin"> 
            <div class="pob cl"> 
             <em> <a class="fastre" href="/home/forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=7&amp;reppost=7&amp;extra=page%3D1&amp;page=1" onclick="showWindow('reply', this.href)">回复</a> </em> 
             <p> <a href="/home/javascript:;" id="mgc_post_7" onmouseover="showMenu(this.id)" class="showmenu">使用道具</a> <a href="/home/javascript:;" onclick="showWindow('miscreport7', 'misc.php?mod=report&amp;rtype=post&amp;rid=7&amp;tid=7&amp;fid=2', 'get', -1);return false;">举报</a> </p> 
             <ul id="mgc_post_7_menu" class="p_pop mgcmn" style="display: none;"> 
             </ul> 
             <script type="text/javascript" reload="1">checkmgcmn('post_7')</script> 
            </div> 
           </div> </td> 
         </tr> 
         <tr class="ad"> 
          <td class="pls"> </td> 
          <td class="plc"> </td> 
         </tr> 
        </tbody>
       </table> 
       <script type="text/javascript" reload="1">
    aimgcount[7] = ['7'];
    attachimggroup(7);
    attachimgshow(7);
    var aimgfid = 0;
    </script> 
      </div> 
      <div id="postlistreply" class="pl">
       <div id="post_new" class="viewthread_table" style="display: none"></div>
      </div> 
     </div> 
     <form method="post" autocomplete="off" name="modactions" id="modactions"> 
      <input type="hidden" name="formhash" value="1a6a669d" /> 
      <input type="hidden" name="optgroup" /> 
      <input type="hidden" name="operation" /> 
      <input type="hidden" name="listextra" value="page%3D1" /> 
      <input type="hidden" name="page" value="1" /> 
     </form> 
     <div class="pgs mtm mbm cl" id="pgtb"> 
      <span class="pgb y"><a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;page=1">返回</a></span> 
      <div class="fatie">
       <a id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&amp;action=newthread&amp;fid=2')" href="/home/javascript:;" title="发新帖">发新贴</a>
      </div> 
     </div> 
     <!--[diy=diyfastposttop]-->
     <div id="diyfastposttop" class="area"></div>
     <!--[/diy]--> 
     <script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, 0, 0, 'forum.php?mod=viewthread&tid=7', 1);}</script> 
    </div> 
    <script type="text/javascript">
    var postminchars = parseInt('10');
    var postmaxchars = parseInt('10000');
    var disablepostctrl = parseInt('0');
    </script> 
    <div id="f_pst" class="pl bm bmw"> 
     <form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=7&amp;extra=page%3D1&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=fastpost" onsubmit="return fastpostvalidate(this)"> 
      <table cellspacing="0" cellpadding="0"> 
       <tbody>
        <tr> 
         <td class="pls"> </td> 
         <td class="plc"> 
          <div class="ksftaa"> 
           <div id="fastpostreturn">
            <span>发表回复</span>
           </div> 
           <div class="cl"> 
            <div id="fastsmiliesdiv" class="y">
             <div id="fastsmiliesdiv_data">
              <div id="fastsmilies"></div>
             </div>
            </div>
            <div class="hasfsl" id="fastposteditor"> 
             <div class="tedt mtn"> 
              <div class="bar"> 
               <span class="y"> <a href="/home/forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=7" onclick="return switchAdvanceMode(this.href)">高级模式</a> </span>
               <script src="/home/js/seditor.js" type="text/javascript"></script> 
               <div class="fpd"> 
                <a href="/home/javascript:;" title="文字加粗" class="fbld">B</a> 
                <a href="/home/javascript:;" title="设置文字颜色" class="fclr" id="fastpostforecolor">Color</a> 
                <a id="fastpostimg" href="/home/javascript:;" title="图片" class="fmg">Image</a> 
                <a id="fastposturl" href="/home/javascript:;" title="添加链接" class="flnk">Link</a> 
                <a id="fastpostquote" href="/home/javascript:;" title="引用" class="fqt">Quote</a> 
                <a id="fastpostcode" href="/home/javascript:;" title="代码" class="fcd">Code</a> 
                <a href="/home/javascript:;" class="fsml" id="fastpostsml">Smilies</a> 
               </div>
              </div> 
              <div class="area"> 
               <div class="pt hm">
                 您需要登录后才可以回帖 
                <a href="/home/member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">登录</a> | 
                <a href="/home/member.php?mod=register" class="xi2">立即注册</a> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
           <div id="seccheck_fastpost"> 
           </div> 
           <input type="hidden" name="formhash" value="1a6a669d" /> 
           <input type="hidden" name="usesig" value="" /> 
           <input type="hidden" name="subject" value="  " /> 
           <p class="ptm pnpost"> <a href="/home/home.php?mod=spacecp&amp;ac=credit&amp;op=rule&amp;fid=2" class="y" target="_blank">本版积分规则</a> <button type="button" onclick="showWindow('login', 'member.php?mod=logging&amp;action=login&amp;guestmessage=yes')" name="replysubmit" id="fastpostsubmit" class="pn pnc vm" value="replysubmit" tabindex="5"><strong>发表回复</strong></button> <label for="fastpostrefresh"><input id="fastpostrefresh" type="checkbox" class="pc" />回帖后跳转到最后一页</label> <script type="text/javascript">if(getcookie('fastpostrefresh') == 1) {$('fastpostrefresh').checked=true;}</script> </p> 
          </div> </td> 
        </tr> 
       </tbody>
      </table> 
     </form> 
    </div> 
    <script type="text/javascript">
    function succeedhandle_followmod(url, msg, values) {
    var fObj = $('followmod_'+values['fuid']);
    if(values['type'] == 'add') {
    fObj.innerHTML = '不收听';
    fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
    } else if(values['type'] == 'del') {
    fObj.innerHTML = '收听TA';
    fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=1a6a669d&fuid='+values['fuid'];
    }
    }
    fixed_avatar([7], 1);
    </script>
   </div> 
  </div> 
  <!--bottombg结束--> 
  <script src="/home/js/home.js" type="text/javascript"></script> 
  <div id="scrolltop"> 
   <span><a href="/home/forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=7&amp;extra=page%3D1&amp;page=1" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span> 
   <span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa"><b>返回顶部</b></a></span> 
   <span> <a href="/home/forum.php?mod=forumdisplay&amp;fid=2" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a> </span> 
  </div> 
  <script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
  <div></div> 
  <div></div> 
  <div></div> 
  <div></div> 
  <div></div> 
@endsection
