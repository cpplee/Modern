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
					<li class="active">公司简介</li>
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
								<h3 class="navbar-brand" href="#"><span>成都新旺激光</span>技术有限公司</h3>
							</div>
							<img src="/Moderna/bili/Home/View/Public/img/dummies/blog/img1.jpg" alt="" />
						</div>
						<div>
							<p><span style="color:red;">成都新旺激光技术有限公司</span>专业从事各种轴类、模具、齿轮、轧辊、平面体、非标件等的激光表面淬火、激光熔覆修复和机械尺寸超公差修复。</p>
							<p>公司是专业的激光技术研发与应用、激光设备仪器设计生产和销售的高科技实体企业。公司地址在： <span style="color:red;">重庆市九龙坡区白市驿镇海龙工业园区</span>。</p>
							<p>公司本着科技创新的精神，在激光表面工程技术开发、激光成套设备的研发、激光技术的产业化等方面都取得了重大进展。</p>
							<p>公司的技术和产品在冶金、模具、汽车、化工、石油、电力、水泥、机械、矿山、船舶和环境保护等行业都拥有广泛的市场。</p>
							<p>公司现已形成技术系列化、生产专业化、产品多样化、销售网络化的经营格局，并立足于西南地区发展壮大。</p>
							<p>公司始终坚持技术进步，深入研发激光器、光束处理系统、超细合金粉和激光工艺等核心技术，为多个行业提供成熟先进的解决方案，并不断取得突破性成果，其中齿面激光处理技术、轧辊激光技术为国内领先水平。</p>
							<p>尤其是模具表面激光淬火技术解决了汽车模具制造业中存在的选材与传统模具表面热处理技术瓶颈问题,大大提高了模具的使用寿命，降低了制造成本。</p>
							<p>这是模具制造技术的创新，尤其对我国汽车覆盖件模具的国产化有突破性意义。</p>
							<p>激光已成为工业战线的利器，成熟的激光技术已被公认为先进、实用、具有产业高附加值等特点的高科技技术。先用激光，先受益。</p>
						</div>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> 专业</a></li>
								<li><i class="icon-user"></i><a href="#"> 成都新旺激光</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> 公司简介</a></li>
							</ul>
						</div>
				</article>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form class="form-search">
						<input class="form-control" type="text" placeholder="Search..">
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