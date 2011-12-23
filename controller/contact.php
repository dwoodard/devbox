<?php defined('LIBRARY') or die('No direct script access allowed');
	
	$pageid = 'page2';
	require_once DIR_VIEW . '/allpaws/_header.php'; 
?>


		<!-- content -->
		 <section id="content">
		   <div id="indent-1">
		     <div class="row-1">
		       <div class="line-ver">
		         <div class="wrapper">
		           <article class="col-1">
		             
					 <form action="/sendmail/contactus/" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="form-stacked" id="contactForm">
						<input type="hidden" name="subject" value="Website Question/Comment">
						<fieldset>
							<legend><h2>Send Us Comments or Questions</h2></legend>
							
							<div class="message" style="margin: 0 18px 0 0;"><div id="alert"></div></div>
							
							<div class="clearfix">
								<label>Your Name: </label>
								<div class="input">
									<input type="text" name="name" class="xlarge validate" rel="required">
								</div>
							</div>
							
							<div class="clearfix">
								<label>Your Email: </label>
								<div class="input">
									<input type="text" name="email" class="xlarge validate" rel="required">
									<span class="help-block">
										Please include a valid email address.
									</span>
								</div>
							</div>
							
							<div class="clearfix">	
								<label>Your Question or Comment: </label>
								<div class="input">
									<textarea rows="3" name="message" class="xlarge validate" rel="required" style="width: 480px;"></textarea>
								</div>
							</div>

						</fieldset>

						<div class="actions">
							<input type="submit" value="Send Message &raquo;" class="btn primary"> 
						</div>
					</form>
		
		             <div class="clear"></div>
		           </article>
		           <article class="col-2">
		             <?php include_once DIR_PAGE . '/inc/testimonial_1.html'; ?>
		             
		             <div class="clear"></div>
		           </article>
		         </div>
		       </div>
		     </div>
		   </div>
		 </section>
		

<?php require_once DIR_VIEW . '/allpaws/_footer.php'; ?>