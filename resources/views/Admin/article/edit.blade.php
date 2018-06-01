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
        <span>文章修改</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/article/{{$data->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">文章标题</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="article_title" value="{{ $data->article_title }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">文章作者</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="article_author" value="{{ $data->article_author }}">
                    </div>
                </div>
                 <div class="mws-form-row">
                    <label class="mws-form-label">修改封面</label>
                    <div class="mws-form-item" style="width:400px">
                        <img src="{{ ltrim($data->article_img,'.') }}" alt="">
                        <input type="file" name="article_img" value="" >
                    </div>
                </div>
                 <div class="mws-form-row">
                    <label class="mws-form-label">内容简介</label>
                    <div class="mws-form-item">
                       <textarea class="small" name="article_dec">{{ $data->article_dec }}</textarea>
                    </div>
                </div> 
                <div class="mws-form-row">
                    <label class="mws-form-label">文章内容</label>
                    <div class="mws-form-item" >
                       
                         <script id="container" name="article_content" type="text/plain" class="small" style="height: 200px;">
                         {!! $data->article_content !!}
                        </script>
                    </div>
                </div>
               
               
            </div>
            <div class="mws-button-row">
                <input type="submit" value="提交" class="btn">
                <input type="reset" value="重置" class="btn ">
                <a href="/admin/article"><input type="button" value="返回" class="btn "></a>
            </div>
        </form>
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