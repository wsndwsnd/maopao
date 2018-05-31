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
    	<span><i class="icon-magic"></i>用户修改</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/user/{{ $data->id }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">用户名 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="user_name" class="required small" value="{{ $data->user_name }}" readonly>
                    </div>
                </div>
                <!-- <div class="mws-form-row">
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
                </div> -->
                <div class="mws-form-row">
                    <label class="mws-form-label">e_mail <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="user_email" class="required email small" value="{{ $data->user_email }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">手机号<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="user_tel" class="required email small" value="{{ $data->userinfo->user_tel or '' }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">年龄<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="age" class="required email small"  value="{{ $data->userinfo->age or '' }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">性别 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <ul class="mws-form-list">
                           <input type="radio" id="male" name="sex" class="required" value="m" @if(!empty($data->userinfo) && $data->userinfo->sex =='m')checked @endif> <label for="male" >男</label>
                           &nbsp;&nbsp;&nbsp;&nbsp;
                           <input type="radio" id="female" name="sex" value="w" @if(!empty($data->userinfo) && $data->userinfo->sex =='w')checked @endif> <label for="female">女</label>
                        </ul>
                        <label class="error plain" generated="true" for="gender" style="display:none"></label>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">出生年月<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="birthday" class="required email small" value="{{ $data->userinfo->birthday or '' }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">上传头像<span class="required">*</span></label>
                    <div class="mws-form-item" style="width:350px;height: 50px; "> 
                        <div style="float: left;margin-top: 15px;" >
                            <input type="file" name="img" class="required email large" >
                        </div>
                        <div style="float: left;">
                             <img src="{{ $data->img or '/uploads/1.jpg' }}" alt="" width="100px" style="border-radius: 10px;">
                       </div>

                       
                    </div>
                </div>
            </fieldset>
            
            
            
           
        <div class="mws-button-row">
            <input type="reset"  class="btn" value="重置">
            <button class="btn">修改</button>
            <a href="/admin/user"><input type="button" class="btn " value="返回"> </a>
        </div>
    </form>
    </div>
</div>
@endsection

