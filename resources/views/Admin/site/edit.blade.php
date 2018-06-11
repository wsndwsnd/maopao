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
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/site/update/{{$data->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>

                <div id="" class="mws-form-row">
                    <label class="mws-form-label">网站LOGO<span class="required">*</span></label>
                        <div class="mws-form-item" style="width:350px;height: 50px; "> 
                            <div style="float: left;margin-top: 15px;" >
                                <input type="file" name="site_logo" class="required email large" >
                            </div><br><br><br>
                            <div style="float: left;">
                                 <img src="{{$data->site_logo}}" alt="" width="100px" style="border-radius: 10px;">
                           </div>
                        </div>
                </div>
               
                <div id="" class="mws-form-row">
                	<label class="mws-form-label">网站二维码<span class="required">*</span></label>
                        <div class="mws-form-item" style="width:350px;height: 50px; "> 
                            <div style="float: left;margin-top: 15px;" >
                                <input type="file" name="site_ewm" class="required email large" >
                            </div><br><br><br>
                            <div style="float: left;">
                                 <img src="{{$data->site_ewm}}" alt="" width="100px" style="border-radius: 10px;">
                           </div>
                        </div>
                </div>

                 <div id="" class="mws-form-row">
                    <label class="mws-form-label">网站版权<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="site_copyright" class="required email small" value="{{$data->site_copyright}}">
                        </div>
                </div>

                <div id="" class="mws-form-row">
                	<label class="mws-form-label">网站邮箱<span class="required">*</span></label>
	                    <div class="mws-form-item">
                            <input type="text" name="site_email" class="required email small" value="{{$data->site_email}}">
	                    </div>
                </div>
            </fieldset>
        <div class="mws-button-row"><button class="btn btn-info">提交</button></div>
    </form>
    </div>
</div>

@endsection