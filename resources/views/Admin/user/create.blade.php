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
    	<span><i class="icon-magic"></i>用户添加</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/user" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">用户名 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="user_name" class="required small" value="{{ old('user_name') }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">密码 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="password" name="user_password" class="required email small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">确认密码 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="password" name="user_repassword" class="required email small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">e_mail <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="user_email" class="required email small" value="{{ old('user_email') }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">手机号<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="user_tel" class="required email small" value="{{ old('user_tel') }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">年龄<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="age" class="required email small" value="{{ old('age') }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">性别 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <ul class="mws-form-list">
                           <input type="radio" id="male" name="sex" class="required" value="m"> <label for="male">男</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                           <input type="radio" id="female" name="sex" value="w" checked> <label for="female" >女</label>
                        </ul>
                        <label class="error plain" generated="true" for="gender" style="display:none"></label>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">出生年月<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="birthday" class="required email small" value="{{ old('birthday') }}">
                    </div>
                </div>
                <div class="mws-form-row" style="width:350px;">
                    <label class="mws-form-label">上传头像<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="file" name="img" class="required email large" >
                    </div>
                </div>
            </fieldset>
            
            
            
           
        <div class="mws-button-row"><input type="reset"  class="btn" value="重置"</button><button class="btn">提交</button></div>
    </form>
    </div>
</div>
@endsection

