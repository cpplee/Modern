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
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">模具类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">轴类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">齿轮类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">压辊类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">平面类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">非标类</a></li>
                            <li><a href="<?php echo U(MODULE_NAME.'/Index/portfolio');?>">激光设备销售</a></li>
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
					<li><a href="#">Features</a><i class="icon-angle-right"></i></li>
					<li class="active">Typography</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>H1-H6 Heading style</h4>
				<h1>Heading H1</h1>
				<h2>Heading H2</h2>
				<h3>Heading H3</h3>
				<h4>Heading H4</h4>
				<h5>Heading H5</h5>
				<h6>Heading H6</h6>
			</div>
			<div class="col-lg-4">
				<h4>Example of paragraph</h4>
				<p>
					<strong>Lorem ipsum dolor sit amet</strong>, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
				</p>
				<p class="lead">
					At vero eos et accusam et justo duo dolores et eabum.
				</p>
				<p>
					<em>
					Consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </em>
				</p>
				<p>
					<small>
					Consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </small>
				</p>
			</div>
			<div class="col-lg-4">
				<h4>Float image in paragraph</h4>
				<img src="/Moderna/bili/Home/View/Public/img/dummies/dummy-1.jpg" alt="" class="align-left" />
				<p>
					 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et eabum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
				</p>
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
		<!-- Descriptions -->
		<div class="row">
			<div class="col-lg-6">
				<!-- Description -->
				<h4>Description</h4>
				<dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
				</dl>
			</div>
			<!-- Horizontal Description -->
			<div class="col-lg-6">
				<h4>Horizontal Description</h4>
				<dl class="dl-horizontal">
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
				</dl>
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
		<!-- Lists -->
		<div class="row">
			<!-- Unordered Lists -->
			<div class="col-lg-3">
				<h4>Unordered Lists</h4>
				<ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>
			</div>
			<!-- Unstyled Lists -->
			<div class="col-lg-3">
				<h4>Unstyled Lists</h4>
				<ul class="unstyled">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>
			</div>
			<!-- Ordered Lists -->
			<div class="col-lg-3">
				<h4>Ordered Lists</h4>
				<ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ol>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ol>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ol>
			</div>
			<!-- Unstyled Lists -->
			<div class="col-lg-3">
				<h4>Unstyled Lists</h4>
				<ol class="unstyled">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ol>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ol>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ol>
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
		<div class="row">
			<div class="col-lg-4">
				<h4>Blockquote</h4>
				<blockquote>
					<i class="icon-quote-left icon-2x"></i> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
				</blockquote>
			</div>
			<div class="col-lg-4">
				<h4>Blockquote and cite</h4>
				<blockquote>
					<i class="icon-quote-left icon-2x"></i> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <cite>John doe, Awesome Inc.</cite>
				</blockquote>
			</div>
			<div class="col-lg-4">
				<h4>Pullquote left and right</h4>
				<span class="pullquote-left">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </span>
				<span class="pullquote-right margintop10">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </span>
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
		<div class="row">
			<div class="col-lg-12">
				<h4>Preformatted text</h4>
				<pre class="prettyprint linenums">
					 &lt;div class="col-lg-12"&gt;<br />
					 &nbsp;&nbsp;&lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;<br />
					 &nbsp;&nbsp;&lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;<br />
					 &nbsp;&nbsp;&lt;p&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr..&lt;/p&gt;<br />
					 &lt;/div&gt;
				</pre>
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