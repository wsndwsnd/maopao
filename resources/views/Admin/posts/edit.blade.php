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
        <span>修改帖子</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/posts/{{ $data->id }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">发帖标题</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="posts_title" value="{{ $data->posts_title }}">
						
                        
                    </div>
                </div>
		
             <div class="mws-form-row">
                    <label class="mws-form-label">类别<span class="required">*</span></label>
                       <div class="mws-form-item">
                            <select size="1" name="cid" aria-controls="DataTables_Table_1">
                                <option value="0" >选择类别</option>
                                @foreach($data1 as $v)
                                <option value="{{$v->id}}" @if($data->cates->id == $v->id) selected @endif >{{$v->title}}</option>
                             @endforeach
                            </select>
                      </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">发帖内容</label>
                    <div class="mws-form-item" >
                        <script id="container" name="content" type="text/plain" class="small" style="height: 200px;">
                          {!! $data->postsinfo->content !!}
                        </script>
                        
                    </div>
                </div>
                
                
            </div>
            <div class="mws-button-row">
                <input type="submit" value="提交" class="btn ">
                <input type="reset" value="重置" class="btn ">
                <a href="/admin/posts" ><input type="button" class="btn " value="返回"> </a>
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