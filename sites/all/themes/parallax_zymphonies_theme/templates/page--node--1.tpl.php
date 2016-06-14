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
	$about_node = node_load(14);

	$rooms_modal_node = node_load_multiple(array(), array('type' => 'rooms')); 
	$cafe_modal_node = node_load(11); 

?>

<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/main.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/lightslider.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/bootstrap.min.js"></script>
<script>
   	var showGroupSlide = function (gid) {
   		$('.group-slide .lSSlideOuter').hide();
   		$('.group-slide .lSSlideOuter:eq(' + gid + ')').show();

   		$('.group-slide .modal-description').hide();
   		$('.group-slide .modal-description:eq(' + gid + ')').show();
   		// Fixed bug when change slide
   		$(window).trigger('resize');
   		$('.group-slide .modal-description').find('.modaltitle-wrapper .title-rooms').removeClass('active');
   		$('.group-slide .modal-description').find('.modaltitle-wrapper .title-rooms:eq(' + gid + ')').addClass('active');
   	}

</script>
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
		      			<a href="#cafe">CAFE</a>
		      		</li>
		      		<li>
		      			<a href="#findus">FIND US</a>
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


<div  class="description-main desc-section -reservation"> 
	<div class="reservation-content">
		<div class="ct-wrapper">
			<div class="inner -left _text-right">
				<div class="inner-wrapper _text-grey">
					<h3 class="desc-header _capital _text-grey">OXOTEL</h3>

					<div class="overflow-box">
 						<p>Pellentesque dapibus hendrerit tortor.<br />Pellentesque posuere. Vestibulum ante ipsum primis in faucibus<br />orci luctus et ultrices posuere cubilia Curae;</p>
 					</div>
 					
 					<a class="btn btn-transparent -keepright _capital" data-toggle="modal" data-target="#aboutModal">Explore</a>
 				</div>
 			</div>
 			<div class="inner -right">
				<div class="inner-wrapper _text-grey">
					<h3 class="desc-header _capital _text-grey">Reservation</h3>

					<div class="overflow-box">
						<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere.<br />Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;<br />faucibus non, euismod id, nulla.</p>
 						<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere.<br />In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut<br />faucibus non, euismod id, nulla.</p>
 						<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere.<br />Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;<br />faucibus non, euismod id, nulla.</p>
					</div>
 					
 					<a id="modal_click_condition" class="btn btn-transparent _capital" data-toggle="modal" data-target="#conditionModal">Condition</a>
 					<a class="btn btn-transparent -orange _capital">Booking</a>
 				</div>
 			</div>
		</div>
	</div>
</div>


<header id="post-740-title" class="article__header -rooms  article__header--page two-thirds-height">
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
			            <h3><a class="text-bright" href="#">Rooms</a></h3>
			            <div class="overflow-box">
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

			            </div>

			            <div>
				          	<button  id="modal_click_rooms" class="btn btn-transparent -darkbg _capital" type="button"  data-toggle="modal" data-target="#roomsModal">
								DETAILS	
							</button>
			            </div>
					</div>
				</div>
			</div>

        </div>
  	</div>
  	<div id="rooms" class="article__parallax">
   
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
						<div class="faciimg -img01">
							<!-- <img title="Duis arcu tortor" src="/sites/default/files/front-page/faci-02.png" alt="hanger"/> -->
							<span class="text-tooltip">Towell & Bed sheet</span> 
						</div>
						<div class="faciimg -img02">
							<!-- <img title="Nulla sit amet est"  src="/sites/default/files/front-page/faci-03.png" alt="hanger"/> -->
							<span class="text-tooltip">Soap & Shampoo</span>
						</div>
						<div class="faciimg -img03">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-04.png" alt="hanger"/> -->
							<span class="text-tooltip">Hair Dryer</span>
						</div>
						<div class="faciimg -img04">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-05.png" alt="hanger"/> -->
							<span class="text-tooltip">Washing Machine</span>
						</div>
						<div class="faciimg -img05">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-06.png" alt="hanger"/> -->
							<span class="text-tooltip">Shower Box</span>
						</div>
						<div class="faciimg -img06">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-07.png" alt="hanger"/> -->
							<span class="text-tooltip">We service Wi-Fi All area</span>
						</div>
						<div class="faciimg -img07">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-08.png" alt="hanger"/> -->
							<span class="text-tooltip">Internet Wireless</span>
						</div>
						<div class="faciimg -img08">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-09.png" alt="hanger"/> -->
							<span class="text-tooltip">Map & Transportation</span>
						</div>
						<div class="faciimg -img09">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-10.png" alt="hanger"/> -->
							<span class="text-tooltip">Luggage Storage</span>
						</div>
						<div class="faciimg -img10">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-11.png" alt="hanger"/> -->
							<span class="text-tooltip">Closed-Circuit Television</span>
						</div>
						<div class="faciimg -img11">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-12.png" alt="hanger"/> -->
							<span class="text-tooltip">Keycard System</span>
						</div>
						<div class="faciimg -img12">
							<!-- <img title="Donec mollis hendrerit" src="/sites/default/files/front-page/faci-12.png" alt="hanger"/> -->
							<span class="text-tooltip">Emergency Call</span>
						</div>
					</div>					
				</div>
			</div>
			<div class="inner -right _text-grey">
				<div class="inner-wrapper _textcenter-768px">
					<h3 class="desc-header _capital _text-grey">Facilities</h3>
					<div class="overflow-box">
						<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.</p>
						<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.</p>
					</div>
					<h3 class="desc-header _capital _text-grey">Free Amenities & Service</h3>	
					<div class="overflow-box">
						<p>Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Maecenas malesuada. Morbi mattis ullamcorper velit. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Suspendisse eu ligula.</p>
						<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="post-740-title" class="article__header  article__header--page two-thirds-height">
 	<div class="flexbox">
      	<div class="flexbox__item">
<!-- 	        <hgroup class="article__headline">
	          <h1 class="headline__primary"><a href="#" style="color:#FFFFFF">CAFE</a></h1>
	        </hgroup> -->
			<div class="ct-wrapper">
				<div class="inner -center">
					<div class="inner-wrapper">
			            <h2 class="text-huge text-floatmiddle"><a class="text-bright" href="#">HOSTEL GARDEN CAFE</a></h2>
					</div>
				</div>
			</div>
        </div>
  	</div>

    <div  class="article__parallax">   
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
			            <h3><a class="text-bright" href="#">Cafe</a></h3>
			            <div class="overflow-box">
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
			            </div>
			            <div>
				          	<button id="modal_click_cafe" class="btn btn-transparent -darkbg _capital" type="button"  data-toggle="modal" data-target="#cafeModal">
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
    <div id="cafe" class="article__parallax">
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

<div id="findus" class="desc-section -findus description-find_us"> 
	<div class="findus-content">
		<div class="ct-wrapper">
			<div class="inner -center _text-center">
				<div class="inner-wrapper _text-grey">
					<ul class="list-unstyled social-gang">
						<li><a class="fb" href="#" target="_blank">Facebook</a></li>
						<li><a class="ig" href="https://www.instagram.com/oxotelchiangmai/" target="_blank">Instagram</a></li>
						<li><a class="tw" href="https://www.facebook.com/oxotelhostel/" target="_blank">Twitter</a></li>
					</ul>
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
 					<div class="button-box">
 						<a id="modal_click_map" class="btn btn-transparent _capital"  data-toggle="modal" data-target="#mapModal">Map</a>
 						<a class="btn btn-transparent _capital" data-toggle="modal" data-target="#contactModal">Mail us</a>
 					</div>
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
			<li><a href="http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.booking.com%2Fhotel%2Fth%2Foxotel.th.html%3Flabel%3Dgen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%253Bsid&h=MAQFxiyvL" target="_blank">Booking</a></li>
			<li><a href="#">Rooms</a></li>
			<li><a href="#">Email us</a></li>
		</ul>
	</div>
	<div class="footer-list">
		<h4>Social</h4>
		<ul class="list-unstyled">
			<li><a href="https://www.instagram.com/oxotelchiangmai/">Instagram</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Google+</a></li>
		</ul>
	</div>
	<div class="footer-list">
		<h4>Site</h4>
		<ul class="list-unstyled">
			<li><a href="http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.agoda.com%2Foxotel-hostel%2Fhotel%2Fchiang-mai-th.html%3Fasq%3Du2qcKLxwzRU5NDuxJ0kOF8%252BzmLRvZQXVHFy2wHSdGKIFSKDtD0xR6njQwBLdDP7xerWduBIJ6k4cf5HcWilYNBLdZHzbs772XCoPWdSgD%252FTz17U3ZgWLnEdNzxKxNx92DsFKOYv4cKN%252BraPqz4f%252FLYprVp2TwP6wstUVR8FJRF%252BfkDX3uHFMuWTqeVL9h7qQKil0Kd5NpRQf1zGe1xDr05pxj%252FA%252BylTfAGs1qJCjm9k0V1AMDQx7njgkgAhn4vUi%26tick%3D636015089081%26pagetypeid%3D1%26origin%3DTH%26cid%3D-1%26htmlLanguage%3Den-us%26checkIn%3D2016-6-15%26checkout%3D2016-6-16%26los%3D1%26rooms%3D1%26adults%3D2%26childs%3D0%26isFromSearchBox%3Dtrue&h=MAQFxiyvL" target="_blank">Agoda</a></li>
			<li><a href="#">Booking.com</a></li>
			<li><a href="http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.hostelworld.com%2Fhosteldetails.php%2FOxotel-Hostel%2FChiang-Mai%2F101918&h=MAQFxiyvL" target="_blank">Hostel world</a></li>
		</ul>
	</div>
	<p>
		OXOTEL @ 2016 all right reserved. Designed and Developed by BGxMINT.co<br />
		<a href="http://www.bgxmint.co/" target="_blank">www.bgxmint.co</a>
	</p>
</div>


<!-- Rooms Modal -->
<div class="modal fade" id="roomsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body slide-modal">
		
        <h4 class="modal-title text-modal" id="myModalLabel">Rooms</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="/sites/all/themes/parallax_zymphonies_theme/images/close.svg" /></span></button>
		      		<div class="group-slide">

	      				<?php 
							$i = 1;
							foreach($rooms_modal_node as $room){
								// Hard code break for only one content
								if ($i == 2) {
									//break;
								}
								?>

								<ul class="lightSliderRooms">
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
									<div class="modaltitle-wrapper">
					      				<?php
					      					$j = 0;
											foreach($rooms_modal_node as $room2){
												?>
													<div class="btn btn-transparent _modaltitle title-rooms" onclick="showGroupSlide(<?php print $j;?>)"><?php print $room2->title;?></div>
												<?php
												$j++;
											}
										?>
									</div>

									<?php print $room->body['und'][0]['value']; ?>
									<a class="btn btn-transparent -orange _invert _capital">Booking</a>
								</div>

								<?php

								$i++;
							}
						?>
		      			
		      		</div>


      </div>
    </div>
  </div>
</div>

<!-- Cafe Modal -->
<div class="modal fade" id="cafeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body slide-modal">

      		<h4 class="modal-title text-modal">
      			<?php print $cafe_modal_node->title;?>
      		</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="/sites/all/themes/parallax_zymphonies_theme/images/close.svg" /></span></button>
			<ul class="lightSliderCafe">
			<?php
			foreach($cafe_modal_node->field_slide_image['und'] as $image){
				?>
				  <li>
		           		<img src="<?php print file_create_url($image['uri']);?>" width="500">
				  </li>

				<?php

			}
			?>
			</ul>
			<div class="modal-description -cafe">
				<h2 class="text-bright">ARTISAN</h2>
				<p>
					Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
				</p>
			</div>
			<div class="modal-description overflow-box -modal">
				<?php print $cafe_modal_node->body['und'][0]['value']; ?>
			</div>


      </div>
    </div>
  </div>
</div>

<!-- About Modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content text-modal">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="/sites/all/themes/parallax_zymphonies_theme/images/close.svg" /></span></button>
      		<div class="modal-body text-modal">
      			<div class="modal-label">ABOUT OXOTEL</div>
      			<h3 class="text-center text-modal">OXOTEL</h3>
      			<div class="text-center"><?php print $about_node->body['und'][0]['value'];?></div>
      		</div>
    	</div>
  	</div>
</div>


<!-- Term and condition Modal -->
<div class="modal fade" id="conditionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      	<div class="modal-body textSlide-modal">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="/sites/all/themes/parallax_zymphonies_theme/images/close.svg" /></span></button>
	      		<ul class="lightSliderCondition">
	      			<li>
	      				<div>reservation</div>	
	      				<h2 class="text-modal">Term and condition</h2>
	      				<div class="overflow-box _300px">
		      				<p>
		      					<strong class="text-bright">Praesent egestas</strong><br />
			      				Praesent egestas neque eu enim. Vivamus laoreet. Aenean massa. Morbi nec metus. Maecenas 
			      				malesuada. Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nam adipiscing.
			      			</p>
			      			<p>
		      					<strong class="text-bright">Praesent egestas</strong><br />
			      				Praesent egestas neque eu enim. Vivamus laoreet. Aenean massa. Morbi nec metus. Maecenas 
			      				malesuada. Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nam adipiscing.
			      			</p>
			      			<p>
		      					<strong class="text-bright">Praesent egestas</strong><br />
			      				Praesent egestas neque eu enim. Vivamus laoreet. Aenean massa. Morbi nec metus. Maecenas 
			      				malesuada. Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nam adipiscing.
			      			</p>
			      			<p>
		      					<strong class="text-bright">Praesent egestas</strong><br />
			      				Praesent egestas neque eu enim. Vivamus laoreet. Aenean massa. Morbi nec metus. Maecenas 
			      				malesuada. Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nam adipiscing.
			      			</p>
			      			<p>
		      					<strong class="text-bright">Praesent egestas</strong><br />
			      				Praesent egestas neque eu enim. Vivamus laoreet. Aenean massa. Morbi nec metus. Maecenas 
			      				malesuada. Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nam adipiscing.
		      				</p>
	      				</div>
	      			</li>
	      			<li>
	      				<h2 class="text-modal">Reservation policy</h2>	
	      				<div class="overflow-box _300px">
		      			<p>
		      				Praesent egestas neque eu enim. Vivamus laoreet. Aenean massa. Morbi nec metus. Maecenas 
		      				malesuada. <br />Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, <br />metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nam adipiscing.<br />Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, <br />Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, <br />Cras ultricies mi eu turpis hendrerit fringilla.<br />metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nam adipiscing.<br />Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, <br />Sed fringilla mauris sit amet nibh. Vestibulum suscipit nulla quis orci. Phasellus volutpat, <br />Cras ultricies mi eu turpis hendrerit fringilla.
	      				</p>
	      				</div>
	      			</li>
	      		</ul>
	      		<a class="btn btn-transparent -orange _invert _capital">Booking</a>
	      	</div>
	    </div>
	</div>
</div>

<!-- About Modal -->
<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      	<div class="modal-body map-modal">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="/sites/all/themes/parallax_zymphonies_theme/images/close.svg" /></span></button>
	      		<iframe src="https://www.google.com/maps/d/embed?mid=11idAtyrUxD9qZCA6gGRayP18KsA&z=14&ll=18.7758, 98.98203" width="640" height="480"></iframe>
	      	</div>
	    </div>
	</div>
</div>

<!-- Contact Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      	<div class="modal-body text-modal">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="/sites/all/themes/parallax_zymphonies_theme/images/close.svg" /></span></button>
	      		<h2 class="text-modal">ARK US</h2>
	 			<?php
					module_load_include('inc', 'contact', 'contact.pages');
				 	echo drupal_render(drupal_get_form('contact_site_form'));
				?>
	      	</div>
	    </div>
	</div>
</div>
<script type="text/javascript">
  	$ = jQuery;	
  	$(document).ready(function() {

    	$('#modal_click_map').click(function () {
	   		setTimeout(function(){
	    		$(window).trigger('resize');
	   		}, 200);
    	});

  		var is_slice_rooms = false;
    	$('#modal_click_rooms').click(function () {

			if (!is_slice_rooms) {
	    		setTimeout(function(){
			    	$(".lightSliderRooms").lightSlider({
			    		item: 1,
			    		auto: false,
			    		controls: true,
			    	}); 
		    		is_slice_rooms = true;
		    		showGroupSlide(0);
		    		refreshGlobal();

	    		}, 200);	
			}
    	});
    	// =============================
  		var is_slice_cafe = false;
    	$('#modal_click_cafe').click(function () {

			if (!is_slice_cafe) {
	    		setTimeout(function(){
			    	$(".lightSliderCafe").lightSlider({
			    		item: 1,
			    		auto: false,
			    		controls: true,
			    	}); 
		    		is_slice_cafe = true;

	    		}, 200);	
			}
    	});
    	// =============================
  		var is_slice_condition = false;
    	$('#modal_click_condition').click(function () {

			if (!is_slice_condition) {
	    		setTimeout(function(){
			    	$(".lightSliderCondition").lightSlider({
			    		item: 1,
			    		auto: false,
			    		controls: true,
			    	}); 
		    		is_slice_condition = true;

	    		}, 200);	
			}
    	});


  	});
</script>