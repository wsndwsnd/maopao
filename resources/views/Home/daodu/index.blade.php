@extends('Home.layout.master')
@section('sidebar')
<html>
 <head></head>
 <body>
  <div class="bottombg"> 
   <script type="text/javascript">
go();	
</script> 
   <div id="wp" class="wp xuxian"> 
    <style type="text/css">
.xl2 { background: url(static/image/common/vline.png) repeat-y 50% 0; }
.xl2 li { width: 49.9%; }
.xl2 li em { padding-right: 10px; }
.xl2 .xl2_r em { padding-right: 0; }
.xl2 .xl2_r i { padding-left: 10px; }
</style> 
    <div id="pt" class="bm cl" style="margin-left: 150px;"> 
     <div class="z"> 
      <a href="/" class="nvhm" title="首页">Discuz! Board</a>
      <em>&raquo;</em>
      <a href="">导读</a> 
      <em>›</em> 
      <a href="">最新热门</a>
     </div> 
    </div> 
    <div class="boardnav"> 
     <div id="ct" class="wp cl"> 
      <div class="mn"> 
       <div class="bm bml pbn"> 
        <div class="bm_h cl"> 
         <span class="y"> <a href="forum.php?mod=guide&amp;view=hot&amp;rss=1" class="fa_rss" target="_blank" title="RSS"></a> </span> 
         <h1 class="xs2"> 最新热门</h1> 
        </div> 
        <div class="bm_c cl pbn"> 
         <div style=";" id="forum_rules_1163"> 
          <div class="ptn xg2"></div> 
         </div> 
        </div> 
       </div> 
       <div id="pgt" class="bm bw0 pgs cl"> 
        <a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav"><img src="/Home/picture/pn_post.png" alt="发新帖" /></a> 
       </div> 
       <ul id="thread_types" class="ttp bm cl"> 
        <li class="xw1 a"><a href="">热门</a></li> 
        <li><a href="">精华</a></li> 
        <li><a href="">置顶</a></li> 

        <li><a id="filter_special" href="" onmouseover="showMenu(this.id)">我的帖子</a></li> 
       </ul> 
       <div id="threadlist" class="tl bm bmw"> 
        <div class="th"> 
         <table cellspacing="0" cellpadding="0"> 
          <tbody>
           <tr> 
            <th colspan="2"> 标题 </th> 
            <td class="by">版块/群组</td> 
            <td class="by">作者</td> 
            <td class="num">评论</td>
           
           </tr> 
          
          </tbody>
         </table> 
        </div> 
        <div class="bm_c"> 
         <div id="forumnew" style="display:none"></div> 
         <table cellspacing="0" cellpadding="0"> 
         <tbody id="normalthread_99">
           <tr style="font-size: 12px;">
            <td class="icn">
              <a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" title="投票 - 新窗口打开" target="_blank">
                <img src="/Home/images/pollsmall.gif" alt="投票">
              </a>
            </td>
            <th class="common">
             <a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" target="_blank" class="xst">[图片类]投票：您觉得里面哪位妹纸好看？</a></th>
            <td class="by" ><a href="forum.php?mod=forumdisplay&amp;fid=36" target="_blank" style="padding-left: 10px;">特殊主题</a></td>
            <td class="by">
            <cite>
            <a href="home.php?mod=space&amp;uid=1" c="1" mid="card_6457">admin</a></cite>
            <em><span>2017-4-27</span></em>
            </td>
            <td class="num"><a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" class="xi2" style="padding-left: 15px;">1</a><em style="padding-left: 15px;">5</em></td>
           
          </tr>
          </tbody>
         </table> 
        </div> 
       </div> 
       <div class="bm bw0 pgs cl"> 
        <span class="pgb y"><a href="forum.php?mod=guide">导读首页</a></span> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div id="filter_special_menu" class="p_pop" style="display:none"> 
     <ul> 
      <li><a href="home.php?mod=space&amp;do=poll&amp;view=me" target="_blank">投票</a></li> 
      <li><a href="home.php?mod=space&amp;do=trade&amp;view=me" target="_blank">商品</a></li> 
      <li><a href="home.php?mod=space&amp;do=reward&amp;view=me" target="_blank">悬赏</a></li> 
      <li><a href="home.php?mod=space&amp;do=activity&amp;view=me" target="_blank">活动</a></li> 
     </ul> 
    </div> 
   </div> 
   
  </div>
 </body>
</html>

@endsection