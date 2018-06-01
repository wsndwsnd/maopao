@extends('admin.layout.index')

@section('content')

<div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span>封面</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        
                        <div class="mws-panel-body">
                        <p><img src="{{ltrim($data->article_img,'.')}}" alt="" width="300px" ></p>
                            
                        </div>
                    </div>      
</div>

<div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span>内容简介</span>
                    </div>
                    <div class="mws-panel-body no-padding" style="height: 260px;">
                       
                            
                                
                              
                                <div class="mws-form-row bordered">
                                    
                                    <div class="mws-form-item">
                                        {{ $data->article_dec }}
                                    </div>
                                </div>
                                              
                        
                    </div>      
                </div>

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-magic"></i>文章内容</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div class="wizard-nav wizard-nav-horizontal"><button type="button" class="btn responsive-prev-btn" disabled="disabled"><i class="icon-caret-left"></i></button><button type="button" class="btn responsive-next-btn"><i class="icon-caret-right"></i></button></div>
        <div style="height:500px;overflow: auto ">
            {!! $data->article_content !!}
        </div>
    </div>

    <div class="btn-toolbar">
    <a href="/admin/article"><button type="button" class="btn btn-success btn-large" style="width:200px;margin-left: 20px">返 回</button>
    </a>
</div>
</div>



@endsection