<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"C:\phpstudy\WWW\ss_calendar\public/../application/admin\view\admin\add.html";i:1554795688;s:70:"C:\phpstudy\WWW\ss_calendar\application\admin\view\common\sidebar.html";i:1554785670;s:69:"C:\phpstudy\WWW\ss_calendar\application\admin\view\common\header.html";i:1554782360;s:69:"C:\phpstudy\WWW\ss_calendar\application\admin\view\common\footer.html";i:1554782469;}*/ ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>北大软微日程管理系统</title>
    <meta name="description" content="北大软微日程管理系统">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/normalize.css">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/themify-icons.css">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/ss_calendar/public/static//assets/css/style.css">

</head>
<body>
    <!-- Left Panel -->
    <!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-title">日程查询统计</li><!-- /.menu-title -->
                <li class="menu-item-has-children">
                    <a href="../index/index.html"> <i class="menu-icon fa fa-search-plus"></i>日程查询</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-bar-chart-o"></i>日程统计 </a>
                </li>


                <li class="menu-title">日程管理配置</li><!-- /.menu-title -->
                <li class="menu-item-has-children">
                    <a href="time.html"> <i class="menu-icon fa fa-calendar"></i>时间段管理</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="area.html"> <i class="menu-icon fa ti-location-pin"></i>地点管理 </a>
                </li>
                <li class="menu-item-has-children active">
                    <a href="<?php echo url('index/admindefault/gotoScheduleItem'); ?>"> <i class="menu-icon fa fa-book"></i>事项管理</a>
                </li>
                 <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-folder-open-o"></i>白名单管理 </a>
                </li>
                 <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-arrows"></i>
                    设置可维护日程范围</a>
                </li>
                 <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-calendar-o"></i>
                    配置工作日</a>
                </li>
                 <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-square-o"></i>
                    缺省日程维护</a>

                <li class="menu-title">用户管理</li><!-- /.menu-title -->
                <li class="menu-item-has-children">
                    <a href="user_base.html"> <i class="menu-icon fa fa-user"></i>基础管理 </a>
                </li>
                 <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-building-o"></i>部门管理 </a>
                </li>
                 <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-lemon-o"></i>职务管理 </a>
                </li>

                <li class="menu-title">管理员管理</li>
                 <li class="menu-item-has-children">
                    <a href="<?php echo url('admin/lst'); ?>"> <i class="menu-icon fa fa-group"></i>基础管理 </a>
                </li>
                 <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-credit-card"></i>角色管理 </a>
                </li>
                 <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-sitemap"></i>权限管理 </a>
                </li>

                <li class="menu-title">日志管理</li><!-- /.menu-title -->
                <li class="menu-item-has-children">
                    <a href="log.html"> <i class="menu-icon fa fa-search"></i>日志查询</a>
                </li>

                <li class="menu-title">消息管理</li><!-- /.menu-title -->
                <li class="menu-item-has-children">
                    <a href="#"> <i class="menu-icon fa fa-comment-o"></i>消息模板</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>

    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index/index.html"><img src="http://127.0.0.1/ss_calendar/public/static//images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="../index/index.html"><img src="http://127.0.0.1/ss_calendar/public/static//images/logo2.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>

            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="http://127.0.0.1/ss_calendar/public/static//images/admin.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="page-login.html"><i class="fa fa-power-off"></i>退出</a>
                </div>
            </div>

        </div>
    </div>
</header>

        <!-- /#header -->
        <!-- Content -->
        <div class="content">
          <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>管理員管理</strong> 新增管理員
                            </div>
                            <div class="card-body card-block">
                                <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label" for="admin_name">管理員名稱</label></div>
                                        <div class="col-12 col-md-9"><input name="admin_name" class="form-control" id="admin_name" type="text" placeholder=""><small class="form-text text-muted">*必填</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label" for="admin_phone">管理員手機</label></div>
                                        <div class="col-12 col-md-9"><input name="admin_phone" class="form-control" id="admin_phone" type="text" placeholder=""><small class="form-text text-muted">*必填</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label" for="admin_password">管理員密碼</label></div>
                                        <div class="col-12 col-md-9"><input name="admin_password" class="form-control" id="admin_password" type="text" placeholder=""><small class="form-text text-muted">*必填</small></div>
                                    </div>

                                    <button class="btn btn-primary btn-sm" type="submit">
                                        <i class="fa fa-dot-circle-o"></i> 確認創建
                                    </button>

                                </form>
                            </div>
                            <div class="card-footer">


                            </div>
                        </div>

                    </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2019 SSPKU Admin. 友情链接 <a href="http://www.ss.pku.edu.cn/" target="_blank" title="北京大学软件与微电子学院">北京大学软件与微电子学院</a>
            </div>
            <div class="col-sm-6 text-right"> Designed by SunJiajing
            </div>
        </div>
    </div>
</footer>

        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/jquery.matchHeight.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/main.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/datatables.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/jszip.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="http://127.0.0.1/ss_calendar/public/static//assets/js/init/datatables-init.js"></script>

</body>
</html>
