@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_7" >
	<div class="mws-panel-header">
    	<span>封面</span>
    </div>
    <div class="mws-panel-body">
    	<center>
    	<p><img src="{{ltrim($data->article_img,'.')}}" alt="" width="300px" ></p>
    	</center>	
    	<hr> 
       <div class="mws-panel-header" style="width:1018px;margin-left: -28px; ">
            <span>内容</span>
        </div>
        <div style="height:500px; ">
           

            <p>{!! $data->article_content !!}</p>
        </div>
    </div>
</div>
<div class="btn-toolbar">
    <a href="/admin/article"><button type="button" class="btn btn-success btn-large" style="width:200px;margin-left: 20px">返 回</button>
   	</a>
</div>
@endsection