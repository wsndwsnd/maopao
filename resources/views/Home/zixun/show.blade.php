@extends('Home.layout.master')
@section('sidebar')   

      <div id="wp" class="wp xuxian">
        <link rel="stylesheet" type="text/css" href="/home/css/index.css">
        <script src="/home/js/forum_viewthread.js" type="text/javascript"></script>
        <script type="text/javascript">zoomstatus = parseInt(1),
          imagemaxwidth = '957',
          aimgcount = new Array();</script>
        <div class="wp adcs">
          <div id="pt" class="bm cl">
            <div class="z">
              <a href="./" class="nvhm" title="首页">Discuz! Board</a>
              <a href="portal.php" style="margin-left:6px;">首页</a>
              <em>&rsaquo;</em>
              <a href="/zixun">资讯</a>
              <em>&rsaquo;</em>查看内容</div></div>
          <!--[diy=diy1]-->
          <div id="diy1" class="area"></div>
          <!--[/diy]--></div>
        <style id="diy_style" type="text/css"></style>
        <div id="ct" class="ct2 wp cl">
          <div class="mn">
            <div class="bm_haa cl">
              <div class="bm_h cl">
                <a href="portal.php?mod=rss&amp;catid=1" class="y xi2 rss" target="_blank" title="RSS">订阅</a>
                <h1 class="xs2">文章</h1></div>
            </div>
            <div class="kjkjb">
              <div class="bm vw" style="margin-bottom:0;">
                <div class="h hm">
                  <h1 class="ph">{{ $data->article_title }}</h1>
                  <p class="xg1">发布时间：{{ $data->created_at }}
                    <a class="zz jl" href="home.php?mod=space&amp;uid=1">作者：{{ $data->article_author }}</a>
                    <span class="yd">阅读：
                      <em id="_viewnum">{{ $data->article_pview }}</em></span>评论: 0</p>
                    
                </div>
                <!--[diy=diysummarytop]-->
                <div id="diysummarytop" class="area"></div>
                <!--[/diy]-->
                <div class="s">
                  <div class="s">
                    <div>
                      <span>内容简介：</span>{!! $data->article_dec !!}</div></div>
                  <!--[diy=diysummarybottom]-->
                  <div id="diysummarybottom" class="area"></div>
                  <!--[/diy]-->
                  <div class="d">
                    <!--[diy=diycontenttop]-->
                    <div id="diycontenttop" class="area"></div>
                    <!--[/diy]-->
                    <table cellpadding="0" cellspacing="0" class="vwtb">
                      <tr>
                        <td id="article_content">
                         
                         <div class="div">   {!! $data->article_content !!} </div>
                        </td>
                      </tr>
                    </table>
                    <!--[diy=diycontentbottom]-->
                    <div id="diycontentbottom" class="area"></div>
                    <!--[/diy]-->
                    <script src="/home/js/home.js" type="text/javascript"></script>
                    <div id="click_div">
                      <table cellpadding="0" cellspacing="0" class="atd">
                        <tr>
                          <td>
                            <a href="home.php?mod=spacecp&amp;ac=click&amp;op=add&amp;clickid=1&amp;idtype=aid&amp;id=12&amp;hash=67fa25d37f88e9a82f9997b0aa8cb3ad&amp;handlekey=clickhandle" id="click_aid_12_1" onclick="ajaxmenu(this);doane(event);">
                              <img  src="/home/picture/xianhua.gif" alt="" />
                              <br />鲜花</a></td>
                          <td>
                            <a href="home.php?mod=spacecp&amp;ac=click&amp;op=add&amp;clickid=2&amp;idtype=aid&amp;id=12&amp;hash=67fa25d37f88e9a82f9997b0aa8cb3ad&amp;handlekey=clickhandle" id="click_aid_12_2" onclick="ajaxmenu(this);doane(event);">
                              <img  src="/home/picture/woshou.gif" alt="" />
                              <br />握手</a></td>
                          <td>
                            <a href="home.php?mod=spacecp&amp;ac=click&amp;op=add&amp;clickid=3&amp;idtype=aid&amp;id=12&amp;hash=67fa25d37f88e9a82f9997b0aa8cb3ad&amp;handlekey=clickhandle" id="click_aid_12_3" onclick="ajaxmenu(this);doane(event);">
                              <img  src="/home/picture/leiren.gif" alt="" />
                              <br />雷人</a></td>
                          <td>
                            <a href="home.php?mod=spacecp&amp;ac=click&amp;op=add&amp;clickid=4&amp;idtype=aid&amp;id=12&amp;hash=67fa25d37f88e9a82f9997b0aa8cb3ad&amp;handlekey=clickhandle" id="click_aid_12_4" onclick="ajaxmenu(this);doane(event);">
                              <img  src="/home/picture/luguo.gif" alt="" />
                              <br />路过</a></td>
                          <td>
                            <a href="home.php?mod=spacecp&amp;ac=click&amp;op=add&amp;clickid=5&amp;idtype=aid&amp;id=12&amp;hash=67fa25d37f88e9a82f9997b0aa8cb3ad&amp;handlekey=clickhandle" id="click_aid_12_5" onclick="ajaxmenu(this);doane(event);">
                              <img  src="/home/picture/jidan.gif" alt="" />
                              <br />鸡蛋</a></td>
                        </tr>
                      </table>
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
                    <a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=article&amp;id=12&amp;handlekey=favoritearticlehk_12" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr ofav">收藏</a>
                    <a href="misc.php?mod=invite&amp;action=article&amp;id=12" id="a_invite" onclick="showWindow('invite', this.href, 'get', 0);" class="oshr oivt">邀请</a>
                    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                      <span class="shear">分享到：</span>
                      <span class="bds_more"></span>
                      <a class="bds_qzone"></a>
                      <a class="bds_tsina"></a>
                      <a class="bds_tqq"></a>
                      <a class="bds_renren"></a>
                      <a class="bds_t163"></a>
                    </div>
                  </div>
                  <div class="pren pbm cl">
                  	@if($data1)
                    <em>上一篇：
                      <a href="/zixun/{{ $data1->id }}">{{ $data1->article_title }}</a></em>
                     @else
                    <em>上一篇：
					<a href="javascript:;">已经给不了你太多了</a></em>
                     @endif
                     @if($data2)
                    <em>下一篇：
                      <a href="/zixun/{{ $data2->id }}">{{ $data2->article_title }}</a></em>
                     @else
                    <em>下一篇：
					<a href="javascript:;">已经给不了你太多了</a></em>
                     @endif
                   
                </div>
                </div>
              </div>
              <!--[diy=diycontentrelatetop]-->
              <div id="diycontentrelatetop" class="area"></div>
              <!--[/diy]--></div>
            <!--[diy=diycontentrelate]-->
            <div id="diycontentrelate" class="area"></div>
            <!--[/diy]-->
            <div id="comment" class="bm">
              <div class="bm_h cl">
                <a class="y">已经有0人参与评论</a>
                <h3>发表评论</h3></div>
              <div id="comment_ul" class="bm_c">
                <form id="cform" name="cform" action="portal.php?mod=portalcp&ac=comment" method="post" autocomplete="off">
                  <div class="tedt">
                    <div class="area">
                      <textarea name="message" rows="7" class="pt" id="message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></textarea>
                    </div>
                  </div>
                  <div class="mtm">
                    <span id="seccode_cSzhQbYN"></span>
                    <script type="text/javascript" reload="1">updateseccode('cSzhQbYN', '<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>', 'portal::view');</script></div>
                  <input type="hidden" name="portal_referer" value="portal.php?mod=view&aid=12#comment">
                  <input type="hidden" name="referer" value="portal.php?mod=view&aid=12#comment" />
                  <input type="hidden" name="id" value="0" />
                  <input type="hidden" name="idtype" value="" />
                  <input type="hidden" name="aid" value="12">
                  <input type="hidden" name="formhash" value="316f8b52">
                  <input type="hidden" name="replysubmit" value="true">
                  <input type="hidden" name="commentsubmit" value="true" />
                  <p class="ptn">
                    <button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="pn">
                      <strong>评论</strong></button>
                  </p>
                </form>
              </div>
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
                          <img  src="/home/picture/ad2.jpg" width="100%" /></div>
                      </div>
                    </div>
                    <div id="portal_block_76" class="zxlbyltph block move-span">
                      <div class="blocktitle title">
                        <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">阅读排行</span></div>
                      <div id="portal_block_76_content" class="dxb_bc">
                        <div class="module cl xl xl1" >
                          <ul >
                          
                          	@foreach($data3 as $k => $v)

                            <li class="cc{{ $k+1 }}">
                              <span></span>
                              <a href="/zixun/{{ $v->id }}"  target="_blank" >{{ $v->article_title }}</a></li>
                            @endforeach
                           
                 
                              
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
                                <img  src="/home/picture/91dc790fbbb74a6b1546996a0c8a9c95.jpg" width="274" height="146" alt="发帖测试" /></a>
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
                                <img  src="/home/picture/957e96ffde288fa51079ddbcf5fee966.jpg" width="274" height="146" alt="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" /></a>
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
                                <img  src="/home/picture/8c9e917f78a9b907dbab8ce017a4b532.jpg" width="274" height="146" alt="迷人的大光圈 教你使用焦外的正确时机" /></a>
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
                    <!-- <div id="portal_block_78" class="zxlbyjcdp block move-span">
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
                    </div> -->
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
      <div class="ft_wp">


@endsection
