<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>We Love All Paws &trade; <?= set_default($page_title); ?></title>
		
		<link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
		
		<?php
			echo HTML::stylesheet(array
			(
				'assets/css/reset',
				'assets/css/layout',
				'assets/css/screen',
				'assets/fonts/geosans',
			), FALSE, FALSE, TRUE);

			echo HTML::script(array
			(
				'assets/js/jquery-1.6.2.min',
				'assets/js/jquery.bt',
				'assets/js/jquery.colorbox', 
				'assets/js/jquery.form',
				'assets/js/common',
			), FALSE, TRUE);
		?>
		
		<link rel="stylesheet" href="/assets/js/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/assets/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
		<script type="text/javascript" src="/assets/js/nivo-slider/jquery.nivo.slider.js"></script>		

		<link rel="stylesheet" href="/assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" />
		<script src="/assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script type="text/javascript">
		  $(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				animation_speed: 'normal', /* fast/slow/normal */
				slideshow: 5000, /* false OR interval time in ms */
				autoplay_slideshow: false, /* true/false */
				opacity: 0.70, /* Value between 0 and 1 */
				show_title: true, /* true/false */
				allow_resize: true, /* Resize the photos bigger than viewport. true/false */
				default_width: 500,
				default_height: 344,
				counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
				theme: 'facebook' /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			});
		  });
		</script>
		
		<meta charset="utf-8">

		<!--[if lt IE 7]> <link href="/assets/css/ie6.css" rel="stylesheet" type="text/css" /> <![endif]-->
		<!--[if IE]> <script type="text/javascript" src="/assets/js/html5.js"></script> <![endif]-->
		</head>
		<body id="<?= set_default($pageid, 'page1') ?>">
		<div id="main-tail-hor">
		  <div id="main-tail-ver">
		    <div id="main-tail-bot<?= $str = ($pageid == 'page6') ? 1 : NULL; ?>">
		      <div id="main-bg-top">
		        <div id="main-bg-bot<?= $str = ($pageid == 'page6') ? 1 : NULL; ?>">
		          <div id="main">
					
						<!-- header -->
						<header>
							<h1><a href="/"><span>PetCenter</span></a></h1>
							<nav>
								<ul>
									<li class="act"><a href="/">main</a></li>
									<li><a href="/about/">about us</a></li>
									<li><a href="/services/">services</a></li>
									<li><a href="/gallery/">gallery</a></li>
									<li><a href="/contact/">contact us</a></li>
								</ul>
							</nav>
							<?php include_once(DIR_PAGE . '/inc/homepage_banners.html') ?>

							<?php include_once(DIR_PAGE . '/inc/header_list.html') ?>
						</header>
