<?php
	$module_path = drupal_get_path('module', 'myhook');
	$theme_path = drupal_get_path('theme', 'parallax_zymphonies_theme');
	$base_path = base_path();
	$abs_path = $base_path.$module_path;
	$abs_theme_path = $base_path.$theme_path;
	//drupal_add_js($module_path.'/js/plugins.js');
	//drupal_add_js($module_path.'/js/main.js');
	//drupal_add_js($module_path.'/js/modernizr.min.js');
	drupal_add_css($theme_path.'/css/style1.css');
	drupal_add_css($theme_path.'/css/dev.css');
	drupal_add_css($theme_path.'/css/lightslider.css');
	drupal_add_css($theme_path.'/css/bootstrap.min.css');
	$main_image_node = node_load(2);
	$rooms_image_node = node_load(3);
	$exterior_image_node = node_load(4);
	$cafe_image_node = node_load(5);

	$rooms_modal_node = node_load_multiple(array(), array('type' => 'rooms')); 
	$cafe_modal_node = node_load_multiple(array(), array('type' => 'cafe')); 

?>

<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/main.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/lightslider.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/bootstrap.min.js"></script>

<div class="menu-wrap">
  
  	<div class="full-wrap clearfix">


	    <nav id="main-menu"  role="navigation">
		    <a class="nav-toggle" href="#">Navigation</a>
		    <div class="menu-navigation-container">
		    	<?php 
		     	//$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
		            //print drupal_render($main_menu_tree);
		        ?>
		      	<ul>
		      		<li>
		      			<a href="#">OXOTEL</a>
		      		</li>
		      		<li>
		      			<a href="#rooms">ROOMS</a>
		      		</li>
		      		<li>
		      			<a href="#facilities">FACILITIES</a>
		      		</li>
		      		<li>
		      			<a href="#">CAFE</a>
		      		</li>
		      		<li>
		      			<a href="#">FIND US</a>
		      		</li>

		       	</ul>

		    </div>
		    <div class="clear"></div>
	    </nav>

  	</div>

</div>

<header id="post-205-title" class="article__header  article__header--page full-height">
    <div class="covers"></div>
    <div class="flexbox">
        <div class="flexbox__item -bottom">
            <hgroup class="article__headline article-headline-main">
 	           <h1 class="headline__primary">OXOTEL</h1>
 	           <div class="headline__description">
                   <hgroup class="pixcode  pixcode--heading article__headline">
                   </hgroup>
            	</div>
            </hgroup>
        	<div class="headline__description -since text-imgsection">
        		HOSTEL • GARDEN • CAFE<br/>
        		<span class="small-text">oxotel hostel chiangmai thailand @ since 2015</span>
        	</div>  
        </div>  
    </div>

    <div class="article__parallax">
        <div class="article__parallax__slider  header--slideshow  js-pixslider" data-imagealigncenter="" data-imagescale="fill" data-slidertransition="fade" data-customarrows="true" data-sliderautoplay="" data-sliderdelay="3000">

        <?php
        	foreach($main_image_node->field_slide_image['und'] as $key => $value) {
        		$img_path =  file_create_url($value['uri']);
        		?>

		        <div class="gallery-item" 
		        	itemscope="" 
		        	itemtype="http://schema.org/ImageObject" 
		        	data-caption="" 
		        	data-description=""> 
		        	<img src="<?php print $img_path;?>" 
		        		class="attachment-blog-big rsImg" 
		        		alt="" 
		        		itemprop="contentURL"> 
		        </div>
        		<?
        	}
        ?>
        </div>
  
    </div>
</header>


<div id="rooms" class="description-main desc-section -reservation"> 
	<div class="reservation-content">
		<div class="ct-wrapper">
			<div class="inner -left _text-right">
				<div class="inner-wrapper _text-grey">
					<h3 class="desc-header _capital _text-grey">OXOTEL</h3>
 					<p>Pellentesque dapibus hendrerit tortor.<br />Pellentesque posuere. Vestibulum ante ipsum primis in faucibus<br />orci luctus et ultrices posuere cubilia Curae;</p>
 					<a class="btn btn-transparent -keepright _capital">Explore</a>
 				</div>
 			</div>
 			<div class="inner -right">
				<div class="inner-wrapper _text-grey">
					<h3 class="desc-header _capital _text-grey">Reservation</h3>
 					<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere.<br />Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;<br />faucibus non, euismod id, nulla.</p>
 					<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere.<br />In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut<br />faucibus non, euismod id, nulla.</p>
 					<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere.<br />Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;<br />faucibus non, euismod id, nulla.</p>
 					<a class="btn btn-transparent _capital">Condition</a>
 					<a class="btn btn-transparent -orange _capital">Booking</a>
 				</div>
 			</div>
		</div>
	</div>
</div>


<header id="post-740-title" class="article__header  article__header--page two-thirds-height">
 	<div class="flexbox">
      	<div class="flexbox__item">
<!-- 	        <hgroup class="article__headline">
	            <h1 class="headline__primary"><a href="#" style="color:#FFFFFF">Rooms</a></h1>
	            <div>
		          	<button type="button"  data-toggle="modal" data-target="#myModal">
						DETAILS	
					</button>
	            </div>
	        </hgroup> -->

			<div class="ct-wrapper">
				<div class="inner -left -emptycell"></div>
				<div class="inner -right text-left text-bright">
					<div class="inner-wrapper">
			            <h2><a class="text-bright" href="#">Rooms</a></h2>
			            <p>
			            	Pellentesque dapibus hendrerit tortor. Pellentesque posuere. <br />
			            	Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; <br />
			            	faucibus non, euismod id, nulla.
			            </p>
			            <p>
			            	Pellentesque dapibus hendrerit tortor. Pellentesque posuere. <br />
			            	Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; <br />
			            	faucibus non, euismod id, nulla.
			            </p>
			            <div>
				          	<button  id="modal_click_rooms" class="btn btn-transparent -darkbg _capital" type="button"  data-toggle="modal" data-target="#myModal">
								DETAILS	
							</button>
			            </div>
					</div>
				</div>
			</div>

        </div>
  	</div>
  	<div class="article__parallax">
   
	    <div class="article__parallax__slider  header--slideshow  js-pixslider" data-imagealigncenter="" data-imagescale="fill" data-slidertransition="fade" data-customarrows="true" data-sliderautoplay="" data-sliderdelay="2000">
	        <?php
	        	foreach($rooms_image_node->field_slide_image['und'] as $key => $value) {
	        		$img_path =  file_create_url($value['uri']);
	        		?>
	      		    <div class="gallery-item" 
	      		    	itemscope="" 
	      		    	itemtype="http://schema.org/ImageObject" 
	      		    	data-caption="" 
	      		    	data-description=""> 
	      		    	<img src="<?php print $img_path;?>" 
	      		    	class="attachment-blog-big rsImg" alt="" itemprop="contentURL">
	      		    </div>

	        		<?
	        	}
	        ?>
	    </div>
	</div>
</header>

<div id="facilities" class="desc-section -facilities"> 
	<div class="facilities-content">
		<div class="ct-wrapper">
			<div class="inner -left _text-right">
				<div class="inner-wrapper">
					<div class="faciimg-wrapper">
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-01.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-02.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-03.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-04.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-05.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-06.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-07.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-08.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-09.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-10.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-11.png" alt="hanger"/>
						</div>
						<div class="faciimg">
							<img src="/sites/default/files/front-page/faci-12.png" alt="hanger"/>
						</div>
					</div>					
				</div>
			</div>
			<div class="inner -right _text-grey">
				<div class="inner-wrapper _textcenter-768px">
					<h3 class="desc-header _capital _text-grey">Facilities</h3>
					<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.</p>
					
					<h3 class="desc-header _capital _text-grey">Free Amenities & Service</h3>	
					<p>Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Maecenas malesuada. Morbi mattis ullamcorper velit. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Suspendisse eu ligula.</p>

					<a class="btn btn-transparent _capital" type="button"  data-toggle="modal" data-target="modalFacilities">Explore</a>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="post-740-title" class="article__header  article__header--page two-thirds-height">
    <div class="article__parallax">
   
	    <div class="article__parallax__slider  header--slideshow  js-pixslider" data-imagealigncenter="" data-imagescale="fill" data-slidertransition="fade" data-customarrows="true" data-sliderautoplay="" data-sliderdelay="2000">
	        <?php
	        	foreach($exterior_image_node->field_slide_image['und'] as $key => $value) {
	        		$img_path =  file_create_url($value['uri']);
	        		?>
	      		    <div class="gallery-item" 
	      		    	itemscope="" 
	      		    	itemtype="http://schema.org/ImageObject" 
	      		    	data-caption="" 
	      		    	data-description=""> 
	      		    	<img src="<?php print $img_path;?>" 
	      		    	class="attachment-blog-big rsImg" alt="" itemprop="contentURL">
	      		    </div>

	        		<?
	        	}
	        ?>
	    </div>
	</div>
</header>

<header id="post-740-title" class="article__header  article__header--page two-thirds-height">
 	<div class="flexbox">
      	<div class="flexbox__item">
<!-- 	        <hgroup class="article__headline">
	          <h1 class="headline__primary"><a href="#" style="color:#FFFFFF">CAFE</a></h1>
	        </hgroup> -->
			<div class="ct-wrapper">
				<div class="inner -left _text-right text-bright">
					<div class="inner-wrapper">
			            <h2><a class="text-bright" href="#">Cafe</a></h2>
			            <p>
			            	Pellentesque dapibus hendrerit tortor. Pellentesque posuere. <br />
			            	Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; <br />
			            	faucibus non, euismod id, nulla.
			            </p>
			            <p>
			            	Pellentesque dapibus hendrerit tortor. Pellentesque posuere. <br />
			            	Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; <br />
			            	faucibus non, euismod id, nulla.
			            </p>
			            <div>

				          	<button class="btn btn-transparent -darkbg _capital" type="button"  data-toggle="modal" data-target="#myModal">
								Explore
							</button>
			            </div>
					</div>
				</div>
				<div class="inner -right">
					<div class="inner-wrapper">
			            <h2 class="text-huge text-floatmiddle"><a class="text-bright" href="#">Artisan</a></h2>
					</div>
				</div>
			</div>
        </div>
  	</div>
    <div class="article__parallax">
	    <div class="article__parallax__slider  header--slideshow  js-pixslider" data-imagealigncenter="" data-imagescale="fill" data-slidertransition="fade" data-customarrows="true" data-sliderautoplay="" data-sliderdelay="2000">
	        <?php
	        	foreach($cafe_image_node->field_slide_image['und'] as $key => $value) {
	        		$img_path =  file_create_url($value['uri']);
	        		?>
	      		    <div class="gallery-item" 
	      		    	itemscope="" 
	      		    	itemtype="http://schema.org/ImageObject" 
	      		    	data-caption="" 
	      		    	data-description=""> 
	      		    	<img src="<?php print $img_path;?>" 
	      		    	class="attachment-blog-big rsImg" alt="" itemprop="contentURL">
	      		    </div>

	        		<?
	        	}
	        ?>
	    </div>
	</div>
</header>

<div class="desc-section -findus description-find_us"> 
	<div class="findus-content">
		<div class="ct-wrapper">
			<div class="inner -center _text-center">
				<div class="inner-wrapper _text-grey">
					<h3 class="desc-header _capital _text-grey">Find Us</h3>
 					<p>
 						Oxotel is 2.00 kilometer from Chiangmai international airport and just only 10 minutes <br />
 						walk to Chiangmai gate (South-gate), one of the important antique gate of the old city area. <br />
 						At Chiangmai gate, there is a local fresh market that you can experience the northern people, <br />
 						local culture and life style. Public local transportation (yellow - cars) station to Jomthong <br />
 						and Hod for Doi Inthanon destination is around Chiangmai gate as well.
 					</p>
 					<p>
 						Tel. +66 (0)52 085 334<br />
 						149-153 Wua lai rd., T.hai ya, A.muang 50100<br />
						Our hostel is 2.00 kilometer from Chiangmai international airport<br />
						and just only 10 minutes walk to Chiangmai gate
 					</p>
 					<a class="btn btn-transparent _capital">Map</a>
 					<a class="btn btn-transparent _capital">Mail us</a>
 				</div>
 			</div>
		</div>
	</div>
</div>

<div class="footer">
	<div class="footer-list">
		<h4>Hostel</h4>
		<ul class="list-unstyled">
			<li><a href="#">About</a></li>
			<li><a href="#">Facilities</a></li>
			<li><a href="#">Artisan cafe</a></li>
			<li><a href="#">Find us</a></li>
		</ul>
	</div>
	<div class="footer-list">
		<h4>Others</h4>
		<ul class="list-unstyled">
			<li><a href="#">Booking</a></li>
			<li><a href="#">Rooms</a></li>
			<li><a href="#">Email us</a></li>
		</ul>
	</div>
	<div class="footer-list">
		<h4>Social</h4>
		<ul class="list-unstyled">
			<li><a href="#">Instagram</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Google+</a></li>
		</ul>
	</div>
	<div class="footer-list">
		<h4>Site</h4>
		<ul class="list-unstyled">
			<li><a href="#">Agoda</a></li>
			<li><a href="#">Booking.com</a></li>
			<li><a href="#">Hostel world</a></li>
		</ul>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="/sites/all/themes/parallax_zymphonies_theme/images/close.svg" /></span></button>
        <!-- <h4 class="modal-title text-modal" id="myModalLabel">Rooms</h4> -->
      </div>
      <div class="modal-body text-modal">
      				<?php
						foreach($rooms_modal_node as $room){
							?>
								<div class="title"><?php print $room->title;?></div>
							<?php
						}
					?>
      				<?php 
						$i = 1;
						foreach($rooms_modal_node as $room){
							// Hard code break for only one content
							if ($i == 2) {
								break;
							}
							?>

							<ul class="lightSlider">
							<?php
							foreach($room->field_slide_image['und'] as $image){
								?>
								  <li>
						           		<img src="<?php print file_create_url($image['uri']);?>" width="500">
								  </li>

								<?php

							}
							?>
							</ul>
							<div class="modal-description">
								<?php print $room->body['und'][0]['value']; ?>
								<a class="btn btn-transparent -orange _invert _capital">Booking</a>
							</div>

							<?php

							$i++;
						}
					?>


      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<script type="text/javascript">
  	$ = jQuery;	
  	$(document).ready(function() {

    	$('#modal_click_rooms').click(function () {
    		setTimeout(function(){
		    	$(".lightSlider").lightSlider({
		    		item: 1,
		    		auto: false,
		    		controls: true,
		    	}); 

    		}, 1000);	
    	});
  	});
</script>