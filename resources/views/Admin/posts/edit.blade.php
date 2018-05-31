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
						　类别　
                        <select size="1" name="cid" aria-controls="DataTables_Table_1">
                        <option value="1"  >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                        <option value="4" >4</option>
                    	</select>
                    </div>
                </div>
		

                <div class="mws-form-row">
                    <label class="mws-form-label">发帖内容</label>
                    <div class="mws-form-item" >
                        <textarea rows="" cols="" class="large" name="content" value="" style="height: 300px;"> {{ $data->postsinfo->content }}</textarea>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">修改图片</label>
                    <div class="mws-form-item" style="width:400px;">
                        <input type="file" name="pic" value="" >
                        <img src="{{ $data->postsinfo->pic }}">
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
@endsection