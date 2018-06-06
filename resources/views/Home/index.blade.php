@extends('Home.layout.master')
@section('sidebar')
      <div id="wp" class="wp xuxian">
        <style id="diy_style" type="text/css"></style>
        <link rel="stylesheet" type="text/css" href="/Home/css/index.css">
        <div class="wpall">
          <!--[diy=diy00]-->
          <div id="diy00" class="area"></div>
          <!--[/diy]--></div>
        <div class="wp">
          <!--[diy=diy1]-->
          <div id="diy1" class="area">
            <div id="frameaFf7N7" class="frame move-span cl frame-1">
              <div id="frameaFf7N7_left" class="column frame-1-c">
                <div id="frameaFf7N7_left_temp" class="move-span temp"></div>
                <div id="portal_block_60" class="syhdp block move-span">
                  <div id="portal_block_60_content" class="dxb_bc">
                    <div class="bignews slidebox">
                      <div class="picbox slideshow"></div>
                      <div class="bignews_btn slidebar" mevent="mouseover"></div>
                    </div>
                    <script type="text/javascript">runslideshow();</script></div>
                </div>
              </div>
            </div>
          </div>
          <!--[/diy]-->
          <!--[diy=diy2]-->
          <div id="diy2" class="area">
            <div id="frameG57R57" class="sybtgg frame move-span cl frame-2-1">
              <div id="frameG57R57_left" class="column frame-2-1-l">
                <div id="frameG57R57_left_temp" class="move-span temp"></div>
                <div id="portal_block_61" class="sybjtj block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">编辑推荐</span></div>
                  <div id="portal_block_61_content" class="dxb_bc">
                    <div class="module cl xl xl1">
                      <ul>
                        <li class="tupian">
                          <a href="forum.php?mod=viewthread&tid=100" target="_blank" title="发帖测试">
                            <img src="/Home/picture/172642my3xtstksrfrk333.png" width="390" height="248" alt="发帖测试" /></a>
                          <div class="sbover">
                            <a href="forum.php?mod=viewthread&tid=100" target="_blank" title="发帖测试"></a>
                          </div>
                        </li>
                        <li>
                          <em>
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖</a></li>
                        <li>
                          <em>
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">迷人的大光圈 教你使用焦外的正确时机</a></li>
                        <li>
                          <em>
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="forum.php?mod=viewthread&tid=46" title="给孩子吃这些有助长高" target="_blank">给孩子吃这些有助长高</a></li>
                        <li>
                          <em>
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="forum.php?mod=viewthread&tid=87" title="家居别墅专业装修设计" target="_blank">家居别墅专业装修设计</a></li>
                        <li>
                          <em>
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="forum.php?mod=viewthread&tid=89" title="欧式别墅设计 欧式别墅室内装修效果图" target="_blank">欧式别墅设计 欧式别墅室内装修效果图</a></li>
                        <li>
                          <em>
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="forum.php?mod=viewthread&tid=88" title="别墅室内装修软装设计需要注意哪些" target="_blank">别墅室内装修软装设计需要注意哪些</a></li>
                        <li>
                          <em>
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="forum.php?mod=viewthread&tid=86" title="如何设计单层别墅与多层别墅" target="_blank">如何设计单层别墅与多层别墅</a></li>
                        <li>
                          <em>
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="forum.php?mod=viewthread&tid=85" title="别墅多种错层装修设计" target="_blank">别墅多种错层装修设计</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div id="frameG57R57_center" class="column frame-2-1-r">
                <div id="frameG57R57_center_temp" class="move-span temp"></div>
                <div id="portal_block_62" class="syltgg block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">论坛公告</span></div>
                  <div id="portal_block_62_content" class="dxb_bc">
                    <div class="module cl">
                      <ul>
                        @foreach($notice as $v)
                        <li class="cc1">
                         
                          <a href="forum.php?mod=announcement&id=9" target="_blank" style="font-size:20px;">{{ $v->notice_title }}</a>
                           <em style="float:right; font-size:10px;">{{ substr($v ->created_at,0,10) }}</em>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--[/diy]-->
          <!--[diy=diy3]-->
          <div id="diy3" class="area">
            <div id="framezfmucD" class="sysange frame move-span cl frame-1-1-1">
              <div id="framezfmucD_left" class="column frame-1-1-1-l">
                <div id="framezfmucD_left_temp" class="move-span temp"></div>
                <div id="portal_block_63" class="syjhzt block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">精华主题</span></div>
                  <div id="portal_block_63_content" class="dxb_bc">
                    <div class="module cl xld">
                      <dl class="cl cc1">
                        <dd class="m">
                          <a href="forum.php?mod=viewthread&tid=100" target="_blank" title="发帖测试">
                            <img src="/Home/picture/aa3a58d29310c5eaee91d2d230828482.jpg" width="100" height="94" alt="发帖测试" /></a>
                        </dd>
                        <dt>
                          <a href="forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试</a></dt>
                        <dd class="sumr">这是一条测试 ...</dd></dl>
                      <dl class="cl cc2">
                        <dd class="m">
                          <a href="forum.php?mod=viewthread&tid=89" target="_blank" title="欧式别墅设计 欧式别墅室内装修效果图">
                            <img src="/Home/picture/21076109b602ad8227eece63c2e34327.jpg" width="100" height="94" alt="欧式别墅设计 欧式别墅室内装修效果图" /></a>
                        </dd>
                        <dt>
                          <a href="forum.php?mod=viewthread&tid=89" title="欧式别墅设计 欧式别墅室内装修效果图" target="_blank">欧式别墅设计 欧式别墅室内装修效果图</a></dt>
                        <dd class="sumr">这是一个清新的欧式别墅设计，颜色和光线都令人觉得心情愉悦 ...</dd></dl>
                      <dl class="cl cc3">
                        <dd class="m">
                          <a href="forum.php?mod=viewthread&tid=88" target="_blank" title="别墅室内装修软装设计需要注意哪些">
                            <img src="/Home/picture/16f89160772fbcc92adc863a5e3f8d1a.jpg" width="100" height="94" alt="别墅室内装修软装设计需要注意哪些" /></a>
                        </dd>
                        <dt>
                          <a href="forum.php?mod=viewthread&tid=88" title="别墅室内装修软装设计需要注意哪些" target="_blank">别墅室内装修软装设计需要注意哪些</a></dt>
                        <dd class="sumr">随着人们生活水平的提高，人们在追求品质生活的同时更是 ...</dd></dl>
                    </div>
                  </div>
                </div>
              </div>
              <div id="framezfmucD_center" class="column frame-1-1-1-c">
                <div id="framezfmucD_center_temp" class="move-span temp"></div>
                <div id="portal_block_64" class="suzxhd block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">最新活动</span></div>
                  <div id="portal_block_64_content" class="dxb_bc">
                    <div class="module cl xld">
                      <dl class="cl cc1">
                        <dd class="m">
                          <p class="bmtext">报名截至</p>
                          <p class="bmzhi">2017-4-30 23:11
                            <p></dd>
                        <dt>
                          <a href="forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖</a></dt>
                        <dd>已报名：
                          <em>0人</em></dd>
                        <dd>活动地点：
                          <em>广州</em></dd>
                      </dl>
                      <dl class="cl cc2">
                        <dd class="m">
                          <p class="bmtext">报名截至</p>
                          <p class="bmzhi">2016-4-30 15:08
                            <p></dd>
                        <dt>
                          <a href="forum.php?mod=viewthread&tid=21" title="东航直飞布里斯班吃喝玩乐八件事[布里斯班]" target="_blank">东航直飞布里斯班吃喝玩乐八件事[布里斯班]</a></dt>
                        <dd>已报名：
                          <em>0人</em></dd>
                        <dd>活动地点：
                          <em>布里斯班</em></dd>
                      </dl>
                      <dl class="cl cc3">
                        <dd class="m">
                          <p class="bmtext">报名截至</p>
                          <p class="bmzhi">2016-4-30 15:06
                            <p></dd>
                        <dt>
                          <a href="forum.php?mod=viewthread&tid=20" title="不负春光！最适合3月旅行目的地，走起！[广州]" target="_blank">不负春光！最适合3月旅行目的地，走起！[广</a></dt>
                        <dd>已报名：
                          <em>0人</em></dd>
                        <dd>活动地点：
                          <em>广州</em></dd>
                      </dl>
                    </div>
                  </div>
                </div>
              </div>
              <div id="framezfmucD_right" class="column frame-1-1-1-r">
                <div id="framezfmucD_right_temp" class="move-span temp"></div>
                <div id="portal_block_65" class="syzxft block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">最新发帖</span></div>
                  <div id="portal_block_65_content" class="dxb_bc">
                    <div class="module cl xld xlda">
                      <dl class="cl">
                        <dd class="m">
                          <a href="home.php?mod=space&uid=12" c="1" target="_blank">
                            <img src="/Home/picture/avatar.php" width="52" height="52" alt="fff" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="home.php?mod=space&uid=12" target="_blank">fff</a>&#160;&#160;&#160;&#160;2018-04-25 17:26</dd></dl>
                      <dl class="cl">
                        <dd class="m">
                          <a href="home.php?mod=space&uid=1" c="1" target="_blank">
                            <img src="/Home/picture/avatar.php" width="52" height="52" alt="admin" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;&#160;&#160;2017-04-27 23:14</dd></dl>
                      <dl class="cl">
                        <dd class="m">
                          <a href="home.php?mod=space&uid=1" c="1" target="_blank">
                            <img src="/Home/picture/avatar.php" width="52" height="52" alt="admin" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">迷人的大光圈 教你使用焦外的正确时机</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;&#160;&#160;2016-04-21 20:28</dd></dl>
                      <dl class="cl">
                        <dd class="m">
                          <a href="home.php?mod=space&uid=1" c="1" target="_blank">
                            <img src="/Home/picture/avatar.php" width="52" height="52" alt="admin" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="forum.php?mod=viewthread&tid=46" title="给孩子吃这些有助长高" target="_blank">给孩子吃这些有助长高</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;&#160;&#160;2016-04-23 11:48</dd></dl>
                      <dl class="cl">
                        <dd class="m">
                          <a href="home.php?mod=space&uid=1" c="1" target="_blank">
                            <img src="/Home/picture/avatar.php" width="52" height="52" alt="admin" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="forum.php?mod=viewthread&tid=87" title="家居别墅专业装修设计" target="_blank">家居别墅专业装修设计</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;&#160;&#160;2016-04-28 14:56</dd></dl>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--[/diy]-->
          <!--[diy=diy4]-->
          <div id="diy4" class="area">
            <div id="frameFMd872" class="sybtgg frame move-span cl frame-2-1">
              <div id="frameFMd872_left" class="column frame-2-1-l">
                <div id="frameFMd872_left_temp" class="move-span temp"></div>
                <div id="portal_block_66" class="syzxwz block move-span">
                  <div class="blocktitle title">
                      <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">最新文章</span></div>
                  <div id="portal_block_66_content" class="dxb_bc">
                      <div class="module cl xld slidebox" slidenum="8" slidestep="8" id="0.0344960488936239" style="display: block;">
                        <!-- 遍历文章 -->
                        @foreach($article as $v)
                          <div class="slideshow">
                              <dl class="cl" style="display: block;">
                                  <dd class="m">
                                      <a href="portal.php?mod=view&amp;aid=12" title="" target="_blank">
                                          <img src="{{ ltrim($v->article_img,'.') }}" width="266" height="180" alt=""></a>
                                  </dd>
                                  <a href="portal.php?mod=view&amp;aid=12" title="" target="_blank"></a>
                                  <dt class="leftjl">
                                      <a href="portal.php?mod=view&amp;aid=12" title="" target="_blank"></a>
                                      <a href="portal.php?mod=view&amp;aid=12" title="" target="_blank">{{$v -> article_title}}</a></dt>
                                  <dd class="xinx leftjl">
                                      <span class="fbtime">
                                          <i>
                                          </i>{{substr($v ->created_at,0,10)}}</span>
                                      <span class="zuoz">
                                          <i>
                                          </i>{{$v->article_author}}</span>
                                      <span class="lookn">
                                          <i>
                                          </i>62</span>
                                      <span class="pinln">
                                          <i>
                                          </i>3</span>
                                  </dd>
                                  <dd class="sumr leftjl">{{ $v->article_dec }}</dd>
                                  <dd class="rdmore leftjl">
                                      <a href="portal.php?mod=view&amp;aid=12" target="_blank">查看详情</a></dd>
                              </dl>
                               </div>
                        @endforeach
                         
                          <div class="btn">
                              <div class="slidebarup">
                                  <a href="javascript:void(0);" mevent="click">上一页</a></div>
                              <div class="slidebardown">
                                  <a href="javascript:void(0);" mevent="click">下一页</a></div>
                          </div>
                      </div>
                      <script type="text/javascript">runslideshow();</script></div>
              </div>
              </div>
              <div id="frameFMd872_center" class="column frame-2-1-r">
                <div id="frameFMd872_center_temp" class="move-span temp"></div>
                <div id="portal_block_67" class="syydph block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">阅读排行</span></div>
                  <div id="portal_block_67_content" class="dxb_bc">
                    <div class="module cl xl xl1">
                      <ul>
                        <li class="cc1">
                          <span>No-1</span>
                          <a href="forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试...</a></li>
                        <li class="cc2">
                          <span>No-2</span>
                          <a href="forum.php?mod=viewthread&tid=99" title="[图片类]投票：您觉得里面哪位妹纸好看？" target="_blank">[图片类]投票：您觉得里面哪位妹纸好看？...</a></li>
                        <li class="cc3">
                          <span>No-3</span>
                          <a href="forum.php?mod=viewthread&tid=98" title="您觉得加田小店的模板好看吗" target="_blank">您觉得加田小店的模板好看吗...</a></li>
                        <li class="cc4">
                          <span>No-4</span>
                          <a href="forum.php?mod=viewthread&tid=97" title="悬赏100万求个美女老婆" target="_blank">悬赏100万求个美女老婆...</a></li>
                        <li class="cc5">
                          <span>No-5</span>
                          <a href="forum.php?mod=viewthread&tid=96" title="【加田小店】您觉得X3.3和X3.2哪个好用" target="_blank">【加田小店】您觉得X3.3和X3.2哪个好用...</a></li>
                        <li class="cc6">
                          <span>No-6</span>
                          <a href="forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖[广州市]...</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="portal_block_68" class="sytjyd block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">推荐阅读</span></div>
                  <div id="portal_block_68_content" class="dxb_bc">
                    <div class="module cl xl">
                      <ul>
                        <li class="tupian">
                          <div class="tutu">
                            <a href="forum.php?mod=viewthread&tid=101" target="_blank" title="123123123">
                              <img src="/Home/picture/nophoto.gif" width="290" height="194" alt="123123123" /></a>
                            <div class="sbover">
                              <a href="forum.php?mod=viewthread&tid=101" target="_blank" title="123123123"></a>
                            </div>
                          </div>
                          <p>作者：
                            <a href="home.php?mod=space&uid=14" target="_blank">123456</a>&#160;&#160;发表：2018-05-25</p>
                          <a class="biaot" href="forum.php?mod=viewthread&tid=101" title="123123123" target="_blank">123123123...</a></li>
                        <li>
                          <p>作者：
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;发表：2016-04-21</p>
                          <a class="biaot" href="forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">迷人的大光圈 教你使用焦外的正确时机...</a></li>
                        <li>
                          <p>作者：
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;发表：2016-04-28</p>
                          <a class="biaot" href="forum.php?mod=viewthread&tid=87" title="家居别墅专业装修设计" target="_blank">家居别墅专业装修设计...</a></li>
                        <li>
                          <p>作者：
                            <a href="home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;发表：2016-04-28</p>
                          <a class="biaot" href="forum.php?mod=viewthread&tid=89" title="欧式别墅设计 欧式别墅室内装修效果图" target="_blank">欧式别墅设计 欧式别墅室内装修效果图...</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="portal_block_69" class="syzttj block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">专题推荐</span></div>
                  <div id="portal_block_69_content" class="dxb_bc">
                    <div class="module cl ml">
                      <ul>
                        <li style="width: 292px;">
                          <p>狗狗吹泡泡，像个小孩一样去玩</p>
                          <a class="tupian" href="forum.php?mod=viewthread&tid=65" target="_blank" title="狗狗吹泡泡，像个小孩一样去玩耍">
                            <img src="/Home/picture/be77bef5a40880366ec994b603e7400d.jpg" width="292" height="180" alt="狗狗吹泡泡，像个小孩一样去玩耍" /></a>
                        </li>
                        <li style="width: 292px;">
                          <p>别用这种眼神盯着我看，给你秀</p>
                          <a class="tupian" href="forum.php?mod=viewthread&tid=64" target="_blank" title="别用这种眼神盯着我看，给你秀秀就是了！">
                            <img src="/Home/picture/564b0ec04e980650d9acb8284626a0aa.jpg" width="292" height="180" alt="别用这种眼神盯着我看，给你秀秀就是了！" /></a>
                        </li>
                        <li style="width: 292px;">
                          <p>如何阻止喜马拉雅猫在家里搞破</p>
                          <a class="tupian" href="forum.php?mod=viewthread&tid=63" target="_blank" title="如何阻止喜马拉雅猫在家里搞破坏?">
                            <img src="/Home/picture/f7162616e6147225e51fd9715df5c392.jpg" width="292" height="180" alt="如何阻止喜马拉雅猫在家里搞破坏?" /></a>
                        </li>
                        <li style="width: 292px;">
                          <p>怎样正确的调教美国短毛猫?</p>
                          <a class="tupian" href="forum.php?mod=viewthread&tid=62" target="_blank" title="怎样正确的调教美国短毛猫?">
                            <img src="/Home/picture/22d5806bfaf311cfe5ea4c1332293a55.jpg" width="292" height="180" alt="怎样正确的调教美国短毛猫?" /></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--[/diy]-->
          <!--[diy=diy5]-->
          <div id="diy5" class="area">
            <div id="framee12D87" class="frame move-span cl frame-1">
              <div id="framee12D87_left" class="column frame-1-c">
                <div id="framee12D87_left_temp" class="move-span temp"></div>
                <div id="portal_block_70" class="syyqlj block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">友情链接</span>
                    <span class="subtitle" style="float:right;margin-right:px;font-size:">
                      <a href="/link" target="_blank" style="color:#8D8D8D !important;">申请链接 &gt;</a></span>
                  </div>
                  <div id="portal_block_70_content" class="dxb_bc">
                    <div class="x cl">
                      <ul class="cl">
                        @foreach($link as $v)
                        <li class="line cc1">|</li>
                        <li>
                          <a href="{{$v -> Link_url}}" target="_blank">{{$v -> Link_text}}</a></li>
                          <li class="line cc3">|</li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--[/diy]-->
          <!--[diy=diy6]-->
          <div id="diy6" class="area"></div>
          <!--[/diy]-->
          <!--[diy=diy7]-->
          <div id="diy7" class="area"></div>
          <!--[/diy]-->
          <!--[diy=diy8]-->
          <div id="diy8" class="area"></div>
          <!--[/diy]-->
          <!--[diy=diy9]-->
          <div id="diy9" class="area"></div>
          <!--[/diy]-->
          <!--[diy=diy10]-->
          <div id="diy10" class="area"></div>
          <!--[/diy]-->
          <!--[diy=diy11]-->
          <div id="diy11" class="area"></div>
          <!--[/diy]-->
          <!--[diy=diy12]-->
          <div id="diy12" class="area"></div>
          <!--[/diy]-->
          <!--[diy=diy13]-->
          <div id="diy13" class="area"></div>
          <!--[/diy]-->
          <!--[diy=diy14]-->
          <div id="diy14" class="area"></div>
          <!--[/diy]--></div>
        <div class="wpall">
          <!--[diy=diy15]-->
          <div id="diy15" class="area"></div>
          <!--[/diy]--></div>
      </div>
      
@endsection