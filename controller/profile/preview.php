<?php defined('LIBRARY') or die('No direct script access allowed');

	if(!$Auth->loggedIn()) redirect('/login');
	
	$profile = json_decode($_SESSION['profile']);
	
	if($Input->post('action'))
    {
		$Error->blank($_POST['quote'], 'Quote');
		$Error->blank($_POST['caption'], 'Caption');
		
		if($Error->ok())
		{
			$record = new Testimonial();

			$record->user_id = $Auth->id;
			$record->caption = $Input->post('caption');
			$record->quote = $Input->post('quote');
			$record->insert_date = date('Y-m-d');
			$record->update_date = date('Y-m-d');
			$id = $record->insert(); // Insert record

			redirect('/profile/preview/');
		}
    }
    
	$option = Matrix::fetch("SELECT * FROM matrix WHERE main = 1 ORDER BY weight");
	
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
						<div style="width: 562px; margin: 0 auto;">
							<div class="alert-message _block-message error">
								<a class="close" href="#">×</a>
								<?php foreach ($Error->errors as $k => $v): ?>
									<p><?= $v[0]; ?></p>
								<?php endforeach ?>
						    </div>
						</div>
					</div>
				<?php endif ?>
			
				<form action="/dashboard/" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="form-stacked">
					<input type="hidden" name="action" value="true">
				
					<fieldset>
						<legend><h2>Preview and Save Your Profile</h2></legend>
						<div class="well">	
							<div class="clearfix">
								<img src="/assets/images/nexersys/icon_avatar.gif" class="floatleft" style="margin-right: 10px; height: 90px;">
								<strong>Name</strong>: <?= $profile->name ?> <br />
								<strong>Age</strong>: <?= $profile->age ?> <br />
								<strong>Weight</strong>: <?= $profile->weight ?> <br />
								<strong>Soundtrack</strong>: <?= $profile->sound ?> <br />
								<strong>Music Genre</strong>: <?= $profile->music ?> <br />
							</div>
						</div>
					</fieldset>
					
					<?php if (isset($_SESSION['user'])): ?>
						<fieldset>
							<div class="well">	
								<div class="clearfix">
									<label>Additional User Profiles</label>
									
									<table>
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Age</th>
												<th>Weight</th>
												<th>Stance</th>
												<th>Gender</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($_SESSION['user'] as $k => $v): ?>
												<?php $obj = json_decode($v); ?>
												
												<tr>
													<td><?= $k + 1 ?></td>
													<td><?= $obj->name ?></td>
													<td><?= $obj->age ?></td>
													<td><?= $obj->weight ?></td>
													<td><?= $str = ($obj->stance == 1) ? 'Orthodox' : 'Southpaw'; ?></td>
													<td><?= $str = ($obj->gender == 1) ? 'Male' : 'Female'; ?></td>
												</tr>
											<?php endforeach ?>
										</tbody>
									</table>
									
								</div>
							</div>
						</fieldset>
					<?php endif ?>
					
					<fieldset>
						<div class="well">
							<div class="clearfix">	
								<label>Special Instructions to Nexersys Staff</label>
								<div class="input">
									<textarea rows="3" name="description" class="xxlarge validate" rel="required"></textarea>
									<span class="help-block">
										If you have any concerns or questions, please enter a brief description.
									</span>
								</div>
							</div>
						</div>
					</fieldset>

					<ul class="inputs-list">
						<?php foreach ($option as $row): ?>
							<li>
								<label>
									<input type="checkbox" value="<?= $row->label ?>" name="option[]">
									<span><?= $row->label ?></span>
								</label>
							</li>
						<?php endforeach ?>
					</ul>
					
					<div class="actions">
						<input type="button" value="Cancel &amp; Start Over" class="btn danger link" rel="/profile/new/"> 
						<input type="submit" value="Save Profile" class="btn success"> 
					</div>
				</form>
			</div>
		</div>
	</div>

<?php require_once DIR_VIEW . '/devbox/_footer.php'; ?>