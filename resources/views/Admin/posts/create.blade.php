@extends('Admin.layout.index')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-magic"></i>添加帖子</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/posts" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1ceogee43icv1c11a14_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">标题<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="posts_title" class="required small">
                    </div>
                </div>
               
                <div class="mws-form-row">
                    <label class="mws-form-label">内容 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <textarea name="content" rows="" cols="" class="required small"></textarea>
                    </div>
                </div>
                 <div id="" class="mws-form-row">
                    <label class="mws-form-label">图片<span class="required">*</span></label>
                    <div class="mws-form-item" style="width: 550px;" >
                        <input type="file" name="pic" class="required large">
                    </div>
                </div>
            </fieldset>
           
            
           
        <div class="mws-button-row"><input type="reset" class="btn" value="重置"><input type="submit" class="btn" value="添加"></div></form>
    </div> 
</div>

@endsection