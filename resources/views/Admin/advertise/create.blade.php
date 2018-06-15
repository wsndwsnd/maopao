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
        <span><i class="icon-magic"></i>广告添加</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/advertise" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1cejaah621r1815t3j2g_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">广告标题 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="title" class="required small" value="{{ old('title') }}" id="title"><span style="margin-left:5px;font-size:12px;"></span>
                    </div>
                </div>
                <div class="mws-form-row" style="width:350px;">
                    <label class="mws-form-label">图片<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="file" name="img" class="required email large" >
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">广告内容 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="content" class="required email small" id="content"><span style="margin-left:5px;"></span>
                    </div>
                </div> 
            </fieldset>
            
            
            
           
        <div class="mws-button-row"><input type="reset"  class="btn" value="重置"</button><button class="btn">提交</button></div>
    </form>
    </div>
</div>
<script>
    $('#title').blur(function(){
        
        if(this.value.length > 15){
            $('#title').next().html('<font color="red">最多可输入15字</font>');
        }
        
    }).focus(function(){
        $('#title').next().html('');
    });

    $('#content').blur(function(){
        if(this.value.length > 30){
            $('#content').next().html('最多可输入30字');
        }
    }).focus(function(){
        $('#title').next().html('');
    });
</script>
@endsection

