@extends('Admin.layout.Index')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>添加用户</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/power" method="post">
                {{ csrf_field() }}
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">用户名:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="username">
                        </div>
                    </div>
                    <div class="mws-form-row" >
                        <label class="mws-form-label">权限:</label>

                            <div class="mws-form-item">
                                <select class="small" name="power">
                                  
                                    <option value="1">普通管理员</option>
                                    <option value="2">超级管理员</option>

                           

                                </select>
                            </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">密码:</label>
                        <div class="mws-form-item">
                            <input type="password" class="small" name="password">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">确认密码:</label>
                        <div class="mws-form-item">
                            <input type="password" class="small" name="conpassword">
                        </div>
                    </div>
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="{{$submit}}" class="btn">
                    <input type="reset" value="重置" class="btn ">
                </div>
            </form>
        </div>      
    </div>
@endsection