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
     
     </div> 
    </div> 
    <div class="boardnav"> 
     <div id="ct" class="wp cl"> 
      <div class="mn"> 
    
      

              <div class="tab-content">
                <div id="threadlist" class="tl bm bmw"> 
         
                <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief" style="border:1px solid #96c2f1;background:#eff7ff;">
                  <ul class="layui-tab-title" style="width: 100%;">
                    <li class="layui-this">热门</li>
                    <li>精品</li>
                    <li>置顶</li>
                    <li>普通贴</li> 
                     
                  </ul>
                  
                  <div class="layui-tab-content" >
                    <div class="layui-tab-item layui-show"> 
                      <div id="threadlist" class="tl bm bmw" > 
                                    <div  > 
                                     <table cellspacing="0" cellpadding="0" > 
                                      <tbody>
                                       <tr > 
                                        <th colspan="2"> 标题 </th> 
                                        <td class="by" style="width:120px;">版块/群组</td> 
                                        <td class="by">作者</td> 
                                        <td class="num" >评论</td>
                                       
                                       </tr> 
                                      
                                      </tbody>
                                     </table> 
                                    </div> 
                                    @foreach( $posts1 as $v)
                                        <div class="bm_c"> 
                                         <div id="forumnew" style="display:none"></div> 
                                         <table cellspacing="0" cellpadding="0"> 
                                         <tbody id="normalthread_99">
                                           <tr style="font-size: 12px;">
                                            <td class="icn">
                                              <a href="/home/read/{{$v->id}}" title="投票 - 新窗口打开" target="_blank">
                                                <img src="/Home/images/pollsmall.gif" alt="投票">
                                              </a>
                                            </td>
                                            <th class="common">
                                             <a href="/home/read/{{$v->id}}" target="_blank" class="xst">[热门]{{$v -> posts_title}}</a></th>
                                            <td class="by" ><a href="forum.php?mod=forumdisplay&amp;fid=36" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                                            <td class="by" style="width: 120px;">
                                            <cite>
                                            <a href="/home/read/{{$v->id}}" c="1" mid="card_6457">{{$v -> users -> user_name}}</a></cite>
                                            <em><span>{{$v -> created_at}}</span></em>
                                            </td>
                                            <td class="num"><a href="/home/read/{{$v->id}}" class="xi2" style="padding-left: 15px;">1</a><em style="padding-left: 15px;">5</em></td>
                                           
                                          </tr>
                                          </tbody>
                                         </table> 
                                        </div> 
                                    @endforeach
                              </div> 
                            </div>
                    <div class="layui-tab-item">
                      <div id="threadlist" class="tl bm bmw"> 
                                    <div > 
                                     <table cellspacing="0" cellpadding="0"> 
                                      <tbody>
                                       <tr> 
                                        <th colspan="2"> 标题 </th> 
                                        <td class="by" style="width:120px;">版块/群组</td> 
                                        <td class="by">作者</td> 
                                        <td class="num">评论</td>
                                       
                                       </tr> 
                                      
                                      </tbody>
                                     </table> 
                                    </div> 
                                    @foreach( $posts2 as $v)
                                        <div class="bm_c"> 
                                         <div id="forumnew" style="display:none"></div> 
                                         <table cellspacing="0" cellpadding="0"> 
                                         <tbody id="normalthread_99">
                                           <tr style="font-size: 12px;">
                                            <td class="icn">
                                              <a href="/home/read/{{$v->id}}" title="投票 - 新窗口打开" target="_blank">
                                                <img src="/Home/images/pollsmall.gif" alt="投票">
                                              </a>
                                            </td>
                                            <th class="common">
                                             <a href="/home/read/{{$v->id}}" target="_blank" class="xst">[精品]{{$v -> posts_title}}</a></th>
                                            <td class="by" ><a href="/home/read/{{$v->id}}" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                                            <td class="by" style="width: 120px;">
                                            <cite>
                                            <a href="/home/read/{{$v->id}}" c="1" mid="card_6457">{{$v -> users -> user_name}}</a></cite>
                                            <em><span>{{$v -> created_at}}</span></em>
                                            </td>
                                            <td class="num"><a href="/home/read/{{$v->id}}" class="xi2" style="padding-left: 15px;">1</a><em style="padding-left: 15px;">5</em></td>
                                           
                                          </tr>
                                          </tbody>
                                         </table> 
                                        </div> 
                                    @endforeach
                              </div> 
                    </div>
                    <div class="layui-tab-item">
                      <div id="threadlist" class="tl bm bmw"> 
                                    <div > 
                                     <table cellspacing="0" cellpadding="0"> 
                                      <tbody>
                                       <tr> 
                                        <th colspan="2"> 标题 </th> 
                                        <td class="by" style="width:120px;">版块/群组</td> 
                                        <td class="by">作者</td> 
                                        <td class="num">评论</td>
                                       
                                       </tr> 
                                      
                                      </tbody>
                                     </table> 
                                    </div> 
                             @foreach( $posts3 as $v)
                                <div class="bm_c"> 
                                 <div id="forumnew" style="display:none"></div> 
                                 <table cellspacing="0" cellpadding="0"> 
                                 <tbody id="normalthread_99">
                                   <tr style="font-size: 12px;">
                                    <td class="icn">
                                      <a href="/home/read/{{$v->id}}" title="投票 - 新窗口打开" target="_blank">
                                        <img src="/Home/images/pollsmall.gif" alt="投票">
                                      </a>
                                    </td>
                                    <th class="common">
                                     <a href="/home/read/{{$v->id}}" target="_blank" class="xst">[置顶]{{$v -> posts_title}}</a></th>
                                    <td class="by" ><a href="/home/read/{{$v->id}}" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                                    <td class="by" style="width: 120px;">
                                    <cite>
                                    <a href="/home/read/{{$v->id}}">{{$v -> users -> user_name}}</a></cite>
                                    <em><span>{{$v -> created_at}}</span></em>
                                    </td>
                                    <td class="num"><a href="/home/read/{{$v->id}}" class="xi2" style="padding-left: 15px;">1</a><em style="padding-left: 15px;">5</em></td>
                                   
                                  </tr>
                                  </tbody>
                                 </table> 
                                </div> 
                            @endforeach
                          </div>
                    </div>
                    <div class="layui-tab-item">
                        <div id="threadlist" class="tl bm bmw"> 
                                    <div> 
                                     <table cellspacing="0" cellpadding="0"> 
                                      <tbody>
                                       <tr> 
                                        <th colspan="2"> 标题 </th> 
                                        <td class="by" style="width:120px;">版块/群组</td> 
                                        <td class="by">作者</td> 
                                        <td class="num">评论</td>
                                       
                                       </tr> 
                                      
                                      </tbody>
                                     </table> 
                                    </div> 
                             @foreach( $posts4 as $v)
                                <div class="bm_c"> 
                                 <div id="forumnew" style="display:none"></div> 
                                 <table cellspacing="0" cellpadding="0"> 
                                 <tbody id="normalthread_99">
                                   <tr style="font-size: 12px;">
                                    <td class="icn">
                                      <a href="/home/read/{{$v->id}}" title="投票 - 新窗口打开" target="_blank">
                                        <img src="/Home/images/pollsmall.gif" alt="投票">
                                      </a>
                                    </td>
                                    <th class="common">
                                     <a href="/home/read/{{$v->id}}" target="_blank" class="xst">[普通贴]{{$v -> posts_title}}</a></th>
                                    <td class="by" ><a href="forum.php?mod=forumdisplay&amp;fid=36" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                                    <td class="by" style="width: 120px;">
                                    <cite>
                                    <a href="/home/read/{{$v->id}}" c="1" mid="card_6457">{{$v -> users -> user_name}}</a></cite>
                                    <em><span>{{$v -> created_at}}</span></em>
                                    </td>
                                    <td class="num"><a href="/home/read/{{$v->id}}" class="xi2" style="padding-left: 15px;">1</a><em style="padding-left: 15px;">5</em></td>
                                   
                                  </tr>
                                  </tbody>
                                 </table> 
                                </div> 
                            @endforeach
                          </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
       </div> 
       <!-- <div class="bm bw0 pgs cl"> 
        <span class="pgb y"><a href="forum.php?mod=guide">导读首页</a></span> 
       </div>  -->
      </div> 
     </div> 
    </div> 
   
   </div> 
   
  </div>
 </body>
</html>

@endsection