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
        <div class="flexbox__item">
            <hgroup class="article__headline article-headline-main">
 	           <h1 class="headline__primary">OXOTEL</h1>
 	           <div class="headline__description">
                   <hgroup class="pixcode  pixcode--heading article__headline">
                   </hgroup>
            	</div>
            </hgroup>
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


<div id="rooms" class="description-main"> 
 Pellentesque dapibus hendrerit tortor. Pellentesque posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.

Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Maecenas malesuada. Morbi mattis ullamcorper velit. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Suspendisse eu ligula.

Aliquam eu nunc. Aliquam erat volutpat. Nam pretium turpis et arcu. Integer tincidunt. Fusce commodo aliquam arcu.
</div>


<header id="post-740-title" class="article__header  article__header--page two-thirds-height">
 	<div class="flexbox">
      	<div class="flexbox__item">
	        <hgroup class="article__headline">
	          <h1 class="headline__primary"><a href="#" style="color:#FFFFFF">Rooms</a></h1>
	        </hgroup>
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
			<div class="inner">
			<div class="faciimg-wrapper">
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-01.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-02.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-03.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-04.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-05.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-06.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-07.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-08.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-09.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-10.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-11.png" alt="hanger"/>
				</div>
				<div class="faciimg">
					<img src="/sites/all/themes/parallax_zymphonies_theme/images/faci-12.png" alt="hanger"/>
				</div>
			</div>
			</div>
			<div class="inner _text-grey">
				<h3 class="desc-header _capital _text-grey">Facilities</h3>
				<p>Pellentesque dapibus hendrerit tortor. Pellentesque posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.</p>
				
				<h3 class="desc-header _capital _text-grey">Free Amenities & Service</h3>	
				<p>Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Maecenas malesuada. Morbi mattis ullamcorper velit. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Suspendisse eu ligula.</p>

				<a class="btn btn-transparent _capital">Explore</a>
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
	        <hgroup class="article__headline">
	          <h1 class="headline__primary"><a href="#" style="color:#FFFFFF">CAFE</a></h1>
	        </hgroup>
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

<div class="description-find_us"> 
 Pellentesque dapibus hendrerit tortor. Pellentesque posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Sed hendrerit. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.

Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Maecenas malesuada. Morbi mattis ullamcorper velit. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Suspendisse eu ligula.

Aliquam eu nunc. Aliquam erat volutpat. Nam pretium turpis et arcu. Integer tincidunt. Fusce commodo aliquam arcu.
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" style="height:300px">

					<ul class="lightSlider">
					  <li>
					      <h3>First Slide</h3>
			           		<img src="http://localhost/wordpress2/wp-content/uploads/2016/04/exterior-hero-shot-2.jpg" width="500">
					      <p>Lorem ipsum Cupidatat quis pariatur anim.</p>
					  </li>
					  <li>
					      <h3>Second Slide</h3>
			           		<img src="http://localhost/wordpress2/wp-content/uploads/2016/04/exterior-hero-shot-2.jpg" width="500">
					      <p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
					  </li>
					</ul>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  	$ = jQuery;	
  	$(document).ready(function() {
    	$(".lightSlider").lightSlider({
    		item: 1,
    		auto: false,
    		controls: true,
    	}); 
  	});
</script>