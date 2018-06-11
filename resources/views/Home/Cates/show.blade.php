@extends('home.layout.master')
@section('sidebar') 

    <div class="bottombg">
      <div id="wp" class="wp xuxian">
        <style id="diy_style" type="text/css"></style>
        <!--[diy=diynavtop]-->
        <div id="diynavtop" class="area"></div>
        <!--[/diy]-->
        <div id="pt" class="bm cl">
          <div class="z">
            <a href="/" class="nvhm" title="首页">Discuz! Board</a>
            <a href="/">&nbsp;&nbsp;首页</a>
            <em>&rsaquo;</em>
            <a href="/home/luntan">论坛</a>
            <em>&rsaquo;</em>
            <a href="javascript:history.back(-1)">{{$data2['attributes']['title']}}</a>
            <em>&rsaquo;</em>
            <a href="#">{{$data1['attributes']['title']}}</a></div>
        </div>
        <div class="wp">
          <!--[diy=diy1]-->
          <div id="diy1" class="area"></div>
          <!--[/diy]--></div>
        <div class="boardnav">
          <div id="ct" class="wp cl ct2">
            <div class="mn" style="width:880px;">
              <div class="orde">
                <div class="lslsls">
                  
                  
                </div>
                <div class="drag">
                  <!--[diy=diy4]-->
                  <div id="diy4" class="area"></div>
                  <!--[/diy]--></div>

              </div>

              <div class="cenbor">
                
                <div id="threadlist" class="tl bm bmw" style="position: relative;">
                  
                  <div class="th">
                    <table cellspacing="0" cellpadding="0">
                      <tr>
                        <th colspan="2">
                          <div class="tf">
                            <span id="atarget" onclick="setatarget(1)" class="y" title="在新窗口中打开帖子">新窗</span>
                            <a id="filter_special" href="/home/javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">全部主题</a>&nbsp;
                            <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=lastpost&amp;orderby=lastpost" class="xi2">最新</a>&nbsp;
                            <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=heat&amp;orderby=heats" class="xi2">热门</a>&nbsp;
                            <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=hot" class="xi2">热帖</a>&nbsp;
                            <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=digest&amp;digest=1" class="xi2">精华</a>&nbsp;
                            <a id="filter_dateline" href="/home/javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">更多</a>&nbsp;
                            <span id="clearstickthread" style="display: none;">
                              <span class="pipe">|</span>
                              <a href="/home/javascript:;" onclick="clearStickThread()" class="xi2" title="显示置顶">显示置顶</a></span>
                          </div>
                        </th>
                        <td class="by">作者</td>
                        <td class="num">回复/查看</td>
                        <td class="by">最后发表</td></tr>
                    </table>
                  </div>
                  <div class="bm_c">
                    <script type="text/javascript">var lasttime = 1527320867;
                      var listcolspan = '5';</script>
                    <div id="forumnew" style="display:none"></div>
                    <form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=2&amp;infloat=yes&amp;nopost=yes">
                      <input type="hidden" name="formhash" value="316f8b52" />
                      <input type="hidden" name="listextra" value="page%3D1" />
                      <table summary="forum_2" cellspacing="0" cellpadding="0" id="threadlisttableid">
                        <tbody>
                          <tr>
                            <td class="icn">
                              <img src="/home/picture/ann_icon.gif" alt="公告" /></td>
                            <th>
                              <strong class="xst">公告:
                                <a href="/home/forum.php?mod=announcement&amp;id=13#13" target="_blank">公告201705</a></strong>
                            </th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>2017-12-25</em></td>
                            <td class="num">&nbsp;</td>
                            <td class="by">&nbsp;</td></tr>
                        </tbody>

<!--帖子开始-->

                        @foreach($data3 as $v)
                        <tbody id="stickthread_46">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=46&amp;extra=page%3D1" title="全局置顶主题 - 新窗口打开" target="_blank">
                                <img src="/home/picture/pin_3.gif" alt="全局置顶" /></a>
                            </td>
                            <th class="common">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_46" class="showcontent y" title="更多操作" onclick="CONTENT_TID='46';CONTENT_ID='stickthread_46';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/javascript:void(0);" style="display: none;" class="" title="隐藏置顶帖">隐藏置顶帖</a>
                              <a href="/home/read/{{ $v->id }}" onclick="atarget(this)" class="s xst">{{ $v->posts_title }}</a>
                              <img src="/home/picture/011.small.gif" alt="新人帖" align="absmiddle" />
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" />
                              <img src="/home/picture/digest_2.gif" align="absmiddle" alt="digest" title="精华 2" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-23</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=46&amp;extra=page%3D1" class="xi2">1</a>
                              <em>39</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=%CC%DF%C4%E3%D2%BB%BD%C5" c="1">踢你一脚</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=46&goto=lastpost#lastpost">2016-5-1 18:04</a></em>
                            </td>
                          </tr>
                        </tbody>
                      @endforeach
<!--帖子结束-->             
                        

                      </table>
                      <!-- end of table "forum_G[fid]" branch 1/3 --></form>
                  </div>
                </div>
                <div id="filter_special_menu" class="p_pop" style="display:none" change="location.href='forum.php?mod=forumdisplay&fid=2&filter='+$('filter_special').value">
                  <ul>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2">全部主题</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=specialtype&amp;specialtype=poll">投票</a></li>
                  </ul>
                </div>
                <div id="filter_reward_menu" class="p_pop" style="display:none" change="forum.php?mod=forumdisplay&amp;fid=2&amp;filter=specialtype&amp;specialtype=reward&amp;rewardtype='+$('filter_reward').value">
                  <ul>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=specialtype&amp;specialtype=reward">全部悬赏</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=specialtype&amp;specialtype=reward&amp;rewardtype=1">进行中</a></li>
                  </ul>
                </div>
                <div id="filter_dateline_menu" class="p_pop" style="display:none">
                  <ul class="pop_moremenu">
                    <li>排序:
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=author&amp;orderby=dateline">发帖时间</a>
                      <span class="pipe">|</span>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=reply&amp;orderby=replies">回复/查看</a>
                      <span class="pipe">|</span>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=reply&amp;orderby=views">查看</a></li>
                    <li>时间:
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;orderby=lastpost&amp;filter=dateline" class="xw1">全部时间</a>
                      <span class="pipe">|</span>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=86400">一天</a>
                      <span class="pipe">|</span>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=172800">两天</a>
                      <span class="pipe">|</span>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=604800">一周</a>
                      <span class="pipe">|</span>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=2592000">一个月</a>
                      <span class="pipe">|</span>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=7948800">三个月</a></li>
                  </ul>
                </div>
                <div id="filter_orderby_menu" class="p_pop" style="display:none">
                  <ul>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2">默认排序</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=author&amp;orderby=dateline">发帖时间</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=reply&amp;orderby=replies">回复/查看</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=reply&amp;orderby=views">查看</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=lastpost&amp;orderby=lastpost">最后发表</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=heat&amp;orderby=heats">热门</a></li>
                  </ul>
                </div>
                <div class="bm bw0 pgs cl">
                  <span id="fd_page_bottom"></span>
                  <span class="pgb y">
                    <a href="/home/forum.php">返&nbsp;回</a></span>
                </div>
                <!--[diy=diyfastposttop]-->
                <div id="diyfastposttop" class="area"></div>
                <!--[/diy]-->
                <!--[diy=diyforumdisplaybottom]-->
                <div id="diyforumdisplaybottom" class="area"></div>
                <!--[/diy]--></div>
            </div>
            <div class="sd">
              <div class="bm">
                <div class="bm_h">
                  
                  <h2 style="font-size:1em;font-weight: bold;">所属分类: 论坛分区一</h2></div>
                <div class="bm_c">
                  <ul class="xl xl2 cl">
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=37">旅游休闲</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2">美食天下</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=36">特殊主题</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=38">母婴亲子</a></li>
                  </ul>
                </div>
              </div>
              <div class="bm">
                <div class="bm_h cl">
                  <span class="o y">
                    <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;page=1&amp;showoldetails=no#online">
                      <img src="/home/picture/collapsed_no.gif" alt="" /></a>
                  </span>
                  <h2 style="font-size:1em;font-weight: bold;">正在浏览此版块的会员 (1)</h2></div>
                <div class="bm_c">
                  <ul class="ml mls cl">
                    <li>
                      <a href="/home/home.php?mod=space&amp;uid=14" class="avt">
                        <img src="/home/picture/avatar.php" /></a>
                      <p>
                        <a href="/home/home.php?mod=space&amp;uid=14">123456</a></p>
                      <span>15:45</span></li>
                  </ul>
                </div>
              </div>
              <div class="drag">
                <!--[diy=diy2]-->
                <div id="diy2" class="area"></div>
                <!--[/diy]--></div>
            </div>
          </div>
          <script type="text/javascript">var postminchars = parseInt('10');
            var postmaxchars = parseInt('10000');
            var disablepostctrl = parseInt('0');
            var fid = parseInt('2');</script>
<!--快速发帖开始-->
        <form action="/home/luntan" method="post">
            {{ csrf_field() }}
          <div id="f_pst" class="bm">
            <div class="bm_h">
              <h2>快速发帖</h2></div>
            <div class="bm_c">
              <div class="pbt cl">
                <script type="text/javascript" reload="1">simulateSelect('typeid_fast');</script>
                标题：&nbsp;&nbsp;<input type="text" id="subject" name="title" class="px" value="" onkeyup="strLenCalc(this, 'checklen', 80);" tabindex="11" style="width: 25em">
                <span>还可输入 <strong id="checklen">80</strong> 个字符</span>
              </div>
              <input type="hidden" name="id" value="{{ URL::current() }}">
              <script id="container" name="content" type="text/plain" style="height:200px;

              ">
                  
              </script>
            <p class="ptm pnpost">
              <button type="submit" name="topicsubmit" id="fastpostsubmit" value="topicsubmit" tabindex="13" class="pn pnc"><strong>发表帖子</strong></button>
            </p>  
            </div>
            
          </div>
        </form>
<!--快速发帖结束-->
        </div>
        <ul class="p_pop" id="newspecial_menu" style="display: none">
          <li>
            <a href="/home/forum.php?mod=post&amp;action=newthread&amp;fid=2">发表帖子</a></li>
          <li class="poll">
            <a href="/home/forum.php?mod=post&amp;action=newthread&amp;fid=2&amp;special=1">发起投票</a></li>
        </ul>
        <script type="text/javascript">document.onkeyup = function(e) {
            keyPageScroll(e, 0, 0, 'forum.php?mod=forumdisplay&fid=2&filter=&orderby=lastpost&', 1);
          }</script>
        
        
        </div>
      
    </div>
    <!--bottombg结束-->
    <!-- 配置文件 -->
              <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
              <!-- 编辑器源码文件 -->
              <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
              <!-- 实例化编辑器 -->
              <script type="text/javascript">
                  var ue = UE.getEditor('container',{
                    toolbars: [
                                [
                                   'fullscreen','undo', 'redo', 'bold','simpleupload','insertimage','italic','forecolor','backcolor','edittip'
                                ]
                            ]
                  });
              </script>

@endsection
