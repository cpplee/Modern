<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>成都新旺激光技术有限公司</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://bootstraptaste.com" />
	<!-- css -->
	<link href="/Moderna/bili/Home/View/Public/Css/bootstrap.min.css" rel="stylesheet" />
	<link href="/Moderna/bili/Home/View/Public/Css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="/Moderna/bili/Home/View/Public/Css/jcarousel.css" rel="stylesheet" />
	<link href="/Moderna/bili/Home/View/Public/Css/flexslider.css" rel="stylesheet" />
	<link href="/Moderna/bili/Home/View/Public/Css/style.css" rel="stylesheet" />


	<!-- Theme skin -->
	<link href="/Moderna/bili/Home/View/Public/Css/skins/default.css" rel="stylesheet" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><span>成都新旺激光</span>技术有限公司</a>
            </div>

            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/index');?>">主页</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">产品中心<b class=" icon-angle-down"></b></a>

                        <ul class="dropdown-menu">
                            <?php if(is_array($cate)): foreach($cate as $key=>$cate_v): ?><li><a href="<?php echo U(MODULE_NAME.'/Product/productcate',array('id'=>$cate_v['id']));?>"><?php echo ($cate_v["name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>

                    </li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Product/index');?>">实例分析</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Company/index');?>">公司概况</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/People/index');?>">人才招聘</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Quality/index');?>">质量体系</a></li>
                    <li class="active"><a href="<?php echo U(MODULE_NAME.'/Contact/index');?>">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
	<!-- end header -->
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active">公司讯息</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

						<article>

							<div class="post-image">
								<div class="post-heading">
									<h3><a href="#"><?php echo ($article["blogfirsttitle"]); ?></a></h3>
								</div>
								<!--<img src="/Moderna/bili/Home/View/Public/img/dummies/blog/img1.jpg" alt="" />-->
							</div>
							<p>
								<?php echo ($article["content"]); ?>
							</p>
							<div class="bottom-article">
								<ul class="meta-post">
									<li><i class="icon-calendar"></i><a href="#"><?php echo (date("Y-m-d H:i",$article["time"])); ?></a></li>
									<li><i class="icon-user"></i><a href="#"><?php echo ($article["blogsecondtitle"]); ?></a></li>
									<li><i class="icon-folder-open"></i><a href="#">新旺</a></li>
									<li><i class="icon-comments"></i><a href="#"><?php echo ($article["click"]); ?>次点击</a></li>
								</ul>
								<a href="" class="pull-right"><i class="icon-angle-right"></i></a>
							</div>

						</article>

				</div>
				<div class="col-lg-4">
					<aside class="right-sidebar">
						<div class="widget">
							<form class="form-search">
								<input class="form-control" type="text" placeholder="搜索..">
							</form>
						</div>
						<div class="widget">
							<h5 class="widgetheading">分类</h5>
							<ul class="cat">
								<li><i class="icon-angle-right"></i><a href="#">公司信息</a><span> (20)</span></li>
								<li><i class="icon-angle-right"></i><a href="#">公司产品</a><span> (11)</span></li>
								<li><i class="icon-angle-right"></i><a href="#">人性化</a><span> (9)</span></li>
								<li><i class="icon-angle-right"></i><a href="#">专业设备</a><span> (12)</span></li>
								<li><i class="icon-angle-right"></i><a href="#">服务</a><span> (18)</span></li>
							</ul>
						</div>
						<div class="widget">
							<h5 class="widgetheading">最新信息</h5>
							<ul class="recent">
								<li>
									<img src="/Moderna/bili/Home/View/Public/img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
									<h6><a href="#">加入我们</a></h6>
									<p>
										成都新旺技术有限公司
									</p>
								</li>

							</ul>
						</div>
						<div class="widget">
							<h5 class="widgetheading">流行 标签</h5>
							<ul class="tags">
								<li><a href="#">产品设计</a></li>
								<li><a href="#">未来</a></li>
								<li><a href="#">技术</a></li>
								<li><a href="#">网络</a></li>
								<li><a href="#">宗旨</a></li>
								<li><a href="#">发展</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
	</section>
	<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">加入我们</h5>
                    <address>
                        <strong>成都新旺激光技术有限公司</strong><br>
                        邮编：401329 <br>
                        重庆市九龙坡区白市驿镇海龙工业园区</address>
                    <p>
                        <i class="icon-phone"></i> (电话) 13330219628 <br>
                        <i class="icon-phone"></i> (传真) 023-65710879 <br>
                        <i class="icon-envelope-alt"></i> (邮箱) leeuish5@163.com
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Pages</h5>
                    <ul class="link-list">
                        <li><a href="#">案例与条约</a></li>
                        <li><a href="#">个人权利</a></li>
                        <li><a href="#">事业中心</a></li>
                        <li><a href="#">联系我们</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">最新投稿</h5>
                    <ul class="link-list">
                        <li><a href="#">人才招聘</a></li>
                        <li><a href="#">公司规划</a></li>
                        <li><a href="#">前景展望</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">联系我们</h5>
                    <div class="flickr_badge">
                        <!--<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>-->
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; 成都新旺激光 2016 All right reserved </span>
                        </p>
                        <!--
                            All links in the footer should remain intact.
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Moderna
                        -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-qq"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/Moderna/bili/Home/View/Public/Js/jquery.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/jquery.easing.1.3.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/bootstrap.min.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/jquery.fancybox.pack.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/jquery.fancybox-media.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/google-code-prettify/prettify.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/portfolio/jquery.quicksand.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/portfolio/setting.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/jquery.flexslider.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/animate.js"></script>
<script src="/Moderna/bili/Home/View/Public/Js/custom.js"></script>
</body>
</html>