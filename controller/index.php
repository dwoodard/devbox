<?php defined('LIBRARY') or die('No direct script access allowed');

	require_once DIR_VIEW . '/allpaws/_header.php'; 
?>

<div id="homepage-banners">
	<?php include_once(DIR_PAGE . '/inc/homepage_banners.html') ?>

	<?php include_once(DIR_PAGE . '/inc/header_list.html') ?>
</div>

<!-- content -->
<section id="content">
	<div id="indent">
		<div class="row-1">
			<div class="wrapper">				
				<article class="col-1">
					<div class="indent-left">

						<?php include_once(DIR_PAGE . '/inc/services_tile.html') ?>

						<div class="clear"></div>
						<div class="line-hor"></div>
						<h2>Who is Charlie?</h2>
					</div>
					<div class="info-box1">
						<div class="inner">
							<a href="/charlie/"><img src="/assets/images/allpaws/animal.jpg"></a>
							<p>Get to know Charlie! Our love-able, handsome, 3-legged, Bull Mastiff</p>
						</div>
					</article>
					<article class="col-2">
						<div class="info-box">
							<div class="inner"> <strong>Our services are provided to our clients to help meet all 
								of their in-home pet care needs.</strong> <b><a href="/contact/" style="white-space: nowrap;">setup a free consultation</a></b> </div>
							</div>
							<div class="indent-left1">
								<div class="line-ver">
									<div class="wrapper">
										<div class="block-1">

											<?php include_once(DIR_PAGE . '/inc/advantages_tile.html') ?>

											<div class="clear"></div>
										</div>
										<div class="block-2">

											<?php include_once(DIR_PAGE . '/inc/pet_tile.html') ?>

										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
		<!-- secondary-content -->
		<div id="aside-tail-hor">
			<div id="aside-bg">
				<aside>
					<div class="indent">
						<div class="row-2">
							<div class="line-ver-1">
								<div class="wrapper">
									<article class="col-1">
										<div class="wrapper">

											<div class="block-1">
												<h2>Useful Info</h2>
												<ul class="list-2">
													<li><a href="#">Top 5 Dog Health Problems</a></li>
													<li><a href="#">A Guide To Choosing a Puppy</a></li>
													<li><a href="#">Did you know?</a></li>
												</ul>
											</div>
											<div class="block-2">
												<h2>Sitemap</h2>
												<ul class="list-2">
													<li><a href="/about/">About Us</a></li>
													<li><a href="/services/">Our Services</a></li>
													<li><a href="/services/">Gallery</a></li>
													<li><a href="/services/">Who Is Charlie?</a></li>
													<li><a href="/services/">Pet of the Month</a></li>
													<li><a href="/services/">Contact Us</a></li>
												</ul>
											</div>
											<div class="block-3">
												<img src="/assets/images/icons/social/facebook_32.png"> Friend us on Facebook!
												<ul class="list-2">
													<li><a href="#">Behavior Consultations</a></li>
													<li><a href="#">Hot news</a></li>
												</ul>
											</div>
										</div>
									</article>
									<article class="col-2">
										<h2><i>Sign Up for Our Monthly Newsletter</i></h2>
										<form action="" id="subscribe-form">
											<div class="wrapper"> <strong>Enter Your E-Mail</strong>
												<label>
													<input type="text" value="Name" onBlur="if(this.value=='') this.value='Name'" onFocus="if(this.value =='Name' ) this.value=''" />
												</label>
												<a href="#" onClick="document.getElementById('subscribe-form').submit()">Subscribe</a> </div>
											</form>
										</article>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>


<?php require_once DIR_VIEW . '/allpaws/_footer.php'; ?>