@extends('Admin.layout.index')

@section('content')
<!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-magic"></i>添加帖子</span>
    </div>
    <div class="mws-panel-body no-padding">
       <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/posts" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1ceogee43icv1c11a14_0" style="display: block;">
                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                 <div class="mws-form-row">
                    <label class="mws-form-label">类别<span class="required">*</span></label>
                       <div class="mws-form-item">
                            <select size="1" name="cid" aria-controls="DataTables_Table_1">
                                <option value="0" >选择类别</option>
                                @foreach($data as $v)
                                <option value="{{$v->id}}">{{$v->title}}</option>
                                @endforeach
                            </select>
                      </div>
                </div>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">标题<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="posts_title" class="required small">
                    </div>
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">内容 <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <script id="container" name="content" type="text/plain" class="small" style="height: 200px;">
                          
                        </script>
                    </div>
                </div>
                
            </fieldset>
           
            
           
        <div class="mws-button-row"><input type="reset" class="btn" value="重置"><input type="submit" class="btn" value="添加"></div></form>
    </div> 
</div>
<script type="text/javascript">
        var ue = UE.getEditor('container',{
           toolbars: [
                ['fullscreen', 'source', 'undo', 'redo', 'bold','simpleupload','insertimage','italic','forecolor','backcolor','edittip' ]
            ]
        });
</script>
@endsection