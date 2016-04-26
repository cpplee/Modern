<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>雷森激光技术有限公司</title>
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
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7DO66EoIBNM9MGRCQSjDkxtRduIOiS6Y"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<style type="text/css">
		.allmap {
			width: 100%;
			height: 500px;
			overflow: hidden;
			margin:0;
			font-family:"微软雅黑";
		}
	</style>
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
                <a class="navbar-brand" href="../index.html"><span>新旺激光</span>技术有限公司</a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/index');?>">主页</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">产品中心<b class=" icon-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/typography');?>">模具类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/components');?>">轴类</a></li>
                            <li><a href="#">齿轮类</a></li>
                            <li><a href="#">压辊类</a></li>
                            <li><a href="#">平面类</a></li>
                            <li><a href="#">非标类</a></li>
                            <li><a href="#">激光设备销售</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">公司概况</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/blog');?>">实例分析</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/blog');?>">人才招聘</a></li>
                    <li><a href="<?php echo U(MODULE_NAME.'/Index/blog');?>">质量体系</a></li>
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
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<!--<iframe src="">-->
			<!--<div id="allmap" class="allmap"></div>-->
		<!--</iframe>-->
   <div id="allmap" class="allmap"></div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
				<form id="contactform" action="../../../../contact/contact.php" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
								<span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
							</p>
						</div>
					</div>
				</form>
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
                        <strong>新旺激光技术有限公司</strong><br>
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
                        <li><a href="#">Press release</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Career center</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Latest posts</h5>
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
                            <span>&copy; 新旺激光 2016 All right reserved </span> <a href="http://www.baidu.com/"></a>
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
<script src="/Moderna/bili/Home/View/Public/Js/validate.js"></script>

<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");    // 创建Map实例
	map.centerAndZoom(new BMap.Point(104.06792346, 30.67994285),14);  // 初始化地图,设置中心点坐标和地图级别
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>
</body>
</html>