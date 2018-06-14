@extends('Admin.layout.Index')

@section('content')

                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i>管理员列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                       <form action="/admin/power" method="get">
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length"><label>显示 <form></form><select size="1" name="count" aria-controls="DataTables_Table_1"><option value="5" @if($count==5) selected @endif>5</option><option value="10" @if($count==10) selected @endif>10</option><option value="15" @if($count==15) selected @endif>15</option><option value="20" @if($count==20) selected @endif>20</option></select> 条</label>&nbsp;&nbsp;&nbsp;总共{{ $num }}条</div><div class="dataTables_filter" id="DataTables_Table_1_filter"><label>Search: <input type="text" name="username"aria-controls="DataTables_Table_1" value="{{ $username or ''}}"><input type="submit" value="搜索" class="btn btn-info" ></label></div><table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        </form>
                            <thead>
                                <tr>
                                    <th>编号:</th>
                               <th>用户名:</th>
                                    <th>权限:</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @foreach($power as $v)
                                <tr class="odd" >
                                    <td class=" " style="border:1px #CCCCCC solid;text-align: center;">{{ $v->id }}</td>
                                    <td class=" " style="border:1px #CCCCCC solid;text-align: center;">{{ $v->username }}</td>
                                    <td class=" " style="border:1px #CCCCCC solid;text-align: center;">
                                   
                                        @if($v->power==1)
                                            普通管理员
                                        @else
                                       
                                           超级管理员
                                        @endif
                                    </td>
                                    <td class=" " style="border:1px #CCCCCC solid;width: 140px;text-align: center;">
                                        <form style="display: inline;" action="/admin/power/{{$v->id}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="submit" value="删除" class="btn btn-danger" onclick="confirm('确定删除吗?')">
                                        </form>

                                        <form style="display: inline;" action="/admin/power/{{$v->id}}/edit" method="get">
                                            {{ csrf_field() }}
                                            <input type="submit" value="修改" class="btn btn-info">
                                            
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                          
                              <div class="page dataTables_paginate paging_full_numbers">
                                {!! $power->render() !!}
                            </div>
                        </div>
                    </div>
  
         
@endsection
                       
       