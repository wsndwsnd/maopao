@extends('Home.layout.master')
@section('sidebar')
<div id="wp" class="wp xuxian">
  <div id="diy4" class="area">
       <div id="frameFMd872" class="sybtgg frame move-span cl frame-2-1">
              <!-- <div id="frameFMd872_left" class="column frame-2-1-l">  用户开启 -->
                <div id="frameFMd872_left_temp" class="move-span temp"></div>
                <div id="portal_block_66" class="syzxwz block move-span">


                	<!-- 帖子 -->
                	<div class="blocktitle title">
    			            <span class="titletext" style=" float:;margin-left:px;font-size:;color: !important;">帖子</span>
    			        </div>
                	 <div id="threadlist" class="tl bm bmw" style="position: relative;">
                    <div class="bm_c">
                    <form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=2&amp;infloat=yes&amp;nopost=yes">
                      <input type="hidden" name="formhash" value="316f8b52" />
                      <input type="hidden" name="listextra" value="page%3D1" />
                      <table summary="forum_2" cellspacing="0" cellpadding="0" id="threadlisttableid">
  						        <!--帖子开始-->
                        @foreach($posts as $v)
                        <tbody id="stickthread_46">
                          <tr>
                            <td class="icn">
                              <!-- a href="/home/forum.php?mod=viewthread&amp;tid=46&amp;extra=page%3D1" title="全局置顶主题 - 新窗口打开" target="_blank"> -->
                                <!-- <img src="/home/picture/pin_3.gif" alt="全局置顶" /></a> -->
                            </td>
                            <th class="common">
                              <a id="toux" href="/home/read/{{ $v->id }}" target="_blank" title="进入admin的空间" class="">
                                <img src="{{ltrim($v->users->img,'.')}}" width="52" height="52"></a>
                              <a href="/home/read/{{ $v->id }}" id="content_46" class="showcontent y" title="更多操作" onclick="CONTENT_TID='46';CONTENT_ID='stickthread_46';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
                              <a href="/home/read/{{ $v->id }}" style="display: none;" class="" title="隐藏置顶帖">隐藏置顶帖</a>
                              <a href="/home/read/{{ $v->id }}" onclick="atarget(this)" class="s xst">{{$v->users->user_name}}</a>
                             <!--  <img src="/home/picture/011.small.gif" alt="新人帖" align="absmiddle" /> -->
                              <!-- <img src="/home/picture/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle" />
                              <img src="/home/picture/digest_2.gif" align="absmiddle" alt="digest" title="精华 2" /> -->
                              <br>
                             	
                                {{substr($v ->created_at,0,10)}}
                          </th>
                            <td class="by">
                              <cite>
                                <a href="/home/read/{{ $v->id }}" c="1">{{ $v->posts_title }}</a></cite>
                              <em>
                                <span>[@if($v->label == 1) 热门贴 @elseif($v->label == 2) 精品贴 @elseif($v->label == 3) 置顶贴 @elseif($v->label == 4) 普通贴 @endif]</span></em>
                            </td>
                            <td class="num">
                              <a href="" class="xi2">1</a>
                              <em>39</em>
                            </td>
                          </tr>
                        </tbody>
                      @endforeach
  					         <!--帖子结束-->   
                      </table>
                      </form>
                  </div>
                </div>

                	<!-- 结束 -->
			         <hr>

    			        <!-- 文章模块 -->
    			        <div class="blocktitle title">
    			            <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">文章</span>
    			        </div>
    			        <div id="portal_block_66_content" class="dxb_bc">
    			            <div class="module cl xld slidebox" slidenum="8" slidestep="8" id="0.0344960488936239" style="display: block;">
    			              <!-- 遍历文章 -->
    			              @foreach( $articles as $v)
    			            
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
    			               	<!-- 结束遍历 -->

    			              <!-- 上下页 -->
    			               <!--  <div class="btn">
    			                    <div class="slidebarup">
    			                        <a href="javascript:void(0);" mevent="click">上一页</a></div>
    			                    <div class="slidebardown">
    			                        <a href="javascript:void(0);" mevent="click">下一页</a></div>
    			                </div> -->
    			            </div>
    			            <script type="text/javascript">runslideshow();</script>
                  </div>
    			        <!-- 文章模块结束 -->

                </div>
                </div>

                        <!-- 用户 -->
                        <!-- <div id="frameFMd872_center" class="column frame-2-1-r">
                          <div id="frameFMd872_center_temp" class="move-span temp">
                          </div>
                          <div id="portal_block_67" class="syydph block move-span">
                            <div class="blocktitle title">
                              <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">用户</span></div>
                            <div id="portal_block_67_content" class="dxb_bc">
                              <div class="module cl xl xl1">
                                <ul>
                                	@foreach($users as $v)
                                  <li>
                                  	<img width="70px"  src="{{ ltrim($v->img,'.') }}">
                                  	<td>{{$v->user_name}}</td>
                                  	<i >发帖量123</i>
                                  </li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div> -->
      				      <!-- 用户结束 -->

                </div>
              </div>
            </div>
  <!-- </div>   -->
</div>      
@stop