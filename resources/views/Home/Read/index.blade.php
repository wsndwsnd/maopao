@extends('home.layout.master')
@section('sidebar') 
<div class="bottombg">
      <script type="text/javascript">go();</script>
      <div id="wp" class="wp xuxian">
        <link rel="stylesheet" type="text/css" href="/home/css/index.css" />
        <style id="diy_style" type="text/css"></style>
        <!--[diy=diynavtop]-->
        <div id="diynavtop" class="area"></div>
        <!--[/diy]-->
        <div id="pt" class="bm cl">
          <div class="z">
            <a href="/home/./" class="nvhm" title="首页">Discuz! Board</a>
            <a href="/home/portal.php">&nbsp;&nbsp;首页</a>
            <em>&rsaquo;</em>
            <a href="/home/forum.php">论坛</a>
            <em>&rsaquo;</em>
            <a href="/home/forum.php?gid=1">论坛分区一</a>
            <em>&rsaquo;</em>
            <a href="/home/forum.php?mod=forumdisplay&fid=2">美食天下</a></div>
        </div>
        <div class="wp">
          <!--[diy=diy1]-->
          <div id="diy1" class="area"></div>
          <!--[/diy]--></div>
        <div class="boardnav">
          <div id="ct" class="wp cl ct2">
            <div class="mn">
              <div class="orde">
                <div class="lslsls">
                  <div class="bm bml pbn mysss">
                    <div id="pimg">
                      <p>
                        <img src="/home/picture/common_2_icon.png" /></p>
                    </div>
                    <div class="bkleft">
                      <img src="/home/picture/common_2_icon.png" alt="美食天下" />
                      <div class="bm_h cl">
                        <span class="y">
                          <a href="/home/home.php?mod=spacecp&amp;ac=favorite&amp;type=forum&amp;id=2&amp;handlekey=favoriteforum&amp;formhash=316f8b52" id="a_favorite" class="fa_fav" onclick="showWindow(this.id, this.href, 'get', 0);">收藏本版
                            <strong class="xi1" id="number_favorite" style="display:none;">(
                              <span id="number_favorite_num">0</span>)</strong></a>
                          <span class="pipe">|</span>
                          <a href="/home/forum.php?mod=rss&amp;fid=2&amp;auth=50e79v%2BtmlSCDPnh4tECCCwkrWeIO3QOyYzvVdnlAjxjNzaDsrGyKk5A" class="fa_rss" target="_blank" title="RSS">订阅</a></span>
                        <h1 class="xs2">
                          <a href="/home/forum.php?mod=forumdisplay&amp;fid=2">美食天下</a>
                          <span class="xs1 xw0 i">今日:
                            <strong class="xi1">0</strong>
                            <span class="pipe">|</span>主题:
                            <strong class="xi1">8</strong>
                            <span class="pipe">|</span>排名:
                            <strong class="xi1" title="上次排名:1">2</strong>
                            <b class="ico_fall">&nbsp;</b></span>
                        </h1>
                      </div>
                      <div class="bm_c cl pbn">
                        <div class="pbn">暂无版主</div>
                        <div class="haobaba">
                          <div id="forum_rules_2" style=";line-height:23px;" class="guize">本版块规则:显示于主题列表页的当前版块规则，留空为不显示</div></div>
                      </div>
                    </div>
                  </div>
                  <div class="bkright">
                    <div class="fbtiez">
                      <a href="/home/javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=2')" title="发新帖">
                        <i class="bbjj"></i>
                        <span>发表帖子</span></a>
                    </div>
                    <!-- <div class="qiandao"><a onclick="showWindow('nav', this.href, 'get', 0)" href="/home/plugin.php?id=dsu_paulsign:sign"><i class="qqdd"></i><span>点击签到</span></a></div> -->
                    <!--[diy=diybkbkbkbk]-->
                    <div id="diybkbkbkbk" class="area"></div>
                    <!--[/diy]--></div>
                </div>
                <div class="drag">
                  <!--[diy=diy4]-->
                  <div id="diy4" class="area"></div>
                  <!--[/diy]--></div>
              </div>
              <div class="cenbor">
                <div class="fyfl">
                  <div id="pgt" class="bm bw0 pgs cl">
                    <span id="fd_page_top"></span>
                    <span class="pgb y">
                      <a href="/home/forum.php">返&nbsp;回</a></span>
                  </div>
                  <ul id="thread_types" class="ttp bm cl">
                    <li id="ttp_all" class="xw1 a">
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2">全部主题</a></li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=typeid&amp;typeid=3">
                        <font color="red">
                          <b>粤菜</b>
                        </font>
                      </a>
                    </li>
                    <li class="line">|</li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=typeid&amp;typeid=4">川菜
                        <span class="xg1 num">1</span></a>
                    </li>
                    <li class="line">|</li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=typeid&amp;typeid=5">湘菜</a></li>
                    <li class="line">|</li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=typeid&amp;typeid=6">鲁菜</a></li>
                    <li class="line">|</li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=typeid&amp;typeid=7">苏菜</a></li>
                    <li class="line">|</li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=typeid&amp;typeid=8">浙菜</a></li>
                    <li class="line">|</li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=typeid&amp;typeid=9">闽菜</a></li>
                    <li class="line">|</li>
                    <li>
                      <a href="/home/forum.php?mod=forumdisplay&amp;fid=2&amp;filter=typeid&amp;typeid=10">徽菜</a></li>
                    <li class="line">|</li></ul>
                  <script type="text/javascript">showTypes('thread_types');</script></div>
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
                              <a href="/home/javascript:void(0);" onclick="hideStickThread('46')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=46&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">给孩子吃这些有助长高</a>
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
                        <tbody id="separatorline">
                          <tr class="ts">
                            <td colspan="3" class="shuax">
                              <a href="/home/javascript:;" onclick="checkForumnew_btn('2')" title="查看更新" class="forumrefresh">
                                <span class="sxsx">版块主题</span>
                                <i>
                                </i>
                              </a>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td></tr>
                        </tbody>
                        <script type="text/javascript">hideStickThread();</script>
                        <tbody id="normalthread_8">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=8&amp;extra=page%3D1" title="有新回复 - 新窗口打开" target="_blank">
                                <img src="/home/picture/folder_new.gif" /></a>
                            </td>
                            <th class="new">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_8" class="showcontent y" title="更多操作" onclick="CONTENT_TID='8';CONTENT_ID='normalthread_8';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=8&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">腊肉香肠焖饭</a>
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-14</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=8&amp;extra=page%3D1" class="xi2">0</a>
                              <em>7</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=admin" c="1">admin</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=8&goto=lastpost#lastpost">2016-4-14 14:37</a></em>
                            </td>
                          </tr>
                        </tbody>
                        <tbody id="normalthread_7">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=7&amp;extra=page%3D1" title="有新回复 - 新窗口打开" target="_blank">
                                <img src="/home/picture/folder_new.gif" /></a>
                            </td>
                            <th class="new">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_7" class="showcontent y" title="更多操作" onclick="CONTENT_TID='7';CONTENT_ID='normalthread_7';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=7&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">对付挑食的小孩就用它：香糯可口的香煎猪肉土豆盒</a>
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-14</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=7&amp;extra=page%3D1" class="xi2">0</a>
                              <em>4</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=admin" c="1">admin</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=7&goto=lastpost#lastpost">2016-4-14 14:36</a></em>
                            </td>
                          </tr>
                        </tbody>
                        <tbody id="normalthread_6">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=6&amp;extra=page%3D1" title="有新回复 - 新窗口打开" target="_blank">
                                <img src="/home/picture/folder_new.gif" /></a>
                            </td>
                            <th class="new">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_6" class="showcontent y" title="更多操作" onclick="CONTENT_TID='6';CONTENT_ID='normalthread_6';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=6&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">妈妈的菜【河虾烩三鲜】好吃不好看</a>
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" />
                              <img src="/home/picture/digest_3.gif" align="absmiddle" alt="digest" title="精华 3" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-14</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=6&amp;extra=page%3D1" class="xi2">0</a>
                              <em>3</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=admin" c="1">admin</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=6&goto=lastpost#lastpost">2016-4-14 14:33</a></em>
                            </td>
                          </tr>
                        </tbody>
                        <tbody id="normalthread_5">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=5&amp;extra=page%3D1" title="有新回复 - 新窗口打开" target="_blank">
                                <img src="/home/picture/folder_new.gif" /></a>
                            </td>
                            <th class="new">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_5" class="showcontent y" title="更多操作" onclick="CONTENT_TID='5';CONTENT_ID='normalthread_5';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=5&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">营养丰富的【猪肝鸭蛋汤】</a>
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" />
                              <img src="/home/picture/digest_1.gif" align="absmiddle" alt="digest" title="精华 1" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-14</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=5&amp;extra=page%3D1" class="xi2">0</a>
                              <em>4</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=admin" c="1">admin</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=5&goto=lastpost#lastpost">2016-4-14 14:32</a></em>
                            </td>
                          </tr>
                        </tbody>
                        <tbody id="normalthread_4">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=4&amp;extra=page%3D1" title="有新回复 - 新窗口打开" target="_blank">
                                <img src="/home/picture/folder_new.gif" /></a>
                            </td>
                            <th class="new">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_4" class="showcontent y" title="更多操作" onclick="CONTENT_TID='4';CONTENT_ID='normalthread_4';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=4&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">辣里寻鲜的【香辣墨鱼仔】</a>
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-14</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=4&amp;extra=page%3D1" class="xi2">0</a>
                              <em>2</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=admin" c="1">admin</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=4&goto=lastpost#lastpost">2016-4-14 14:30</a></em>
                            </td>
                          </tr>
                        </tbody>
                        <tbody id="normalthread_3">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=3&amp;extra=page%3D1" title="有新回复 - 新窗口打开" target="_blank">
                                <img src="/home/picture/folder_new.gif" /></a>
                            </td>
                            <th class="new">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_3" class="showcontent y" title="更多操作" onclick="CONTENT_TID='3';CONTENT_ID='normalthread_3';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=3&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">咖喱可乐饼-简单易做的异国小吃</a>
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" />
                              <img src="/home/picture/digest_2.gif" align="absmiddle" alt="digest" title="精华 2" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-14</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=3&amp;extra=page%3D1" class="xi2">0</a>
                              <em>3</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=admin" c="1">admin</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=3&goto=lastpost#lastpost">2016-4-14 14:28</a></em>
                            </td>
                          </tr>
                        </tbody>
                        <tbody id="normalthread_2">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=2&amp;extra=page%3D1" title="有新回复 - 新窗口打开" target="_blank">
                                <img src="/home/picture/folder_new.gif" /></a>
                            </td>
                            <th class="new">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_2" class="showcontent y" title="更多操作" onclick="CONTENT_TID='2';CONTENT_ID='normalthread_2';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=2&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">脱水蔬菜----ACAGT400智能烤箱体验报告4</a>
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-14</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=2&amp;extra=page%3D1" class="xi2">0</a>
                              <em>2</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=admin" c="1">admin</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=2&goto=lastpost#lastpost">2016-4-14 14:26</a></em>
                            </td>
                          </tr>
                        </tbody>
                        <tbody id="normalthread_1">
                          <tr>
                            <td class="icn">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=1&amp;extra=page%3D1" title="有新回复 - 新窗口打开" target="_blank">
                                <img src="/home/picture/folder_new.gif" /></a>
                            </td>
                            <th class="new">
                              <a id="toux" href="/home/home.php?mod=space&amp;uid=1" target="_blank" title="进入admin的空间" class="">
                                <img src="/home/picture/avatar.php" width="52" height="52"></a>
                              <a href="/home/javascript:;" id="content_1" class="showcontent y" title="更多操作" onclick="CONTENT_TID='1';CONTENT_ID='normalthread_1';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/forum.php?mod=viewthread&amp;tid=1&amp;extra=page%3D1" onclick="atarget(this)" class="s xst">红丝绒小蛋糕</a>
                              <img src="/home/picture/011.small.gif" alt="新人帖" align="absmiddle" />
                              <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" /></th>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&amp;uid=1" c="1">admin</a></cite>
                              <em>
                                <span>2016-4-14</span></em>
                            </td>
                            <td class="num">
                              <a href="/home/forum.php?mod=viewthread&amp;tid=1&amp;extra=page%3D1" class="xi2">0</a>
                              <em>3</em></td>
                            <td class="by">
                              <cite>
                                <a href="/home/home.php?mod=space&username=admin" c="1">admin</a></cite>
                              <em>
                                <a href="/home/forum.php?mod=redirect&tid=1&goto=lastpost#lastpost">2016-4-14 14:24</a></em>
                            </td>
                          </tr>
                        </tbody>
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
                  <h2>所属分类: 论坛分区一</h2></div>
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
                  <h2>正在浏览此版块的会员 (1)</h2></div>
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
          <div id="f_pst" class="bm">
            <div class="bm_h">
              <h2>快速发帖</h2></div>
            <div class="bm_c">
              <form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=newthread&amp;fid=2&amp;topicsubmit=yes&amp;infloat=yes&amp;handlekey=fastnewpost" onSubmit="return fastpostvalidate(this)">
                <div id="fastpostreturn" style="margin:-5px 0 5px"></div>
                <div class="pbt cl">
                  <div class="ftid">
                    <select name="typeid" id="typeid_fast" width="80">
                      <option value="0" selected="selected">选择主题分类</option>
                      <option value="3">粤菜</option>
                      <option value="4">川菜</option>
                      <option value="5">湘菜</option>
                      <option value="6">鲁菜</option>
                      <option value="7">苏菜</option>
                      <option value="8">浙菜</option>
                      <option value="9">闽菜</option>
                      <option value="10">徽菜</option></select>
                  </div>
                  <script type="text/javascript" reload="1">simulateSelect('typeid_fast');</script>
                  <input type="text" id="subject" name="subject" class="px" value="" onkeyup="strLenCalc(this, 'checklen', 80);" tabindex="11" style="width: 25em" />
                  <span>还可输入
                    <strong id="checklen">80</strong>个字符</span></div>
                <div class="cl">
                  <div id="fastsmiliesdiv" class="y">
                    <div id="fastsmiliesdiv_data">
                      <div id="fastsmilies"></div>
                    </div>
                  </div>
                  <div class="hasfsl" id="fastposteditor">
                    <div class="tedt">
                      <div class="bar">
                        <span class="y">
                          <a href="/home/forum.php?mod=post&amp;action=newthread&amp;fid=2" onclick="switchAdvanceMode(this.href);doane(event);">高级模式</a></span>
                        <script src="/home/js/seditor.js" type="text/javascript"></script>
                        <div class="fpd">
                          <a href="/home/javascript:;" title="文字加粗" class="fbld" onclick="seditor_insertunit('fastpost', '[b]', '[/b]');doane(event);">B</a>
                          <a href="/home/javascript:;" title="设置文字颜色" class="fclr" id="fastpostforecolor" onclick="showColorBox(this.id, 2, 'fastpost');doane(event);">Color</a>
                          <a id="fastpostimg" href="/home/javascript:;" title="图片" class="fmg" onclick="seditor_menu('fastpost', 'img');doane(event);">Image</a>
                          <a id="fastposturl" href="/home/javascript:;" title="添加链接" class="flnk" onclick="seditor_menu('fastpost', 'url');doane(event);">Link</a>
                          <a id="fastpostquote" href="/home/javascript:;" title="引用" class="fqt" onclick="seditor_menu('fastpost', 'quote');doane(event);">Quote</a>
                          <a id="fastpostcode" href="/home/javascript:;" title="代码" class="fcd" onclick="seditor_menu('fastpost', 'code');doane(event);">Code</a>
                          <a href="/home/javascript:;" class="fsml" id="fastpostsml" onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;">Smilies</a>
                          <script type="text/javascript" reload="1">smilies_show('fastpostsmiliesdiv', 8, 'fastpost');</script>
                          <span class="pipe z">|</span>
                          <span id="spanButtonPlaceholder">上传</span></div>
                      </div>
                      <div class="area">
                        <textarea rows="6" cols="80" name="message" id="fastpostmessage" onKeyDown="seditor_ctlent(event, '$(\'fastpostsubmit\').click()');" tabindex="12" class="pt"></textarea>
                      </div>
                    </div>
                  </div>
                  <div id="seccheck_fastpost">
                    <div class="mtm">
                      <span id="seccode_cSzhQbYN"></span>
                      <script type="text/javascript" reload="1">updateseccode('cSzhQbYN', '<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>', 'forum::forumdisplay');</script></div>
                  </div>
                  <input type="hidden" name="formhash" value="316f8b52" />
                  <input type="hidden" name="usesig" value="1" /></div>
                <script type="text/javascript">var editorid = '';
                  var ATTACHNUM = {
                    'imageused': 0,
                    'imageunused': 0,
                    'attachused': 0,
                    'attachunused': 0
                  },
                  ATTACHUNUSEDAID = new Array(),
                  IMGUNUSEDAID = new Array();</script>
                <input type="hidden" name="posttime" id="posttime" value="1527320867" />
                <div class="upfl hasfsl">
                  <table cellpadding="0" cellspacing="0" border="0" width="100%" id="attach_tblheader" style="display: none">
                    <tr>
                      <td>点击附件文件名添加到帖子内容中</td>
                      <td class="atds">描述</td>
                      <td class="attc"></td>
                    </tr>
                  </table>
                  <div class="fieldset flash" id="attachlist"></div>
                  <script src="/home/js/upload.js" type="text/javascript"></script>
                  <script type="text/javascript">var upload = new SWFUpload({
                      upload_url: "http://29.92zyb.com/misc.php?mod=swfupload&action=swfupload&operation=upload&fid=2",
                      post_params: {
                        "uid": "14",
                        "hash": "ef7f2092645f6a19ca92c7854d94c916"
                      },
                      file_size_limit: "1000",
                      file_types: "*.chm;*.pdf;*.zip;*.rar;*.tar;*.gz;*.bzip2;*.gif;*.jpg;*.jpeg;*.png",
                      file_types_description: "All Support Formats",
                      file_upload_limit: 0,
                      file_queue_limit: 0,
                      swfupload_preload_handler: preLoad,
                      swfupload_load_failed_handler: loadFailed,
                      file_dialog_start_handler: fileDialogStart,
                      file_queued_handler: fileQueued,
                      file_queue_error_handler: fileQueueError,
                      file_dialog_complete_handler: fileDialogComplete,
                      upload_start_handler: uploadStart,
                      upload_progress_handler: uploadProgress,
                      upload_error_handler: uploadError,
                      upload_success_handler: uploadSuccess,
                      upload_complete_handler: uploadComplete,
                      button_image_url: "static/image/common/uploadbutton_small.png",
                      button_placeholder_id: "spanButtonPlaceholder",
                      button_width: 17,
                      button_height: 25,
                      button_cursor: SWFUpload.CURSOR.HAND,
                      button_window_mode: "transparent",
                      custom_settings: {
                        progressTarget: "attachlist",
                        uploadSource: 'forum',
                        uploadType: 'attach',
                        uploadFrom: 'fastpost'
                      },
                      debug: false
                    });</script>
                </div>
                <p class="ptm pnpost">
                  <a href="/home/home.php?mod=spacecp&amp;ac=credit&amp;op=rule&amp;fid=2" class="y" target="_blank">本版积分规则</a>
                  <button type="submit" name="topicsubmit" id="fastpostsubmit" value="topicsubmit" tabindex="13" class="pn pnc">
                    <strong>发表帖子</strong></button>
                </p>
              </form>
            </div>
          </div>
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
        <script type="text/javascript">checkForumnew_handle = setTimeout(function() {
            checkForumnew(2, lasttime);
          },
          checkForumtimeout);</script>
        <div class="wp mtn">
          <!--[diy=diy3]-->
          <div id="diy3" class="area"></div>
          <!--[/diy]--></div>
        <script>fixed_top_nv();</script></div>
      
    </div>

@endsection