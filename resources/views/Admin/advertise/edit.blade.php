@extends('Admin.layout.Index')

@section('content')
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-magic"></i>广告修改</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/advertise/{{$data->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">广告标题 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="title" class="required small" value="{{ $data->title }}">
                    </div>
                </div>

                <div class="mws-form-row" >
                    <label class="mws-form-label">状态:</label>
                        <div class="mws-form-item">
                            <select class="small" name="status">
                                <option value="0" @if($data->status == 0) selected @endif>隐藏</option>
                                <option value="1" @if($data->status == 1) selected @endif>显示</option>
                            </select>
                        </div>
                </div>
                <div class="mws-form-row" >
                    <label class="mws-form-label">广告位置:</label>
                        <div class="mws-form-item">
                            <select class="small" name="position">
                                <option value="0" @if($data->position == 0) selected @endif>待分配</option>
                                <option value="1" @if($data->position == 1) selected @endif>黄金广告位</option>
                                <option value="2" @if($data->position == 2) selected @endif>长条广告</option>
                            </select>
                        </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">广告链接 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="url" class="required email small" value="{{ $data->url }}">
                    </div>
                </div> 

                <div class="mws-form-row">
                    <label class="mws-form-label">预览图<span class="required">*</span></label>
                    <div class="mws-form-item" style="width:350px;height: 50px; "> 
                        <div style="float: left;" >
                            <input type="file" name="img" class="required email large" >
                        </div>
                        <div style="float: left;">
                             <img src="{{ $data->img }}" alt="" width="100px" style="border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </fieldset>
            
            
            
           
        <div class="mws-button-row"><input type="reset"  class="btn" value="重置"</button><button class="btn">提交</button></div>
    </form>
    </div>
</div>
@endsection

