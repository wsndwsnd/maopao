@extends('Admin.layout.Index')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/power/{{ $power->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">用户名:</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="username" value="{{ $power->username }}" readonly="readonly">
                    </div>
                </div>
                <div class="mws-form-row" >
                    <label class="mws-form-label">权限:</label>
                        <div class="mws-form-item">
                            <select class="small" name="power">
                                <option value="1" @if($power->power == 1) selected @endif>普通管理员</option>
                                <option value="2" @if($power->power == 2) selected @endif>超级管理员</option>
                            </select>
                        </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="submit" value="{{ $submit }}" class="btn">
                <input type="reset" value="重置" class="btn ">
                <a href="/admin/power" ><input type="button" class="btn " value="返回"> </a>

            </div>
        </form>
    </div>      
</div>
@endsection