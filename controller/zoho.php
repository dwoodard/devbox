<?php defined('LIBRARY') or die('No direct script access allowed');

	if(!$Auth->loggedIn()) redirect('/login');
	
	$page_title = '&raquo; Gallery View';
	$load_picmeleo = FALSE;
	
	$gallery = Gallery::fetch();
	
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
								<div class="alert-message error">
									<?php foreach ($Error->errors as $k => $v): ?>
										<p><?= $v; ?></p>
									<?php endforeach ?>
							    </div>
							</div>
						</div>
					<?php endif ?>
					
					<div id='crmWebToEntityForm' align="center">
						<form action='https://crm.zoho.com/crm/WebToLeadForm' name="WebToLeads452985000000069007" method='post' onsubmit='javascript:document.charset="UTF-8"; return checkMandatery()' accept-charset='UTF-8' id="WebToLeads452985000000069007">
							<input type='hidden' name='xnQsjsdp' value="f1LzxolSe-0$"><input type='hidden' name='xmIwtLD' value="82AfV3HJwjrMB9xD2XbGNww1vyXgS1pG"><input type='hidden' name='actionType' value="TGVhZHM="><input type='hidden' name='returnURL' value='http://www.nexersys.com'><br>
							<input type='hidden' name='LEADCF1' value='ContactUs'><input type='hidden' name='LEADCF5' value=''>
							<table border="0" cellspacing="0" cellpadding="5" width="480" style='border-top:2px solid #999999;border-bottom:1px solid #999999;background-color:#ffffff;'>
								<tr>
									<td colspan='2' align='left' style='background-color:#f5f5f5;border-bottom:2px dotted #dadada; color:#000000;font-family:sans-serif;font-size:14px;'>
										<strong>Web Form</strong>
									</td>
								</tr>
								<tr>
									<td nowrap style='font-family:sans-serif;font-size:12px;font-weight:bold' align='right' width='25%'>
										First Name &nbsp;&nbsp;:
									</td>
									<td width='75%'>
										<input type='text' maxlength='40' name='First Name'>
									</td>
								</tr>
								<tr>
									<td nowrap style='font-family:sans-serif;font-size:12px;font-weight:bold' align='right' width='25%'>
										Last Name &nbsp;&nbsp;:
									</td>
									<td width='75%'>
										<input type='text' maxlength='80' name='Last Name'>
									</td>
								</tr>
								<tr>
									<td nowrap style='font-family:sans-serif;font-size:12px;font-weight:bold' align='right' width='25%'>
										Email &nbsp;&nbsp;:
									</td>
									<td width='75%'>
										<input type='text' maxlength='100' name='Email'>
									</td>
								</tr>
								<tr>
									<td nowrap style='font-family:sans-serif;font-size:12px;font-weight:bold' align='right' width='25%'>
										Description &nbsp;&nbsp;:
									</td>
									<td width='75%'>
										<textarea name='Description' maxlength='1000' width='250' height='250'>
										</textarea>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="center" style='background-color:#eaeaea'>
										<input type='submit' name='save' value="Save"> &nbsp; &nbsp; <input type='reset' name='reset' value="Reset">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php require_once DIR_VIEW . '/devbox/_footer.php'; ?>

