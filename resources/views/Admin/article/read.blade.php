@extends('Admin.layout.Index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 文章列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
		<form action="/admin/comments/{{$id}}" method="get">
        	<div id="DataTables_Table_1_length" class="dataTables_length">
        		<label style="color: white;">显示
        			<select size="1" name="count" aria-controls="DataTables_Table_1">
	        			<option value="5"  @if($count == 5) selected @endif>5</option>
	        			<option value="10" @if($count == 10) selected @endif>10</option>
	        			<option value="15" @if($count == 15) selected @endif>15</option>
	        			<option value="20" @if($count == 20) selected @endif>20</option>
        			</select>条
        		</label>
        		<input type="submit" value="搜索" class="btn btn-info">
        		 <font style="color: white;">总共{{ $num }} 条</font>
        	</div>
        	
  
        			
             	
        </form>
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr role="row">
                	<th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 30px;">
                	编号
                	</th>
                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 120px;">
					内容
                	</th>
                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 60px;">
                    评论者
                    </th>
                    
                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 60px;">
                	评论时间
                	</th>
                
                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
                	操作
                	</th>
                </tr>
            </thead>
            
	        <tbody role="alert" aria-live="polite" aria-relevant="all" >
		        @foreach($data as $v)
		        	<tr class="even " style="border:1px solid #ddd;text-align: center" >
		                <td class=" ">{{ $v->id }}</td>
		                <td class=" ">{{ $v->content }}</td>
		                <td class=" ">{{ $v->users->user_name }}</td>
                        <td class=" ">{{ $v->created_at}}</td>
		                
		            	 <td>
							<a href="/admin/comments/del/{{ $v->id }}" class="btn btn-danger">删除</a>
						</td>
		            </tr>
		        @endforeach
	        </tbody>
    	</table>
		    <div class="page dataTables_paginate paging_full_numbers">
		        {!! $data->render() !!}
		 	</div>
    	</div>
    	<div class="btn-toolbar">
		    <a href="/admin/article"><button type="button" class="btn btn-success btn-large" style="width:200px;margin-left: 20px">返 回</button>
		   	</a>
		</div>
   </div>
</div>
@endsection