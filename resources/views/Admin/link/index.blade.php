@extends('Admin.layout.Index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>友情链接列表</span>
    </div>
    	<form action="/admin/link" method="get">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length"><label>显示 <form></form><select size="1" name="count" aria-controls="DataTables_Table_1"><option value="5" @if($count==5) selected @endif>5</option><option value="10" @if($count==10) selected @endif>10</option><option value="15" @if($count==15) selected @endif>15</option><option value="20" @if($count==20) selected @endif>20</option></select> 条</label>&nbsp;&nbsp;&nbsp;总共{{ $num }}条</div><div class="dataTables_filter" id="DataTables_Table_1_filter"><label>Search: <input type="text" name="Link_text"aria-controls="DataTables_Table_1" value="{{ $Link_text or ''}}"><input type="submit" value="搜索" class="btn btn-info" ></label></div><table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        </form>
        <thead>
            <tr role="row"><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 10px;">编号</th><th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 130px;">描述</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 163px;">地址</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">联系电话</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 120px;">创建时间</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 50px;">状态</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">操作</th></tr>
        </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        	@foreach($data as $v)
        	<tr class="even " >

                    <td class="sorting_1" style="text-align: center;">{{ $v->id }}</td>
                    <td class=" " style="text-align: center;">{{ $v->Link_text }}</td>
                    <td class=" " style="text-align: center;">{{ $v->Link_url }}</td>
                    <td class=" " style="text-align: center;">{{ $v->tel }}</td>
                    <td class=" " style="text-align: center;">{{ $v->created_at }}</td>
                    @if( $v->status  == '3')
                        <td class=" " style="text-align: center;"> 线上  </td>
                    @else
                        <td class=" " style="text-align: center;"> 线下  </td>
                    @endif
                    <td class=" " style="text-align: center;">
						 <form action="/admin/link/{{$v->id}}" method="post" style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="删除" class="btn btn-danger" onclick="return confirm('确定删除吗')">
                         </form>
                         <a href="/admin/link/{{$v->id}}/edit" class="btn btn-warning">修改</a>
                         @if( $v->status == 0)
                            <a href="/admin/link/up/{{$v->id}}" class="btn btn-success">发布</a>
                            @else
                            <a href="/admin/link/down/{{$v->id}}" class="btn btn-efault" style="background: #ccc">下线</a>
                            @endif
                    </td>
                </tr>
               @endforeach
            </tbody></table>
            <div class="page dataTables_paginate paging_full_numbers">
					{!! $data->appends(['Link_text'=>$Link_text])->render() !!}
            </div>
    </div>
</div>

@endsection