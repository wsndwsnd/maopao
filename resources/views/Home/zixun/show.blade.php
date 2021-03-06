@extends('Home.layout.master')
@section('sidebar')   
      <div id="wp" class="wp xuxian">
        <link rel="stylesheet" type="text/css" href="/home/css/index.css">
        <script src="/Home/js/forum_viewthread.js" type="text/javascript"></script>
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
        <div id="ct" class="ct2 wp cl" >
          <div class="mn" style="width: 880px;">
            <div class="bm_haa cl">
              <div class="bm_h cl">
                <a href="portal.php?mod=rss&amp;catid=1" class="y xi2 rss" target="_blank" title="RSS">订阅</a>
                <h1 class="xs2">文章</h1></div>
            </div>
            <div class="kjkjb" >
              <div class="bm vw" style="margin-bottom:0;">
                <div class="h hm">
                  <h1 class="ph">{{ $data->article_title }}</h1>
                  <p class="xg1">发布时间：{{ $data->created_at }}
                    <a class="zz jl" href="">作者：{{ $data->article_author }}</a>
                    <span class="yd">阅读：
                      <em id="_viewnum">{{ $data->article_pview }}</em></span >评论:<font id="font">{{ $data->comments->count() }}</font></p>
                    
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
                    <script src="/Home/js/home.js" type="text/javascript"></script>
                  
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
            <div id="comment" class="bm">
              <div class="bm_h cl">
              
                <h3>发表评论</h3></div>
              <div id="comment_ul" class="bm_c">
                <div id="div">
                    <dl id="comment_4_li" class="ptm pbm bbda cl comment_4_li" style="display: none;">
                      <dt class="mbm">                   
                         <span class="y xw0 xi2">
                          <a href="javascript:;"  class='del' style="color: red;">删除</a>
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
                            @if(session('user_id') == $v->uid)
                            <a href="javascript:;" class='del'  value="{{ $v->id }}" style="color: red;">删除</a>
                            @endif
                           </span>
                        <img src="{{ ltrim($v->users->img,'.') }}" width="100px;">
                        <a href="/home/other/{{ $v->users->id }}" class="xi2 xw1" c="1" mid="card_463" id="ajaxid_0.3901175271303092" initialized="true">{{ $v->users->user_name }}</a>&nbsp;&nbsp;&nbsp;
                        <span class="xg1 xw0">{{ $v->created_at }}</span>
                        </dt>
                        <dd><div class="quote"><blockquote>{{  $v->content  }} </blockquote></div></dd>                    
                      </dl>
                    @endforeach

              </div>
               
                <!-- <form action="/comment?aid={{ $data->id }}&uid=21" method="post"> -->
                  {{ csrf_field() }}
                  <div class="tedt">
                    <div class="area">
                      @if(session('user_id'))
                      <textarea name="content" rows="7" class="pt message" id="message" style="background: #eee"></textarea>
                      @else
                      <div class="pt hm">
                      您需要登录后才可以回帖 <a href="javascript:;" class="xi2 denglu">登录</a> | <a href="/register" class="xi2">立即注册</a>
                      </div>
                      @endif
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
            <script type="text/javascript">
                    $('.denglu').click(function(){
                          layer.open({
                              type: 2,
                              title: '<font style="color:skyblue;font-weight:777;font-size:16px;">请登录</font>',
                              shadeClose: true,
                              shade: 0.8,
                              area: ['650px', '500px'],
                              content: '/denglu?path='+location.pathname   //iframe的url
                          }); 
                    });
                         
            </script>
          
        </div>
        <div class="sd pph" style="width: 300px;">
            <div class="drag" >
              <!--[diy=diyrighttop]-->
              <div id="diyrighttop" class="area">
                <div id="frameZkWxkX" class="frame move-span cl frame-1">
                  <div id="frameZkWxkX_left" class="column frame-1-c">
                    <div id="frameZkWxkX_left_temp" class="move-span temp"></div>
                    <div id="portal_block_75" class="zxlbyad block move-span">
                      <div id="portal_block_75_content" class="dxb_bc">
                        <div class="portal_block_summary">
                          <img  src="/Home/picture/ad2.jpg" width="100%" /></div>
                      </div>
                    </div>
                    <div id="portal_block_69" class="syzttj block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">阅读排行</span></div>
                  <div id="portal_block_69_content" class="dxb_bc">
                    <div class="module cl ml">
                      <ul>
                        @foreach($data3 as $v)
                        <li style="width: 292px;">
                          <p style=" display: block;display: -webkit-box;max-width: 400px;margin: 0 auto;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{{ $v->article_title }}</p>
                          <a class="tupian" href="/zixun/{{ $v->id }}" target="_blank" title="{{ $v->article_title }}">
                            <img src="{{ ltrim($v->article_img,'.') }}" width="292" height="180" alt="{{ $v->article_title }}" /></a>
                        </li>
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
                              <a href="forum.php?mod=viewthread&tid=100"  target="_blank" style=" display: block;display: -webkit-box;max-width: 400px;margin: 0 auto;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{{ $v->article_title }}
                               
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
</div>
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
              url:"/comment?aid={{ $data->id }}&uid={{ session('user_id') }}",
              // 请求的方式 默认get方式
              type:'post',
              
              //发送到服务器的数据
              data:{'content':$('#message').val(),'_token':'{{csrf_token()}}'},
              //请求成功后的回调函数。
              success:function(msg){
                if(msg !== 2 ){
                  
                  layer.msg("评论成功");
                  
                  var attr =  $('#comment_4_li').clone(true);

                  attr.find('img').eq(0).attr('src',"{{ ltrim( session('user_img'),'.' ) }}");
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
                      var obj =  $(this);
                      layer.confirm('您确定要删除？', {
                        btn: ['是','否'] //按钮
                      }, function(){
                        
                            $.get('/comment/del/'+obj.attr('value'),function(msg){
                            if(msg == 1){
                              layer.msg('删除成功');
                              obj.parent().parent().parent().remove();
                            }else{

                              layer.msg('删除失败');

                            }                      
                          });
                     
                      });

                 });
          
           //收藏       
            $('#a_favorite').click(function(){
            
             @if(session('user_id')) 
              $.ajax({
              // 请求服务器的地址
              url:"/acollect?aid={{ $data->id }}&uid={{ session('user_id') }}",
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
           @else
             layer.open({
                    type: 2,
                    title: '<font style="color:skyblue;font-weight:777;font-size:16px;">请登录</font>',
                    shadeClose: true,
                    shade: 0.8,
                    area: ['650px', '500px'],
                    content: '/denglu?path='+location.pathname //iframe的url
                }); 


           @endif
      });
      </script>

@endsection
