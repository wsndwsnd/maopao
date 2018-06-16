@extends('Admin.layout.Index')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-magic"></i>添加友情链接</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/link" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
               
                <div class="mws-form-row">
                    <label class="mws-form-label">友情链接描述<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="Link_text" class="required email small" value="{{ old('Link_text') }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">友情链接地址<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="Link_url" class="required email small" value="{{ old('Link_url') }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">联系电话<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="tel" class="required email small" value="{{ old('tel') }}">
                    </div>
                </div>
            </fieldset>
            
            
            
           
        <div class="mws-button-row"><input type="reset"  class="btn" value="重置"</button><button class="btn">提交</button></div>
    </form>
    </div>
</div>

@endsection