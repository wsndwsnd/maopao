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
        <span><i class="icon-magic"></i>轮播图修改</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/slide/{{$data->slide_id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">图片名称 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="slide_img" class="required small" value="{{ $data->slide_img }}">
                    </div>
                </div>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">图片状态 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <select name="slide_status" id="">
                            <option value="0" @if($data->slide_status == '0') selected @endif>显示</option>
                            <option value="1" @if($data->slide_status == '1') selected @endif>隐藏</option>
                            <option value="1" @if($data->slide_status == '3') selected @endif>热图</option>
                        </select>
                        
                    </div>
                </div>
                <div class="mws-form-row" style="width:800px;">
                    <label class="mws-form-label">上传图片<span class="required">*</span></label>
                    <div class="mws-form-item" style="float: left;margin-left: 15px;">
                        <input type="file" name="slide_url" class="required email large">
                    </div>
                    <div class="mws-form-item" style="float: left;margin-left: 10px;">
                        <img src="{{ $data->slide_url }}" alt="" width="100px">
                    </div>
                </div>
                <!-- <div class="mws-form-row" style="float: left;margin-left:5px;">
                    
                </div> -->
            </fieldset>
        <div class="mws-button-row"><input type="reset"  class="btn" value="重置"</button><button class="btn">提交</button></div>
    </form>
    </div>
</div>
@endsection

