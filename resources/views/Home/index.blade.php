@extends('Home.layout.master')
@section('sidebar')
<div id="wp" class="wp xuxian">
        <style id="diy_style" type="text/css"></style>
        <link rel="stylesheet" type="text/css" href="Home/css/index.css">
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
                          <a href="Home/forum.php?mod=viewthread&tid=100" target="_blank" title="发帖测试">
                            <img src="Home/picture/172642my3xtstksrfrk333.png" width="390" height="248" alt="发帖测试" /></a>
                          <div class="sbover">
                            <a href="Home/forum.php?mod=viewthread&tid=100" target="_blank" title="发帖测试"></a>
                          </div>
                        </li>
                        <li>
                          <em>
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="Home/forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖</a></li>
                        <li>
                          <em>
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="Home/forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">迷人的大光圈 教你使用焦外的正确时机</a></li>
                        <li>
                          <em>
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="Home/forum.php?mod=viewthread&tid=46" title="给孩子吃这些有助长高" target="_blank">给孩子吃这些有助长高</a></li>
                        <li>
                          <em>
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="Home/forum.php?mod=viewthread&tid=87" title="家居别墅专业装修设计" target="_blank">家居别墅专业装修设计</a></li>
                        <li>
                          <em>
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="Home/forum.php?mod=viewthread&tid=89" title="欧式别墅设计 欧式别墅室内装修效果图" target="_blank">欧式别墅设计 欧式别墅室内装修效果图</a></li>
                        <li>
                          <em>
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="Home/forum.php?mod=viewthread&tid=88" title="别墅室内装修软装设计需要注意哪些" target="_blank">别墅室内装修软装设计需要注意哪些</a></li>
                        <li>
                          <em>
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="Home/forum.php?mod=viewthread&tid=86" title="如何设计单层别墅与多层别墅" target="_blank">如何设计单层别墅与多层别墅</a></li>
                        <li>
                          <em>
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a></em>
                          <a href="Home/forum.php?mod=viewthread&tid=85" title="别墅多种错层装修设计" target="_blank">别墅多种错层装修设计</a></li>
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
                        @foreach($notices as $v)
                        <li class="cc1">
                         
                          <a href="Home/forum.php?mod=announcement&id=9">{{ $v -> notice_title }}</a>
                           <em  style="font-size:7px;float:right;">{{ substr($v -> created_at,0,10)}}</em>
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
                          <a href="Home/forum.php?mod=viewthread&tid=100" target="_blank" title="发帖测试">
                            <img src="Home/picture/aa3a58d29310c5eaee91d2d230828482.jpg" width="100" height="94" alt="发帖测试" /></a>
                        </dd>
                        <dt>
                          <a href="Home/forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试</a></dt>
                        <dd class="sumr">这是一条测试 ...</dd></dl>
                      <dl class="cl cc2">
                        <dd class="m">
                          <a href="Home/forum.php?mod=viewthread&tid=89" target="_blank" title="欧式别墅设计 欧式别墅室内装修效果图">
                            <img src="Home/picture/21076109b602ad8227eece63c2e34327.jpg" width="100" height="94" alt="欧式别墅设计 欧式别墅室内装修效果图" /></a>
                        </dd>
                        <dt>
                          <a href="Home/forum.php?mod=viewthread&tid=89" title="欧式别墅设计 欧式别墅室内装修效果图" target="_blank">欧式别墅设计 欧式别墅室内装修效果图</a></dt>
                        <dd class="sumr">这是一个清新的欧式别墅设计，颜色和光线都令人觉得心情愉悦 ...</dd></dl>
                      <dl class="cl cc3">
                        <dd class="m">
                          <a href="Home/forum.php?mod=viewthread&tid=88" target="_blank" title="别墅室内装修软装设计需要注意哪些">
                            <img src="Home/picture/16f89160772fbcc92adc863a5e3f8d1a.jpg" width="100" height="94" alt="别墅室内装修软装设计需要注意哪些" /></a>
                        </dd>
                        <dt>
                          <a href="Home/forum.php?mod=viewthread&tid=88" title="别墅室内装修软装设计需要注意哪些" target="_blank">别墅室内装修软装设计需要注意哪些</a></dt>
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
                          <a href="Home/forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖</a></dt>
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
                          <a href="Home/forum.php?mod=viewthread&tid=21" title="东航直飞布里斯班吃喝玩乐八件事[布里斯班]" target="_blank">东航直飞布里斯班吃喝玩乐八件事[布里斯班]</a></dt>
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
                          <a href="Home/forum.php?mod=viewthread&tid=20" title="不负春光！最适合3月旅行目的地，走起！[广州]" target="_blank">不负春光！最适合3月旅行目的地，走起！[广</a></dt>
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
                          <a href="Home/home.php?mod=space&uid=12" c="1" target="_blank">
                            <img src="Home/picture/avatar.php" width="52" height="52" alt="fff" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="Home/forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="Home/home.php?mod=space&uid=12" target="_blank">fff</a>&#160;&#160;&#160;&#160;2018-04-25 17:26</dd></dl>
                      <dl class="cl">
                        <dd class="m">
                          <a href="Home/home.php?mod=space&uid=1" c="1" target="_blank">
                            <img src="Home/picture/avatar.php" width="52" height="52" alt="admin" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="Home/forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;&#160;&#160;2017-04-27 23:14</dd></dl>
                      <dl class="cl">
                        <dd class="m">
                          <a href="Home/home.php?mod=space&uid=1" c="1" target="_blank">
                            <img src="Home/picture/avatar.php" width="52" height="52" alt="admin" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="Home/forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">迷人的大光圈 教你使用焦外的正确时机</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;&#160;&#160;2016-04-21 20:28</dd></dl>
                      <dl class="cl">
                        <dd class="m">
                          <a href="Home/home.php?mod=space&uid=1" c="1" target="_blank">
                            <img src="Home/picture/avatar.php" width="52" height="52" alt="admin" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="Home/forum.php?mod=viewthread&tid=46" title="给孩子吃这些有助长高" target="_blank">给孩子吃这些有助长高</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;&#160;&#160;2016-04-23 11:48</dd></dl>
                      <dl class="cl">
                        <dd class="m">
                          <a href="Home/home.php?mod=space&uid=1" c="1" target="_blank">
                            <img src="Home/picture/avatar.php" width="52" height="52" alt="admin" /></a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="Home/forum.php?mod=viewthread&tid=87" title="家居别墅专业装修设计" target="_blank">家居别墅专业装修设计</a></dt>
                        <dd style="margin-bottom: 0;">
                          <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;&#160;&#160;2016-04-28 14:56</dd></dl>
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
                    <div class="module cl xld slidebox" slidenum="8" slidestep="8">
                      <div class="slideshow">
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=12" title="昆凌称结婚签字像过家家 羞曝如何抓住周董心" target="_blank">
                              <img src="Home/picture/a7a2ce7d3f9d4f86cb7573657b818259.jpg" width="266" height="180" alt="昆凌称结婚签字像过家家 羞曝如何抓住周董心" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=12" title="昆凌称结婚签字像过家家 羞曝如何抓住周董心" target="_blank">昆凌称结婚签字像过家家 羞曝如何抓住周董</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>34</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">据台湾媒体报道，周杰伦4月在脸书粉丝团宣布昆凌“带球跑”，13日报出爱妻10日已平安产下宝贝女儿小周周。从1月在英国古堡的世纪婚礼之后，所有人都把她视为公主、幸运女神，彷佛过着不同于一般人的胜利人生。不过，...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=12" title="昆凌称结婚签字像过家家 羞曝如何抓住周董心" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=11" title="孙菲菲晒素颜自拍照 自称胖12斤丰满上围抢镜" target="_blank">
                              <img src="Home/picture/71d5eb50b05b0e9989cf8aa8d24d4112.jpg" width="266" height="180" alt="孙菲菲晒素颜自拍照 自称胖12斤丰满上围抢镜" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=11" title="孙菲菲晒素颜自拍照 自称胖12斤丰满上围抢镜" target="_blank">孙菲菲晒素颜自拍照 自称胖12斤丰满上围抢</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>4</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">腾讯娱乐讯，女演员孙菲菲在微博晒出素颜自拍照，并表示自己胖了12斤。孙菲菲写道：“应各位要求晒个图，纯素颜，这是菲当妈妈以后第一次晒图，还胖12斤。小猪正在努力中不好看别怪我啊。”照片中，孙菲菲扎着丸子头...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=11" title="孙菲菲晒素颜自拍照 自称胖12斤丰满上围抢镜" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=10" title="婚姻感言只因是女子" target="_blank">
                              <img src="Home/picture/d52cdeb621bc4c448570ce6ceea9158b.jpg" width="266" height="180" alt="婚姻感言只因是女子" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=10" title="婚姻感言只因是女子" target="_blank">婚姻感言只因是女子</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>5</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">在结婚之前，一直都有一种纠结的情绪，对于生孩子这件事情简直让我害怕，我讲不清楚这是一种什么样的怪异心理，但是一想到有一个鲜活的生命会从我的下体里出来，就觉得有些恐怖。我甚至跟我的先生如是讲：“你如果想...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=10" title="婚姻感言只因是女子" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=9" title="我的日记-我不想长大" target="_blank">
                              <img src="Home/picture/17da7ad0b06a176d4ed40b3d1798d8f5.jpg" width="266" height="180" alt="我的日记-我不想长大" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=9" title="我的日记-我不想长大" target="_blank">我的日记-我不想长大</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>2</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">　距离最近的一次记录麦豆成长的日记，已经快4个月了，上次还是2009年11月24日。客观原因是原来写博的网站博客功能关闭，主观原因就是自己有些忙，也有些懒。今天尾号限行，所以，可以坐下来，好好写篇博客了。这算 ...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=9" title="我的日记-我不想长大" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=8" title="在三亚，我陪老婆一起来晒晒幸福！" target="_blank">
                              <img src="Home/picture/de90c5ca6e02afdefb95aa0a48e23481.jpg" width="266" height="180" alt="在三亚，我陪老婆一起来晒晒幸福！" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=8" title="在三亚，我陪老婆一起来晒晒幸福！" target="_blank">在三亚，我陪老婆一起来晒晒幸福！</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>13</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">“老婆，老婆······老婆！”迷糊地边睁开眼睛边呼唤我的亲爱的，“老婆，老婆！”没人，跑哪里去了呢？看看表：8：24。心中充满了疑问又有点莫名空虚，很不是滋味！但是转眼又在暗骂自己：大老爷儿们怎么生出 ...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=8" title="在三亚，我陪老婆一起来晒晒幸福！" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=7" title="胖子也有春天 如果胖请认真胖" target="_blank">
                              <img src="Home/picture/73c7044f9bfb2e2015d3bf54d4d43a51.jpg" width="266" height="180" alt="胖子也有春天 如果胖请认真胖" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=7" title="胖子也有春天 如果胖请认真胖" target="_blank">胖子也有春天 如果胖请认真胖</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>5</span>
                            <span class="pinln">
                              <i>
                              </i>1</span>
                          </dd>
                          <dd class="sumr leftjl">夏天来了，不少女生又开始念着“这月不减肥 下月徒伤悲”的口号，恨不得今天刚去健身房，明天就能“瘦成闪电”。中国人传统观念中，“瘦子披块布都好看”的观念，让人们习惯性的把一切自己“不美”的原因都归结于“ ...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=7" title="胖子也有春天 如果胖请认真胖" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=6" title="辣妈马伊俐俏皮拍时尚大片凸显匀称好身材" target="_blank">
                              <img src="Home/picture/267ace61bacd0f337edb74f63ae66142.jpg" width="266" height="180" alt="辣妈马伊俐俏皮拍时尚大片凸显匀称好身材" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=6" title="辣妈马伊俐俏皮拍时尚大片凸显匀称好身材" target="_blank">辣妈马伊俐俏皮拍时尚大片凸显匀称好身材</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>6</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">近日，辣妈马伊琍拍摄了一组具有夏日气息的活力浪漫大片，在这组写真中马伊琍尝试了多款造型，以一组凹腰线性感连体泳装和一组立体无袖装湿身“出水芙蓉”两组造型最为让人惊艳。从这次的时尚大片中我们可以看出，虽...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=6" title="辣妈马伊俐俏皮拍时尚大片凸显匀称好身材" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=5" title="曾经深深认为男人确实不会有日久生情" target="_blank">
                              <img src="Home/picture/3604fce8c130b85cf867ab33f941e516.jpg" width="266" height="180" alt="曾经深深认为男人确实不会有日久生情" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=5" title="曾经深深认为男人确实不会有日久生情" target="_blank">曾经深深认为男人确实不会有日久生情</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>4</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">男人的心中有一条线，分着喜欢跟不喜欢，爱或不爱 ，模糊地带很薄，暧昧时区很少，那不是一条河、一座山、一片峡谷，充其量就是一条线，而且细得像是锐利的刀锋，感情放在上面应声断落，友情的归友情，爱情的归爱情 ...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=5" title="曾经深深认为男人确实不会有日久生情" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=4" title="打造赫本式夏日优雅 快来试试阔摆裙" target="_blank">
                              <img src="Home/picture/cf41ecaf3a0e0b76f139cc58b56bcaf0.jpg" width="266" height="180" alt="打造赫本式夏日优雅 快来试试阔摆裙" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=4" title="打造赫本式夏日优雅 快来试试阔摆裙" target="_blank">打造赫本式夏日优雅 快来试试阔摆裙</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>2</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">很少有什么单品能像阔摆裙一样与生俱来一种高雅气质。它能够轻松的打造出X型，是无论高矮胖瘦各个年龄均可选择的万能星。更是微胖，尤其大腿粗壮姑娘们的福音。夏天，阔摆裙绝对是打造优雅高贵look的不二选择。首先 ...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=4" title="打造赫本式夏日优雅 快来试试阔摆裙" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=3" title="张天爱的装扮太easy 我有点不好意思美得这么不费力" target="_blank">
                              <img src="Home/picture/eca5ac44f30da61c42c375af3d9387b3.jpg" width="266" height="180" alt="张天爱的装扮太easy 我有点不好意思美得这么不费力" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=3" title="张天爱的装扮太easy 我有点不好意思美得这么不费力" target="_blank">张天爱的装扮太easy 我有点不好意思美得这</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>2</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">　　还陷在对张芃芃的回味中无法自拔？wuli爱总又开始用东方不败造型撩你了好伐？！现实生活中，娇滴滴的柔弱形象往往得不到剧本同款的玛丽苏剧情，而伪装的弱不禁风通常又骗不过女同胞的火眼金睛，最后只有遭嫌弃的...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=3" title="张天爱的装扮太easy 我有点不好意思美得这么不费力" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=2" title="毛新宇：长沙给我留下许多深刻的印象" target="_blank">
                              <img src="Home/picture/e2382dc7024c221d2198f11fb69d8a61.jpg" width="266" height="180" alt="毛新宇：长沙给我留下许多深刻的印象" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=2" title="毛新宇：长沙给我留下许多深刻的印象" target="_blank">毛新宇：长沙给我留下许多深刻的印象</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>5</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">星辰在线4月15日讯 采访毛新宇时，他刚从黑龙江回到北京。2015年7月7日，毛新宇来到黑龙江大学，为该校师生做了题为《毛泽东哲学思想》的专题讲座。讲座中，毛新宇阐述了毛泽东把马克思列宁主义普遍原理同中国革命和...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=2" title="毛新宇：长沙给我留下许多深刻的印象" target="_blank">read more</a></dd>
                        </dl>
                        <dl class="cl">
                          <dd class="m">
                            <a href="Home/portal.php?mod=view&aid=1" title="朝鲜试图发射导弹未能成功" target="_blank">
                              <img src="Home/picture/c4f1dc3018ae7762edf4937ddd17bfd4.jpg" width="266" height="180" alt="朝鲜试图发射导弹未能成功" /></dd>
                          <dt class="leftjl">
                            <a href="Home/portal.php?mod=view&aid=1" title="朝鲜试图发射导弹未能成功" target="_blank">朝鲜试图发射导弹未能成功</a></dt>
                          <dd class="xinx leftjl">
                            <span class="fbtime">
                              <i>
                              </i>2016-04-15</span>
                            <span class="zuoz">
                              <i>
                              </i>admin</span>
                            <span class="lookn">
                              <i>
                              </i>4</span>
                            <span class="pinln">
                              <i>
                              </i>0</span>
                          </dd>
                          <dd class="sumr leftjl">中新网4月15日电 据韩联社报道，朝鲜15日在半岛东海岸地区发射舞水端中程弹道导弹，韩国军方推测称，导弹发射失败。据报道，韩国联合参谋本部当天表示:“朝鲜今天凌晨在东海岸地区发射导弹,推测发射失败。”。4月15 ...</dd>
                          <dd class="rdmore leftjl">
                            <a href="Home/portal.php?mod=view&aid=1" title="朝鲜试图发射导弹未能成功" target="_blank">read more</a></dd>
                        </dl>
                      </div>
                      <div class="btn">
                        <div class="slidebarup">
                          <a href="Home/javascript:void(0);" mevent="click">上一页</a></div>
                        <div class="slidebardown">
                          <a href="Home/javascript:void(0);" mevent="click">下一页</a></div>
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
                          <a href="Home/forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">发帖测试...</a></li>
                        <li class="cc2">
                          <span>No-2</span>
                          <a href="Home/forum.php?mod=viewthread&tid=99" title="[图片类]投票：您觉得里面哪位妹纸好看？" target="_blank">[图片类]投票：您觉得里面哪位妹纸好看？...</a></li>
                        <li class="cc3">
                          <span>No-3</span>
                          <a href="Home/forum.php?mod=viewthread&tid=98" title="您觉得加田小店的模板好看吗" target="_blank">您觉得加田小店的模板好看吗...</a></li>
                        <li class="cc4">
                          <span>No-4</span>
                          <a href="Home/forum.php?mod=viewthread&tid=97" title="悬赏100万求个美女老婆" target="_blank">悬赏100万求个美女老婆...</a></li>
                        <li class="cc5">
                          <span>No-5</span>
                          <a href="Home/forum.php?mod=viewthread&tid=96" title="【加田小店】您觉得X3.3和X3.2哪个好用" target="_blank">【加田小店】您觉得X3.3和X3.2哪个好用...</a></li>
                        <li class="cc6">
                          <span>No-6</span>
                          <a href="Home/forum.php?mod=viewthread&tid=95" title="【加田小店】新锐创想轻主题模板活动演示帖[广州市]" target="_blank">【加田小店】新锐创想轻主题模板活动演示帖[广州市]...</a></li>
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
                            <a href="Home/forum.php?mod=viewthread&tid=101" target="_blank" title="123123123">
                              <img src="Home/picture/nophoto.gif" width="290" height="194" alt="123123123" /></a>
                            <div class="sbover">
                              <a href="Home/forum.php?mod=viewthread&tid=101" target="_blank" title="123123123"></a>
                            </div>
                          </div>
                          <p>作者：
                            <a href="Home/home.php?mod=space&uid=14" target="_blank">123456</a>&#160;&#160;发表：2018-05-25</p>
                          <a class="biaot" href="Home/forum.php?mod=viewthread&tid=101" title="123123123" target="_blank">123123123...</a></li>
                        <li>
                          <p>作者：
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;发表：2016-04-21</p>
                          <a class="biaot" href="Home/forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">迷人的大光圈 教你使用焦外的正确时机...</a></li>
                        <li>
                          <p>作者：
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;发表：2016-04-28</p>
                          <a class="biaot" href="Home/forum.php?mod=viewthread&tid=87" title="家居别墅专业装修设计" target="_blank">家居别墅专业装修设计...</a></li>
                        <li>
                          <p>作者：
                            <a href="Home/home.php?mod=space&uid=1" target="_blank">admin</a>&#160;&#160;发表：2016-04-28</p>
                          <a class="biaot" href="Home/forum.php?mod=viewthread&tid=89" title="欧式别墅设计 欧式别墅室内装修效果图" target="_blank">欧式别墅设计 欧式别墅室内装修效果图...</a></li>
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
                          <a class="tupian" href="Home/forum.php?mod=viewthread&tid=65" target="_blank" title="狗狗吹泡泡，像个小孩一样去玩耍">
                            <img src="Home/picture/be77bef5a40880366ec994b603e7400d.jpg" width="292" height="180" alt="狗狗吹泡泡，像个小孩一样去玩耍" /></a>
                        </li>
                        <li style="width: 292px;">
                          <p>别用这种眼神盯着我看，给你秀</p>
                          <a class="tupian" href="Home/forum.php?mod=viewthread&tid=64" target="_blank" title="别用这种眼神盯着我看，给你秀秀就是了！">
                            <img src="Home/picture/564b0ec04e980650d9acb8284626a0aa.jpg" width="292" height="180" alt="别用这种眼神盯着我看，给你秀秀就是了！" /></a>
                        </li>
                        <li style="width: 292px;">
                          <p>如何阻止喜马拉雅猫在家里搞破</p>
                          <a class="tupian" href="Home/forum.php?mod=viewthread&tid=63" target="_blank" title="如何阻止喜马拉雅猫在家里搞破坏?">
                            <img src="Home/picture/f7162616e6147225e51fd9715df5c392.jpg" width="292" height="180" alt="如何阻止喜马拉雅猫在家里搞破坏?" /></a>
                        </li>
                        <li style="width: 292px;">
                          <p>怎样正确的调教美国短毛猫?</p>
                          <a class="tupian" href="Home/forum.php?mod=viewthread&tid=62" target="_blank" title="怎样正确的调教美国短毛猫?">
                            <img src="Home/picture/22d5806bfaf311cfe5ea4c1332293a55.jpg" width="292" height="180" alt="怎样正确的调教美国短毛猫?" /></a>
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
                      <a href="Home/#" target="_blank" style="color:#8D8D8D !important;">申请链接 &gt;</a></span>
                  </div>
                  <div id="portal_block_70_content" class="dxb_bc">
                    <div class="x cl">
                      <ul class="cl">
                        <li class="line cc1">|</li>
                        <li>
                          <a href="Home/http://www.discuz.net" target="_blank">官方论坛</a></li>
                        <li class="line cc2">|</li>
                        <li>
                          <a href="Home/http://www.comsenz.com" target="_blank">Comsenz</a></li>
                        <li class="line cc3">|</li>
                        <li>
                          <a href="Home/http://www.manyou.com/" target="_blank">漫游平台</a></li>
                        <li class="line cc4">|</li>
                        <li>
                          <a href="Home/http://w.jiale9.com" target="_blank">discuz模板教程</a></li>
                        <li class="line cc5">|</li>
                        <li>
                          <a href="Home/https://shop166047796.taobao.com/" target="_blank">加田小店</a></li>
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
      
@stop