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
		             
		             <form action="/plugins/gallery/upload/" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="form-stacked">
						<input type="hidden" name="action" value="save">
						<input type="hidden" name="filename" value="<?= $file['fileName'] ?>">

						<fieldset>
							<legend><strong>Contact us</strong></legend>
							
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
									<textarea rows="3" name="description" class="xxlarge" rel=""></textarea>
								</div>
							</div>

						</fieldset>

						<div class="actions">
							<input type="submit" value="Save Changes &raquo;" class="btn primary"> 
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
		 <!-- secondary-content -->
		 <div id="aside-tail-hor">
		   <div id="aside-bg">
		     <aside>
		       <div class="indent-1">
		         <div class="wrapper">
		           <h2>The Best  You Can Find On Web!</h2>
		           <img src="/assets/images/allpaws/2page-img3.jpg" class="fleft" alt="" />
		           <h6><span><a href="#">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</a></span></h6>
		           <p>Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecen as tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
		           <div class="clear"></div>
		         </div>
		       </div>
		     </aside>
		   </div>
		 </div>

<?php require_once DIR_VIEW . '/allpaws/_footer.php'; ?>