<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="/Moderna/bili/Admin/View/Public/img/favicon.png">

    <title>成都新旺激光技术有限公司</title>

    <!-- Bootstrap CSS -->    
    <link href="/Moderna/bili/Admin/View/Public/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/Moderna/bili/Admin/View/Public/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/Moderna/bili/Admin/View/Public/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/Moderna/bili/Admin/View/Public/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="/Moderna/bili/Admin/View/Public/css/style.css" rel="stylesheet">
    <link href="/Moderna/bili/Admin/View/Public/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="/Moderna/bili/Admin/View/Public/js/html5shiv.js"></script>
    <script src="/Moderna/bili/Admin/View/Public/js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="<?php echo U(MODULE_NAME.'/Login/login');?>" method="post">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="请输入用户名" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="请输入密码">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" name="remember"> 记住 我
                <span class="pull-right"> <a href="#"> 忘记密码?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">登录</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">注册</button>
        </div>
      </form>

    </div>


  </body>
</html>