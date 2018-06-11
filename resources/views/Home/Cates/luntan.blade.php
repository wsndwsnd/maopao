@extends('home.layout.master')
@section('sidebar') 
<div id="wq" class="wp xuxian">
  <div class="bottombg">
    <div id="wp" class="wp xuxian">
        <link rel="stylesheet" type="text/css" href="/home/css/index.css" />
        <!--[diy=diy1]-->
        <div id="diy1" class="area">
        </div>
        <!--[/diy]-->
        <style id="diy_style" type="text/css">
        </style>
        <div class="wp">
            <div class="aacd">
                <div id="pt" class="bm cl">
                    <div class="y">
                        <div id="an">
                            <dl class="cl">
                                <dt class="z xw1">
                                </dt>
                                <dd>
                                    <div id="anc">
                                        <ul id="ancl">
                                            <li>
                                                <span>
                                                    <a href="forum.php?mod=announcement&id=13" target="_blank" class="xi2">
                                                        公告201705
                                                    </a>
                                                </span>
                                                <em>
                                                    (2017-12-25)
                                                </em>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="forum.php?mod=announcement&id=12" target="_blank" class="xi2">
                                                        公告201704
                                                    </a>
                                                </span>
                                                <em>
                                                    (2017-12-25)
                                                </em>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="forum.php?mod=announcement&id=11" target="_blank" class="xi2">
                                                        公告201703
                                                    </a>
                                                </span>
                                                <em>
                                                    (2017-12-25)
                                                </em>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="forum.php?mod=announcement&id=10" target="_blank" class="xi2">
                                                        公告201702
                                                    </a>
                                                </span>
                                                <em>
                                                    (2017-12-25)
                                                </em>
                                            </li>
                                            <li>
                                                <span>
                                                    <a href="forum.php?mod=announcement&id=9" target="_blank" class="xi2">
                                                        公告201701
                                                    </a>
                                                </span>
                                                <em>
                                                    (2017-12-25)
                                                </em>
                                            </li>
                                        </ul>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <script type="text/javascript">
                            announcement();
                        </script>
                    </div>
                    <div class="z">
                        <a href="/" class="nvhm" title="首页">
                            Discuz! Board
                        </a>
                        <a href="/">
                            &nbsp;&nbsp;首页
                        </a>
                        <em>
                            &rsaquo;
                        </em>
                        <a href="#">
                            论坛
                        </a>
                    </div>
                    <div class="z">
                    </div>
                </div>
                <!--[diy=diyt]-->
                <div id="diyt" class="area">
                    <div id="frameKJJT05" class="ltsyto frame move-span cl frame-2-1">
                        <div id="frameKJJT05_left" class="column frame-2-1-l" >
                            
                            <div id="portal_block_83" style="height: 300px;" class="ltsyhdp block move-span" >
                                <div class="layui-carousel" id="test1" >
                                  <div carousel-item style="height: 300px;">
                                    @foreach($data2 as $v)
                                    <div><img src="{{ $v->slide_url }}" width="858" height="300"></div>
                                    @endforeach
                                  </div>
                                </div>
                                    <script>
                                      layui.use('carousel', function(){
                                        var carousel = layui.carousel;
                                        //建造实例
                                        carousel.render({
                                          elem: '#test1'
                                          ,width: '100%' //设置容器宽度
                                          ,arrow: 'always' //始终显示箭头
                                          // ,anim: 'fade' //切换动画方式
                                        });
                                      });
                                      </script>


                            </div>
                        </div>
                        <div id="frameKJJT05_center" class="column frame-2-1-r">
                            <div id="frameKJJT05_center_temp" class="move-span temp">
                            </div>
                            <div id="portal_block_84" class="ltsyad block move-span">
                                <div id="portal_block_84_content" class="dxb_bc">
                                    <div class="portal_block_summary">
                                        <img src="picture/ad1.jpg" width="100%" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--[/diy]-->
            </div>
        </div>
        <!--[diy=diy_chart]-->
        <div id="diy_chart" class="area">
        </div>
        <!--[/diy]-->
        
        <div id="ct" class="wp cl ct2">
          <div id="chart" class="bm bw0 cl">
            <p class="chart z">
                今日:
                <em>
                    0
                </em>
                <span class="pipe">
                    |
                </span>
                昨日:
                <em>
                    1
                </em>
                <span class="pipe">
                    |
                </span>
                帖子:
                <em>
                    113
                </em>
                <span class="pipe">
                    |
                </span>
                会员:
                <em>
                    15
                </em>
                <span class="pipe">
                    |
                </span>
                欢迎新会员:
                <em>
                    <a href="home.php?mod=space&amp;username=%CD%EA%C3%C0%B5%C4%C4%D0%C8%CB"
                    target="_blank" class="xi2">
                        完美的男人
                    </a>
                </em>
            </p>
            <div class="y">
                <a href="forum.php?mod=guide&amp;view=new" title="最新回复" class="xi2">
                    最新回复
                </a>
            </div>
        </div>
            <div class="mn" style="width:880px;padding: 0px;">
                <div class="fl bm">
@foreach($data as $value)
    <div class="bm bmw  flg cl"> 
        <div class="bm_h cl bkh1"> 
         <span class="o"> <img id="category_1_img" src="/home/picture/collapsed_no.gif" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_1');" /> </span> 
         <h2><a href="forum.php?gid=1" style="">{{$value->title}}</a></h2> 
        </div> 
        <div id="category_1" class="bm_c" style=""> 
         
<!--分类开始-->   
@foreach($value->sub as $val)
          
            <div class="fl_g" style="width: 49%;height: 104px;float: left;margin:13px 0px 13px 0px;"> 
             <div class="fl_icn_g" style="width: 100px;"> 
              <a href="forum.php?mod=forumdisplay&amp;fid=2"><img src="{{$val->picture}}" width="100px" height="100px" align="left" alt="" /></a>
             </div> 
             <dl style="margin-left: 50px;width:250px;"> 
              <dt>
               <a href="/home/luntan/{{$val->id}}">{{$val->title}}</a>
              </dt> 
              
              <!--帖子标题开始-->
              
              <dd class="zyzy"> 
               <a href="/home/read/{{ $val->posts[0]->id }}" class="xi2">
                
                {{$val->posts[0]->posts_title}}
                
               </a> 
              </dd> 
             
              <!--帖子标题结束-->
              <dd>
               <cite>{{ $val->created_at }} &nbsp;&nbsp;<a href="#">admin</a></cite>
              </dd> 
             </dl> 
           </div> 
         
          @endforeach
<!--分类结束-->          
         
        </div> 
    </div>
<!--论坛分区结束-->       
@endforeach 
                </div>
                <div class="wp">
                    <!--[diy=diy3]-->
                    <div id="diy3" class="area">
                    </div>
                    <!--[/diy]-->
                </div>
            </div>
            <div id="sd" class="sd" style="float: left;width:300px;margin-left:8px;">
                <div class="drag">
                    <!--[diy=diy2]-->
                    <div id="diy2" class="area">
                        <div id="framev09507" class="frame move-span cl frame-1">
                            <div id="framev09507_left" class="column frame-1-c">
                                <div id="framev09507_left_temp" class="move-span temp">
                                </div>
                                <div id="portal_block_85" class="ltsyhyph block move-span">
                                    <div class="blocktitle title">
                                        <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">
                                            会员排行
                                        </span>
                                    </div>
                                    <div id="portal_block_85_content" class="dxb_bc">
                                        <div class="module cl">
                                            <ul>
                                                <li class="cc1">
                                                    <div class="xuhao">
                                                        1
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=1" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="admin" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=1" title="admin" target="_blank">
                                                                admin
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：517
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="cc2">
                                                    <div class="xuhao">
                                                        2
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=4" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="踢你一脚" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=4" title="踢你一脚" target="_blank">
                                                                踢你一脚
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：83
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="cc3">
                                                    <div class="xuhao">
                                                        3
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=14" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="123456" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=14" title="123456" target="_blank">
                                                                123456
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：24
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="cc4">
                                                    <div class="xuhao">
                                                        4
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=2" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="天意" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=2" title="天意" target="_blank">
                                                                天意
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：12
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="cc5">
                                                    <div class="xuhao">
                                                        5
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=12" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="fff" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=12" title="fff" target="_blank">
                                                                fff
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：7
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="cc6">
                                                    <div class="xuhao">
                                                        6
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=11" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="test" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=11" title="test" target="_blank">
                                                                test
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：6
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="cc7">
                                                    <div class="xuhao">
                                                        7
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=3" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="一心一亿" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=3" title="一心一亿" target="_blank">
                                                                一心一亿
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：4
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="cc8">
                                                    <div class="xuhao">
                                                        8
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=13" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="gxje" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=13" title="gxje" target="_blank">
                                                                gxje
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：2
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="cc9">
                                                    <div class="xuhao">
                                                        9
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="home.php?mod=space&uid=15" c="1" target="_blank">
                                                            <img src="picture/avatar.php" width="65" height="65" alt="完美的男人" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=15" title="完美的男人" target="_blank">
                                                                完美的男人
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：2
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="portal_block_86" class="ltsytjyd block move-span">
                                    <div class="blocktitle title">
                                        <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">
                                            推荐阅读
                                        </span>
                                    </div>
                                    <div id="portal_block_86_content" class="dxb_bc">
                                        <div class="module cl xld">
                                            <dl class="cl">
                                                <dd class="m">
                                                    <a href="forum.php?mod=viewthread&tid=100" target="_blank">
                                                        <img src="picture/f0591ec2d660409098738fd9d4ae1ee9.jpg" width="90" height="66"
                                                        alt="发帖测试" />
                                                    </a>
                                                </dd>
                                                <dt>
                                                    <a href="forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank">
                                                        发帖测试
                                                    </a>
                                                </dt>
                                                <dd class="sumr">
                                                    这是一条测试{:3_42
                                                </dd>
                                            </dl>
                                            <dl class="cl">
                                                <dd class="m">
                                                    <a href="forum.php?mod=viewthread&tid=32" target="_blank">
                                                        <img src="picture/26b549be0a851e00c23ae725ad82991f.jpg" width="90" height="66"
                                                        alt="迷人的大光圈 教你使用焦外的正确时机" />
                                                    </a>
                                                </dd>
                                                <dt>
                                                    <a href="forum.php?mod=viewthread&tid=32" title="迷人的大光圈 教你使用焦外的正确时机" target="_blank">
                                                        迷人的大光圈 教你使用焦外的正确时机
                                                    </a>
                                                </dt>
                                                <dd class="sumr">
                                                    一、焦外的用途 大光圈镜头下的焦外，很多人都被它
                                                </dd>
                                            </dl>
                                            <dl class="cl">
                                                <dd class="m">
                                                    <a href="forum.php?mod=viewthread&tid=46" target="_blank">
                                                        <img src="picture/51ffa43026ed4d6752ad12baa620ffbb.jpg" width="90" height="66"
                                                        alt="给孩子吃这些有助长高" />
                                                    </a>
                                                </dd>
                                                <dt>
                                                    <a href="forum.php?mod=viewthread&tid=46" title="给孩子吃这些有助长高" target="_blank">
                                                        给孩子吃这些有助长高
                                                    </a>
                                                </dt>
                                                <dd class="sumr">
                                                    春天的脚步已经悄然走来。这个季节，人体新陈代谢旺盛
                                                </dd>
                                            </dl>
                                            <dl class="cl">
                                                <dd class="m">
                                                    <a href="forum.php?mod=viewthread&tid=87" target="_blank">
                                                        <img src="picture/8ea9865628056d53a55b1aef9eb15498.jpg" width="90" height="66"
                                                        alt="家居别墅专业装修设计" />
                                                    </a>
                                                </dd>
                                                <dt>
                                                    <a href="forum.php?mod=viewthread&tid=87" title="家居别墅专业装修设计" target="_blank">
                                                        家居别墅专业装修设计
                                                    </a>
                                                </dt>
                                                <dd class="sumr">
                                                    　　别墅、别墅装修设计已经不再是新鲜的话题了。 随
                                                </dd>
                                            </dl>
                                            <dl class="cl">
                                                <dd class="m">
                                                    <a href="forum.php?mod=viewthread&tid=89" target="_blank">
                                                        <img src="picture/4d1a53c1e2e9844d96af9495023d8bfd.jpg" width="90" height="66"
                                                        alt="欧式别墅设计 欧式别墅室内装修效果图" />
                                                    </a>
                                                </dd>
                                                <dt>
                                                    <a href="forum.php?mod=viewthread&tid=89" title="欧式别墅设计 欧式别墅室内装修效果图" target="_blank">
                                                        欧式别墅设计 欧式别墅室内装修效果图
                                                    </a>
                                                </dt>
                                                <dd class="sumr">
                                                    这是一个清新的欧式别墅设计，颜色和光线都令人觉
                                                </dd>
                                            </dl>
                                            <dl class="cl">
                                                <dd class="m">
                                                    <a href="forum.php?mod=viewthread&tid=88" target="_blank">
                                                        <img src="picture/7ae49a2fe1a1a22237e62ae4b64784eb.jpg" width="90" height="66"
                                                        alt="别墅室内装修软装设计需要注意哪些" />
                                                    </a>
                                                </dd>
                                                <dt>
                                                    <a href="forum.php?mod=viewthread&tid=88" title="别墅室内装修软装设计需要注意哪些" target="_blank">
                                                        别墅室内装修软装设计需要注意哪些
                                                    </a>
                                                </dt>
                                                <dd class="sumr">
                                                    随着人们生活水平的提高，人们在追求品质生活
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--[/diy]-->
                </div>
            </div>
        </div>
        <div id="online" class="bm oll">
            <div class="bm_h">
                <span class="o">
                    <a href="forum.php?showoldetails=no#online" title="收起/展开">
                        <img src="picture/collapsed_no.gif" alt="收起/展开" />
                    </a>
                </span>
                <h3>
                    <strong class="biti">
                        <a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">
                            在线会员
                        </a>
                    </strong>
                    <span class="xs1">
                        <strong>
                            1
                        </strong>
                        人在线 -
                        <strong>
                            0
                        </strong>
                        会员(
                        <strong>
                            0
                        </strong>
                        隐身),
                        <strong>
                            1
                        </strong>
                        位游客 - 最高记录是
                        <strong>
                            21
                        </strong>
                        于
                        <strong>
                            2018-5-2
                        </strong>
                        .
                    </span>
                </h3>
            </div>
            <dl id="onlinelist" class="bm_c">
                <dt class="ptm pbm bbda">
                    <img src="picture/online_admin.gif" />
                    管理员 &nbsp; &nbsp; &nbsp;
                    <img src="picture/online_supermod.gif" />
                    超级版主 &nbsp; &nbsp; &nbsp;
                    <img src="picture/online_moderator.gif" />
                    版主 &nbsp; &nbsp; &nbsp;
                    <img src="picture/online_member.gif" />
                    会员 &nbsp; &nbsp; &nbsp;
                </dt>
                <dd class="ptm pbm">
                    <ul class="cl">
                        <li style="width: auto">
                            当前只有游客或隐身会员在线
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
    
</div>
</div>
  
  
  
@endsection