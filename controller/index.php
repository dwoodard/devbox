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
		


<?php require_once DIR_VIEW . '/allpaws/_footer.php'; ?>