@extends('Admin.layout.Index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 用户详情</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>手机号</th>
                </tr>
            </thead>
            <tbody>      
			@if($data->userinfo)
                <tr>
                    <td style="text-align:center;  ">{{ $data->userinfo->age}}</td>
                    <td style="text-align:center;  ">@if($data->userinfo->sex  == 'm')男 @else 女 @endif </td>
                    <td style="text-align:center;  ">{{ $data->userinfo->user_tel }}</td>
                </tr>
             @endif
            </tbody>
        </table>
    </div>
    <div class="btn-toolbar">
    <a href="/admin/user"><button type="button" class="btn btn-success btn-large" style="width:200px;margin-left: 20px">返 回</button>
   	</a>
</div>
</div>

@endsection