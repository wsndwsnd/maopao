
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
<link rel="stylesheet" type="text/css" href="/Admins/Power/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Admins/Power/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/Admins/Power/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Admins/Power/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Admins/Power/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/Admins/Power/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Admins/Power/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Admins/Power/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Admins/Power/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Admins/Power/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Admins/Power/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Admins/Power/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Admins/Power/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Admins/Power/css/page.css" media="screen">

<title>MWS Admin - Dashboard</title>

</head>

<body>

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/Admins/Power/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
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
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
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
                    <img src="/Admins/Power/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="index.html">Logout</a></li>
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
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 管理员</a>
                        <ul>
                            <li><a href="/admin">管理员主页</a></li>
                            <li><a href="/admin/create">添加管理员</a></li>
                            <li><a href="">Wizard</a></li>
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>

        @section('contents');
        <!-- 内容开始 -->
        <div id="mws-container" class="clearfix">
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

        @show
            <!-- Inner Container Start -->
            <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i> Default Data Table</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_0_length" class="dataTables_length"><label>Show <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div><table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr>
                                    <th>编号:</th>
                                    <th>用户名:</th>
                                    <th>权限:</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @foreach($power as $v)
                                <tr class="odd" >
                                    <td class="sorting_1" style="border:1px #CCCCCC solid;">{{ $v->id }}</td>
                                    <td class=" " style="border:1px #CCCCCC solid;">{{ $v->username }}</td>
                                    <td class=" " style="border:1px #CCCCCC solid;">
                                        @if($v->power==1)
                                            普通用户
                                        @endif
                                        @if($v->power==2)
                                            管理员
                                        @endif
                                        @if($v->power==3)
                                            超级管理员
                                        @endif
                                    </td>
                                    <td class=" " style="border:1px #CCCCCC solid;width: 140px;">
                                        <form style="display: inline;" action="/admin/{{$v->id}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="submit" value="删除" class="btn btn-danger" onclick="confirm('确定删除吗?')">
                                        </form>

                                        <form style="display: inline;" action="/admin/{{$v->id}}/edit" method="get">
                                            {{ csrf_field() }}
                                            <input type="submit" value="修改" class="btn btn-info">
                                            
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                            <div class="dataTables_info" id="DataTables_Table_0_info">
                                
                            </div>
                            <div class="dataTables_paginate" id="page_page">
                                {!! $power->render() !!}
                            </div>
                        </div>
                    </div>
    </div>
            <!-- 内容结束 -->
                       
            <!-- Footer -->
            <div id="mws-footer">
                   
            </div>
        
        </div>

        <!-- Main Container End -->
    </div>

    <!-- JavaScript Plugins -->
    <script src="/Admins/Power/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/Admins/Power/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/Admins/Power/js/libs/jquery.placeholder.min.js"></script>
    <script src="/Admins/Power/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/Admins/Power/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/Admins/Power/jui/jquery-ui.custom.min.js"></script>
    <script src="/Admins/Power/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/Admins/Power/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/Admins/Power/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/Admins/Power/plugins/flot/jquery.flot.min.js"></script>
    <script src="/Admins/Power/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/Admins/Power/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/Admins/Power/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/Admins/Power/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/Admins/Power/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/Admins/Power/plugins/validate/jquery.validate-min.js"></script>
    <script src="/Admins/Power/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/Admins/Power/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Admins/Power/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/Admins/Power/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/Admins/Power/js/demo/demo.dashboard.js"></script>

</body>
</html>