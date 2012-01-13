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
		             
		             <?php include_once DIR_PAGE . '/inc/thismonth.html'; ?>
		
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