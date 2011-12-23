<?php defined('LIBRARY') or die('No direct script access allowed');
	
	$pageid = 'page2';
	require_once DIR_VIEW . '/allpaws/_header.php'; 
?>

		<!-- content -->
        <section id="content">
          <div id="indent-2">
            <h4>Our Fancy Services Tagline Goes Here</h4>
			
			<?php include_once DIR_PAGE . '/inc/service_list.html'; ?>
            
            <div class="line-hor"></div>
            <div class="row-1">
              <div class="line-ver">
                <div class="wrapper">
                  <article class="col-1">
					
					<?php include_once DIR_PAGE . '/inc/service_content.html'; ?>
					
                    
                  </article>
                  <article class="col-2">
                    
					<?php include_once DIR_PAGE . '/inc/our_mission.html'; ?>
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
              <div class="indent-3">
                <div class="wrapper">
                  	<h2>The Best  You Can Find On Web!</h2>
			           <img src="/assets/images/allpaws/2page-img3.jpg" class="fleft" alt="" />
			           <h6><span><a href="#">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</a></span></h6>
			           <p>Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecen as tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
			           <div class="clearboth"></div>
                </div>
              </div>
            </aside>
          </div>
        </div>

<?php require_once DIR_VIEW . '/allpaws/_footer.php'; ?>