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
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active">质量目标 && 质量方针
						</li>
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
								<h3 class="navbar-brand" href="#"><span>新旺激光</span>质量目标</h3>
							</div>
							<img src="/Moderna/bili/Home/View/Public/img/works/4.jpg" alt="" />
						</div>
						<div>
							<p><span style="color: red;">以顾客为关注焦点</span>：组织依存于其顾客。因此组织应理解顾客当前和未来的需求，满足顾客并争取超越顾客期望。</p>
							<p><span style="color: red;">领导作用</span>：领导者确立本组织统一的宗旨和方向。他们应该创造并保持使员工能充分参与实现组织目标的内部环境。</p>
							<p><span style="color: red;">全员参与</span>：各级人员是组织之本，只有他们的充分参与，才能使他们的才干为组织获益。</p>
							<p><span style="color: red;">过程方法</span>：将相关的活动和资源作为过程进行管理，可以更高效地得到期望的结果。</p>
							<p><span style="color: red;">管理的系统方法</span>：识别、理解和管理作为体系的相互关联的过程，有助于组织实现其目标的效率和有效性。</p>
							<p><span style="color: red;">持续改进</span>：组织总体业绩的持续改进应是组织的一个永恒的目标。</p>
							<p><span style="color: red;">基于事实的决策方法</span>：有效决策是建立在数据和信息分析基础上。</p>
							<p><span style="color: red;">互利的供方关系</span>：组织与其供方是相互依存的，互利的关系可增强双方创造价值的能力。</p>
						</div>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#">公司简介</a></li>
								<li><i class="icon-user"></i><a href="#"> 成都新旺激光</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> 质量目标</a></li>
							</ul>
						</div>
					</article>
				</div>
				<div class="col-lg-4">
					<article>
						<div class="post-image">
							<div class="post-heading">
								<h3 class="navbar-brand" href="#">质量方针</h3>
							</div>
							<img src="/Moderna/bili/Home/View/Public/img/works/1.jpg" alt="" />
						</div>
						<div>
							以顾客为关注焦点：组织依存于其顾客。因此组织应理解顾客当前和未来的需求，满足顾客并争取超越顾客期望。
							领导作用：领导者确立本组织统一的宗旨和方向。他们应该创造并保持使员工能充分参与实现组织目标的内部环境。
							全员参与：各级人员是组织之本，只有他们的充分参与，才能使他们的才干为组织获益。
							过程方法：将相关的活动和资源作为过程进行管理，可以更高效地得到期望的结果。
							管理的系统方法：识别、理解和管理作为体系的相互关联的过程，有助于组织实现其目标的效率和有效性。
							持续改进：组织总体业绩的持续改进应是组织的一个永恒的目标。基于事实的决策方法：有效决策是建立在数据和信息分析基础上。
							互利的供方关系：组织与其供方是相互依存的，互利的关系可增强双方创造价值的能力。
						</div>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> 公司简介</a></li>
								<li><i class="icon-user"></i><a href="#"> 成都新旺激光</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> 质量方针</a></li>
							</ul>
						</div>
					</article>
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