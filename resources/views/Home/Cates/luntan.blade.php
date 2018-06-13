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

                                    <div id="anc" >
                                        <ul id="ancl" >
                                            @foreach($notice as $v)
                                            <li id="li">
                                                <span>
                                                    <a href="/notice" class="xi2" >
                                                       {{$v->notice_title}}
                                                    </a>
                                                </span>
                                                <em>
                                                       {{$v->created_at}}                                                   
                                                </em>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <script type="text/javascript">
                                        setInterval(function(){
                                            $('#li').first().slideUp('slow',function(){
                                                // 追加并且显示li标签
                                                $('#ancl').append($(this).show());//display:none
                                            });
                                        },2000);
                                    </script>

                                    

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
                    {{ $data5->count() }}
                </em>
                <span class="pipe">
                    |
                </span>
                昨日:
                <em>
                    {{ $data6->count() }}
                    
                </em>
                <span class="pipe">
                    |
                </span>
                帖子:
                <em>
                    {{ $data7->count() }}
                </em>
                <span class="pipe">
                    |
                </span>
                会员:
                <em>
                    {{ $data8->count() }}
                </em>
                <span class="pipe">
                    |
                </span>
                欢迎新会员:
                <em>
                    <a href="home.php?mod=space&amp;username=%CD%EA%C3%C0%B5%C4%C4%D0%C8%CB"
                    target="_blank" class="xi2">
                        {{ $data9->user_name }}
                    </a>
                </em>
            </p>
            <div class="y">
               
            </div>
        </div>
            <div class="mn" style="width:880px;padding: 0px;">
                <div class="fl bm">
@foreach($data as $value)
    <div class="bm bmw  flg cl"> 
        <div class="bm_h cl bkh1"> 
        
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
               <cite>{{ $val->created_at }} &nbsp;&nbsp;<a href="#">{{ $val->posts[0]->users->user_name }}</a></cite>
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
                                <!--会员排行开始-->
                                    <div id="portal_block_85_content" class="dxb_bc">
                                        <div class="module cl">
                                            <ul>
                                                @foreach($data4 as $k=>$user)
                                                <li class="cc1">
                                                    <div class="xuhao">
                                                        {{ $k+1}}
                                                    </div>
                                                    <div class="hyleft">
                                                        <a href="#" c="1" target="_blank">
                                                            <img src="{{ltrim($user->img,'.')}}" width="65" height="65" alt="admin" />
                                                        </a>
                                                    </div>
                                                    <div class="hyright">
                                                        <p class="hyname">
                                                            <a href="home.php?mod=space&uid=1" title="admin" target="_blank">
                                                                {{$user->user_name}}
                                                            </a>
                                                        </p>
                                                        <p class="jies">
                                                        </p>
                                                        <p class="jifen">
                                                            积分：{{$user->score}}
                                                        </p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                <!--会员排行结束-->
                                </div>
                                <!--推荐阅读开始-->
                                <div id="portal_block_86" class="ltsytjyd block move-span">
                                    <div class="blocktitle title">
                                        <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">
                                            推荐阅读
                                        </span>
                                    </div>
                                    <div id="portal_block_86_content" class="dxb_bc">
                                        <div class="module cl xld">
                                            @foreach($data3 as $vv)
                                            <dl class="cl">
                                                <dd class="m">
                                                    <a href="/zixun/{{$vv->id}}" target="_blank">
                                                        <img src="{{ltrim($vv->article_img,'.')}}" width="90" height="66"
                                                        alt="{{$vv->article_title}}" />
                                                    </a>
                                                </dd>
                                                <dt>
                                                    <a href="/zixun/{{$vv->id}}" title="{{$vv->article_title}}" target="_blank">
                                                        {{$vv->article_title}}
                                                    </a>
                                                </dt>
                                                <dd class="sumr" style="width:166px;height:43px;overflow: hidden;font-style: normal;font-size: 12px;color: #5f5e5e;">
                                                    {{$vv->article_dec}}
                                                </dd>
                                            </dl>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!--推荐阅读结束-->
                            </div>
                        </div>
                    </div>
                    <!--[/diy]-->
                </div>
            </div>
        </div>
     
    </div>
    
</div>
</div>
  
  
  
@endsection