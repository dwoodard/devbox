<?php defined('LIBRARY') or die('No direct script access allowed');

	$page_title = '&raquo; Dashboard';
	
    if(!$Auth->loggedIn()) redirect('/login/');

	require_once DIR_VIEW . '/devbox/_header.php'; 
	require_once DIR_VIEW . '/devbox/_navigation.php'; 
?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span16">

					<?php if (!$Error->ok()): ?>
						<div class="row">
							<div style="">
								<div class="alert-message warning">
									<?php foreach ($Error->errors as $k => $v): ?>
										<p><?= $v; ?></p>
									<?php endforeach ?>
							    </div>
							</div>
						</div>
					<?php endif ?>

				</div>
			</div>
			<div class="row">
				<div class="span-one-third">
					<!-- <a href="/template/list/">
					<img alt="" src="/assets/images/origami/file.png" class="thumbnail floatleft" style="margin: 10px 10px 0 0; width: 55px;">
					<h3>Easy Templates</h3></a>
					<p>Easily add pages using your default template or start a new template.</p>
					
					<a href="/testimonial/">
					<img alt="" src="/assets/images/origami/discussion.png" class="thumbnail floatleft" style="margin: 10px 5px 0; width: 55px;">
					<h3>Easy Testimonials</h3></a>
					<p>Build a collection of customer Testimonials.</p>
					
					<a href="/gallery/">
					<img alt="" src="/assets/images/milky/27.png" class="thumbnail floatleft" style="margin: 10px 8px 0;">
					<h3>Easy Gallery</h3></a>
					<p>Upload your picture gallery. Crop, resize and apply popular filters.</p> -->

					<a href="/profile/new/">
					<img alt="" src="/assets/images/origami/address_book.png" class="thumbnail floatleft" style="margin: 10px 5px 0; width: 55px;">
					<h3>New profile</h3></a>
					<p>New users can start here to create a new profile.</p>
					
					<a href="/backup/">
					<img alt="" src="/assets/images/origami/save.png" class="thumbnail floatleft" style="margin: 10px 5px 0; width: 55px;">
					<h3>Easy Backups</h3>
					<p>Backup your profile with <a href="http://www.dropbox.com" target="_blank">Dropbox</a> support or use a thumb drive.</p>
					
					<img alt="" src="/assets/images/icons/dashboard/icon_18.png" class="thumbnail floatleft" style="margin-top: 10px;">
					<h3>Easy Settings</h3>
					<p>Setup Admin access, email contacts, database settings and more.</p>
				</div>
				<div class="span-one-third">
				</div>
				<div class="span-one-third">
				</div>
			</div>
		</div>

<?php require_once DIR_VIEW . '/devbox/_footer.php'; ?>
