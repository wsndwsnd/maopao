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
    	<span><i class="icon-magic"></i>网站配置</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/site/edit/{{$data->id}}" method="get" enctype="multipart/form-data">
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">网站状态<span class="required">*</span></label>
	                    <div class="mws-form-item">
	                    	线上
	                    </div>
                </div>
                
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">网站LOGO<span class="required">*</span></label>
	                    <div class="mws-form-item">
	                    	<img width="200px" src="{{$data->site_logo}}">
	                    </div>
                </div>

                
                <div id="" class="mws-form-row">
                	<label class="mws-form-label">网站二维码<span class="required">*</span></label>
	                    <div class="mws-form-item">
	                    	<img width="200px" src="{{$data->site_ewm}}">
	                    </div>
                </div>
                <div id="" class="mws-form-row">
                	<label class="mws-form-label">网站邮箱<span class="required">*</span></label>
	                    <div class="mws-form-item">
	                    	{{$data->site_email}}
	                    </div>
                </div>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">网站版权<span class="required">*</span></label>
                        <div class="mws-form-item">
                            {{$data->site_copyright}}
                        </div>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="{{$data->id}}">

        <div class="mws-button-row"><button class="btn btn-warning">修改</button></div>
    </form>
    </div>
</div>

@endsection