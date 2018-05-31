@extends('Admin.layout.Index')
@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span></span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/luntan/{{ $data->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">用户名:</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="title" value="{{$data->title}}">
                    </div>
                </div>
                
            </div>
            <div class="mws-button-row">
                <input type="submit" value="提交" class="btn btn-danger">
                <input type="reset" value="重置" class="btn ">
            </div>
        </form>
    </div>      
</div>
@endsection