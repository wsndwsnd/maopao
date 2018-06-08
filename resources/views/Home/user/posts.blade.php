@extends('Home.layout.master')
@section('sidebar')
<div id="wp" class="wp xuxian">
        <div id="pt" class="bm cl">
        </div>
        <div id="ct" class="ct2_a wp cl">
          <div class="mn">
            <div class="bm bw0">
              <h1 class="mt">个人资料</h1>
              <!--don't close the div here-->
              <ul class="tb cl">
                <li >
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=base">基本资料</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=contact">联系方式</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=edu">教育情况</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=work">工作情况</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=info">个人信息</a></li>
                  <li class="a">
                  <a href="/userposts/{{session('user_id')}}">我发的贴子</a></li>
              </ul>
              <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
              <div id="portal_block_66_content" class="dxb_bc">
                <div class="module cl xld slidebox" slidenum="8" slidestep="8" id="0.0344960488936239" style="display: block;">
               <div> 	
                <div class="tab-pane" id="xxoo2">
                  <div id="threadlist" class="tl bm bmw"> 
                            <div class="th"> 
                             <table cellspacing="0" cellpadding="0"> 
                              <tbody>
                               <tr> 
                                <th style="width: 80px;"></th>
                                <th colspan="2"> 标题 </th> 
                                <td class="by">版块/群组</td> 
                                <td class="by" style="width: 80px">作者</td> 
                                <td class="num" >评论</td>
                                <td class="by" style="width: 125px">申请</td>
                               </tr> 
                              </tbody>
                             </table> 
                            </div>
	               @foreach($data as $v)
		              <div class="bm_c"> 
                                 <div id="forumnew" style="display:none"></div> 
                                 <table cellspacing="0" cellpadding="0"> 
                                 <tbody id="normalthread_99">
                                   <tr style="font-size: 12px;">
                                    <td class="icn" style="width: 100px">
                                      <a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" title="投票 - 新窗口打开" target="_blank">
                                        <img src="/Home/images/pollsmall.gif" alt="投票">
                                      </a>
                                    </td>
                                    <th class="common">
                                     <a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" target="_blank" class="xst">[@if($v->label == 1) 热门 @elseif($v->label == 2) 精品 @elseif($v->label == 3) 置顶 @elseif($v->label == 4) 普通贴 @endif]{{$v -> posts_title}}</a></th>
                                    <td class="by" style="width: 130px"><a href="forum.php?mod=forumdisplay&amp;fid=36" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                                    <td class="by" style="width: 100px">
                                    <cite>
                                    <a href="home.php?mod=space&amp;uid=1" c="1" mid="card_6457">{{$v -> users -> user_name}}</a></cite>
                                    <em><span>{{$v -> created_at}}</span></em>
                                    </td>
                                    <td class="num" ><a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" class="xi2" style="padding-left: 15px;">1</a><em style="padding-left: 15px;">5</em></td>
                                    <td class="by" style="width: 160px">
                                     <form method="post" action="/admin/posts/sq">
                                          {{ csrf_field() }} 
                                            <select class="form-control" name="label" style="width:60px;float:left;">
                                              @if($v -> label == 1)
                                                <option name="label" value="2">精华</option>
                                                <option name="label" value="3">置顶</option>
                                              @elseif($v -> label == 2)
                                                <option name="label" value="1">热门</option>
                                                <option name="label" value="3">置顶</option>
                                              @elseif($v -> label == 3)
                                                <option name="label" value="1">热门</option>
                                                <option name="label" value="2">精华</option>
                                              @elseif($v -> label == 4)
                                                <option name="label" value="1">热门</option>
                                                <option name="label" value="2">精华</option>
                                                <option name="label" value="3">置顶</option>
                                              @endif
                                            </select>
                                            <input type="hidden" name="pid" value="{{$v->id}}">
                                              <button type="submit" class="layui-btn layui-btn-xs" >申请</button>
                                              <button type="button" value="{{$v->id}}" class="layui-btn layui-btn-danger layui-btn-xs postsdel">删除</button>

                                     </form>
                                    </td>
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
        </div>
</div>
<script type="text/javascript">
     $('.postsdel').click(function(){
      var obj =  $(this);

      $.get('/admin/postsdel/'+obj.attr('value'),function(msg){
          if(msg == 1){
            layer.msg('删除成功');
            obj.parent().parent().parent().remove();
          }else{
            layer.msg('删除失败');
          }                      
        });
     });
</script>
@stop

