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
     <li id="one2" onclick="setTab('one',2,5)" >Ta的积分</li>
     <li id="one3" onclick="setTab('one',3,5)">Ta的帖子</li>   
     <li id="one4" onclick="setTab('one',4,5)">Ta的文章</li>
     <li id="one5" onclick="setTab('one',5,5)">Ta的收藏</li>
  </ul>
  </div> -->
    <div class="lib_Contentbox_sx " style="margin-top: -20px;">  
        <div id="con_one_1" style="height: 500px;">
        <div class="layui-tab layui-tab-card">
          <ul class="layui-tab-title">
            <li class="layui-this">基本资料</li>
            <li>Ta发的贴</li>
            <li>Ta发的文章</li>
            <li>Ta收藏的贴子</li>
            <li>Ta收藏的文章</li>
        </ul>
          <div class="layui-tab-content">
            <!-- Ta的信息 -->
            <div class="layui-tab-item layui-show" style="height: 415px;">
             
              <table style="margin-left: 100px">
                <tr>
                  <td width="150x;" height="50px;">用户昵称</td>
                  <td><span> {{$data->user_name}} </span></td>
                </tr>
                <tr>
                  <tr>
                  <td width="150x;" height="50px;">用户等级</td>
                  <td><span>@if( $data->score <= 50 && $data->score >= 0 )
                         <img src="/Home/picture/star_level1.gif" alt="Rank: 9" /> 
                     @elseif( $data->score <= 150 && $data->score >= 51 )
                         <img src="/Home/picture/star_level1.gif" alt="Rank: 9" />
                         <img src="/Home/picture/star_level1.gif" alt="Rank: 9" />
                     @elseif( $data->score <= 300 && $data->score >= 151 )
                         <img src="/Home/picture/star_level1.gif" alt="Rank: 9" />
                         <img src="/Home/picture/star_level1.gif" alt="Rank: 9" />
                         <img src="/Home/picture/star_level1.gif" alt="Rank: 9" />
                     @elseif( $data->score <= 500 && $data->score >= 301 )
                         <img src="/Home/picture/star_level2.jpg" alt="Rank: 9" />
                     @elseif( $data->score <= 750 && $data->score >= 501 )
                         <img src="/Home/picture/star_level2.jpg" alt="Rank: 9" />
                         <img src="/Home/picture/star_level2.jpg" alt="Rank: 9" />
                     @elseif( $data->score <= 1050 && $data->score >= 751 )
                         <img src="/Home/picture/star_level2.jpg" alt="Rank: 9" />
                         <img src="/Home/picture/star_level2.jpg" alt="Rank: 9" />
                         <img src="/Home/picture/star_level2.jpg" alt="Rank: 9" />
                     @elseif( $data->score <= 1400 && $data->score >= 1051 )
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                     @elseif( $data->score <= 1800 && $data->score >= 1401 )
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                     @elseif( $data->score <= 2250 && $data->score >= 1801 )
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" />  
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                     @elseif(  $data->score >= 2251 )
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                         <img src="/Home/picture/star_level3.gif" alt="Rank: 9" /> 
                     @endif</span></td>
                </tr>
                <tr>
                      <th>头像</th>
                        <td>
                          <img width="60px" height="60px" style="border-radius: 10px;" id="pic"  src="{{ ltrim($data->img,'.') }}"> 
                        </td>
                </tr>
               
                <tr>
                  <td width="150px;" height="50px;">性别</td>
                  <td>
                     @if($data->userinfo->sex == 'm') 男 @endif
                     @if($data->userinfo->sex == 'w') 女 @endif
                     @if($data->userinfo->sex == 'x') 保密 @endif
                  </td>
                </tr>
                <tr>
                  <td width="150x;" height="50px;">年龄</td>
                  <td>{{$data->userinfo->age}}</td>
                </tr>
              </table>
            </div>
            <!-- Ta的信息结束 -->
           
            <!-- Ta发的帖子 -->
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
                                <td class="by" style="width: 50px">作者</td> 
                                <td class="num" >浏览量</td>
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
                          <a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" title="投票 - 新窗口打开" target="_blank">
                            <img src="/Home/images/pollsmall.gif" alt="投票">
                          </a>
                        </td>
                        <th class="common">
                         <a href="/home/read/{{$v->id}}" target="_blank" class="xst">[@if($v->label == 1) 热门 @elseif($v->label == 2) 精品 @elseif($v->label == 3) 置顶 @elseif($v->label == 4) 普通贴 @endif]{{$v -> posts_title}}</a>
                       </th>
                        <td class="by" style="width: 130px"><a href="forum.php?mod=forumdisplay&amp;fid=36" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                        <td class="by" style="width: 100px">
                        <cite>
                        <a href="/home/other/{{ $v->users->id }}" c="1" mid="card_6457">{{$v -> users -> user_name}}</a></cite>
                        <em><span>{{$v -> created_at}}</span></em>
                        </td>
                        <td class="num" style="width: 120px">{{ $v -> post_view }}</td>
                       
                      </tr>
                      </tbody>
                     </table> 
                    </div> 
                    @endforeach
                    </div> 
               </div>
               
            </div>

            <!-- Ta发的文章 -->
            <div class="layui-tab-item">
               <!-- 模板 -->
               <div id="threadlist" class="tl bm bmw"> 
                            <div class="th"> 
                             <table cellspacing="0" cellpadding="0"> 
                              <tbody>
                               <tr> 
                                <th style="width: 80px;"></th>
                                <th colspan="2"> 标题 </th> 
                                <td class="by" style="width: 150px">作者</td> 
                                <td class="by">浏览量</td>
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
                          <a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" title="投票 - 新窗口打开" target="_blank">
                            <img src="/Home/images/pollsmall.gif" alt="投票">
                          </a>
                        </td>
                        <th class="common">
                          {{$v ->article_title}} 
                       </th>
                        
                        <td class="by" style="width: 160px">
                          <cite>
                            <a href="/home/other/{{ $v->users->id }}" c="1" mid="card_6457">{{$v->users->user_name}}</a>
                          </cite>
                            <em><span>{{$v -> created_at}}</span></em>
                        </td>
                         <td class="by" style="width: 120px">
                          {{$v -> article_pview }}
                        </td>
                        
                      </th>
                      </tr>
                      </tbody>
                     </table> 
                    </div> 
                    @endforeach
                  </div>
               </div>
              <!-- Ta发的文章结束 -->
            </div>

            <!-- Ta收藏的帖子 -->
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
                                <td class="num" >浏览</td>
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
                          <a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" title="投票 - 新窗口打开" target="_blank">
                            <img src="/Home/images/pollsmall.gif" alt="投票">
                          </a>
                        </td>
                        <th class="common">
                         <a href="/home/read/{{$v->id}}" target="_blank" class="xst">[@if($v->label == 1) 热门 @elseif($v->label == 2) 精品 @elseif($v->label == 3) 置顶 @elseif($v->label == 4) 普通贴 @endif]{{$v -> posts_title}}</a>
                       </th>
                        <td class="by" style="width: 126px"><a href="forum.php?mod=forumdisplay&amp;fid=36" target="_blank" style="padding-left: 10px;">{{$v -> cates -> title}}</a></td>
                        <td class="by" style="width: 80px">
                        <cite>
                        <a href="/home/other/{{ $v->users->id }}" c="1" mid="card_6457">{{$v -> users -> user_name}}</a></cite>
                        <em><span>{{$v -> created_at}}</span></em>
                        </td>
                        <td class="num" style="width: 190px">
                          {{$v->post_view}}
                        </td>
                        
                      </tr>
                      </tbody>
                     </table> 
                    </div> 
                    @endforeach
                  </div>
               </div>
              <!-- Ta收藏的帖子结束 -->
            </div>

            <!-- Ta收藏的文章 -->
            <div class="layui-tab-item">
              <!-- 模板 -->
               <div id="threadlist" class="tl bm bmw"> 
                            <div class="th"> 
                             <table cellspacing="0" cellpadding="0"> 
                              <tbody>
                               <tr> 
                                <th style="width: 80px;"></th>
                                <th colspan="2"> 标题 </th> 
                                <td class="by" style="width: 150px">作者</td>
                                <td class="by" style="width: 80px">浏览</td>
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
                          <a href="forum.php?mod=viewthread&amp;tid=99&amp;extra=" title="投票 - 新窗口打开" target="_blank">
                            <img src="/Home/images/pollsmall.gif" alt="投票">
                          </a>
                        </td>
                        <th class="common">
                          <a href="/zixun/{{ $v->id }}" c="1" mid="card_6457"> {{$v ->article_title}} </a>
                       </th>
                        
                        <td class="by" style="width: 200px">
                          <cite>
                            {{$v -> article_author}}
                          </cite>
                            <em><span>{{$v -> created_at}}</span></em>
                        </td>
                        <td class="by" style="width: 80px">
                          {{$v -> article_pview}}
                        </td>
                      </th>
                      </tr>
                      </tbody>
                     </table> 
                    </div> 
                    @endforeach
                  </div>
               </div>
            <!-- Ta收藏的文章结束 -->

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




























<!-- <div id="wp" class="wp xuxian">
        <div id="pt" class="bm cl">
        </div>
        <div id="ct" class="ct2_a wp cl">
          <div class="mn">
            <div class="bm bw0">
              <h1 class="mt">个人资料</h1>
              <ul class="tb cl">
                <li class="a">
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=base">基本资料</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=contact">联系方式</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=edu">教育情况</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=work">工作情况</a></li>
                <li>
                  <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=info">个人信息</a></li>
                  <li>
                  <a href="/userposts/{{session('user_id')}}">Ta发的贴子</a></li>
              </ul>
              <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
              <form action="/user/{{$data->id}}/edit" method="get" >
                <input type="hidden" value="316f8b52" name="formhash" />
                <table cellspacing="0" cellpadding="0" class="tfm" id="profilelist">
	                <tr>

	                    <th>用户名</th>
	                    <td>{{$data->user_name}}</td>
	                    <td>&nbsp;</td>
	                </tr>
	                <tr>
	                	<th>头像</th>
	                    <td><img width="100px"  src="{{ $data->img }}"></td>
	                    <td>&nbsp;</td>
	                </tr>
	                <tr>
	                    <th>性别</th>
	                    @if($data -> userinfo -> sex == 'x') <td>保密</td> @endif
	                    @if($data -> userinfo -> sex == 'w') <td>女</td> @endif
	                    @if($data -> userinfo -> sex == 'm') <td>男</td> @endif
	                    @if($data -> userinfo -> sex = null) <td>未填写</td> @endif
	                    <td>&nbsp;</td>
	                </tr>
                  	<tr>
	                    <th>年龄</th>
	                    @if($data -> userinfo -> age) <td>{{$data -> userinfo -> age}}</td> @else <td>未填写</td> @endif
	                    
	                    <td>&nbsp;</td>
	                </tr>
                  	<tr>
	                    <th>电话</th>
	                    @if($data -> userinfo -> user_tel) <td>{{$data -> userinfo -> user_tel}}</td> @else <td>未填写</td> @endif
	                    <td>&nbsp;</td>
	                </tr>
	                <tr>
	                    <th>邮箱</th>
	                    <td>{{$data->user_email}}</td>
	                    <td>&nbsp;</td>
	                </tr>
	                <tr>
	                	<th>生日</th>
	                     @if($data -> userinfo -> birthday) <td>{{$data -> userinfo -> birthday}}</td> @else <td>未填写</td> @endif
	                    <td>&nbsp;</td>
	                </tr>

                  <tr>
                    <th>&nbsp;</th>
                    <td colspan="2">
                      <input type="hidden" name="profilesubmit" value="true" />
                      <button type="submit" name="profilesubmitbtn"  value="true" class="pn pnc" />
                      <strong>点击修改</strong></button>
                      <span id="submit_result" class="rq"></span>
                    </td>
                  </tr>
                </table>
              </form>
              <script type="text/javascript">function show_error(fieldid, extrainfo) {
                  var elem = $('th_' + fieldid);
                  if (elem) {
                    elem.className = "rq";
                    fieldname = elem.innerHTML;
                    extrainfo = (typeof extrainfo == "string") ? extrainfo: "";
                    $('showerror_' + fieldid).innerHTML = "请检查该资料项 " + extrainfo;
                    $(fieldid).focus();
                  }
                }
                function show_success(message) {
                  message = message == '' ? '资料更新成功': message;
                  showDialog(message, 'right', '提示信息',
                  function() {
                    top.window.location.href = top.window.location.href;
                  },
                  0, null, '', '', '', '', 3);
                }
                function clearErrorInfo() {
                  var spanObj = $('profilelist').getElementsByTagName("div");
                  for (var i in spanObj) {
                    if (typeof spanObj[i].id != "undefined" && spanObj[i].id.indexOf("_")) {
                      var ids = explode('_', spanObj[i].id);
                      if (ids[0] == "showerror") {
                        spanObj[i].innerHTML = '';
                        $('th_' + ids[1]).className = '';
                      }
                    }
                  }
                }</script>
            </div>
          </div>
          <div class="appl">
            <div class="tbn">
              <h2 class="mt bbda">设置</h2>
              <ul>
              	 <li class="a">
	                  <a href="/user">个人资料</a>
	              </li>
	              <li>
	                  	<a href="/user/{{$data->id}}/edit">修改个人资料</a>
	              </li>
	              <li>
	                  <a href="home.php?mod=spacecp&amp;ac=credit">修改密码</a>
	              </li>
	                <li>
	                  <a href="home.php?mod=spacecp&amp;ac=credit">关注的人</a>
	              </li>
	              <li>
	                  <a href="home.php?mod=spacecp&amp;ac=credit">关注的帖子</a>
	              </li>
               
              </ul>
            </div>
          </div>
        </div>
      </div> -->

@stop
