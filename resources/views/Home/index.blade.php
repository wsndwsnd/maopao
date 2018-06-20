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
                            @if(!session('user_id'))
                            <a href="javascript:;" title="发帖测试" class="fastre"></a>
                            @else
                            <a href="/posts/create" target="_blank" title="发帖测试"></a>
                            
                            @endif   
                          </div>
                        </li>
                        <script type="text/javascript">
                              $('.fastre').click(function(){
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
                        <!-- 遍历帖子 -->
                        @foreach($posts_view as $v)
                        <li>
                          <em>
                            <a href="/home/other/{{$v->users->id}}" target="_blank">{{$v -> users -> user_name}}</a></em>
                          <a href="/home/read/{{$v->id}}" title="" target="_blank">{{$v->posts_title}}</a>
                        </li>
                        @endforeach
                        <!-- 结束遍历 -->
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
                         
                          <a href="/notice" style=" font-size: 14px;" class="click">{{ $v->notice_title }}</a>
                           <em style=" float:right;font-size:12px;">{{ substr($v ->created_at,0,10) }}</em>        
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

                                      <a href="/zixun/{{ $v->id }}" title="" target="_blank">
                                          <img src="{{ ltrim($v->article_img,'.') }}" width="266" height="180" alt=""></a>
                                  </dd>
                                  
                                  <dt class="leftjl">
                         
                                      <a href="/zixun/{{ $v->id }}" title="" target="_blank">{{$v -> article_title}}</a></dt>

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

                                      <a href="/zixun/{{ $v->id }}" target="_blank">查看详情</a></dd>

                              </dl>

                               </div>
                        @endforeach
                         

                        <!-- 上下页 -->
                         <!--  <div class="btn">
                              <div class="slidebarup">
                                  <a href="javascript:void(0);" mevent="click">上一页</a></div>
                              <div class="slidebardown">
                                  <a href="javascript:void(0);" mevent="click">下一页</a></div>
                          </div> -->
                      </div>
                      <script type="text/javascript">runslideshow();</script></div>
                </div>
                </div>

              <div id="frameFMd872_center" class="column frame-2-1-r">
                <div id="frameFMd872_center_temp" class="move-span temp"></div>
                <div id="portal_block_67" class="syydph block move-span">
                    <!-- 最新发贴 -->
                <div id="portal_block_65" class="syzxft block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">最新发帖</span>
                  </div>

                  <!-- 最新发帖 -->
                  <div id="portal_block_65_content" class="dxb_bc">
                    <div class="module cl xld xlda">
                      @foreach($poststime as $v)
                      <dl class="cl">
                        <dd class="m">
                          <a href="/home/other/{{$v->users->id}}" c="1" target="_blank">
                            <img src="{{$v->users->img}}" width="52" height="52" alt="fff" />
                          </a>
                        </dd>
                        <dt style="padding-bottom: 0;">
                          <a href="/home/read/{{$v->id}}" title="发帖测试" target="_blank">{{$v->posts_title}}</a>
                        </dt>
                        <dd style="margin-bottom: 0;">
                         {{$v->created_at}}
                        </dd>
                      </dl>
                     @endforeach
                    </div>
                  </div>
                  <!-- 最新发帖结束 -->
                </div>
                <!-- 最新发帖结束 -->
              </div>
            </div>
            <!-- 阅读排行 -->
            <div id="frameFMd872_center" class="column frame-2-1-r">
                <div id="frameFMd872_center_temp" class="move-span temp"></div>
                <div id="portal_block_67" class="syydph block move-span">
                  <!-- 阅读排行 -->

                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">阅读排行</span></div>
                  <div id="portal_block_67_content" class="dxb_bc">
                    <div class="module cl xl xl1">
                      <ul>

                       @foreach($article_view as $k => $v)
                        <li class="cc{{$k+1}}">
                          <span>No-{{$k+1}}</span>
                          <a href="/zixun/{{$v->id}}" title="发帖测试" target="_blank">{{$v -> article_title}}</a></li>
                        @endforeach
                      </ul>
                    </div>
                    <!-- 结束 -->

                  </div>
                </div>

                <!--  -->

                 <!-- 阅读排行 -->
            <div id="frameFMd872_center" class="column frame-2-1-r">
                <div id="frameFMd872_center_temp" class="move-span temp"></div>
                <div id="portal_block_67" class="syydph block move-span">
                  <!-- 阅读排行 -->
                  <!-- 会员排行 -->
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">会员排行</span></div>
                  <div id="portal_block_67_content" class="dxb_bc">
                    <div class="module cl xl xl1">
                      <ul>

                       @foreach($data4 as $k => $v)
                        <li class="cc{{$k+1}}">
                          <span>No-{{$k+1}}</span>  <img width="45" height="45" alt="fff" src="{{ ltrim($v->img,'.') }}"><a style="text-align:right;" href="/home/other/{{$v->id}}">{{$v -> user_name}}</a> <br><p style="text-align:right;"> 积分：{{$v->score}}</p> </li>
                        @endforeach
                      </ul>
                    </div>
                    <!-- 结束 -->

                  </div>
                </div>
                 <!--会员排行结束-->

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
