@extends('Home.layout.master')
@section('sidebar')
<div class="bottombg">
      <div id="wp" class="wp xuxian">
        <style id="diy_style" type="text/css"></style>
        <link rel="stylesheet" type="text/css" href="/Home/css/index.css">
       
        <div class="wp">
        
          <div id="diy2" class="area">
            <div id="frameG57R57" class="sybtgg frame move-span cl frame-2-1">
              <div id="frameG57R57_left" class="column frame-2-1-l">
                <div id="frameG57R57_left_temp" class="move-span temp"></div>
                <div id="portal_block_61" class="sybjtj block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">公告列表</span>
                </div>
                 <div class="layui-collapse" lay-accordion="">
				@foreach($data as $v)
				  <div class="layui-colla-item">
				    <h2 class="layui-colla-title" title="点击查看内容">{{ $v->notice_title }}<span style="float: right;">{{ substr($v->created_at,0,10) }}</span></h2>
				    <div class="layui-colla-content ">
				      <p>{!! $v->notice_content !!}</p>
				    </div>
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

<script>
layui.use(['element', 'layer'], function(){
  var element = layui.element;
  var layer = layui.layer;
  
  //监听折叠
  element.on('collapse(test)', function(data){
    layer.msg('展开状态：'+ data.show);
  });
});
</script>
@endsection