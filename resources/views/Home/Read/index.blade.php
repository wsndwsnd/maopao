@extends('home.layout.master') 
@section('sidebar') 
<!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
  <div class="bottombg"> 
   <script type="text/javascript">
    go(); 
    </script> 
   <div id="wp" class="wp xuxian"> 
    <link rel="stylesheet" type="text/css" href="/home/css/index.css" /> 
    <script type="text/javascript">var fid = parseInt('2'), tid = parseInt('7');</script> 
    <script src="/home/js/forum_viewthread.js" type="text/javascript"></script> 
    <script type="text/javascript">zoomstatus = parseInt(1);var imagemaxwidth = '957';var aimgcount = new Array();</script> 
    <style id="diy_style" type="text/css"></style> 
    <!--[diy=diy1]-->
    <div id="diy1" class="area"></div>
    <!--[/diy]--> 
    <div class="wp bgcc"> 
     <div class="aacd"> 
      <div id="pt" class="bm cl"> 
       <div class="z"> 
        <a href="/" class="nvhm" title="首页">Discuz! Board</a> 
        <a href="/" style="margin-left:5px;">首页</a>
        <em>›</em>
        <a href="/home/luntan">论坛</a> 
        <em>›</em> 
        <a href="/home/luntan">{{ $data1->title }}</a> 
        <em>›</em> 
        <a href="javascript:history.back(-1)">{{$data->cates->title}}</a> 
        <em>›</em> 
        <a href="#">{{$data->posts_title}}</a> 
       </div> 
      </div> 
      <!--[diy=diynavtop]--> 
      <div id="diynavtop" class="area"> 
       <div id="frameS0D0bb" class="frame move-span cl frame-1"> 
        <div id="frameS0D0bb_left" class="column frame-1-c"> 
         <div id="frameS0D0bb_left_temp" class="move-span temp"></div> 
         <div id="portal_block_87" class="ltnryrttj block move-span"> 
          <div class="blocktitle title">
           <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">热图推荐</span>
          </div>
          <div id="portal_block_87_content" class="dxb_bc">
           <div class="slidebox" slidenum="5" slidestep="5" style="display:block;"> 
            <div class="btn"> 
             <div class="slidebarup">
              <a href="javascript:void(0);" mevent="click">&lt;</a>
             </div> 
             <div class="slidebardown">
              <a href="javascript:void(0);" mevent="click">></a>
             </div> 
            </div> 
            <div class="module cl"> 
        <ul class="slideshow">
          @foreach($data2 as $val)
            <li style="width: 224px; height: 150px;" class="cc1">
                <a href="#" target="_blank">
                    <img src="{{ $val->slide_url }}" width="224" height="150"/>
                </a>
                <span class="title"><a id="ttitle" href="#">发帖测试
                </a>
                </span>
            </li>
          @endforeach
             </ul> 
            </div> 
           </div> 
           <script type="text/javascript">
    runslideshow();
    </script>
          </div>
         </div>
        </div>
       </div>
      </div>
      <!--[/diy]--> 
     </div> 
    </div> 
    <div id="ct" class="wp cl"> 
     
     <div id="postlist" class="pl bm"> 
      <table cellspacing="0" cellpadding="0" class="aabbdd"> 
       <tbody>
        <tr> 
         <td class="pls ptn pbn sdad"> 
          <div class="hm ptn"> 
           <span class="xg1">查看:</span> 
           <span class="xi1">{{ $data->post_view }}</span>
           <span class="pipe">|</span>
           <span class="xg1">回复:</span> 
           <span class="xi1">{{ $data->plhfs->count() }}</span> 
          </div> </td> 
         <td class="plc ptm pbn vwthd sdad"> 
          <div class="y"> 
           <a href="/home/forum.php?mod=viewthread&amp;action=printable&amp;tid=7" title="打印" target="_blank"><img src="/home/picture/print.png" alt="打印" class="vm" /></a> 
           <a href="/home/forum.php?mod=redirect&amp;goto=nextoldset&amp;tid=7" title="上一主题"><img src="/home/picture/thread-prev.png" alt="上一主题" class="vm" /></a> 
           <a href="/home/forum.php?mod=redirect&amp;goto=nextnewset&amp;tid=7" title="下一主题"><img src="/home/picture/thread-next.png" alt="下一主题" class="vm" /></a> 
          </div> <h1 class="ts"> <span id="thread_subject">{{$data->posts_title}}</span> </h1> </td> 
        </tr> 
       </tbody>
      </table> 
      <div class="postaaa posta0" id="post_7">
       <table id="pid7" class="plhin" summary="pid7" cellspacing="0" cellpadding="0"> 
        <tbody>
         <tr> 
          <td class="pls" rowspan="2"> 
           <div id="favatar7" class="pls favatar"> 
            <a name="newpost"></a> 
            <a name="lastpost"></a>
            <div class="pi"> 
             <div class="authi">
              <a href="/home/home.php?mod=space&amp;uid=1" target="_blank" class="xw1">{{ $data->users->user_name }}</a> 
             </div> 
            </div> 
            <div class="p_pop blk bui card_gender_0" id="userinfo7" style="display: none; margin-top: -11px;"> 
             <div class="m z"> 
              <div id="userinfo7_ma"></div> 
             </div> 
             <div class="i y"> 
              <div> 
               <strong><a href="/home/home.php?mod=space&amp;uid=1" target="_blank" class="xi2">admin</a></strong> 
               <em>当前离线</em> 
              </div>
              <dl class="cl"> 
               <dt>
                积分
               </dt>
               <dd>
                <a href="/home/home.php?mod=space&amp;uid=1&amp;do=profile" target="_blank" class="xi2">517</a>
               </dd> 
              </dl>
              <div class="imicn"> 
               <a href="/home/home.php?mod=space&amp;uid=1&amp;do=profile" target="_blank" title="查看详细资料"><img src="/home/picture/userinfo.gif" alt="查看详细资料" /></a> 
              </div> 
              <div id="avatarfeed">
               <span id="threadsortswait"></span>
              </div> 
             </div> 
            </div> 
            <div> 
             <div class="avatar" onmouseover="showauthor(this, 'userinfo7')">
              <a href="/home/home.php?mod=space&amp;uid=1" class="avtm" target="_blank"><img src="{{ $data->users->img }}" /></a>
             </div> 
            </div> 
            <div class="tns xg2">
             <table cellspacing="0" cellpadding="0">
              <tbody>
               <tr>
                <th><p><a href="/home/home.php?mod=space&amp;uid=1&amp;do=thread&amp;type=thread&amp;view=me&amp;from=space" class="xi2">{{ $data->users->userarticles->count() }}</a></p>文章</th>
                <th><p><a href="/home/home.php?mod=space&amp;uid=1&amp;do=thread&amp;type=reply&amp;view=me&amp;from=space" class="xi2">{{ $data->users->userposts->count() }}</a></p>帖子</th>
                <td><p><a href="/home/home.php?mod=space&amp;uid=1&amp;do=profile" class="xi2">517</a></p>积分</td>
               </tr>
              </tbody>
             </table>
            </div> 
            <p><em><a href="/home/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=1" target="_blank">管理员</a></em></p> 
            <p><span><img src="/home/picture/star_level3.gif" alt="Rank: 9" /><img src="/home/picture/star_level3.gif" alt="Rank: 9" /><img src="/home/picture/star_level1.gif" alt="Rank: 9" /></span></p> 
            <dl class="pil cl"> 
             <dt>
              积分
             </dt>
             <dd>
              <a href="/home/home.php?mod=space&amp;uid=1&amp;do=profile" target="_blank" class="xi2">517</a>
             </dd> 
            </dl> 
            <dl class="pil cl"></dl>
           
           </div> </td> 
          <td class="plc"> 
           <div class="pi"> 
            <div class="pti"> 
             <div class="pdbt"> 
             </div> 
             <div class="authi"> 
              <img class="authicn vm" id="authicon7" src="/home/picture/online_admin.gif" /> 
              <em id="authorposton7">发表于 {{ $data->postsinfo->created_at }}</em> 
            <!--   <span class="pipe">|</span> 
              <a href="/home/forum.php?mod=viewthread&amp;tid=7&amp;page=1&amp;authorid=1" rel="nofollow">只看该作者</a> --> 
              
              
              
             </div> 
            </div> 
           </div>
           <div class="pct">
            <style type="text/css">.pcb{margin-right:0}</style>
            <div class="pcb"> 
             <div class="t_fsz"> 
              <table cellspacing="0" cellpadding="0"> 
               <tbody>
                <tr> 
                 <td class="t_f" id="postmessage_7"> {!! $data->postsinfo->content !!} </td> 
                </tr> 
               </tbody>
              </table> 
              
              <div class="pattl"> 
               <ignore_js_op> 
                <dl class="tattl attm"> 
                 <dt></dt> 
                 <dd> 
                  <p class="mbn"> <a href="/home/forum.php?mod=attachment&amp;aid=N3w1MzY0NDFmYnwxNTI4MjcyNjY1fDB8Nw%3D%3D&amp;nothumb=yes" onmouseover="showMenu({'ctrlid':this.id,'pos':'12'})" id="aid7" class="xw1" target="_blank">7.jpg</a> <em class="xg1">(88.92 KB, 下载次数: 0)</em> </p> 
                  <div class="tip tip_4" id="aid7_menu" style="display: none" disautofocus="true"> 
                   <div> 
                    <p> <a href="/home/forum.php?mod=attachment&amp;aid=N3w1MzY0NDFmYnwxNTI4MjcyNjY1fDB8Nw%3D%3D&amp;nothumb=yes" target="_blank">下载附件</a> </p> 
                    <p> <span class="y">2016-4-14 14:36 上传</span> <a href="/home/javascript:;" onclick="imageRotate('aimg_7', 1)"><img src="/home/picture/rleft.gif" class="vm" /></a> <a href="/home/javascript:;" onclick="imageRotate('aimg_7', 2)"><img src="/home/picture/rright.gif" class="vm" /></a> </p> 
                   </div> 
                   <div class="tip_horn"></div> 
                  </div> 
                  <p class="mbn"> </p> 
                  <div class="mbn savephotop"> 
                   <img id="aimg_7" aid="7" src="/home/picture/none.gif" zoomfile="data/attachment/forum/201604/14/143604hixg2y4dwu4vcgvb.jpg" file="data/attachment/forum/201604/14/143604hixg2y4dwu4vcgvb.jpg" class="zoom" onclick="zoom(this, this.src, 0, 0, 0)" width="600" alt="7.jpg" title="7.jpg" w="600" /> 
                  </div> 
                 </dd> 
                </dl> 
               </ignore_js_op> 
              </div> 
             </div> 
             <div id="comment_7" class="cm"> 
             </div> 
             <div id="post_rate_div_7"></div> 
            </div> 
           </div> </td>
         </tr> 
         <tr>
          <td class="plc plm"> 
           <div id="p_btn" class="mtw mbm hm cl"> 
            <a href="javascript:;" id="k_favorite" title="收藏本帖"><i><img src="/home/picture/fav.gif" alt="收藏" />收藏<span id="favoritenumber" style="display:none">0</span></i></a> 
            <a id="recommend_add" href="javascript:;" title="顶一下"><i><img src="/home/picture/rec_add.gif" alt="支持" />顶一下<span id="recommendv_add" style="display:none">0</span></i></a> 
            <a id="recommend_subtract" href="javascript:;" title="踩一下"><i><img src="/home/picture/rec_subtract.gif" alt="反对" />踩一下<span id="recommendv_subtract" style="display:none">0</span></i></a> 
           </div> 

           <div class="sign" style="max-height:120px;maxHeightIE:120px;">
            手机版可以支持用户签名了。
            <br /> 
            <img id="aimg_yqYeo" onclick="zoom(this, this.src, 0, 0, 0)" class="zoom" src="/home/picture/sign.jpg" onmouseover="img_onmouseoverfunc(this)" onload="thumbImg(this)" border="0" alt="" />
           </div> 
         </td> 
         </tr> 
        </tbody>
       </table>
       <script type="text/javascript">
          //收藏       
            $('#k_favorite').click(function(){
            
              $.ajax({
              // 请求服务器的地址
              url:"/pcollect?pid={{ $data->id }}&uid={{ session('user_id') }}",
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
        @foreach($data3 as $v)
       <table id="pid120" class="plhin" summary="pid120" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="pls" rowspan="2">
                        <div id="favatar120" class="pls favatar">
                            <div class="pi">
                                <div class="authi">
                                    <a href="home.php?mod=space&amp;uid=16" target="_blank" class="xw1">{{ $v->users->user_name }}</a></div>
                            </div>
                           
                            <div>
                                <div class="avatar" >
                                    <a href="" class="avtm" target="_blank">
                                        <img src="{{ ltrim($v->users->img,'.') }}"></a>
                                </div>
                            </div>
                            <div class="tns xg2">
                                <table cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <p>
                                                    <a href="home.php?mod=space&amp;uid=16&amp;do=thread&amp;type=thread&amp;view=me&amp;from=space" class="xi2">{{ $v->users->userarticles->count() }}</a></p>文章</th>
                                            <th>
                                                <p>
                                                    <a href="home.php?mod=space&amp;uid=16&amp;do=thread&amp;type=reply&amp;view=me&amp;from=space" class="xi2">{{ $v->users->userposts->count() }}</a></p>帖子</th>
                                            <td>
                                                <p>
                                                    <a href="home.php?mod=space&amp;uid=16&amp;do=profile" class="xi2">9</a></p>积分</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>
                                <em>
                                    <a href="">新手上路</a></em>
                            </p>
                            <p>
                                <span id="g_up120" >
                                    <img src="/Home/picture/star_level1.gif" alt="Rank: 1"></span>
                            </p>                          
                            <p>
                                <span class="pbg2" id="upgradeprogress_120"  initialized="true">
                                    <span class="pbr2" style="width:18%;"></span>
                                </span>
                            </p>                           
                            <dl class="pil cl">
                                <dt>积分</dt>
                                <dd>
                                    <a href="home.php?mod=space&amp;uid=16&amp;do=profile" target="_blank" class="xi2">9</a></dd>
                            </dl>
                            <dl class="pil cl"></dl>
                            
                        </div>
                    </td>
                    <td class="plc">
                        <div class="pi">
                           
                            <div class="pti">
                                <div class="pdbt"></div>
                                <div class="authi">
                                    <img class="authicn vm" id="authicon120" src="/Home/picture/online_member.gif">
                                    <em id="authorposton120">发表于
                                        <span title="2018-6-8 10:13:01">{{ $v->created_at }}</span></em>
                                    <span class="pipe"></span>
                                    <a href="" rel="nofollow"></a></div>
                            </div>
                        </div>
                        <div class="pct">
                            <div class="pcb">
                                <div class="t_fsz">
                                    <table cellspacing="0" cellpadding="0">
                                        <tbody>
                                          <tr>
                                            <td class="t_f" id="postmessage_121"> 
                                            @if($v->touname)
                                            <div class="quote" >
                                                
                                                <blockquote>
                                                  
                                                  <font size="2">
                                                    <a href=""><font color="#999999"> {{ $v->touname }}发表于{{ $v->toctime }} </font></a>
                                                  </font>
                                                    <br>
                                                    {!! $v->tocontent !!}
                                                </blockquote>
                                              </div>
                                            @endif
                                               <br>

                                              {!! $v->content !!}
                                              
                                            </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                 
                                </div>
                                <div id="comment_120" class="cm"></div>
                                <div id="post_rate_div_120"></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="plc plm"></td>
                </tr>
                <tr id="_postposition120"></tr>
                <tr>
                    <td class="pls"></td>
                    <td class="plc" style="overflow:visible;">
                        <div class="po hin">
                            <div class="pob cl">
                                <em>
                              
                                    <a class="fastre" href="javascript:;" name="{{ $v->uid }}" value="{{ $v->id }}">回复</a>                    
                                </em>
                             <!--  @if(session('user_id') == $v->uid )
                              <a href="javascript:;" value="{{ $v->id }}" class='del1' style="color: red;">删除</a>@endif -->      
                               </div>
                        </div>
                    </td>
                </tr>
                <tr class="ad">
                    <td class="pls"></td>
                    <td class="plc"></td>
                </tr>
            </tbody>
        </table>
        @endforeach 
      </div> 
    </div> 
    <script type="text/javascript">
              $('.fastre').click(function(){

                 var uid = $(this).attr('name');
                 var id = $(this).attr('value');
                      layer.open({
                      type: 2,
                      title: '<font style="color:skyblue;font-weight:777;font-size:16px;">回复评论</font>',
                      shadeClose: true,
                      shade: 0.8,
                      area: ['650px', '300px'],
                      content: '/preply?uid='+uid+'&pid='+{{ $data->id }}+'&id='+id //iframe的url
                    }); 
                
              });
                 
                 // // 删除评论
                 //  $('.del1').click(function(){
                 //      var obj =  $(this);
                 //      layer.confirm('您确定要删除？', {
                 //        btn: ['是','否'] //按钮
                 //      }, function(){
                        
                 //            $.get('/pcomment/del/'+obj.attr('value'),function(msg){
                 //            if(msg == 1){
                 //              layer.msg('删除成功');
                 //              obj.parent().parent().parent().parent().parent().parent().remove();
                 //            }else{

                 //              layer.msg('删除失败');

                 //            }                      
                 //          });
                     
                 //      });

                 // });
      </script>
    
    
   
    <div id="f_pst" class="pl bm bmw" style="height: 330px;"> 
     <form method="post"  action="/pcomment?pid={{ $data->id }}" >
      {{ csrf_field() }} 
      <table cellspacing="0" cellpadding="0"> 
       <tbody>
        <tr> 
         <td class="pls"> </td> 
         <td class="plc"> 
          <div class="ksftaa"> 
           <div id="fastpostreturn">
            <span>发表评论</span>
           </div> 
           <div class="cl"> 
               <script id="container" name="content"  style="height: 120px;width: 800px;">
                          {!! old('article_content') !!}
                </script>
           </div> 
           <div id="seccheck_fastpost"> 
           </div> 
           
           <p class="ptm pnpost"> <a href="" class="y" target="_blank">本版积分规则</a> <button  class="pn pnc vm" ><strong>发表评论</strong></button></p> 
          </div> </td> 
        </tr> 
       </tbody>
      </table> 
     </form> 
    </div> 
    <script type="text/javascript">
    function succeedhandle_followmod(url, msg, values) {
    var fObj = $('followmod_'+values['fuid']);
    if(values['type'] == 'add') {
    fObj.innerHTML = '不收听';
    fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
    } else if(values['type'] == 'del') {
    fObj.innerHTML = '收听TA';
    fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=1a6a669d&fuid='+values['fuid'];
    }
    }
    fixed_avatar([7], 1);
    </script>
   </div> 
  </div> 
  <!--bottombg结束--> 
  <script src="/home/js/home.js" type="text/javascript"></script> 
  <div id="scrolltop"> 
   <span><a href="/home/forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=7&amp;extra=page%3D1&amp;page=1" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span> 
   <span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa"><b>返回顶部</b></a></span> 
   <span> <a href="/home/forum.php?mod=forumdisplay&amp;fid=2" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a> </span> 
  </div> 
  <script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
  <script type="text/javascript">
        var ue = UE.getEditor('container',{
           toolbars: [
                ['fullscreen', 'source', 'undo', 'redo', 'bold','simpleupload','insertimage','italic','forecolor','backcolor','edittip' ]
            ]
        });


          
</script>
  <div></div> 
  <div></div> 
  <div></div> 
  <div></div> 
  <div></div> 
@endsection
