@extends('Admin.layout.Index')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>广告列表</span>
    </div>
        <form action="/admin/advertise" method="get">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>显示 <form></form>
                        <select size="1" name="count" aria-controls="DataTables_Table_1">
                            <option value="5" @if($count==5) selected @endif>5</option>
                            <option value="10" @if($count==10) selected @endif>10</option>
                            <option value="15" @if($count==15) selected @endif>15</option>
                            <option value="20" @if($count==20) selected @endif>20</option>
                        </select> 条</label>&nbsp;&nbsp;&nbsp;总共{{$num}}条
                    </div>
                        <div class="dataTables_filter" id="DataTables_Table_1_filter">
                            <label>Search: 
                                <input type="text" name="title"aria-controls="DataTables_Table_1" value="">
                                <input type="submit" value="搜索" class="btn btn-info" >
                            </label>
                        </div>
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        </form>
        <thead>
            <tr role="row">
                <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 188px;">编号
                </th>
                <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 247px;">广告标题
                </th>
                <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 247px;">广告状态
                </th>
                <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 247px;">广告位置
                </th>
                <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 163px;">预览图
                </th>
                <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 123px;">操作
                </th>
            </tr>
        </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
            @foreach($data as $val)
            <tr class="even " >
                    <td class="sorting_1" style="text-align: center;">{{ $val->id }}</td>
                    <td class=" " style="text-align: center;">{{ $val->title }}</td>
                    <td class=" " style="text-align: center;">
                        @if($val->status ==0)隐藏@endif
                        @if($val->status ==1)显示@endif
                    </td>
                    <td class=" " style="text-align: center;">
                        @if($val->position ==0)待分配@endif
                        @if($val->position ==1)黄金广告位@endif
                        @if($val->position ==2)长条广告@endif
                    </td>
                    <td class=" " style="text-align: center;width: 500px;"><img src="{{ $val->img }}" alt="" width="150px">
                    </td>
                    <td class=" " style="text-align: center;width: 150px;">
                         <form style="display: inline;" action="/admin/advertise/{{$val->id}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="删除" class="btn btn-danger" onclick="return confirm('确定删除吗')">

                         </form>
                         <form style="display: inline;" action="/admin/advertise/{{$val->id}}/edit" method="get">
                                    {{ csrf_field() }}
                                    <input type="submit" value="修改" class="btn btn-info">          
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <div class="page dataTables_paginate paging_full_numbers">
                    {!! $data->appends(['title'=>$title])->render() !!}
            </div>
    </div>
</div>
@endsection