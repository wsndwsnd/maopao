@extends('Home.layout.master')
@section('sidebar')
<div>
    <div id="postsdiv_postsdiv">
        <!-- 克隆模板 -->
        <li style="list-style: none;float: left; display:none; margin:5px;" class="postsdiv"><a href=""><img src="" height="310px" width="310px"></a></li>
    </div>

  <div style=" width: 960px; margin:10px auto;">
    
      <ul style="list-style: none;"  class="xxoo">
        @foreach($data as $v)
        <li style="list-style: none;float: left; margin:5px;"><a href="/zixun/{{$v->id}}"><img src="{{$v->article_img}}" height="310px" width="310px"></a></li>
        @endforeach
      </ul>
 </div>
</div>
<hr>
<script type="text/javascript">
  //页数
  var p = 2;
  //指针
  var isDoor = true;
  //滚动事件
   $(window).scroll(function(){
    if(!isDoor) return ;
    //获取文档的高度
    var dH = $(document).height() - 150;
    //获取窗口的高度
    var wH = $(window).height();
    //获取滚进去的高度
    var sH = $(window).scrollTop();

      // console.log(wH);
      // console.log(sH);
    if(dH <= wH + sH)
    {
        run();
        isDoor = false;
    }
  })

  run();
  function run()
  {
      $.ajax({
              url:'/pbl/ajax',
              data:{p:p},
              type:'GET',
              success:function(data)
              {
                  if(data.length == 0)
                  {
                      return ;
                  }
                  $(data).each(function(i, n){
                      var newDiv = $("#postsdiv_postsdiv .postsdiv").clone(true);
                      newDiv.find('img').attr('src', n['article_img']);
                      newDiv.find('a').attr('href','/zixun/'+n['id']);
                      //设置样式
                      newDiv.css('display','block');
                      $('.xxoo').append(newDiv);
                  });

                  p++;
                  isDoor = true;
              },
              error:function()
              {
                  console.log('异常');
              },
              dataType:'json'
          });
  }
</script>
@stop
