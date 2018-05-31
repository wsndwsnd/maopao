@extends('Admin.layout.index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>关于帖子</span>
    </div>
    <div class="mws-panel-body no-padding">

    		  <div class="mws-panel-body">
	    	<center>
	    	<p><img src="{{ $data->postsinfo->pic }}" alt="" width="500px" ></p>
	    	</center>	
	    	<hr>
	        <p>{{$data->postsinfo->content}}</p>
	    </div>
	</div>
	<div class="btn-toolbar">
	    <a href="/admin/posts"><button type="button" class="btn btn-success btn-large" style="width:200px;margin-left: 20px">返 回</button>
	   	</a>
	    </div>    	
</div>



@endsection