@extends('Home.layout.master')
@section('sidebar')

<div id="wp" class="wp xuxian">
<script rel="stylesheet" href="/layui/layui.all.js"></script>
<!-- 选项卡 -->
<script>

  function setTab(name,cursel,n){
   for(i=1;i<=n;i++){
    var menu=document.getElementById(name+i);
    var con=document.getElementById("con_"+name+"_"+i);
    menu.className=i==cursel?"hover":"";
    con.style.display=i==cursel?"block":"none";
   }
  }

</script>


<script language="JavaScript">
    var changeDD = 1;//->一个全局变量
    function YYYYMMDDstart() {
        MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        //先给年下拉框赋内容
        var y = new Date().getFullYear();
        for (var i = (y - 47); i < (y + 21); i++) //以今年为准，前30年，后30年
            document.reg_testdate.YYYY.options.add(new Option(" " + i + " 年", i));
        //赋月份的下拉框
        for (var i = 1; i < 13; i++)
            document.reg_testdate.MM.options.add(new Option(" " + i + " 月", i));
        document.reg_testdate.YYYY.value = y;
        document.reg_testdate.MM.value = new Date().getMonth() + 1;
        var n = MonHead[new Date().getMonth()];
        if (new Date().getMonth() == 1 && IsPinYear(YYYYvalue)) n++;
        writeDay(n); //赋日期下拉框
        //->赋值给日，为当天日期
       document.reg_testdate.DD.value = new Date().getDate();
    }
    if (document.attachEvent)
        window.attachEvent("onload", YYYYMMDDstart);
    else
        window.addEventListener('load', YYYYMMDDstart, false);

    function YYYYDD(str) //年发生变化时日期发生变化(主要是判断闰平年)
    {
        var MMvalue = document.reg_testdate.MM.options[document.reg_testdate.MM.selectedIndex].value;
        if (MMvalue == "") {

            optionsClear(e);
            return;
        }
        var n = MonHead[MMvalue - 1];
        if (MMvalue == 2 && IsPinYear(str)) n++;
        writeDay(n)
    }

    function MMDD(str) //月发生变化时日期联动
    {
        var YYYYvalue = document.reg_testdate.YYYY.options[document.reg_testdate.YYYY.selectedIndex].value;
        if (YYYYvalue == "") {
            var e = document.reg_testdate.DD;
            optionsClear(e);
            return;
        }
        var n = MonHead[str - 1];
        if (str == 2 && IsPinYear(YYYYvalue)) n++;
        writeDay(n)
    }

    function writeDay(n) //据条件写日期的下拉框
    {
        var e = document.reg_testdate.DD;
        optionsClear(e);
        for (var i = 1; i < (n + 1); i++)
        {
            e.options.add(new Option(" " + i + " 日", i));
            if(i == changeDD){
                e.options[i].selected = true;  //->保持选中状态
            }
        }
        console.log(i);
        console.log(changeDD);
    }

    function IsPinYear(year) //判断是否闰平年
    {
        return (0 == year % 4 && (year % 100 != 0 || year % 400 == 0));
    }

    function optionsClear(e) {
        e.options.length = 1;
    }
    //->随时监听日的改变
    function DDD(str){
        changeDD = str;
    }
</script>

<br>
<center>
<div style="">
  <div id="lib_Tab1_sx" class="lib_tabborder_sx">
 <!--  <div class="lib_Menubox_sx ">
  <ul>
     <li id="one1" onclick="setTab('one',1,5)" class="hover">个人资料</li>
     <li id="one2" onclick="setTab('one',2,5)" >我的积分</li>
     <li id="one3" onclick="setTab('one',3,5)">我的帖子</li>   
     <li id="one4" onclick="setTab('one',4,5)">我的文章</li>
     <li id="one5" onclick="setTab('one',5,5)">我的收藏</li>
  </ul>
  </div> -->
    <div class="lib_Contentbox_sx " style="margin-top: -20px;">  
        <div id="con_one_1" style="height: 500px;">
        <div class="layui-tab layui-tab-card">
          <ul class="layui-tab-title">
            <li class="layui-this">基本资料</li>
            <li>我关注的人</li>
            <li>我发的贴</li>
            <li>我发的文章</li>
            <li>我收藏的贴子</li>
            <li>我收藏的文章</li>
        </ul>
          <div class="layui-tab-content">
            <!-- 我的信息 -->
            <div class="layui-tab-item layui-show" style="height: 415px;">
              <form action="/user/{{$data->id}}" method="post" enctype="multipart/form-data" name="reg_testdate">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <table style="margin-left: 100px">
                <tr>
                  <td width="150x;" height="50px;">用户昵称(不可更改)</td>
                  <td><span> {{$data->user_name}} </span></td>
                </tr>
                <tr>
                  <td width="150x;" height="50px;">注册电话(不可更改)</td>
                  <td><span> {{$data->user_tel}} </span></td>
                </tr>
                <tr>
                  <tr>
                  <td width="150x;" height="50px;">用户等级</td>
                  <td><span>@if( $data->score <= 50 && $data->score >= 0 )
                         <img src="/home/picture/star_level1.gif" alt="Rank: 9" /> 
                     @elseif( $data->score <= 150 && $data->score >= 51 )
                         <img src="/home/picture/star_level1.gif" alt="Rank: 9" />
                         <img src="/home/picture/star_level1.gif" alt="Rank: 9" />
                     @elseif( $data->score <= 300 && $data->score >= 151 )
                         <img src="/home/picture/star_level1.gif" alt="Rank: 9" />
                         <img src="/home/picture/star_level1.gif" alt="Rank: 9" />
                         <img src="/home/picture/star_level1.gif" alt="Rank: 9" />
                     @elseif( $data->score <= 500 && $data->score >= 301 )
                         <img src="/home/picture/star_level2.jpg" alt="Rank: 9" />
                     @elseif( $data->score <= 750 && $data->score >= 501 )
                         <img src="/home/picture/star_level2.jpg" alt="Rank: 9" />
                         <img src="/home/picture/star_level2.jpg" alt="Rank: 9" />
                     @elseif( $data->score <= 1050 && $data->score >= 751 )
                         <img src="/home/picture/star_level2.jpg" alt="Rank: 9" />
                         <img src="/home/picture/star_level2.jpg" alt="Rank: 9" />
                         <img src="/home/picture/star_level2.jpg" alt="Rank: 9" />
                     @elseif( $data->score <= 1400 && $data->score >= 1051 )
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                     @elseif( $data->score <= 1800 && $data->score >= 1401 )
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                     @elseif( $data->score <= 2250 && $data->score >= 1801 )
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" />  
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                     @elseif(  $data->score >= 2251 )
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/home/picture/star_level3.gif" alt="Rank: 9" /> 
                     @endif</span></td>
                </tr>
                <tr>
                      <th>头像</th>
                        <td>
                          <label for="test1">
                          <img width="60px" height="60px" style="border-radius: 10px;" id="pic"  src="{{ ltrim($data->img,'.') }}"> 
                          </label>
                          <button type="button" class="layui-btn" id="test1" style="display: none">
                      <i class="layui-icon">&#xe67c;</i>上传头像
                    </button>
                    
                        </td>
                </tr>
                <!-- 修改头像 -->
                <script>
                    layui.use('upload', function(){
                      var upload = layui.upload;
                      //执行实例
                      var uploadInst = upload.render({
                        elem: '#test1' //绑定元素
                        ,url: '/admin/site/logo' //上传接口
                        ,method:'POST'
                        ,data:{'_token':'{{csrf_token()}}'}
                        ,field:'profile'
                        ,done: function(res){
                          //上传完毕回调
                          if(res.code == 1){
                            layer.msg(res.msg);
                            $("#pic").attr('src',res.data.src);
                          }else{
                            layer.msg(res.msg);
                          }
                        }
                        ,error: function(){
                          //请求异常回调
                        }
                      });
                    });
                    </script>
                <tr>
                  <td width="150px;" height="50px;">性别</td>
                  <td>
                    <input type="radio" name="sex" value="m"  @if($data->userinfo->sex == 'm') checked @endif>男
                    <input type="radio" name="sex" value="w"  @if($data->userinfo->sex == 'w') checked @endif>女
                    <input type="radio" name="sex" value=""  @if($data->userinfo->sex == 'x') checked @endif>保密
                  </td>
                </tr>
                <tr>
                  <td width="150x;" height="50px;">年龄</td>
                  <td><input type="text" name="age" value="{{$data->userinfo->age}}"></td>
                </tr>
                <tr>
                  <td width="150x;" height="50px;">常用邮箱</td>
                  <td><input type="text" name="user_email" value="{{$data->user_email}}"></td>
                </tr>
                
                <tr>
                  <td width="150px;" height="50px;"></td>
                  <td>
                    <button style="border-radius: 5px;" class="layui-btn">保存</button>
                  </td>
                </tr>
              </table>
            </form>
            </div>
            <!-- 我的信息结束 -->

            <div class="layui-tab-item">3</div>

            <!-- 我发的帖子 -->
            <div class="layui-tab-item">
              <!-- 模板 -->
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
                                <td class="by" >申请</td>
                               </tr> 
                              </tbody>
                             </table> 
                            </div>
                 <div style="height:300px;overflow-y:auto;">          
                 @foreach($user_posts as $v)
                  <div class="bm_c"> 
                     <div id="forumnew" style="display:none"></div> 
                     <table cellspacing="0" cellpadding="0"> 
                     <tbody id="normalthread_99">
                       <tr style="font-size: 12px;">
                        <td class="icn" style="width: 100px">
                         
                        </td>
                        <th class="common">
                           @if($v->label ==1)
                            <img src="/Home/picture/huo.jpg" alt="热门">
                            @elseif($v->label ==2)
                            <img src="/Home/picture/digest_3.gif" alt="精品">
                            @elseif($v->label ==3)
                            <img src="/Home/picture/zhiding.jpg" alt="置顶" width="25px">
                            @endif
                         <a href="/home/read/{{$v->id}}" target="_blank" class="xst">@if($v->label == 1) <font style="color
                                             :orange;">[热门]</font> @elseif($v->label == 2) <font style="color:#02E8EF">[精品]</font> @elseif($v->label == 3) <font style="color: #679EFF">[置顶]</font> @elseif($v->label == 0) [普通贴] @endif{{$v -> posts_title}}</a>
                       </th>
                        <td class="by" style="width: 130px">
                          <a href="/home/luntan/{{ $v->cates->id }}" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                        <td class="by" style="width: 100px">
                        <cite>
                        <a href="/home/read/{{$v->id}}" c="1" mid="card_6457">{{$v -> users -> user_name}}</a></cite>
                        <em><span>{{$v -> created_at}}</span></em>
                        </td>
                        <td class="num" style="width: 120px">{{ $v->plhfs->count() }}</td>
                        <td class="by" style="width: 150px">
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
                                  @elseif($v -> label == 0)
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
                <!-- ajax 删除我的帖子 -->
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
              <!-- 我发的帖子结束 -->
            </div>

            <!-- 我发的文章 -->
            <div class="layui-tab-item">
               <!-- 模板 -->
               <div id="threadlist" class="tl bm bmw"> 
                            <div class="th"> 
                             <table cellspacing="0" cellpadding="0"> 
                              <tbody>
                               <tr> 
                                <th style="width: 80px;"></th>
                                <th colspan="2"> 标题 </th> 
                                <td class="by" style="width: 80px">作者</td> 
                                <td class="num" >删除</td>
                               </tr> 
                              </tbody>
                             </table> 
                            </div>
                 <div style="height:300px;overflow-y:auto;">           
                 @foreach($user_article as $v)
                  <div class="bm_c"> 
                     <div id="forumnew" style="display:none"></div> 
                     <table cellspacing="0" cellpadding="0"> 
                     <tbody id="normalthread_99">
                       <tr style="font-size: 12px;">
                        <td class="icn" style="width: 100px">
                         
                        </td>
                        <th class="common" style="color: skyblue;">
                          <a href="/zixun/{{ $v->id }}" target="_blank" style="padding-left: 10px;">{{$v ->article_title}}</a>

                       </th>
                        
                        <td class="by" style="width: 160px">
                          <cite>
                            <a href="/home/read/{{$v->id}}" c="1" mid="card_6457">{{session('user_name')}}</a>
                          </cite>
                            <em><span>{{$v -> created_at}}</span></em>
                        </td>
                        
                        <td class="by" style="width: 100px">
                         <form method="post" action="/admin/posts/sq">
                              {{ csrf_field() }} 
                                
                                <input type="hidden" name="aid" value="{{$v->id}}">
                                  <button type="button" value="{{$v->id}}" class="layui-btn layui-btn-danger layui-btn-xs postsdel1">删除</button>

                         </form>
                        </td>
                      </th>
                      </tr>
                      </tbody>
                     </table> 
                    </div> 
                    @endforeach
                  </div>
               </div>
                <!-- ajax 删除我的文章 -->
                <script type="text/javascript">
                     $('.postsdel1').click(function(){
                      var obj =  $(this);

                      $.get('/admin/articleajax/'+obj.attr('value'),function(msg){
                          if(msg == 1){
                            layer.msg('删除成功');
                            obj.parent().parent().parent().remove();
                          }else{
                            layer.msg('删除失败');
                          }                      
                        });
                     });
                </script>
              <!-- 我发的文章结束 -->
            </div>

            <!-- 我收藏的帖子 -->
            <div class="layui-tab-item">
              <!-- 模板 -->
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
                                <td class="by" style="width: 125px">操作</td>
                               </tr> 
                              </tbody>
                             </table> 
                            </div>
                 <div style="height:300px;overflow-y:auto;">           
                 @foreach($user_pcollects as $v)
                  <div class="bm_c"> 
                     <div id="forumnew" style="display:none"></div> 
                     <table cellspacing="0" cellpadding="0"> 
                     <tbody id="normalthread_99">
                       <tr style="font-size: 12px;">
                        <td class="icn" style="width: 100px">
                         
                        </td>
                        <th class="common">
                            @if($v->label ==1)
                            <img src="/Home/picture/huo.jpg" alt="热门">
                            @elseif($v->label ==2)
                            <img src="/Home/picture/digest_3.gif" alt="精品">
                            @elseif($v->label ==3)
                            <img src="/Home/picture/zhiding.jpg" alt="置顶" width="25px">
                            @endif
                         <a href="/home/read/{{$v->id}}" target="_blank" class="xst">@if($v->label == 1) <font style="color
                                             :orange;">[热门]</font> @elseif($v->label == 2) <font style="color:#02E8EF">[精品]</font> @elseif($v->label == 3) <font style="color: #679EFF">[置顶]</font> @elseif($v->label == 0) [普通贴] @endif{{$v -> posts_title}}</a>
                       </th>
                        <td class="by" style="width: 126px"><a href="/home/luntan/{{ $v->cates->id }}" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                        <td class="by" style="width: 80px">
                        <cite>
                        <a href="/home/read/{{$v->id}}" c="1" mid="card_6457">{{$v -> users -> user_name}}</a></cite>
                        <em><span>{{$v -> created_at}}</span></em>
                        </td>
                        <td class="num" style="width: 190px">{{ $v->plhfs->count() }}</td>
                        <td class="by" style="width: 140px">
                         <form method="post" action="/admin/posts/sq">
                              {{ csrf_field() }} 
                                <input type="hidden" name="pid" value="{{$v->id}}">
                                  <button type="button" value="{{$v->id}}" class="layui-btn layui-btn-danger layui-btn-xs postsdel">取消收藏</button>

                         </form>
                        </td>
                      </tr>
                      </tbody>
                     </table> 
                    </div> 
                    @endforeach
                  </div>
               </div>
                <!-- ajax 删除我收藏的帖子 -->
                <script type="text/javascript">
                     $('.postsdel').click(function(){
                      var obj =  $(this);

                      $.get('/admin/postsdel/'+obj.attr('value'),function(msg){
                          if(msg == 1){
                            layer.msg('成功');
                            obj.parent().parent().parent().remove();
                          }else{
                            layer.msg('失败');
                          }                      
                        });
                     });
                </script>
              <!-- 我收藏的帖子结束 -->
            </div>

            <!-- 我收藏的文章 -->
            <div class="layui-tab-item">
              <!-- 模板 -->
               <div id="threadlist" class="tl bm bmw"> 
                            <div class="th"> 
                             <table cellspacing="0" cellpadding="0"> 
                              <tbody>
                               <tr> 
                                <th style="width: 80px;"></th>
                                <th colspan="2"> 标题 </th> 
                                <td class="by" style="width: 80px">作者</td> 
                                <td class="num" >取消收藏</td>
                               </tr> 
                              </tbody>
                             </table> 
                            </div>
                 <div style="height:300px;overflow-y:auto;">           
                 @foreach($user_acollects as $v)
                  <div class="bm_c"> 
                     <div id="forumnew" style="display:none"></div> 
                     <table cellspacing="0" cellpadding="0"> 
                     <tbody id="normalthread_99">
                       <tr style="font-size: 12px;">
                        <td class="icn" style="width: 100px">
                         
                        </td>
                        <th class="common">
                          {{$v ->article_title}} 
                       </th>
                        
                        <td class="by" style="width: 160px">
                          <cite>
                            <a href="/home/read/{{$v->id}}" c="1" mid="card_6457">{{session('user_name')}}</a>
                          </cite>
                            <em><span>{{$v -> created_at}}</span></em>
                        </td>
                        
                        <td class="by" style="width: 100px">
                         <form method="post" action="/admin/posts/sq">
                              {{ csrf_field() }} 
                                
                                <input type="hidden" name="aid" value="{{$v->id}}">
                                  <button type="button" value="{{$v->id}}" class="layui-btn layui-btn-danger layui-btn-xs postsdel1">取消收藏</button>

                         </form>
                        </td>
                      </th>
                      </tr>
                      </tbody>
                     </table> 
                    </div> 
                    @endforeach
                  </div>
               </div>
                <!-- ajax 删除我收藏的文章 -->
                <script type="text/javascript">
                     $('.postsdel1').click(function(){
                      var obj =  $(this);

                      $.get('/admin/articleajax/'+obj.attr('value'),function(msg){
                          if(msg == 1){
                            layer.msg('成功');
                            obj.parent().parent().parent().remove();
                          }else{
                            layer.msg('失败');
                          }                      
                        });
                     });
                </script>

            </div>
            <!-- 我收藏的文章结束 -->

          </div>
        </div>
        </div>
        <div id="con_one_2" style="display:none;height: 500px;">JS代码</div>
        <div id="con_one_3" style="display:none;height: 500px;">欣赏借鉴</div>
        <div id="con_one_4" style="display:none;height: 500px;">建站技巧</div> 
        <div id="con_one_5" style="display:none;height: 500px;">导航代码</div> 
    </div>
  </div>
</div>
</center>
</div>

@stop
