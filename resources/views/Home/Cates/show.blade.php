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
            <div class="mn" style="width:920px;">
              <div class="orde">
                <div class="lslsls">

                  <img src="{{ $advertise->img }}" alt="" width="920px" height="137px">

                  
                </div>
                <div class="drag">
                  <!--[diy=diy4]-->
                  <div id="diy4" class="area"></div>
                  <!--[/diy]--></div>

              </div>

              <div class="cenbor" style="height:500px">
                

                

                <!-- 模板开始 -->
                <div id="threadlist" class="tl bm bmw" style="position: relative;">
                  <div class="layui-tab layui-tab-card">
                    <ul class="layui-tab-title">
                      <li class="layui-this">所有帖子</li>
                      <li>热门贴</li>
                      <li>精品贴</li>
                      <li>置顶</li>
                    </ul>
                    <div class="layui-tab-content">
                      <!-- 所有 -->
                      <div class="layui-tab-item layui-show">
                         <table>
                           <tr style="background: #EBEAEA">
                             <th width="70px"></th>
                             <th width="300px">标题</th>
                             <th width="200px">作者</th>
                             <th >发帖时间</th>
                             <th width="60px">浏览量</th>
                           </tr>
                         </table>   
                         <!-- div 滚动条 -->
                         <div style="height:300px;overflow-y:auto;">
                        <table>
                        @foreach($data3 as $v)
                        <tr >
                          <td width="100px"><img  style="display: block; border-radius: 800px;width: 80px;height: 80px;" src="{{ ltrim($v->users->img,'.') }}"></td>

                          <td width="300px">
                            @if($v->label ==1)
                            <img src="/Home/picture/huo.jpg" alt="热门">
                            @elseif($v->label ==2)
                            <img src="/Home/picture/digest_3.gif" alt="精品">
                            @elseif($v->label ==3)
                            <img src="/Home/picture/zhiding.jpg" alt="置顶" width="25px">
                            @endif
                            <a href="/home/read/{{ $v->id }}">{{$v->posts_title}}</a>
                          </td>
                          <td width="250px">{{ $v->users->user_name }}</td>

                          <td style="font-size:10px;">{{ $v->created_at }}</td>
                          <td width="50px">{{ $v->post_view }}</td>

                        </tr>
                        @endforeach
                        </table>
                        </div>
                      </div>
                      <!-- 所有结束 -->
                      <!-- 热门 -->
                      <div class="layui-tab-item">
                        <table>
                           <tr style="background: #EBEAEA">
                             <th width="70px"></th>
                             <th width="300px">标题</th>
                             <th width="200px">作者</th>
                             <th >发帖时间</th>
                             <th width="60px">浏览量</th>
                           </tr>
                         </table>   
                         <!-- div 滚动条 -->
                         <div style="height:300px;overflow-y:auto;">
                        <table>
                        @foreach($rm as $v)
                        <tr >
                          <td width="100px"><img  style="display: block; border-radius: 800px;width: 80px;height: 80px;" src="{{ ltrim($v->users->img,'.') }}"></td>

                          <td width="300px"> <img src="/Home/picture/huo.jpg" alt="热门"><a href="/home/read/{{ $v->id }}">{{$v->posts_title}}</a></td>
                          <td width="250px">{{ $v->users->user_name }}</td>

                          <td style="font-size:10px;">{{ $v->created_at }}</td>
                          <td width="50px">{{ $v->post_view }}</td>

                        </tr>
                        @endforeach
                        </table>
                        </div>
                      </div>
                      <!-- 热门结束 -->
                      <!-- 精品 -->
                      <div class="layui-tab-item">
                        <table>
                           <tr style="background: #EBEAEA">
                             <th width="70px"></th>
                             <th width="300px">标题</th>
                             <th width="200px">作者</th>
                             <th >发帖时间</th>
                             <th width="60px">浏览量</th>
                           </tr>
                         </table>   
                         <!-- div 滚动条 -->
                         <div style="height:300px;overflow-y:auto;">
                        <table>
                        @foreach($jp as $v)
                        <tr >
                          <td width="100px"><img  style="display: block; border-radius: 800px;width: 80px;height: 80px;" src="{{ ltrim($v->users->img,'.') }}"></td>

                          <td width="300px"><img src="/Home/picture/digest_3.gif" alt="精品"><a href="/home/read/{{ $v->id }}">{{$v->posts_title}}</a></td>
                          <td width="250px">{{ $v->users->user_name }}</td>


                          <td style="font-size:10px;">{{ $v->created_at }}</td>
                          <td width="50px">{{ $v->post_view }}</td>

                        </tr>
                        @endforeach
                        </table>
                        </div>
                      </div>
                      <!-- 精品结束 -->
                      <!-- 置顶 -->
                      <div class="layui-tab-item">
                        <table>
                           <tr style="background: #EBEAEA">
                             <th width="70px"></th>
                             <th width="300px">标题</th>
                             <th width="200px">作者</th>
                             <th >发帖时间</th>
                             <th width="60px">浏览量</th>
                           </tr>
                         </table>   
                         <!-- div 滚动条 -->
                         <div style="height:300px;overflow-y:auto;">
                        <table>
                        @foreach($zd as $v)
                        <tr >
                          <td width="100px"><img  style="display: block; border-radius: 800px;width: 80px;height: 80px;" src="{{ ltrim($v->users->img,'.') }}"></td>

                          <td width="300px">
                            <img src="/Home/picture/zhiding.jpg" alt="置顶" width="25px"><a href="/home/read/{{ $v->id }}">{{$v->posts_title}}</a></td>
                          <td width="250px">{{ $v->users->user_name }}</td>


                          <td style="font-size:10px;">{{ $v->created_at }}</td>
                          <td width="50px">{{ $v->post_view }}</td>

                        </tr>
                        @endforeach
                        </table>
                        </div>
                      </div>
                      <!-- 置顶结束 -->
                    </div>
                  </div>
                </div>
                <!-- 模板结束 -->

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

                    <a href="javascript:history.go(-1);">返&nbsp;回</a></span>

                </div>

                <!--[diy=diyfastposttop]-->
                <div id="diyfastposttop" class="area"></div>
                <!--[/diy]-->
                <!--[diy=diyforumdisplaybottom]-->
                <div id="diyforumdisplaybottom" class="area"></div>
                <!--[/diy]--></div>
            </div>
            <div class="sd" style="width: 260px;">
              <div class="bm">

                <div id="bm_h">
                 
                  <h2 style="font-size:1em;font-weight: bold;">所属分类: {{$data2->title}}</h2>
                </div>
                <div class="bm_c">
                  <ul class="xl xl2 cl" >
                    @foreach($data4 as $val)
                    <li style="padding: 0px;">
                      <a href="/home/luntan/{{$val->id}}">{{$val->title}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>

              <div class="bm">
                <div id="bm_h">
                 
                  <span style="font-size:1em;font-weight: bold;">贴吧热议榜</span>
                  <span style="font-size:1em;float: right;">热度</span>
                </div>
                <div class="bm_c">
                  <ul>
                    <?php $i=1; ?>
                    @foreach($rm2 as $val)
                    <li>
                      <span id="topic_flag_hot"><?php echo $i++; ?></span>
                      <a href="/home/read/{{$val->id}}" title="{{ $val->posts_title }}">{{ $val->posts_title }}</a>
                      <span id="topic_num">{{ $val->post_view *10}} </span>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="bm">
                <div id="bm_h">
                 
                  <span style="font-size:1em;font-weight: bold;">公告板</span>
                </div>
                <div class="bm_c">
                  <ul>
                    <li>
                      <a href="/notice" title="">
                        <img src="https://tb1.bdstatic.com/tb/111%E5%85%AC%E5%91%8A%E6%9D%BF.png" alt="" width="">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          <script type="text/javascript">var postminchars = parseInt('10');
            var postmaxchars = parseInt('10000');
            var disablepostctrl = parseInt('0');
            var fid = parseInt('2');
          </script>




<!--快速发帖开始-->
          


       
          <div id="f_pst" class="bm">
            <div class="bm_h">
              <h2>快速发帖</h2></div>
          <form action="/home/luntan" method="post">
            {{ csrf_field() }}
              @if(session('user_id'))
                  <div class="bm_c">
                    <div class="pbt cl">
                      <script type="text/javascript" reload="1">simulateSelect('typeid_fast');</script>

                      标题：&nbsp;&nbsp;<input type="text" id="subject" name="title" class="px" value="{{ old('title') }}" onkeyup="strLenCalc(this, 'checklen', 80);" tabindex="11" style="width: 25em">
                      <span>还可输入 <strong id="checklen">80</strong> 个字符</span>
                    </div>
                    <input type="hidden" name="id" value="{{ URL::current() }}">
                    <script id="container" name="content" type="text/plain" style="height:200px;">{!! old('content') !!}</script>

                    <p class="ptm pnpost">
                      <button type="submit" name="topicsubmit" id="fastpostsubmit" value="topicsubmit" tabindex="13" class="pn pnc"><strong>发表帖子</strong></button>
                    </p>  
                 </div>
                  @else
                  <div class="pt hm">
                  您需要登录后才可以发帖 <a href="javascript:;" class="xi2 denglu">登录</a> | <a href="/register" class="xi2">立即注册</a>
                  </div>
              @endif
            
          </form>
          </div>
        <script type="text/javascript">
             $('.denglu').click(function(){
                          layer.open({
                              type: 2,
                              title: '<font style="color:skyblue;font-weight:777;font-size:16px;">请登录</font>',
                              shadeClose: true,
                              shade: 0.8,
                              area: ['650px', '500px'],
                              content: '/denglu?path='+location.pathname //iframe的url
                          }); 
                    });

        </script>
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
