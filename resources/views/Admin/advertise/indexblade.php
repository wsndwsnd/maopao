@extends('Admin.layout.Index')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>用户列表</span>
    </div>
        <form action="/admin/user" method="get">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>显示 <form></form>
                        <select size="1" name="count" aria-controls="DataTables_Table_1">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select> 条</label>&nbsp;&nbsp;&nbsp;总共00条
                    </div>
                        <div class="dataTables_filter" id="DataTables_Table_1_filter">
                            <label>Search: 
                                <input type="text" name="user_name"aria-controls="DataTables_Table_1" value="">
                                <input type="submit" value="搜索" class="btn btn-info" >
                            </label>
                        </div>
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        </form>
        <thead>
            <tr role="row">
                <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 188px;">编号
                </th>
                <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 247px;">用户名
                </th>
                <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 227px;">邮箱
                </th>
                <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 163px;">头像
                </th>
                <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 123px;">操作
                </th>
            </tr>
        </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
            
            <tr class="even " >

                    <td class="sorting_1" style="text-align: center;">1</td>
                    <td class=" " style="text-align: center;">2</td>
                    <td class=" " style="text-align: center;">3</td>
                    <td class=" " style="text-align: center;"><img src="" alt="" width="60px"></td>
                    <td class=" " style="text-align: center;">
                         <form action="/admin/user/" method="post" style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="删除" class="btn btn-danger" onclick="return confirm('确定删除吗')">
                         </form>
                         <a href="/admin/user/" class="btn btn-warning">修改</a>
                         <a href="/admin/user/" class="btn btn-info" style="width: 80px;">查看详情</a>
                         <a href="/admin/shoucang/" class="btn btn-info" style="width: 80px;">我的收藏</a>
                         
                    </td>
                </tr>
            </tbody></table>
            <div class="page dataTables_paginate paging_full_numbers">
                    
            </div>
    </div>
</div>
@endsection