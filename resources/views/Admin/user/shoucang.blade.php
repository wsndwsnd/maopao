@extends('Admin.layout.Index')

@section('content')

<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
  <ul class="layui-tab-title">
    <li class="layui-this">文章收藏</li>
    <li>帖子收藏</li>

  </ul>
  <div class="layui-tab-content" style="height: 100px;">
    <div class="layui-tab-item layui-show">
						<div class="mws-panel-body no-padding">
					        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
							
					        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
					            <thead>
					                <tr role="row">
					                	
					                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 120px;">
										标题
					                	
					                
					                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
					                	操作
					                	</th>
					                </tr>
					            </thead>
					            
						        <tbody role="alert" aria-live="polite" aria-relevant="all" >
							        @foreach($data2 as $v)
										
							        	<tr class="even " style="border:1px solid #ddd;text-align: center" >
							              
					                        <td class=" ">{!! $v->article_title !!}</td>
							                
							            	 <td>
												<a href="/admin/del1?uid={{ $id }}&aid={{ $v->id }}" class="btn btn-danger">删除</a>
												<a href="/admin/article/{{ $v->id }}" class="btn btn-info">查看内容</a>

											</td>
							            </tr>
							        @endforeach
						        </tbody>
					    	</table>
							   
					    	</div>
					    	<div class="btn-toolbar">
							    <a href="/admin/user"><button type="button" class="btn btn-success btn-large" style="width:200px;margin-left: 20px">返 回</button>
							   	</a>
							</div>
					   </div>


    </div>
    <div class="layui-tab-item">
				<div class="mws-panel-body no-padding">
					        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
							
					        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
					            <thead>
					                <tr role="row">
					                	
					                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 120px;">
										标题
					                	
					                
					                	<th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
					                	操作
					                	</th>
					                </tr>
					            </thead>
					            
						        <tbody role="alert" aria-live="polite" aria-relevant="all" >
							        @foreach($data3 as $v)
							        	<tr class="even " style="border:1px solid #ddd;text-align: center" >
							              
					                        <td class=" ">{!! $v->posts_title !!}</td>
							                
							            	 <td>
												<a href="/admin/del2?uid={{ $id }}&pid={{ $v->id }}" class="btn btn-danger">删除</a>
												<a href="/admin/posts/{{ $v->id }}" class="btn btn-info">查看内容</a>

											</td>
							            </tr>
							        @endforeach
						        </tbody>
					    	</table>
							   
					    	</div>
					    	<div class="btn-toolbar">
							    <a href="/admin/user"><button type="button" class="btn btn-success btn-large" style="width:200px;margin-left: 20px">返 回</button>
							   	</a>
							</div>
					   </div>

		
		
    </div>

  </div>
</div> 

@endsection