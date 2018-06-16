
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/d/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/custom-plugins/wizard/wizard.css" media="screen">
<!-- <link href="/d/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="/d/css/font-awesome.min.css" rel="stylesheet">

<!--可无视-->
<!-- <link rel="stylesheet" type="text/css" href="/d/css/demo1.css"> -->
<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/d/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/d/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/jui/jquery-ui.custom.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
    <script src="/layui/layui.all.js" type="text/javascript"></script>
    <script src="/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/layui/jquery-3.2.1.min.js"></script>

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/themer.css" media="screen">

<title>MWS Admin - Dashboard</title>
<style type="text/css">
    .page li{      
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        /*color: #fff;*/
        text-decoration: none;
        background-color: #444444;
        border: 1px solid #444444;
        font-size: 14px
    }
   
     
    .page ul li{
        list-style: none;
       
    }

</style>
<style type="text/css">
.demo{ padding: 2em 0;}
.counter{
    padding: 20px 0;
    text-align: center;
    position: relative;
}
.counter .counter-content{
    width: 180px;
    height: 180px;
    border-radius: 50%;
    background: #fff;
    padding: 30px 0;
    margin: 0 auto 30px;
    z-index: 1;
    position: relative;
    transition: all 0.3s ease 0s;
}
.counter .counter-content:before{
    content: "";
    width: 122%;
    height: 122%;
    border-radius: 50%;
    border: 20px solid #f19f48;
    border-bottom: 20px solid transparent;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.counter .counter-content:after{
    content: "";
    border-top: 16px solid #f19f48;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    position: absolute;
    bottom: -14px;
    left: 50%;
    transform: translateX(-50%);
}
.counter .counter-icon{
    display: block;
    font-size: 50px;
    color: #f19f48;
    line-height: 50px;
}
.counter .counter-value{
    font-size: 50px;
    font-weight: 700;
    color: rgba(0,0,0,0.7);
    line-height: 70px;
}
.counter .title{
    display: inline-block;
    padding: 5px 25px;
    background: #f19f48;
    border-radius: 10px;
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    text-transform: capitalize;
    margin: 0;
}
.counter.red .counter-content:before{
    border-color: #ef5f61;
    border-bottom-color: transparent;
}
.counter.red .counter-content:after{ border-top-color: #ef5f61; }
.counter.red .counter-icon{ color: #ef5f61; }
.counter.red .title{ background: #ef5f61; }
.counter.blue .counter-content:before{
    border-color: #4d9fcf;
    border-bottom-color: transparent;
}
.counter.blue .counter-content:after{ border-top-color: #4d9fcf; }
.counter.blue .counter-icon{ color: #4d9fcf; }
.counter.blue .title{ background: #4d9fcf; }
.counter.purple .counter-content:before{
    border-color: #a98ceb;
    border-bottom-color: transparent;
}
.counter.purple .counter-content:after{ border-top-color: #a98ceb; }
.counter.purple .counter-icon{ color: #a98ceb; }
.counter.purple .title{ background: #a98ceb; }
</style>
</head>

<body>



	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<a href="/admin" title="点击首页"><img src="/d/images/1.png" alt="mws admin"></a>
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	
                <!-- Unread notification count -->
               
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	
                
                <!-- Unred messages count -->
              
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/uploads/yh.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, {{ session('admin_username') }}
                    </div>
                    <ul>
                    	<!-- <li><a href="#">修改头像</a></li>
                        <li><a href="#">修改密码</a></li> -->
                        <li><a href="/admin/logout">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	
        	
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul >
                   <li>
                        <a href="/admin/site" style="color: #C5D52B;"><i class="layui-icon layui-icon-set-fill">&#xe614;</i>网站管理</a>
                    </li>
                    <li>
                        <a href="#" style="color: #C5D52B;"><i class="layui-icon layui-icon-friends">&#xe612;</i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/admin/user">用户列表</a></li>
                            <li><a href="/admin/user/create">用户添加</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" style="color: #C5D52B;"><i class="icon-list"></i>公告管理</a>
                        <ul class="closed">
                            <li><a href="/admin/notice">公告列表</a></li>
                            <li><a href="/admin/notice/create">公告添加</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" style="color: #C5D52B;"><i class="layui-icon layui-icon-user"></i>管理员管理</a>
                        <ul class="closed">
                            <li><a href="/admin/power">管理员列表</a></li>
                            <li><a href="/admin/power/create">管理员添加</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" style="color: #C5D52B;"><i class="icon-list"></i>类别管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/cate">类别列表</a></li>
                            <li><a href="/admin/cate/create">类别添加</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="#" style="color: #C5D52B;"><i class="layui-icon layui-icon-read"></i>帖子管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/posts">帖子列表</a></li>
                            <li><a href="/admin/posts/create">帖子添加</a></li>
                             <li><a href="/admin/postssqlb">前台申请标签</a></li>
                        </ul>
                    </li>
                    

                    
                     <li>
                        <a href="#" style="color: #C5D52B;"><i class="layui-icon layui-icon-read"></i>文章管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/article">文章列表</a></li>
                            <li><a href="/admin/article/create">文章添加</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" style="color: #C5D52B;"><i class="layui-icon layui-icon-picture">&#xe64a;</i>轮播图管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/slide">轮播图列表</a></li>
                            <li><a href="/admin/slide/create">轮播图添加</a></li>
                        </ul>
                    </li>
                    <li>

                        <a href="#" style="color: #C5D52B;"><i class="layui-icon layui-icon-screen">&#xe629;</i>图片广告</a>


                        <ul class="closed"> 
                            <li><a href="/admin/advertise">广告列表</a></li>
                            <li><a href="/admin/advertise/create">广告添加</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" style="color: #C5D52B;"><i class="layui-icon layui-icon-engine">&#xe628;</i>友情链接管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/link">友情链接列表</a></li>

                            <li><a href="/admin/link/create">友情链接添加</a></li>

                            <li><a href="/admin/links/auditindex">前台待审</a></li>

                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
                @if(session('error'))
                  <div class="mws-form-message error">
                     {{ session('error') }}
                 </div>
                   
                @endif
                
                @if(session('success'))
                    <div class="mws-form-message success">
                         {{ session('success') }}
                     </div>
                @endif

                @if (count($errors) > 0)
                    <div class="mws-form-message error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @section('content')
        
                @show
            </div>
            <!-- Inner Container End -->
                   
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/d/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/d/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/d/js/libs/jquery.placeholder.min.js"></script>
    <script  src="/d/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script  src="/d/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script  src="/d/jui/jquery-ui.custom.min.js"></script>
    <script  src="/d/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script  src="/d/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/d/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script  src="/d/plugins/flot/jquery.flot.min.js"></script>
    <script  src="/d/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script  src="/d/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script  src="/d/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script  src="/d/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script  src="/d/plugins/colorpicker/colorpicker-min.js"></script>
    <script  src="/d/plugins/validate/jquery.validate-min.js"></script>
    <script  src="/d/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/d/bootstrap/js/bootstrap.min.js"></script>
    <script src="/d/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/d/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/d/js/demo/demo.dashboard.js"></script>

</body>
</html>