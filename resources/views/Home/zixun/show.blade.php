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
                    <a class="zz jl" href="">作者：{{ $data->article_author }}</a>
                    <span class="yd">阅读：
                      <em id="_viewnum">{{ $data->article_pview }}</em></span>评论:{{ $data->comments->count() }} </p>
                    
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
                   
                    <a href="javascript:;" id="a_favorite"  class="oshr ofav">收藏</a>    
          

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
              
                <h3>发表评论</h3></div>
              <div id="comment_ul" class="bm_c">
                <div id="div">
                    <dl id="comment_4_li" class="ptm pbm bbda cl comment_4_li" style="display: none;">
                      <dt class="mbm">                   
                         <span class="y xw0 xi2">
                          <a href="javascript:;" onclick="return confirm('确认要删除吗?')" class='del'>删除</a>
                         </span>
                      <img src="" width="100px;">
                      <a href="" class="xi2 xw1" c="1" mid="card_463" id="ajaxid_0.3901175271303092" initialized="true"></a>&nbsp;&nbsp;&nbsp;
                      <span class="xg1 xw0"></span>
                      </dt>
                      <dd><div class="quote"><blockquote></blockquote></div></dd>                    
                    </dl>
                    @foreach($data5 as $v)

                      <dl id="comment_4_li" class="ptm pbm bbda cl comment_4_li">
                        <dt class="mbm">                   
                     
                           <span class="y xw0 xi2">
                            <a href="javascript:;" class='del' onclick="return confirm('确认要删除吗?')" value="{{ $v->id }}">删除</a>
                           </span>
                        <img src="{{ $v->users->img or '/uploads/1.jpg' }}" width="100px;">
                        <a href="" class="xi2 xw1" c="1" mid="card_463" id="ajaxid_0.3901175271303092" initialized="true">{{ $v->users->user_name }}</a>&nbsp;&nbsp;&nbsp;
                        <span class="xg1 xw0">{{ $v->created_at }}</span>
                        </dt>
                        <dd><div class="quote"><blockquote>{{  $v->content  }} </blockquote></div></dd>                    
                      </dl>
                    @endforeach

              </div>
               <div class="list-page-a current">
              {!! $data5->render() !!}
            </div>
                <!-- <form action="/comment?aid={{ $data->id }}&uid=21" method="post"> -->
                  {{ csrf_field() }}
                  <div class="tedt">
                    <div class="area">
                      <textarea name="content" rows="7" class="pt message" id="message" ></textarea>
                    </div>
                  </div>
                  <div class="mtm">
                    <span id="seccode_cSzhQbYN"></span>
                    <script type="text/javascript" reload="1">updateseccode('cSzhQbYN', '<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>', 'portal::view');</script></div>
                 
                  <p class="ptn">
                    <button name="commentsubmit_btn" id="commentsubmit_btn"  class="pn" style="font-weight: 777;color: white">
                      评论</button>
                  </p>
                <!-- </form> -->
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
                              <a href="/zixun/{{ $v->id }}"  target="_blank" style=" display: block;display: -webkit-box;max-width: 400px;margin: 0 auto;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{{ $v->article_title }}</a></li>
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
                           @foreach($data4 as $v)
                          <dl class="cl">
                            <dd class="m">
                              <a href="/zixun/{{ $v->id }}" target="_blank">
                                <img  src="{{ ltrim($v->article_img,'.') }}" width="274" height="146" alt="" /></a>
                            </dd>
                            <dt>
                              <a href="forum.php?mod=viewthread&tid=100" title="发帖测试" target="_blank" style=" display: block;display: -webkit-box;max-width: 400px;margin: 0 auto;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{{ $v->article_title }}
                               
                              </a>
                            </dt>
                            <dd class="fttime">{{ $v->created_at }}</dd></dl>
                            @endforeach
                          
                        
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
      <div class="ft_wp">
      <script type="text/javascript">

           
            //评论
            $('#commentsubmit_btn').click(function(){

             if($('#message').val() == ''){
                  return false;
             }
               var date = new Date();
               var n = date.getFullYear();
               var y = date.getMonth()+1;
               var r = date.getDate();
               var s = date.getHours();
               var f = date.getMinutes();
               var m = date.getSeconds();

              $.ajax({
              // 请求服务器的地址
              url:"/comment?aid={{ $data->id }}&uid={{ session('id') }}",
              // 请求的方式 默认get方式
              type:'post',
              
              //发送到服务器的数据
              data:{'content':$('#message').val(),'_token':'{{csrf_token()}}'},
              //请求成功后的回调函数。
              success:function(msg){
                if(msg !== 2 ){
                  
                  layer.msg("评论成功");
                  
                  var attr =  $('#comment_4_li').clone(true);

                  attr.find('img').eq(0).attr('src'," /uploads/1.jpg");
                  attr.css('display','block');
                  attr.find('a').eq(0).attr('value',msg);
                  attr.find('a').eq(1).html("{{ session('user_name') }}");
                  attr.find('span').eq(1).html(n+'-'+y+'-'+r+'    '+s+':'+f+':'+m);
                  attr.find('div').eq(0).html( $('#message').val());         

                  $('#div').append(attr);

                  $('#message').val('');
                }else{
                  layer.msg("评论失败");
                }
              },
              // 预期服务器返回的数据类型
              dateType:'html',
              // (默认: true) 默认设置下，所有请求均为异步请求。
              async:true
            });
      });
                  //删除
                  $('.del').click(function(){
                      $(this).parent().parent().parent().remove();
                      $.get('/comment/del/'+$(this).attr('value'),function(msg){
                      if(msg == 1){

                        layer.msg('删除成功');

                      }else{

                        layer.msg('删除失败');

                      }                      
                    });
                 });
          
           //收藏       
            $('#a_favorite').click(function(){
            
              $.ajax({
              // 请求服务器的地址
              url:'/acollect?aid={{ $data->id }}&uid=21',
              // 请求的方式 默认get方式
              type:'post',
              
              //发送到服务器的数据
              data:{'_token':'{{csrf_token()}}'},
              //请求成功后的回调函数。
              success:function(msg){
                  if(msg==1){
                   
                    layer.msg("收藏成功,请到个人中心查看");
                    
                  }else if(msg == 2){
                    layer.msg("未收藏成功");                 
                 }else{
                    layer.msg("你已收藏,请到个人中心查看");                 

                 }
              },
              // 预期服务器返回的数据类型
              dateType:'html',
              // (默认: true) 默认设置下，所有请求均为异步请求。
              async:true
            });
      });

     
      </script>

@endsection
