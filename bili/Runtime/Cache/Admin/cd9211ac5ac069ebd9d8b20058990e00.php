<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="/Moderna/bili/Admin/View/Public/img/favicon.png">

    <title>Form Component | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="/Moderna/bili/Admin/View/Public/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/Moderna/bili/Admin/View/Public/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/Moderna/bili/Admin/View/Public/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/Moderna/bili/Admin/View/Public/css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->

    <!-- color picker -->

    <!-- Custom styles -->
    <link href="/Moderna/bili/Admin/View/Public/css/style.css" rel="stylesheet">
    <link href="/Moderna/bili/Admin/View/Public/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="/Moderna/bili/Admin/View/Public/js/html5shiv.js"></script>
      <script src="/Moderna/bili/Admin/View/Public/js/respond.min.js"></script>
      <script src="/Moderna/bili/Admin/View/Public/js/lte-ie7.js"></script>


    <![endif]-->


  </head>
  <body>

  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="切换菜单栏" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="index.html" class="logo">新旺 <span class="lite">激光</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="搜索..." type="text">
                </form>
            </li>
        </ul>
        <!--  search form end -->
    </div>

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

            <!-- task notificatoin start -->
            <!--<li id="task_notificatoin_bar" class="dropdown">-->
                <!--<a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
                    <!--<span class="icon-task-l"></span></i>-->
                    <!--<span class="badge bg-important">6</span>-->
                <!--</a>-->
                <!--<ul class="dropdown-menu extended tasks-bar">-->
                    <!--<div class="notify-arrow notify-arrow-blue"></div>-->
                    <!--<li>-->
                        <!--<p class="blue">You have 6 pending letter</p>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div class="task-info">-->
                                <!--<div class="desc">Design PSD </div>-->
                                <!--<div class="percent">90%</div>-->
                            <!--</div>-->
                            <!--<div class="progress progress-striped">-->
                                <!--<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">-->
                                    <!--<span class="sr-only">90% Complete (success)</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div class="task-info">-->
                                <!--<div class="desc">-->
                                    <!--Project 1-->
                                <!--</div>-->
                                <!--<div class="percent">30%</div>-->
                            <!--</div>-->
                            <!--<div class="progress progress-striped">-->
                                <!--<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">-->
                                    <!--<span class="sr-only">30% Complete (warning)</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div class="task-info">-->
                                <!--<div class="desc">Digital Marketing</div>-->
                                <!--<div class="percent">80%</div>-->
                            <!--</div>-->
                            <!--<div class="progress progress-striped">-->
                                <!--<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">-->
                                    <!--<span class="sr-only">80% Complete</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div class="task-info">-->
                                <!--<div class="desc">Logo Designing</div>-->
                                <!--<div class="percent">78%</div>-->
                            <!--</div>-->
                            <!--<div class="progress progress-striped">-->
                                <!--<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">-->
                                    <!--<span class="sr-only">78% Complete (danger)</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<div class="task-info">-->
                                <!--<div class="desc">Mobile App</div>-->
                                <!--<div class="percent">50%</div>-->
                            <!--</div>-->
                            <!--<div class="progress progress-striped active">-->
                                <!--<div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">-->
                                    <!--<span class="sr-only">50% Complete</span>-->
                                <!--</div>-->
                            <!--</div>-->

                        <!--</a>-->
                    <!--</li>-->
                    <!--<li class="external">-->
                        <!--<a href="#">See All Tasks</a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</li>-->
            <!-- task notificatoin end -->
            <!-- inbox notificatoin start-->
            <!--<li id="mail_notificatoin_bar" class="dropdown">-->
                <!--<a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
                    <!--<i class="icon-envelope-l"></i>-->
                    <!--<span class="badge bg-important">5</span>-->
                <!--</a>-->
                <!--<ul class="dropdown-menu extended inbox">-->
                    <!--<div class="notify-arrow notify-arrow-blue"></div>-->
                    <!--<li>-->
                        <!--<p class="blue">You have 5 new messages</p>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<span class="photo"><img alt="avatar" src="/Moderna/bili/Admin/View/Public/img/avatar-mini.jpg"></span>-->
                                    <!--<span class="subject">-->
                                    <!--<span class="from">Greg  Martin</span>-->
                                    <!--<span class="time">1 min</span>-->
                                    <!--</span>-->
                                    <!--<span class="message">-->
                                        <!--I really like this admin panel.-->
                                    <!--</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<span class="photo"><img alt="avatar" src="/Moderna/bili/Admin/View/Public/img/avatar-mini2.jpg"></span>-->
                                    <!--<span class="subject">-->
                                    <!--<span class="from">Bob   Mckenzie</span>-->
                                    <!--<span class="time">5 mins</span>-->
                                    <!--</span>-->
                                    <!--<span class="message">-->
                                     <!--Hi, What is next project plan?-->
                                    <!--</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<span class="photo"><img alt="avatar" src="/Moderna/bili/Admin/View/Public/img/avatar-mini3.jpg"></span>-->
                                    <!--<span class="subject">-->
                                    <!--<span class="from">Phillip   Park</span>-->
                                    <!--<span class="time">2 hrs</span>-->
                                    <!--</span>-->
                                    <!--<span class="message">-->
                                        <!--I am like to buy this Admin Template.-->
                                    <!--</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<span class="photo"><img alt="avatar" src="/Moderna/bili/Admin/View/Public/img/avatar-mini4.jpg"></span>-->
                                    <!--<span class="subject">-->
                                    <!--<span class="from">Ray   Munoz</span>-->
                                    <!--<span class="time">1 day</span>-->
                                    <!--</span>-->
                                    <!--<span class="message">-->
                                        <!--Icon fonts are great.-->
                                    <!--</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">See all messages</a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</li>-->
            <!-- inbox notificatoin end -->
            <!-- alert notification start-->
            <!--<li id="alert_notificatoin_bar" class="dropdown">-->
                <!--<a data-toggle="dropdown" class="dropdown-toggle" href="#">-->

                    <!--<i class="icon-bell-l"></i>-->
                    <!--<span class="badge bg-important">7</span>-->
                <!--</a>-->
                <!--<ul class="dropdown-menu extended notification">-->
                    <!--<div class="notify-arrow notify-arrow-blue"></div>-->
                    <!--<li>-->
                        <!--<p class="blue">You have 4 new notifications</p>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<span class="label label-primary"><i class="icon_profile"></i></span>-->
                            <!--Friend Request-->
                            <!--<span class="small italic pull-right">5 mins</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<span class="label label-warning"><i class="icon_pin"></i></span>-->
                            <!--John location.-->
                            <!--<span class="small italic pull-right">50 mins</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<span class="label label-danger"><i class="icon_book_alt"></i></span>-->
                            <!--Project 3 Completed.-->
                            <!--<span class="small italic pull-right">1 hr</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<span class="label label-success"><i class="icon_like"></i></span>-->
                            <!--Mick appreciated your work.-->
                            <!--<span class="small italic pull-right"> Today</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">See all notifications</a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</li>-->
            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/Moderna/bili/Admin/View/Public/img/avatar1_small.jpg">
                            </span>
                    <span class="username"><?php echo (session('username')); ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="<?php echo U(MODULE_NAME.'/Login/logout');?>"><i class="icon_profile">退出</i></a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>
      <!--header end-->

      <!--sidebar start-->
    <aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="<?php echo U(MODULE_NAME.'/Index/index');?>">
                    <i class="icon_house_alt"></i>
                    <span>主页</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>栏目管理</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo U(MODULE_NAME.'/Category/index');?>">查看栏目</a></li>
                    <li><a class="" href="<?php echo U(MODULE_NAME.'/Category/add');?>">添加栏目</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_desktop"></i>
                    <span>产品管理</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo U(MODULE_NAME.'/Product/index');?>">查看产品</a></li>
                    <li><a class="" href="<?php echo U(MODULE_NAME.'/Product/add');?>">添加产品</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_table"></i>
                    <span>博客管理</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo U(MODULE_NAME.'/Blog/index');?>">查看博客</a></li>
                    <li><a class="" href="<?php echo U(MODULE_NAME.'/Blog/add');?>">添加博客</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_documents_alt"></i>
                    <span>后台管理</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="">修改密码</a></li>
                    <li><a class="" href=""><span>登录界面</span></a></li>
                    <li><a class="" href="/Moderna">回到主页</a></li>
                    <li><a class="" href="">404错误</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
      <!--sidebar end-->

      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <h3 class="page-header"><i class="fa fa-files-o"></i>添加产品</h3>
                      <ol class="breadcrumb">
                          <li><i class="fa fa-home"></i><a href="add.html">主页</a></li>
                          <li><i class="icon_document_alt"></i>栏目管理</li>
                          <li><i class="fa fa-files-o"></i>添加产品</li>
                      </ol>
                  </div>
              </div>
              <!-- Form validations -->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Basic Forms
                          </header>
                          <div class="panel-body">
                              <form role="form" method="post" action="<?php echo U(MODULE_NAME.'/Product/addRun');?>" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="productName">产品名称</label>
                                      <input type="text" class="form-control" id="productName" name="productName" placeholder="Product Name">
                                  </div>
                                  <div class="form-group">
                                      <label for="picTitle">图片title</label>
                                      <input type="text" class="form-control" id="picTitle" name="picTitle" placeholder="Pic Title">
                                  </div>
                                  <div class="form-group">
                                      <label for="picAlt">图片alt</label>
                                      <input type="text" class="form-control" id="picAlt"  name="picAlt" placeholder="Pic Alt">
                                  </div>
                                  <div class="form-group">
                                      <label for="dataType">图片分组标识符</label>
                                      <select class="form-control m-bot15" name="dataType" id="dataType">
                                          <option value="cl">齿轮类</option>
                                          <option value="dd">电动机发电机轴激光修复类</option>
                                          <option value="fb">非标类</option>
                                          <option value="mj">模具类</option>
                                          <option value="pm">平面类</option>
                                          <option value="sb">设备及备件销售</option>
                                          <option value="zg">轧辊类</option>
                                          <option value="zz">轴类</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label for="pic">图片名称</label>
                                      <input type="file" id="pic"  name="pic" >
                                      <p class="help-block">Example block-level help text here.</p>
                                  </div>

                                  <div>
                                      <div class="form-group">
                                          <label for="cid">栏目类型</label>
                                      <select class="form-control m-bot15" name="cid" id="cid">
                                          <option value="1">齿轮类</option>
                                          <option value="2">电动机发电机轴激光修复类</option>
                                          <option value="3">非标类</option>
                                          <option value="4">模具类</option>
                                          <option value="5">平面类</option>
                                          <option value="6">设备及备件销售</option>
                                          <option value="7">轧辊类</option>
                                          <option value="8">轴类</option>
                                      </select>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">提交</button>
                              </form>

                          </div>
                      </section>
                  </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
  <script src="/Moderna/bili/Admin/View/Public/js/jquery.js"></script>
    <script src="/Moderna/bili/Admin/View/Public/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="/Moderna/bili/Admin/View/Public/js/jquery.scrollTo.min.js"></script>
    <script src="/Moderna/bili/Admin/View/Public/js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="/Moderna/bili/Admin/View/Public/js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="/Moderna/bili/Admin/View/Public/js/ga.js"></script>
    <!--custom switch-->
    <script src="/Moderna/bili/Admin/View/Public/js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="/Moderna/bili/Admin/View/Public/js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="/Moderna/bili/Admin/View/Public/js/jquery.hotkeys.js"></script>
    <script src="/Moderna/bili/Admin/View/Public/js/bootstrap-wysiwyg.js"></script>
    <script src="/Moderna/bili/Admin/View/Public/js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="/Moderna/bili/Admin/View/Public/assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="/Moderna/bili/Admin/View/Public/js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="/Moderna/bili/Admin/View/Public/js/scripts.js"></script>
  

  </body>
</html>