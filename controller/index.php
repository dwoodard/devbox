<?php defined('LIBRARY') or die('No direct script access allowed');

	require_once DIR_VIEW . '/allpaws/_header.php'; 
?>



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
               <h2>Exotic Animals</h2>
             </div>
             <div class="info-box1">
               <div class="inner">
                 <div class="wrapper"> <strong><a href="#">Lorem ipsum dolors<br>
                   it amet conadipis cingas elitaesent kertya</a></strong> <b><a href="#">more</a></b> </div>
               </div>
             </div>
           </article>
            <article class="col-2">
              <div class="info-box">
                <div class="inner"> <strong>Our service is provided to our clients to help meet all<br>
                  of their in-home pets care needs.</strong> <b><a href="/contact/">make an appointment</a></b> </div>
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
                    <h2><i>Useful Info</i></h2>
                    <div class="wrapper">

						<div class="block-1">
							<ul class="list-2">
								<li><a href="#">Stem Cell Therapy</a></li>
								<li><a href="#">Quality Pet Care Services</a></li>
								<li><a href="#">Did you know?</a></li>
							</ul>
						</div>
						<div class="block-2">
							<ul class="list-2">
								<li><a href="#">On-line contacts</a></li>
								<li><a href="#">FAQs</a></li>
							</ul>
						</div>
						<div class="block-3">
							<ul class="list-2">
								<li><a href="#">Behavior Consultations</a></li>
								<li><a href="#">Hot news</a></li>
							</ul>
						</div>
                    </div>
                  </article>
                  <article class="col-2">
                    <h2><i>Newsletter Sign Up</i></h2>
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