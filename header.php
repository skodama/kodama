<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="迷い猫･迷い犬(迷子猫･迷子犬)の捜索はペット探偵のペットサーチアイにお任せ下さい。">
<meta name="keywords" content="迷い猫,迷い犬,迷子犬,迷子猫,ペット探偵,ネコ,家出,捜索,探し方">
<meta name="author" content="searcheye">

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
<!-- <link href="css/style-responsive.css" rel="stylesheet"> -->
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/ico/icon144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/ico/icon114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/ico/icon72.png">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/ico/icon57.png">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/ico/favicon.png">
<meta name="viewport" content="width=device-width; initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<?php wp_head(); ?>
</head>
<body>
<!-- .Wrapper -->
<div class="Wrapper">
	<!-- .Header -->
	<div class="Header">
		<header>


			<!-- brand/ -->
			<div class="brand">
				<h1><a class="logo" href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
				<p class="head_text">
				<span class="pr_text"><?php bloginfo( 'description' ); ?></span>
				</p>
			</div>
			<!-- /brand -->

			<!-- nav/ -->
			<nav>
				<?php wp_nav_menu(array('theme_location' => 'headermenu','menu_class' => 'nav' ,'link_before'=> '<span>', 'link_after'=> '</span>')); ?> 
			</nav>
			<!-- /nav -->

		</header>
	</div>
	<!-- /.Header -->


