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
				'assets/css/forms',
				'assets/css/alerts',
				'assets/css/colorbox',
				'assets/fonts/geosans',
			), FALSE, FALSE, TRUE);

			echo HTML::script(array
			(
				'assets/js/jquery-1.4.1.min',
				'assets/js/jquery.bt',
				'assets/js/jquery.colorbox', 
				'assets/js/jquery.form',
				'assets/js/common',
			), FALSE, TRUE);
		?>

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
									<li class="<?= $str = ($requestURI[1] == '') ? 'act': NULL; ?>"><a href="/">main</a></li>
									<li class="<?= $str = ($requestURI[1] == 'about') ? 'act': NULL; ?>"><a href="/about/">about us</a></li>
									<li class="<?= $str = ($requestURI[1] == 'services') ? 'act': NULL; ?>"><a href="/services/">services</a></li>
									<li class="<?= $str = ($requestURI[1] == 'gallery') ? 'act': NULL; ?>"><a href="/gallery/">gallery</a></li>
									<li class="<?= $str = ($requestURI[1] == 'contact') ? 'act': NULL; ?>"><a href="/contact/">contact us</a></li>
								</ul>
							</nav>
							
						</header>
