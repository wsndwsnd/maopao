@extends('Admin.layout.index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 帖子列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
			<form action="/admin/posts" method="get">
	        	<div id="DataTables_Table_1_length" class="dataTables_length">
	        		<label>显示
	        			<select  name="count" aria-controls="DataTables_Table_1">
		        			<option value="5"   @if($count==5) selected @endif>5</option>
		        			<option value="10"  @if($count==10) selected @endif>10</option>
		        			<option value="15"  @if($count==15) selected @endif>15</option>
		        			<option value="20"  @if($count==20) selected @endif>20</option>
	        			</select>条
	        		</label>
	        	</div>
	        	<div class="dataTables_filter" id="DataTables_Table_1_filter">
	        		<label>关键字:<input type="text" aria-controls="DataTables_Table_1" name="posts_title" value="{{ $params['notice_title'] or ''}}">
	        			<input type="submit" value="搜索" class="btn btn-info"></label>
	        	</div>
        	</form>
        	<table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr role="row">
                	<th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">
                	编号
                	</th>
                	<th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">
                	类别
                	</th>
                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 120px;">
                	标题
                	</th>
             	    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">
                	作者
                	</th>
                	 <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 50px;">
                	浏览量
                	</th>
                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">
                	添加时间
                	</th>
                	
                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 30px;">
                	申请标签
                	</th>
                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 82px;">
                	操作
                	</th>
                </tr>
            </thead>
            
	        <tbody role="alert" aria-live="polite" aria-relevant="all" >
		        @foreach($data as $k=>$v)
		        	<tr class="even " style="border:1px solid #ddd;text-align: center" >
		                <td class=" ">{{ $v->id }}</td>
		                <td>{{ $v->cates->title }}</td>
		                <td class=" ">{{ $v->posts_title}}</td>
		                
		               
		                <td class=" "> @if(isset($v->users)){{ $v->users->user_name }} @endif  </td>
		                <td class=" ">@if(isset($v->postsinfo)){{ $v->postsinfo->count }} @endif</td>

		                <td class=" ">{{ $v->created_at}}</td>
		                @if( $v->uplabel == 1)
		                <td class=" ">热门</td>
		                @elseif($v->uplabel == 2)
						<td class=" ">精品</td>
						@elseif($v->uplabel == 3)
						<td class=" ">置顶</td>

		                @endif
		            	 <td>
							<a href="/admin/posts/uplabel/{{ $v->id }}" class="btn btn-warning">通过</a>
							<form action="/admin/posts/{{ $v->id }}" method="post" style="display:inline;line-height:30px">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<input type="submit" value="删除" class="btn btn-danger" onclick="return confirm('确认要删除吗?')">
							</form>
							<a href="/admin/posts/{{ $v->id }}" class="btn btn-info">详情</a>
							
						</td>
		            </tr>
		        @endforeach
	        </tbody>
    	</table>
	    <div class="page dataTables_paginate paging_full_numbers">
	        {!! $data->appends(['posts_title'=>$posts_title])->render() !!}
	    </div>
    </div>
</div>
@endsection