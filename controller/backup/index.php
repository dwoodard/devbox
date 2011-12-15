<?php defined('LIBRARY') or die('No direct script access allowed');

	if(!$Auth->loggedIn()) redirect('/login');
	
	if($Input->post('action'))
    {
		$Error->blank($Input->post('name'), 'Name');
		$Error->blank($Input->post('gender'), 'Gender');
		$Error->blank($Input->post('stance'), 'Stance');
		
		if($Error->ok())
		{
			$_SESSION['profile'] = json_encode($_POST);			
			redirect('/profile/' . $_POST['action'] . '/');
		}
    }
    
	unset($_SESSION['profile']);
	unset($_SESSION['user']);
	
	$page_title = '&raquo; New Profile';
	require_once DIR_VIEW . '/devbox/_header.php'; 
	require_once DIR_VIEW . '/devbox/_navigation.php'; 
?>

<div class="wrapper">		
	<div class="container">
		<div class="row">
			<div class="span12">
			
				<?php if (!$Error->ok()): ?>
					<div class="row">
						<div style="margin-left: 40px;">
							<div class="alert-message _block-message error">
								<a class="close" href="#">×</a>
								<?php foreach ($Error->errors as $k => $v): ?>
									<p><?= $v[0]; ?></p>
								<?php endforeach ?>
						    </div>
						</div>
					</div>
				<?php endif ?>
			
				<form action="/profile/new/" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="form-stacked" id="profile">
					<input type="hidden" name="action" value="preview" id="action">
					
					<fieldset>
						<legend><h3>Download Your Profile</h3></legend>
						<div class="well">	
							<div class="clearfix">
							<img alt="" src="/assets/images/origami/save.png" class="thumbnail floatleft" style="margin: -10px 5px 0; width: 125px;">
							<h3>user_profile_archive.zip (3.0MB)</h3>
							<p>Updated On: December 6, 2011</p>
							<input type="button" value="Download" class="btn primary"> 
							</div>
						</div>
					</fieldset>
					
					<div class="clearboth"></div>

					<h3>Save your profile to the Nexersys Cloud</h3>

					<div class="clearfix">
						<label for="fileInput">File input</label>
						<div class="input">
							<input type="file" name="fileInput" id="fileInput" class="input-file">
						</div>
					</div>

					<div class="actions">
						<input type="button" value="Return to Dashboard" class="btn secondary link" rel="/dashboard/"> 
						<input type="submit" value="Upload &raquo;" class="btn success"> 
					</div>
				</form>
			</div>
		</div>
	</div>

<?php require_once DIR_VIEW . '/devbox/_footer.php'; ?>