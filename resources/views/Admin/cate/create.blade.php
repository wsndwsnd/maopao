@extends('Admin.layout.Index')
@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>添加类别</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/cate" method="post">
            {{ csrf_field() }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">标题:</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="title">
                    </div>
                </div>
                <div class="mws-form-row" >
                    <label class="mws-form-label">分类:</label>
                        <div class="mws-form-item" class="small">
                            <select class="small" name="tid">
                                <option value="0">选择</option>
                                @foreach($data as $v)
                                <option value="{{$v->id}}">{{$v->title}}</option>
                                @endforeach
                            </select>
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