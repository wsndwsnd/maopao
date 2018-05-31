@extends('Home.layout.master')
@section('sidebar')
   <div id="wp" class="wp xuxian">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="js/forum_viewthread.js" type="text/javascript"></script>
        <script type="text/javascript">zoomstatus = parseInt(1),
          imagemaxwidth = '957',
          aimgcount = new Array();</script>
        <div class="wp adcs">
          <div id="pt" class="bm cl">
            <div class="z">
              <a href="./" class="nvhm" title="首页">Discuz! Board</a>
              <a href="portal.php" style="margin-left:6px;">首页</a>
              <em>&rsaquo;</em>
              <a href="http://29.92zyb.com/portal.php?mod=list&catid=1">资讯</a>
              <em>&rsaquo;</em>查看内容</div></div>
          <!--[diy=diy1]-->
          <div id="diy1" class="area"></div>
          <!--[/diy]--></div>
        <style id="diy_style" type="text/css"></style>
        <div id="ct" class="ct2 wp cl">
          <div class="mn">
            <div class="bm_haa cl">
              <div class="bm_h cl">
                <h1 class="xs2">公告</h1></div>
            </div>
            <div class="kjkjb">
              <div class="bm vw" style="margin-bottom:0;">
                <div class="h hm">
                  <h1 class="ph">{{ $data->notice_title }}</h1>
                  <p class="xg1">发布时间：{{$data -> created_at}}
                    <a class="zz jl" href="home.php?mod=space&amp;uid=1">作者：admin</a>
                    <span class="yd">阅读：
                      <em id="_viewnum">14</em></span>评论: 0</p>
                </div>
                <!--[diy=diysummarytop]-->
                <div id="diysummarytop" class="area"></div>
                <!--[/diy]-->
                <div class="s">
                  <div class="s">
                    <div style="height:300px;text-align:center;">
                      <hr>
                     <!-- 公告内容 -->
                      <p>{{ $data -> notice_content }}</p>      
                     </div>
                   </div>
                  <!--[diy=diysummarybottom]-->
                  <div id="diysummarybottom" class="area"></div>
                  <!--[/diy]-->
                  <div class="d">
                    <!--[diy=diycontenttop]-->
                    <div id="diycontenttop" class="area"></div>
                    <!--[/diy]-->
                    
                    <!--[diy=diycontentbottom]-->
                    <div id="diycontentbottom" class="area"></div>
                    <!--[/diy]-->
                    <script src="js/home.js" type="text/javascript"></script>
                    <div id="click_div">
                     
                      <script type="text/javascript">function errorhandle_clickhandle(message, values) {
                          if (values['id']) {
                            showCreditPrompt();
                            show_click(values['idtype'], values['id'], values['clickid']);
                          }
                        }</script>
                    </div>
                    <!--[diy=diycontentclickbottom]-->
                    <div id="diycontentclickbottom" class="area"></div>
                    <!--[/diy]--></div>
                  <div class="o cl ptm pbm">
                   
                    
                  </div>
                  <div class="pren pbm cl">
                    <em>上一篇：
                      <a href="portal.php?mod=view&aid=7">胖子也有春天 如果胖请认真胖</a></em>
                    <em>下一篇：
                      <a href="portal.php?mod=view&aid=9">我的日记-我不想长大</a></em>
                    <!-- Baidu Button BEGIN -->
                    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0"></script>
                    <script type="text/javascript" id="bdshell_js"></script>
                    <script type="text/javascript">document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)</script>
                    <!-- Baidu Button END --></div>
                </div>
              </div>
              <!--[diy=diycontentrelatetop]-->
              <div id="diycontentrelatetop" class="area"></div>
              <!--[/diy]--></div>
            <!--[diy=diycontentrelate]-->
            <div id="diycontentrelate" class="area"></div>
            <!--[/diy]-->
            <div id="comment" class="bm">
              
           
            </div>
            <!--[diy=diycontentcomment]-->
            <div id="diycontentcomment" class="area"></div>
            <!--[/diy]--></div>
          <div class="sd pph">
            <div class="drag">
              <!--[diy=diyrighttop]-->
              <div id="diyrighttop" class="area">
                <div id="frameZkWxkX" class="frame move-span cl frame-1">
                  <div id="frameZkWxkX_left" class="column frame-1-c">
                    <div id="frameZkWxkX_left_temp" class="move-span temp"></div>
                    <div id="portal_block_75" class="zxlbyad block move-span">
                      <div id="portal_block_75_content" class="dxb_bc">
                        <div class="portal_block_summary">
                          <img src="picture/ad2.jpg" width="100%" /></div>
                      </div>
                    </div>
                    <div id="portal_block_76" class="zxlbyltph block move-span">
                      <div class="blocktitle title">
                        <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">阅读排行</span></div>
                      <div id="portal_block_76_content" class="dxb_bc">
                        <div class="module cl xl xl1">
                          <ul>
                            <li class="cc1">
                              <span>1</span>
                              <a href="forum.php?mod=viewthread&tid=101" title="123123123" target="_blank">123123123</a></li>
                            <li class="cc2">
                              <span>2</span>
                              <a href="forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试</a></li>
                            <li class="cc3">
                              <span>3</span>
                              <a href="forum.php?mod=viewthread&tid=92" title="新锐创想主题社区模板演示站签到帖" target="_blank">新锐创想主题社区模板演示站签到帖</a></li>
                            <li class="cc4">
                              <span>4</span>
                              <a href="forum.php?mod=viewthread&tid=99" title="[图片类]投票：您觉得里面哪位妹纸好看？" target="_blank">[图片类]投票：您觉得里面哪位妹纸好看？</a></li>
                            <li class="cc5">
                              <span>5</span>
                              <a href="forum.php?mod=viewthread&tid=98" title="您觉得加田小店的模板好看吗" target="_blank">您觉得加田小店的模板好看吗</a></li>
                            <li class="cc6">
                              <span>6</span>
                              <a href="forum.php?mod=viewthread&tid=97" title="悬赏100万求个美女老婆" target="_blank">悬赏100万求个美女老婆</a></li>
                            <li class="cc7">
                              <span>7</span>
                              <a href="forum.php?mod=viewthread&tid=96" title="【加田小店】您觉得X3.3和X3.2哪个好用" target="_blank">【加田小店】您觉得X3.3和X3.2哪个好用</a></li>
                            <li class="cc8">
                              <span>8</span>
                              <a href="forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖</a></li>
                            <li class="cc9">
                              <span>9</span>
                              <a href="forum.php?mod=viewthread&tid=94" title="新锐创想轻主题商品演示" target="_blank">新锐创想轻主题商品演示</a></li>
                            <li class="cc10">
                              <span>10</span>
                              <a href="forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">迷人的大光圈 教你使用焦外的正确时机</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div id="portal_block_77" class="zxlbytjyd block move-span">
                      <div class="blocktitle title">
                        <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">推荐阅读</span></div>
                      <div id="portal_block_77_content" class="dxb_bc">
                        <div class="module cl xld">
                          <dl class="cl">
                            <dd class="m">
                              <a href="forum.php?mod=viewthread&tid=100" target="_blank">
                                <img src="picture/91dc790fbbb74a6b1546996a0c8a9c95.jpg" width="274" height="146" alt="发帖测试" /></a>
                            </dd>
                            <dt>
                              <a href="forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试
                                <i>>></i>
                              </a>
                            </dt>
                            <dd class="fttime">2018-04-25 17:26</dd></dl>
                          <dl class="cl">
                            <dd class="m">
                              <a href="forum.php?mod=viewthread&tid=95" target="_blank">
                                <img src="picture/957e96ffde288fa51079ddbcf5fee966.jpg" width="274" height="146" alt="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" /></a>
                            </dd>
                            <dt>
                              <a href="forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动
                                <i>>></i>
                              </a>
                            </dt>
                            <dd class="fttime">2017-04-27 23:14</dd></dl>
                          <dl class="cl">
                            <dd class="m">
                              <a href="forum.php?mod=viewthread&tid=32" target="_blank">
                                <img src="picture/8c9e917f78a9b907dbab8ce017a4b532.jpg" width="274" height="146" alt="迷人的大光圈 教你使用焦外的正确时机" /></a>
                            </dd>
                            <dt>
                              <a href="forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">迷人的大光圈 教你使用焦外的正确时
                                <i>>></i>
                              </a>
                            </dt>
                            <dd class="fttime">2016-04-21 20:28</dd></dl>
                        </div>
                      </div>
                    </div>
                    <div id="portal_block_78" class="zxlbyjcdp block move-span">
                      <div class="blocktitle title">
                        <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">精彩点评</span></div>
                      <div id="portal_block_78_content" class="dxb_bc">
                        <div class="module cl xld">
                          <dl class="cl cc1">
                            <dt>
                              <em class="zuoz">
                                <a href="home.php?mod=space&uid=14" target="_blank">123456</a></em>原文：
                              <a href="forum.php?mod=viewthread&tid=101" title="123123123" target="_blank">123123123</a></dt>
                            <dd>
                              <i>
                              </i>
                              <p>123123123123123123</p>
                            </dd>
                          </dl>
                          <dl class="cl cc2">
                            <dt>
                              <em class="zuoz">
                                <a href="home.php?mod=space&uid=12" target="_blank">fff</a></em>原文：
                              <a href="forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试</a></dt>
                            <dd>
                              <i>
                              </i>
                              <p>这是一条测试</p>
                            </dd>
                          </dl>
                          <dl class="cl cc3">
                            <dt>
                              <em class="zuoz">
                                <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>原文：
                              <a href="forum.php?mod=viewthread&tid=92" title="新锐创想主题社区模板演示站签到帖" target="_blank">新锐创想主题社区模板演示站签到帖</a></dt>
                            <dd>
                              <i>
                              </i>
                              <p>新锐创想主题社区模板演示站签到帖</p>
                            </dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--[/diy]--></div>
            <div class="bm" style="display:none;">
              <div class="bm_h cl">
                <h2>相关分类</h2></div>
              <div class="bm_c">
                <ul class="xl xl2 cl">
                  <li>
                    <a href="http://29.92zyb.com/portal.php?mod=list&catid=1">资讯</a></li>
                </ul>
              </div>
            </div>
            <div class="drag">
              <!--[diy=diyada]-->
              <div id="diyada" class="area"></div>
              <!--[/diy]-->
              <!--[diy=wd_new_t02]-->
              <div id="wd_new_t02" class="area"></div>
              <!--[/diy]-->
              <!--[diy=wd_new_t03]-->
              <div id="wd_new_t03" class="area"></div>
              <!--[/diy]-->
              <!--[diy=wd_new_t04]-->
              <div id="wd_new_t04" class="area"></div>
              <!--[/diy]--></div>
          </div>
        </div>
        <input type="hidden" id="portalview" value="1"></div>

@stop