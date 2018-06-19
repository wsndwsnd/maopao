@extends('Admin.layout.Index')

@section('content')


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

                <div id="" class="mws-form-row">
                    <label class="mws-form-label">广告状态 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <select name="status" id="">
                            <option value="0">隐藏</option>
                            <option value="1">显示</option>
                        </select>
                        
                    </div>
                </div>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">广告位置 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <select name="position" id="">
                            <option value="0">待分配</option>
                            <option value="1">黄金广告位</option>
                            <option value="2">长条广告</option>
                        </select>
                        
                    </div>
                </div>

                <div class="mws-form-row" style="width:350px;">
                    <label class="mws-form-label">图片<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="file" name="img" class="required email large" >
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">广告链接 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="url" class="required email small" id="content"><span style="margin-left:5px;"></span>
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

