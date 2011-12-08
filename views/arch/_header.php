<!DOCTYPE html>
<html lang="en">
<head>
  <title>the insomniac</title>
  <meta charset="utf-8">
	
	<?php
		echo HTML::stylesheet(array
		(
			'assets/css/reset',
			'assets/css/grid',
			'assets/css/screen',
			'assets/css/prettyPhoto',
			'assets/fonts/franchise',
		), FALSE, FALSE, FALSE);

		echo HTML::script(array
		(
			'assets/js/jquery-1.4.1.min',
			'assets/js/jquery.bt',
			'assets/js/jquery.colorbox', 
			'assets/js/jquery.form',
			'assets/js/jScrollPane',
			'assets/js/jcarousellite',
			'assets/js/jquery.mousewheel',
			'assets/js/superfish',
			'assets/js/jquery.easing.1.3',
			'assets/js/backgroundPosition',
			'assets/js/jquery.prettyPhoto',
			'assets/js/hover-image',
			'assets/js/contact-form',
			'assets/js/pages',
			'assets/js/common',
			'assets/js/main',
		), FALSE, FALSE);
	?>
	
	<!--[if lt IE 9]>
		<script type="text/javascript" src="/assets/js/html5.js"></script>
		<style type="text/css">
			.bg{ behavior: url(/assets/js/PIE.htc); }
		</style>
	<![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->

</head>
<body>