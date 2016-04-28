<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Moderna - Bootstrap 3 flat corporate template</title>
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
                <a class="navbar-brand" href="../index.html"><span>成都新旺激光</span>技术有限公司</a>
            </div>

            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/index');?>">主页</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">产品中心<b class=" icon-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">齿轮类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">电动机发电机轴激光修复类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">非标类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">模具类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">平面类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">设备及备件销售</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">轧辊类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">轴类</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">公司概况</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/blog');?>">实例分析</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/typography');?>">人才招聘</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/components');?>">质量体系</a></li>
                    <li class="active"><a href="<?php echo U(MODULE_NAME.'/Index/contact');?>">联系我们</a></li>
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
					<li class="active">Portfolio</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<li class="web"><a href="#" title="">Web design</a></li>
					<li class="1"><a href="#" title="">1</a></li>
					<li class="graphic"><a href="#" title="">Graphic design</a></li>
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="/Moderna/Uploads/2016-04-27/5720cf2a97444.png">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>

							<!--/Moderna/bili/Home/View/Public/img/works/1.jpg-->
						<!-- Thumb Image and Description -->
						<img src="/Moderna/Uploads/2016-04-27/5720cf2a97444.png" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="1">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="/Moderna/bili/Home/View/Public/img/works/2.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="/Moderna/bili/Home/View/Public/img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="graphic">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="/Moderna/bili/Home/View/Public/img/works/3.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="/Moderna/bili/Home/View/Public/img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="/Moderna/bili/Home/View/Public/img/works/4.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="/Moderna/bili/Home/View/Public/img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-4" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="/Moderna/bili/Home/View/Public/img/works/5.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="/Moderna/bili/Home/View/Public/img/works/5.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-5" data-type="1">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="/Moderna/bili/Home/View/Public/img/works/6.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="/Moderna/bili/Home/View/Public/img/works/6.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="/Moderna/bili/Home/View/Public/img/works/7.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="/Moderna/bili/Home/View/Public/img/works/7.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="graphic">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="/Moderna/bili/Home/View/Public/img/works/8.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="/Moderna/bili/Home/View/Public/img/works/8.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- End Item Project -->
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
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                        <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                        <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Flickr photostream</h5>
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
                            <span>&copy; 成都新旺激光 2016 All right reserved </span> <a href="http://www.baidu.com/"></a>
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
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
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