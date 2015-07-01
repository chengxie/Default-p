<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php $this->options->charset(); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

<!-- CDN路径 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/metro-bootstrap.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->adminUrl('css/grid.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
    <![endif]-->

<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

		<!-- 通过自有函数输出HTML头部信息 -->
		<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
	</head>
	<body>
<!--[if lt IE 8]>
		<div class="browsehappy"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
		<![endif]-->

		<header id="header" class="clearfix">
			<div class="container">
				<div class="colgroup">
					<div class="site-name col-mb-12 col-9">
						<a id="logo" href="<?php $this->options->siteUrl(); ?>">
							<?php $this->options->title() ?>
						</a>
						<p class="description"><?php $this->options->description() ?></p>
					</div>
					<div class="col-mb-12">
						<nav id="nav-menu" class="clearfix" role="navigation">
							<a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><span class="glyphicon glyphicon-home"></span> 首页</a>
							<a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>guestbook.html"><span class="glyphicon glyphicon-pencil"></span> 留言</a>
							<a href="<?php $this->options->siteUrl(); ?>feed"><span class="glyphicon glyphicon-paperclip"></span> 订阅</a>
						</nav>
					</div>
				</div><!-- end .colgroup -->
			</div>
		</header><!-- end #header -->
		<div id="body">
			<div class="container">
				<div class="colgroup">