@extends('Admin.layout.Index')
@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>轮播图详情</span>
    </div>
        
            
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">

        <thead>
            <tr role="row">
                <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 188px;">编号
                </th>
                <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 247px;">图片名
                </th>
                <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 247px;">状态
                </th>
                <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 163px;">操作
                </th>
                
            </tr>
        </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
            
            <tr class="even " >
                    <td class="sorting_1" style="text-align: center;">{{$data->slide_id}}</td>
                    <td class=" " style="text-align: center;">{{$data->slide_img}}</td>
                    <td class=" " style="text-align: center;">
                        @if($data->slide_status ==0)显示@else隐藏@endif
                    </td>
                    <td class=" " style="text-align: center;">
                         <a href="/admin/slide/{{$data->slide_id}}/edit" class="btn btn-warning">修改</a>
                    </td>
            </tr>
            <tr>
                <td colspan="4" class="" style="text-align: center;">
                    <img src="{{$data->slide_url}}" width="400">
                </td>
            </tr>
            </tbody>
        </table>
            
    </div>
</div>
@endsection

