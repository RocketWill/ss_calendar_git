<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"C:\phpstudy\WWW\ss_calendar_git\public/../application/index\view\index\index.html";i:1554777409;}*/ ?>
<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>北大软微日程管理系统</title>
    <meta name="description" content="北大软微日程管理系统">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/assets/css/normalize.css">
    <link rel="stylesheet" href="/static/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/static/assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="/static/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="/static/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/static/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/static/assets/css/style.css">
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">       
                    <li class="menu-title">日程查询统计</li><!-- /.menu-title -->
                    <li class="menu-item-has-children active">
                        <a href="index.html"> <i class="menu-icon fa fa-search-plus"></i>日程查询</a>
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
                    <li class="menu-item-has-children">
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
                        <a href="#"> <i class="menu-icon fa fa-group"></i>基础管理 </a>
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
                        <a href="log.html"> <i class="menu-icon fa fa-comment-o"></i>消息模板</a>
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
                    <a class="navbar-brand" href="index.html"><img src="/static/images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="index.html"><img src="/static/images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="/static/images/admin.jpg" alt="User Avatar">
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
            <div class="animated fadeIn">                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                 <h4 class="box-title">所有日程
                                 </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats">
                                    <table id="bootstrap-data-table" class="table">
                                        <thead>
                                            <tr>
                                                <th class="serial">序号</th>
                                                <th>姓名</th>
                                                <th>身份</th>
                                                <th>时间</th>
                                                <th>地点</th>
                                                <th>事项</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="serial">1.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">院领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>  
                                            <tr>
                                                <td class="serial">2.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">部门领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>                                                                        
                                            <tr>
                                                <td class="serial">3.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">系领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr> 
                                            <tr>
                                                <td class="serial">4.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">普通用户</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>
                                                <td class="serial">5.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">院领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>  
                                            <tr>
                                                <td class="serial">6.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">部门领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>                                                                        
                                            <tr>
                                                <td class="serial">7.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">系领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr> 
                                            <tr>
                                                <td class="serial">8.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">普通用户</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>                                                                                                           
                                                <td class="serial">9.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">院领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>  
                                            <tr>
                                                <td class="serial">10.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">部门领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>                                                                        
                                            <tr>
                                                <td class="serial">11.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">系领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr> 
                                            <tr>
                                                <td class="serial">12.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">普通用户</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>
                                                <td class="serial">13.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">院领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>  
                                            <tr>
                                                <td class="serial">14.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">部门领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>                                                                        
                                            <tr>
                                                <td class="serial">15.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">系领导</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr> 
                                            <tr>
                                                <td class="serial">16.</td>  
                                                <td>  <span class="product">孙佳静</span> </td>
                                                <td>  <span class="product">普通用户</span> </td>                                                
                                                <td>  <span class="product">2019年3月15日 周五下午</span> </td>
                                                <td>  <span class="product">校本部</span> </td>                                                
                                                <td> <span class="product">开会</span> </td>                                            
                                            </tr>                                                                                                      
                                        </tbody>                                   
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                                       
                </div>
            </div>
            <!-- .animated -->
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
    <script src="/static/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="/static/assets/js/popper.min.js"></script>
    <script src="/static/assets/js/bootstrap.min.js"></script>
    <script src="/static/assets/js/jquery.matchHeight.min.js"></script>
    <script src="/static/assets/js/main.js"></script>
    <script src="/static/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="/static/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="/static/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="/static/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="/static/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="/static/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="/static/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="/static/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="/static/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="/static/assets/js/init/datatables-init.js"></script>
</body>
</html>
