@extends('admin.layout.index')

@section('content')
<!-- 显示错误信息 -->
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>公告添加</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/notice" method="post">
            {{ csrf_field() }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">公告标题</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="notice_title" value="{{ old('notice_title') }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">公告内容</label>
                    <div class="mws-form-item">                    
                        <script id="container" name="notice_content" type="text/plain" class="small" style="height: 200px;">
                          {!! old('article_content') !!}
                        </script>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input name="notice_status" type="radio" value="0" checked> <label>待审</label></li>
                            <li><input name="notice_status" type="radio" value="1"> <label>发布</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="submit" value="提交" class="btn ">
                <input type="reset" value="重置" class="btn ">
            </div>
        </form>
    </div>      
</div>
<script type="text/javascript">
        var ue = UE.getEditor('container',{
           toolbars: [
                ['fullscreen', 'source', 'undo', 'redo', 'bold','italic','forecolor','backcolor' ]
            ]
        });
</script>
@endsection