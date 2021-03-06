<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>成都新旺技术有限公司</title>
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
	<section id="featured">
		<div class="col-lg-2 col-lg-offset-10">
			<!--<aside class="right-sidebar">-->
				<div class="widget">
					<form class="form-search"  action="<?php echo U(MODULE_NAME.'/Index/search');?>" method="post">
						<input class="form-control" type="text"  name="search" placeholder="搜索..">
					</form>
				</div>
			<!--</aside>-->
		</div>
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="/Moderna/bili/Home/View/Public/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>加入我们</h3>
					<p>成都新旺激光技术有限公司</p>
					<a href="<?php echo U(MODULE_NAME.'/Company/index');?>" class="btn btn-theme">更多了解</a>
                </div>
              </li>
              <li>
                <img src="/Moderna/bili/Home/View/Public/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>加入我们</h3>
					<p>邮编：401329<br>
						重庆市九龙坡区白市驿镇海龙工业园区</p>
					<a href="<?php echo U(MODULE_NAME.'/Company/index');?>" class="btn btn-theme">更多了解</a>
                </div>
              </li>
              <li>
                <img src="/Moderna/bili/Home/View/Public/img/slides/3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>加入我们</h3>
					<p> <i class="icon-phone"></i> (电话) 13330219628 <br>
						<i class="icon-phone"></i> (传真) 023-65710879 <br>
						<i class="icon-envelope-alt"></i> (邮箱) xdxwjs@163.com
					</p>
					<a href="<?php echo U(MODULE_NAME.'/Company/index');?>" class="btn btn-theme">更多了解</a>
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>成都新旺激光</span> CHENGDUXINWANGLASER.TECHNOLOGY CO.LTD</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>公司简介</h4>
								<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
									公司简介
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="<?php echo U(MODULE_NAME.'/Company/index');?>">了解更多</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>产品中心</h4>
								<div class="icon">
								<i class="fa fa-pagelines fa-3x"></i>
								</div>
								<p>
									产品中心
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="<?php echo U(MODULE_NAME.'/Product/index');?>">了解更多</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>人才招聘</h4>
								<div class="icon">
								<i class="fa fa-edit fa-3x"></i>
								</div>
								<p>
									人才招聘
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="<?php echo U(MODULE_NAME.'/People/index');?>">了解更多</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>质量体系</h4>
								<div class="icon">
								<i class="fa fa-code fa-3x"></i>
								</div>
								<p>
									质量体系
								</p>
							</div>
							<div class="box-bottom">
								<a href="<?php echo U(MODULE_NAME.'/Quality/index');?>">了解更多</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">近期产品</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<?php if(is_array($product)): foreach($product as $key=>$product_v): ?><li class="item-thumbs col-lg-3 design" data-id="id-<?php echo ($product_v["cid"]); ?>" data-type="<?php echo ($product_v['datatype']); ?>">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
							<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo ($product_v['pictitle']); ?>" href="/Moderna<?php echo ($product_v['pic']); ?>">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
							</a>
						<!-- Thumb Image and Description -->
							<img src="/Moderna<?php echo ($product_v['pic']); ?>" alt="<?php echo ($product_v['picalt']); ?>">
						</div>
						</li>
						<!-- End Item Project --><?php endforeach; endif; ?>
					</ul>
					</section>
				</div>
			</div>
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
                        <li><a href="#" data-placement="top" title="qq"><i class="icon-github-alt"></i></a></li>
                        <!--<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>-->
                        <!--<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>-->
                        <!--<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>-->
                        <!--<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>-->
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