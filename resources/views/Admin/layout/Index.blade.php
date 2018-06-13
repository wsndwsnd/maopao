
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
</head>

<body>



	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/d/images/1.png" alt="mws admin">
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
                	<img src="/d/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, {{ session('admin_username') }}
                    </div>
                    <ul>
                    	<li><a href="#">修改头像</a></li>
                        <li><a href="#">修改密码</a></li>
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
                        <a href="/admin/site"><i class="icon-list"></i>网站管理</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/admin/user">用户列表</a></li>
                            <li><a href="/admin/user/create">用户添加</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i>公告管理</a>
                        <ul class="closed">
                            <li><a href="/admin/notice">公告列表</a></li>
                            <li><a href="/admin/notice/create">公告添加</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i>管理员管理</a>
                        <ul class="closed">
                            <li><a href="/admin/power">管理员列表</a></li>
                            <li><a href="/admin/power/create">管理员添加</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i>类别管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/cate">类别列表</a></li>
                            <li><a href="/admin/cate/create">类别添加</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="#"><i class="icon-list"></i>帖子管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/posts">帖子列表</a></li>
                            <li><a href="/admin/posts/create">帖子添加</a></li>
                             <li><a href="/admin/postssqlb">前台申请标签</a></li>
                        </ul>
                    </li>
                    

                    
                     <li>
                        <a href="#"><i class="icon-list"></i>文章管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/article">文章列表</a></li>
                            <li><a href="/admin/article/create">文章添加</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-list"></i>轮播图管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/slide">轮播图列表</a></li>
                            <li><a href="/admin/slide/create">轮播图添加</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i>广告管理</a>
                        <ul class="closed"> 
                            <li><a href="/admin/advertise">广告列表</a></li>
                            <li><a href="/admin/advertise/create">广告添加</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-list"></i>友情链接管理</a>
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