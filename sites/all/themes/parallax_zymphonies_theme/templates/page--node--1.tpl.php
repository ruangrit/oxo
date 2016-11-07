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
	drupal_add_css($theme_path.'/css/jquery.mCustomScrollbar.css');
	$main_image_node = node_load(2);
	$rooms_image_node = node_load(3);
	$exterior_image_node = node_load(4);
	$cafe_image_node = node_load(5);
	$about_node = node_load(14);

	$rooms_modal_node = node_load_multiple(array(), array('type' => 'rooms'));
	$facilities_modal_node = node_load_multiple(array(), array('type' => 'facilities'));
	$facilities_content_modal_node = node_load_multiple(array(), array('type' => 'facilities_content'));
	$video_modal_node = node_load_multiple(array(), array('type' => 'vidoe'));
	$cafe_modal_node = node_load(11);

?>

<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/main.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/lightslider.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/velocity.min.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/velocity.ui.min.js"></script>
<script type="text/javascript" src="<?php print $abs_theme_path;?>/js/modal_effect.js"></script>
<script>
   	var showGroupSlide = function (gid, parentID) {

   		var parentSelectorByID = $('#'+parentID);

   		parentSelectorByID.find('.group-slide .lSSlideOuter').hide();
   		parentSelectorByID.find('.group-slide .lSSlideOuter:eq(' + gid + ')').show();

   		parentSelectorByID.find('.group-slide .modal-description').hide();
   		parentSelectorByID.find('.group-slide .modal-description:eq(' + gid + ')').show();
   		// Fixed bug when change slide
   		$(window).trigger('resize');
   		parentSelectorByID.find('.group-slide .modal-description').find('.modaltitle-wrapper .btn').removeClass('active');
   		parentSelectorByID.find('.group-slide .modal-description').find('.modaltitle-wrapper .btn:eq(' + gid + ')').addClass('active');
   	}

	// ==================== Video function
	var showVideo = function(Id) {
		//$('.video-iframe').hide();
		//$('#video_'+Id).show();
		$('#video_player_area').html($('#video_'+Id).html());

		$('.video-thumbnail').removeClass('active-movie');
		$('#video_thumbnail_'+Id).addClass('active-movie');
		$('#video_player_area').find('iframe').css({'height': '560px'})
   		$(window).trigger('resize');
	}

	var switchContent = function () {
		$('.switch-content-wrapper').each(function(i, obj) {

			$(obj).find('.open-sub').click(function () {
				$(obj).find('.switch-content-main').hide();
				$(obj).find('.switch-content-sub').show('slide', { direction: $(obj).attr('slide') }, 200);

		   		setTimeout(function(){
					$(window).trigger('resize');
		   		}, 200);

			});
			$(obj).find('.close-sub').click(function () {
				$(obj).find('.switch-content-main').show();
				$(obj).find('.switch-content-sub').hide();
			});
		});

		$('body').click(function (e) {
			var container = $('.switch-content-sub');
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if (!$(e.target).hasClass('open-sub')) {
					$('.switch-content-sub').hide();
					$('.switch-content-main').show();
				}
			}

		});

	}

	var is_slice_facilities = false;
	var openFacilitiesModal = function (gid) {
		$('#facilitiesModal').modal('show');
		if (!is_slice_facilities) {
    		setTimeout(function(){
		    	$(".lightSliderFacilities").lightSlider({
		    		item: 1,
		    		auto: false,
		    		controls: true,
		    	});
	    		is_slice_facilities = true;
	    		showGroupSlide(gid, 'facilitiesModal');
	    		refreshGlobal();

    		}, 200);
		}
		else {
    		showGroupSlide(gid, 'facilitiesModal');
			$(window).trigger('resize');
		}



	}
	//switchContent();

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
        <div class="flexbox__item -middle">
            <hgroup class="article__headline article-headline-main">
 	           <h1 class="headline__primary">OXOTEL</h1>
 	           <div class="headline__description">
                   <hgroup class="pixcode  pixcode--heading article__headline">
                   </hgroup>
            	</div>
            </hgroup>
        	<div class="headline__description -since text-imgsection">
	            <div>
					<a class="btn -movies btn-transparent -keepright _capital" data-toggle="modal" data-target="#videoModal" id="modal_click_video"><span class="play"></span>MOVIE</a>
	            </div>
        		<!--HOSTEL • GARDEN • CAFE<br/>-->
        		<span class="small-text" style="color:#B4B4B4">oxotel hostel chiangmai thailand @ since 2015</span>
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


<div id="about" class="description-main desc-section -reservation">
	<div class="reservation-content">
		<div class="ct-wrapper">
			<div class="inner -left _text-right switch-content-wrapper" slide="left">
				<div class="inner-wrapper _text-grey switch-content-main">
					<h3 class="desc-header _capital _text-grey">OXOTEL</h3>

					<div class="overflow-box -scrollleft">
						<p>
							Oxotel is a brand new design hostel in Chiangmai. It's been open on November 2015with our 6 types of room. The hostel is very close to Chiangmai international airport and also the city center. It is located on Wualai road, where the local experience on 'Walking Street Market' every Saturday is. Comfy and cozy style that can change a hotel images on your mind. You can spend you relaxing vacation at our stylish space and carry a beautiful travel memory back home. Hope you enjoy your stay with us
						</p>
 					</div>

 					<a class="btn btn-transparent -keepright _capital" data-toggle="modal" data-target="#aboutModal">Explore</a>
 				</div>
 				<!--
 				<div class="switch-content-sub" style="display:none">
 					<h3 class="desc-header">ABOUT</h3>
			    	<button type="button" class="close close-sub"><span aria-hidden="true" class="sr-inly"></span></button>
 					<?php print $about_node->body['und'][0]['value'];?>
 				</div>
 				-->
 			</div>
 			<div class="inner -right switch-content-wrapper" slide="right">
				<div class="inner-wrapper _text-grey switch-content-main">
					<h3 class="desc-header _capital _text-grey">Reservation</h3>

					<div class="overflow-box -scrollright">
						<p>
							Agoda.com & Expedia.com: Your credit card has been charged already. Cancellation and modification are upon cancellation policy on each reservation
						</p>
						<p>
							Booking.com: Valid credit card details are required to book online. Your credit card is not charged before your arrival.  We just keep your credit card details for security reasons. You need to pay the total room balance directly to Oxotel Hostel on arrival either cash or credit card.
						</p>
						<p>
							HostelWorld.com: You will be charged 10% deposit. This is automatically taken by the booking engine not by Oxotel Hostel. The deposit is non – refundable and non – transferable. You need to pay the due balance directly to Oxotel Hostel on arrival either cash or credit card.
						</p>
						<p>
							Reservation by Phone: Reservation directly by phone call +66 52 085 334 or +66 95 674 1442. For your standard booking through email or phone reservation, we accept payment by bank transfer only. Your room will blocked until 12.00 pm. noon of the next day. It is only confirmed wh en we have received the payment from you before due. Otherwise your booking will be cancelled
						</p>
						<p>
							Cancellation policy Oxotel is a small property with only 12 rooms. Because of that we are significantly affected by cancellations. The cancellati on will only be considered final when the Oxotel hostel has received written notification and acknowledged this. The following cancellation charges apply;
						</p>

						<p>
						- Cancellations received more than 14 days prior to your arrival: there is no charge. <br />
						- Cancellations received in writing between 7-14 days prior to your arrival will be charged 50% of the full value of the reservation (incl. tax) <br />
						- Cancellations received in writing less than 7 days will be charged 100% of the full value of the reservation (incl. tax) <br />
						- When guests don't arrive and haven't cancelled their reservation - a 'no-show' - we will charge the equivalent to your entire stay
						</p>
					</div>

 					<a id="modal_click_condition" class="btn btn-transparent _capital _pull-left _margin-right" data-toggle="modal" data-target="#conditionModal">Condition</a>
 					<div class="bookingbtn-group">
 					    <!--
	 					<a class="btn btn-transparent -booking -orange _capital" target="_blank" href="http://www.booking.com/hotel/th/oxotel.th.html?label=gen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%3Bsid%3Da9c400783e4d0678a2911325b020d663%3Bdcid%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdist%3D0%3Bgroup_adults%3D2%3Broom1%3DA%2CA%3Bsb_price_type%3Dtotal%3Bsrfid%3D261b6fd664759b8069fb61cd82d78f852dfca842X1%3Btype%3Dtotal%3Bucfs%3D1">Booking</a>
	 					<div class="subbtn-group -show">
	 						<a class="btn btn-transparent -orange _capital _subbutton" target="_blank" href="http://www.booking.com/hotel/th/oxotel.th.html?label=gen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%3Bsid%3Da9c400783e4d0678a2911325b020d663%3Bdcid%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdist%3D0%3Bgroup_adults%3D2%3Broom1%3DA%2CA%3Bsb_price_type%3Dtotal%3Bsrfid%3D261b6fd664759b8069fb61cd82d78f852dfca842X1%3Btype%3Dtotal%3Bucfs%3D1">Agoda</a>
	 						<a class="btn btn-transparent -orange _capital _subbutton" target="_blank" href="http://www.booking.com/hotel/th/oxotel.th.html?label=gen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%3Bsid%3Da9c400783e4d0678a2911325b020d663%3Bdcid%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdist%3D0%3Bgroup_adults%3D2%3Broom1%3DA%2CA%3Bsb_price_type%3Dtotal%3Bsrfid%3D261b6fd664759b8069fb61cd82d78f852dfca842X1%3Btype%3Dtotal%3Bucfs%3D1">Booking.com</a>
	 						<a class="btn btn-transparent -orange _capital _subbutton" target="_blank" href="http://www.booking.com/hotel/th/oxotel.th.html?label=gen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%3Bsid%3Da9c400783e4d0678a2911325b020d663%3Bdcid%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdist%3D0%3Bgroup_adults%3D2%3Broom1%3DA%2CA%3Bsb_price_type%3Dtotal%3Bsrfid%3D261b6fd664759b8069fb61cd82d78f852dfca842X1%3Btype%3Dtotal%3Bucfs%3D1">Hostel world</a>
	 					</div>
	 					-->

	 					<div class="dropdown">
	 						<a class="btn btn-transparent -booking -orange _capital" aria-haspopup="true" aria-expanded="false" target="_blank" href="http://goo.gl/Hz5s8T">Booking</a>

							<ul class="dropdown-menu subbtn-group" aria-labelledby="dLabel">
							  	<li>
			 						<a class="btn btn-transparent -orange _capital _subbutton" target="_blank" href="http://goo.gl/fxf5fk">Agoda</a>
							  	</li>
							  	<li>
			 						<a class="btn btn-transparent -orange _capital _subbutton" target="_blank" href="http://goo.gl/owzdZ2">Booking.com</a>
							  	</li>
							  	<li>
			 						<a class="btn btn-transparent -orange _capital _subbutton" target="_blank" href="http://goo.gl/4DuHOk">Hostel world</a>
							  	</li>
							</ul>
						</div>

 					</div>
 				</div>
 				<!--
 				<div class="switch-content-sub" style="display:none">
			    	<button type="button" class="close close-sub"><span aria-hidden="true" class="sr-inly"></span></button>
			    	<br />
		      		<ul class="lightSliderCondition">
		      			<li>
		      				<div>reservation</div>
		      				<h2 class="text-modal">Term and condition</h2>
		      				<div class="overflow-box _300px">
			      				<p>
			      					<strong class="text-bright">CHECK –IN</strong><br />
			      					- Check – in time from 2.00 pm. Leave your luggage is available at reception before check <br />
			      					– in-Arrivals between 12.00 AM midnight and 7.00 AM will be considered as the previous night and will require payment<br />
			      					- Please pay the total of your room balance on arrival. We accept either cash or credit card<br />
			      					- Passport or ID card is strictly required for check <br />
			      					– in. However all of your personal data will be kept privately
				      			</p>
				      			<p>
			      					<strong class="text-bright">CHECK – OUT</strong><br />
			      					- Check – out time before 12.00 PM. Let us know if you’re early bird and would like to check
			      					– out earlier
			      					-Noon late check
			      					– out between 12.00 PM
			      					– 6.00 PM is half day charge and after 6.00 PM is full day charge
			      					- If you have not checked
			      					– out of the room by noon and you do not have a reservation for the next night, Oxotel hostel may have to pack your <br />
			      					belonging to be placed in the luggage area so the room can be cleaned for the new arrivals
			      					-You can leave your luggage with us with free of charge after check – out
				      			</p>
				      			<p>
			      					<strong class="text-bright">KEY CARD</strong><br />
			      					- Guest will get a personal key card to enter their room <br />
			      					- Key card deposit is 100 THB and paid by cash only. The deposit will be returned upon return of card <br />
				      			</p>
				      			<p>
			      					<strong class="text-bright">RECEPTION</strong><br />
			      					- Reception operating time 24 hours service
				      			</p>
				      			<p>
			      					<strong class="text-bright">AGE RESTRICTIONS</strong><br />
			      					- To preserve and maintain our laid<br />
			      					– back & smooth atmosphere we do not allow persons under 15 year of age
			      				</p>
				      			<p>
			      					<strong class="text-bright">NO CURFEW</strong><br />
										- After 10.00 PM the main gate will be closed. When you go out or in after that please use your key card entering the main gate
			      				</p>
				      			<p>
			      					<strong class="text-bright">BREAKFAST</strong><br />
										- Breakfast buffet start from 7.00 AM until 10.00 AM at the breakfast area. It is not permitted to take any food away from there
			      				</p>
				      			<p>
			      					<strong class="text-bright">EATING & DRINKING AREA</strong><br />
										- Eating and drinking (except water) is forbidden in the room. You can only consume your own food and drink in the common area. <br />
										It is forbidden to bring any type of food or drink (except water) into your room
								</p>
				      			<p>
			      					<strong class="text-bright">QUIET TIME </strong><br />
										- Please keep the noise level down in the entire of hostel from 10.00 PM until an early morning hours to avoid disturbing other  guests.<br />
										 Please be generally mindful of their presence as you move around the building
								</p>
								<p>
			      					<strong class="text-bright">RESPECT</strong><br />
			      						- Do not put your personal item on the other bed. Do not pick up the other blanket, pillow or towel from the other bed <br />
			      						- Travelers are expected to respect other guests, staffs and property

								</p>
								<p>
			      					<strong class="text-bright">SAFETY & SECURITY </strong><br />
			      					- The reception, lobby and common areas are under 24 hours CCTV surveillance for your own safety  <br />
			      					- Hostel area and rooms are accessed by key card <br />
			      					- Any guest who in the opinion of our staffs, compromise the comfort, safety or security of other<br />
			      					guests or staffs will  be asked to leave the hostel and will not be offered any of refund

								</p>
								<p>
			      					<strong class="text-bright">NON – SMOKING</strong><br />
			      					- Oxotel hostel is a non – smoking hostel. A 2,000 THB will be charged to anyone who smokes in the public area according to Thai laws.<br />
			      					 You can have your cigarette only at the end of the rear backyard

								</p>
								<p>
			      					<strong class="text-bright">NO DRUGS</strong><br />
			      					- Any type of drugs is forbidden throughout the whole poperty

								</p>
								<p>
			      					<strong class="text-bright">VISITOR RULES</strong><br />
			      					- Outsiders or visitors are only allowed in the lobby area and garden are, not in the guest room <br />
			      					- No visitors are allowed inside the hostel after 10.00  PM
								</p>
								<p>
			      					<strong class="text-bright">PET RULES</strong><br />
			      					- Pets are not allowed in the hostel

								</p>
								<p>
			      					<strong class="text-bright">LAUNDRY</strong><br />
			      					- Oxotel hostel have a laundry service and we provide a washing machine on the 2nd floor. Please dry them in the washing area only <br />
			      					- Any clothes hanging or left in the public areas will be removed by the staffs

								</p>
								<p>
			      					<strong class="text-bright">KITCHEN</strong><br />
			      						- After use, please wash your dirty cups and dishes and please keep the kitchen clean and tidy<br />
			      						- When placing food in the fridge, please write your name and your check – out date on it

								</p>
								<p>
			      					<strong class="text-bright">CLEANLINESS</strong><br />
			      						- Please keep your room and common areas of the hostel clean and tidy to help us maintain the cozy and friendly atmosphere, we are dedicated to welcome all our guests with <br />
			      						- If you are staying in the dormitory room for multiple days and would like to have your bed cleaned, please inform our staffs  before 12.00 noon, beds are cleaned upon request

								</p>
								<p>
			      					<strong class="text-bright">DAMAGES</strong><br />
			      						- If you lose or damage any property belonging to Oxotel hostel, we will have to charge you for it. The compensation must be pa id immediately and in cash.<br />
			      						There is a 100 THB charged for missing the towel

								</p>
								<p>
			      					<strong class="text-bright">CONSERVATION </strong><br />
			      						- For conservation reasons, please turn off the lights, air – condition before leaving your room

								</p>
								<p>
			      					<strong class="text-bright">PERSONAL BELONGINGS</strong><br />
			      					- You can put your luggage in our luggage area  <br />
			      					- Valued articles should be stored in your room <br />
			      					- Oxotel hostel is not responsible for any case of lost, damage or theft

								</p>
								<p>
			      					<strong class="text-bright">PERSONAL BELONGINGS</strong><br />
			      					- f you wish to extend your stay, you must do so, it is subject to availability. Please inform us before your check – out date and with full payment in advance

								</p>
		      				</div>
		      			</li>
		      			<li>
		      				<h2 class="text-modal">Reservation policy</h2>
		      				<div class="overflow-box _300px">
			      			<p>
			      			    <strong class="text-bright">Agoda.com & Expedia.com: </strong>Your credit card has been charged already. Cancellation and modification are upon cancellation policy on each reservation <br />
			      			    <strong class="text-bright">Booking.com:  </strong>Valid credit card details are required to book online.Your credit card is not charged before your arrival.  We just keep your credit card details  for security reasons. You need to pay the total room balance directly to Oxotel Hostel on arrival either cash or credit card. <br />
			      			    <strong class="text-bright">HostelWorld.com:</strong> You will be charged 10% deposit. This is automatically taken by the booking engine not by Oxotel Hostel.The deposit is non – refundable and non – transferable.You need to pay the due balance directly to Oxotel Hostel on arrival either cash or credit card. <br />
			      			    <strong class="text-bright"> Reservation by Phone:</strong> Reservation directly by phone call +66 52 085 334 or +66 95 674 1442. For your standard booking through email or phone reservation, we accept payment by bank transfer only. Your room will blocked until 12.00 pm. noon of the next day. It is only confirmed wh en we have received the payment from you before due. Otherwise your booking will be cancelled <br />
			      			    <strong class="text-bright">Cancellation policy </strong> Oxotel is a small property with only 12 rooms. Because of that we are significantly affected by cancellations. The cancellati on will only be considered final when the Oxotel hostel has received written notification and acknowledged this. The following cancellation charges apply;<br />

			      			    - Cancellations received more than 14 days prior to your arrival: there is no charge. <br />
			      			    - Cancellations received in writing between 7-14 days prior to your arrival will be charged 50% of the full value of the reservation (incl. tax)  <br />
			      			    - Cancellations received in writing less than 7 days will be charged 100% of the full value of the reservation (incl. tax)  <br />
			      			    - When guests don't arrive and haven't cancelled their reservation - a 'no-show' - we will charge the equivalent to your entire stay

		      				</p>
		      				</div>
		      			</li>
		      		</ul>

 				</div>
 				-->


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
			            		With our 6 type’s rooms. Every dormitory bed has his/her locker,
			            		reading lamp and power socket. The private rooms have their wash basin.
			            		All our 6 types of room with shared bathroom on the 2nd floor
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
<!-- Start new Facility -->
<div id="facilities" class="desc-section -facilities">
	<div class="facilities-content">
		<div class="ct-wrapper">
			<h3 class="text-center textLightWhiteBg">FACILITIES</h3>

			<div class="faciimg-wrapper">
				<div class="faciitem -item1">
					<div class="faci-img -img01" onclick="openFacilitiesModal(0)">
						<div class="image"></div>
						<span class="text-tooltip -twiceline textLightWhiteBg">24 HOURS RECEPTION</span>
						<span class="explore-facilities">CLICK FOR EXPLORE</span>
					</div>
				</div>
				<div class="faciitem -item2">
					<div class="faci-img -img02" onclick="openFacilitiesModal(1)">
						<div class="image"></div>
						<span class="text-tooltip -twiceline textLightWhiteBg">GARDEN & COMMUNAL AREA</span>
						<span class="explore-facilities">CLICK FOR EXPLORE</span>
					</div>
				</div>
				<div class="faciitem -item3">
					<div class="faci-img -img03" onclick="openFacilitiesModal(2)">
						<div class="image"></div>
						<span class="text-tooltip textLightWhiteBg">KITCHEN</span>
						<span class="explore-facilities">CLICK FOR EXPLORE</span>
					</div>
				</div>
				<div class="faciitem -item4">
					<div class="faci-img -img04" onclick="openFacilitiesModal(3)">
						<div class="image"></div>
						<span class="text-tooltip textLightWhiteBg">PARKING AREA</span>
						<span class="explore-facilities">CLICK FOR EXPLORE</span>
					</div>
				</div>
				<div class="faciitem -item5 -last">
					<div class="faci-img -img05" onclick="openFacilitiesModal(4)">
						<div class="image"></div>
						<span class="text-tooltip textLightWhiteBg">CAFE</span>
						<span class="explore-facilities">CLICK FOR EXPLORE</span>
					</div>
				</div>
			</div>

			<div class="faciimg-wrapper -line2">
				<div class="faciitem">
					<div class="faci-img -img06" onclick="$('#modal_click_facilities_content').trigger('click')">
						<div class="image"></div>
						<span class="text-tooltip textLightWhiteBg">FRER SERVICES</span>
						<span class="explore-facilities">CLICK FOR EXPLORE</span>
					</div>
				</div>
				<div class="faciitem -last">
					<div class="faci-img -img07" onclick="$('#modal_click_facilities_content').trigger('click')">
						<div class="image"></div>
						<span class="text-tooltip textLightWhiteBg">SMALL FEE BASED</span>
						<span class="explore-facilities">CLICK FOR EXPLORE</span>
					</div>
				</div>
			</div>

			<button  style="display:none" id="modal_click_facilities" class="btn -facilities btn-transparent -darkbg _capital" type="button"  data-toggle="modal" data-target="#facilitiesModal">
				EXPLORE
			</button>
		</div>
	</div>
</div>
<!-- End Old Facility -->

<!-- Start Old Facility
<div id="facilities" class="desc-section -facilities">
	<div class="facilities-content">
		<div class="ct-wrapper">
			<div class="inner -left _text-right">
				<div class="inner-wrapper">
					<div class="faciimg-wrapper">
						<div class="faciimg -img01">
							<span class="text-tooltip">Towell & Bed sheet</span>
						</div>
						<div class="faciimg -img02">
							<span class="text-tooltip">Soap & Shampoo</span>
						</div>
						<div class="faciimg -img03">
							<span class="text-tooltip">Hair Dryer</span>
						</div>
						<div class="faciimg -img04">
							<span class="text-tooltip">Washing Machine</span>
						</div>
						<div class="faciimg -img05">
							<span class="text-tooltip">Shower Box</span>
						</div>
						<div class="faciimg -img06">
							<span class="text-tooltip">We service Wi-Fi All area</span>
						</div>
						<div class="faciimg -img07">
							<span class="text-tooltip">Internet Wireless</span>
						</div>
						<div class="faciimg -img08">
							<span class="text-tooltip">Map & Transportation</span>
						</div>
						<div class="faciimg -img09">
							<span class="text-tooltip">Luggage Storage</span>
						</div>
						<div class="faciimg -img10">
							<span class="text-tooltip">Closed-Circuit Television</span>
						</div>
						<div class="faciimg -img11">
							<span class="text-tooltip">Keycard System</span>
						</div>
						<div class="faciimg -img12">
							<span class="text-tooltip">Emergency Call</span>
						</div>
					</div>
				</div>
			</div>
			<div class="inner -right _text-grey">
				<div class="inner-wrapper">
					<h3 class="desc-header _capital _text-grey">Facilities</h3>
					<div class="overflow-box">
						<p>- All rooms are fitted with a shared bathroom</p>
						<p>- Guest kitchen areaprovides dishes, mug, glasses, utensils, oven, microwave and a fridge</p>
						<p>- Up to 3 common areas, two on 2nd floor and one on 3rd floor- Wide screen TV in kitchen</p>
						<p>- Luggage storage after check-out on the same day</p>
						<p>- Free parking on site (Reservation is needed)</p>
						<p>- ARTISAN Coffee café opens everyday from 9.00 am. to 7.00 pm.</p>



					</div>
					<h3 class="desc-header _capital _text-grey">Sell staffs & services</h3>
					<div class="overflow-box">

							<p>-Toothbrush 15 THB</p>
							<p>- Toothpaste 15 THB </p>
							<p>- Universal adaptor 60 THB </p>
							<p>- Ears plug 15 THB </p>
							<p>- Sanitary pad 20 THB </p>
							<p>- Locked 60 THB </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
End Old Facility -->
<!--
<header id="post-740-title" class="article__header  article__header--page two-thirds-height">
 	<div class="flexbox">
      	<div class="flexbox__item">
			<div class="ct-wrapper">
				<div class="inner -center">
					<div class="inner-wrapper">
			            <h2 class="text-huge text-floatmiddle text-bright">HOSTEL GARDEN CAFE</h2>
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
-->
<header id="post-740-title" class="article__header  article__header--page two-thirds-height">
 	<div class="flexbox">
      	<div class="flexbox__item">
<!-- 	        <hgroup class="article__headline">
	          <h1 class="headline__primary"><a href="#" style="color:#FFFFFF">CAFE</a></h1>
	        </hgroup> -->
			<div class="ct-wrapper">

				<div class="inner -middle -center text-center text-bright">
					<div class="inner-wrapper">
						<h2 class="text-huge text-floatmiddle text-bright">Coming Soon...</h2>
					</div>
				</div>

				<!-- <div class="inner -middle -left _text-right text-bright">
					<div class="inner-wrapper">
			            <h3><a class="text-bright" href="#">Cafe</a></h3>
			            <div class="overflow-box">
			            	<p>
			            		<strong class="class="text-bright"">Coffee/Hot/Iced/Frappe</strong><br />
			            		Ristretto/Doppio, Espresso/Doppio, Americano, Latte, Cappuchino, Mocha
			            	</p>
			            	<p>
			            		<strong class="class="text-bright"">Artisan Thai Style </strong><br />
			            		Caramel Macciato, Flat White, Picolo Latte, Marrochino
			            	</p>
			            	<p>
			            		<strong class="class="text-bright"">Cocoa</strong><br />
			            		Green Tea Latte, Thai Tea Latte
			            	</p>
			            	<p>
			            		<strong class="class="text-bright"">ETC.</strong><br />
			            		Pink Ocean, Morning Glory Mango, Sunshine Rose, Big Apple, Strawberry, Mix Berry, Kiwi, Mango

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
				</div> -->

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

<div class="map">

	<!--<iframe src="https://www.google.com/maps/d/embed?mid=11idAtyrUxD9qZCA6gGRayP18KsA&z=17&ll=18.7758, 98.98203" style="position:relative; top:-30px; border:none;"  width="1280" height="450"></iframe>-->
	<!--<img src="sites/all/themes/parallax_zymphonies_theme/images/oxomap.png" width="100%" height="400">-->
	<div id="mapDesktop" style="width:100%; height:450px; top:-15px"></div>
</div>
<!--
<div id="findus" class="desc-section -findus description-find_us">
	<div class="findus-content">
		<div class="ct-wrapper">
			<div class="inner -center _text-center">
				<div class="inner-wrapper _text-grey">
					<ul class="list-unstyled social-gang">
						<li><a class="fb" href="https://www.facebook.com/oxotelhostel" target="_blank">Facebook</a></li>
						<li><a class="ig" href="https://www.instagram.com/oxotelchiangmai/" target="_blank">Instagram</a></li>
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
 						<a id="modal_click_map" class="btn btn-transparent _capital" data-toggle="modal" data-target="#mapModal">Map</a>
 						<a class="btn btn-transparent _capital" data-toggle="modal" data-target="#contactModal">Mail us</a>
 					</div>
 				</div>
 			</div>
		</div>
	</div>
</div>
-->
<div id="findus" class="description-main desc-section -findus">
	<div class="findus-content">
		<div class="ct-wrapper">
			<div class="inner -left switch-content-wrapper" slide="left" id="findus_icon_content">
				<ul class="list-unstyled social-gang switch-content-main text-center">
					<li><a hre="#" class="line open-sub text-hide">Line Icon Here</a></li>
					<li><a class="facebook text-hide" href="https://www.facebook.com/oxotelhostel" target="_blank">Facebook</a></li>
					<li><a class="instagram text-hide" href="https://www.instagram.com/oxotelchiangmai/" target="_blank">Instagram</a></li>
				</ul>
	 			<!-- QR code hide -->
				<div class="inner -left text-center switch-content-sub" style="display:none">
			    	<button type="button" class="close close-sub -qrcode"><span aria-hidden="true" class="sr-only">close</span></button>

					<img class="qr-code" src="/sites/all/themes/parallax_zymphonies_theme/images/QR-code.png" />
				</div>
 			</div>

 			<div class="inner -right switch-content-wrapper" id="findus_content" slide="right">
				<div class="inner-wrapper _text-grey switch-content-main">
					<h3 class="desc-header _capital _text-grey">FIND US</h3>

					<div class="overflow-box">
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
					</div>

 					<a class="btn btn-transparent _capital _pull-left _margin-right open-sub">MAIL US</a>
					<!--<a id="modal_click_map" class="btn btn-transparent _capital" data-toggle="modal" data-target="#mapModal">Map</a>-->

 				</div>

				<div class="switch-content-sub" style="display:none">
			    	<button type="button" class="close close-sub"><span aria-hidden="true" class="sr-only"></span></button>
			      	<h2 class="text-modal">MAIL US</h2>

					<?php

			 			$nid = 18;
						$wnode = node_load($nid);
						$form = drupal_get_form('webform_client_form_' . $nid, $wnode, array());
						print render($form);
					?>
				</div>

 			</div>

		</div>
	</div>
</div>

<div class="footer">
	<div class="booking-link">
		<ul class="list-unstyled">
			<li class="agoda"><a href="" target="_blank">agoda</a></li>
			<li class="tripadvisor"><a href="" target="_blank">tripadvisor</a></li>
			<li class="booking"><a href="" target="_blank">booking.com</a></li>
			<li class="hostelworld"><a href="" target="_blank">hostel world</a></li>
		</ul>
	</div>
	<div class="footer-listwrapper">
		<div class="footer-list">
			<h4>Hostel</h4>
			<ul class="list-unstyled">
				<li><a href="#">About</a></li>
				<li><a href="#rooms">Rooms</a></li>
				<li><a href="#facilities">Facilities</a></li>
				<li><a href="#cafe">Artisan cafe</a></li>
				<li><a href="#findus">Find us</a></li>
			</ul>
		</div>
		<div class="footer-list">
			<h4>Others</h4>
			<ul class="list-unstyled">
				<li><a href="#about">Condition</a></li>
				<li><a href="#about">Reservation</a></li>
				<li><a href="#findus">Map</a></li>
				<li><a href="#findus">Email us</a></li>
			</ul>
		</div>
		<div class="footer-list">
			<h4>Social</h4>
			<ul class="list-unstyled">
				<li><a href="https://www.instagram.com/oxotelchiangmai/" target="_blank">Instagram</a></li>
				<li><a href="https://www.facebook.com/oxotelhostel" target="_blank">Facebook</a></li>
				<li><a href="">LINE</a></li>
			</ul>
		</div>
		<div class="footer-list">
			<h4>Site</h4>
			<ul class="list-unstyled">
				<li><a href="http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.agoda.com%2Foxotel-hostel%2Fhotel%2Fchiang-mai-th.html%3Fasq%3Du2qcKLxwzRU5NDuxJ0kOF8%252BzmLRvZQXVHFy2wHSdGKIFSKDtD0xR6njQwBLdDP7xerWduBIJ6k4cf5HcWilYNBLdZHzbs772XCoPWdSgD%252FTz17U3ZgWLnEdNzxKxNx92DsFKOYv4cKN%252BraPqz4f%252FLYprVp2TwP6wstUVR8FJRF%252BfkDX3uHFMuWTqeVL9h7qQKil0Kd5NpRQf1zGe1xDr05pxj%252FA%252BylTfAGs1qJCjm9k0V1AMDQx7njgkgAhn4vUi%26tick%3D636015089081%26pagetypeid%3D1%26origin%3DTH%26cid%3D-1%26htmlLanguage%3Den-us%26checkIn%3D2016-6-15%26checkout%3D2016-6-16%26los%3D1%26rooms%3D1%26adults%3D2%26childs%3D0%26isFromSearchBox%3Dtrue&h=MAQFxiyvL" target="_blank">Agoda</a></li>
				<li><a href="#">Booking.com</a></li>
				<li><a href="http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.hostelworld.com%2Fhosteldetails.php%2FOxotel-Hostel%2FChiang-Mai%2F101918&h=MAQFxiyvL" target="_blank">Hostel world</a></li>
				<li><a href="" target="_blank">Tripadvisor</a></li>
			</ul>
		</div>
	</div>
	<p>
		OXOTEL @ 2016 all right reserved. Designed and Developed by BGxMINT.co<br />
		<a href="http://www.bgxmint.co/" target="_blank">www.bgxmint.co</a>
	</p>
</div>


<!-- Rooms Modal -->
<div class="modal" id="roomsModal" data-easein="fadeIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body slide-modal">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-only"></span></button>
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
											<?php print theme('image_style',array('style_name' => 'slide_modal', 'path' => $image['uri'])); ?>

							           		<!--<img src="<?php print file_create_url($image['uri']);?>" width="500">-->
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
													<div class="btn btn-noborder" onclick="showGroupSlide(<?php print $j;?>, 'roomsModal')"><?php print $room2->title;?></div>
												<?php
												$j++;
											}
										?>
									</div>
									<div class="overflow-box -modalrooms">
										<?php print $room->body['und'][0]['value']; ?>
									</div>

					      		 	<div class="bookingbtn-group">
					      		 		<!--
					 					<a class="btn btn-transparent -modal -booking -orange _invert _capital" target="_blank" href="http://www.booking.com/hotel/th/oxotel.th.html?label=gen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%3Bsid%3Da9c400783e4d0678a2911325b020d663%3Bdcid%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdist%3D0%3Bgroup_adults%3D2%3Broom1%3DA%2CA%3Bsb_price_type%3Dtotal%3Bsrfid%3D261b6fd664759b8069fb61cd82d78f852dfca842X1%3Btype%3Dtotal%3Bucfs%3D1">Booking</a>
					 					<div class="subbtn-group -show">
					 						<a class="btn btn-transparent -orange _invert _capital _subbutton" target="_blank" href="http://www.booking.com/hotel/th/oxotel.th.html?label=gen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%3Bsid%3Da9c400783e4d0678a2911325b020d663%3Bdcid%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdist%3D0%3Bgroup_adults%3D2%3Broom1%3DA%2CA%3Bsb_price_type%3Dtotal%3Bsrfid%3D261b6fd664759b8069fb61cd82d78f852dfca842X1%3Btype%3Dtotal%3Bucfs%3D1">Agoda</a>
					 						<a class="btn btn-transparent -orange _invert _capital _subbutton" target="_blank" href="http://www.booking.com/hotel/th/oxotel.th.html?label=gen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%3Bsid%3Da9c400783e4d0678a2911325b020d663%3Bdcid%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdist%3D0%3Bgroup_adults%3D2%3Broom1%3DA%2CA%3Bsb_price_type%3Dtotal%3Bsrfid%3D261b6fd664759b8069fb61cd82d78f852dfca842X1%3Btype%3Dtotal%3Bucfs%3D1">Booking.com</a>
					 						<a class="btn btn-transparent -orange _invert _capital _subbutton" target="_blank" href="http://www.booking.com/hotel/th/oxotel.th.html?label=gen173nr-1FCAEoggJCAlhYSDNiBW5vcmVmaN0BiAEBmAEmwgEDYWJuyAEM2AEB6AEB-AELqAIE%3Bsid%3Da9c400783e4d0678a2911325b020d663%3Bdcid%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdist%3D0%3Bgroup_adults%3D2%3Broom1%3DA%2CA%3Bsb_price_type%3Dtotal%3Bsrfid%3D261b6fd664759b8069fb61cd82d78f852dfca842X1%3Btype%3Dtotal%3Bucfs%3D1">Hostel world</a>
					 					</div>
					 					-->

					 					<div class="dropdown">
					 						<a class="btn btn-transparent -modal -booking -orange _invert _capital" aria-haspopup="true" aria-expanded="false" target="_blank" href="http://goo.gl/Hz5s8T">Booking
					 						</a>

											<ul class="dropdown-menu subbtn-group" aria-labelledby="dLabel">
											  	<li>
							 						<a class="btn btn-transparent -modal -orange _invert _capital _subbutton" target="_blank" href="http://goo.gl/fxf5fk">Agoda</a>
											  	</li>
											  	<li>
							 						<a class="btn btn-transparent -modal -orange _invert _capital _subbutton" target="_blank" href="http://goo.gl/owzdZ2">Booking.com</a>
											  	</li>
											  	<li>
							 						<a class="btn btn-transparent -modal -orange _invert _capital _subbutton" target="_blank" href="http://goo.gl/4DuHOk">Hostel world</a>
											  	</li>
											</ul>
										</div>
									</div>
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

<!-- Facilities Modal -->
<div class="modal" id="facilitiesModal" data-easein="fadeIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg -facilities" role="document">
    <div class="modal-content">
      <div class="modal-body slide-modal">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-only">close</span></button>
		      		<div class="group-slide">

	      				<?php
							$i = 1;
							foreach($facilities_modal_node as $facilities){
								// Hard code break for only one content
								if ($i == 2) {
									//break;
								}
								?>

								<ul class="lightSliderFacilities">
								<?php
								foreach($facilities->field_slide_image['und'] as $image){
									?>
									  <li>
   											<?php print theme('image_style',array('style_name' => 'slide_modal', 'path' => $image['uri'])); ?>

							           		<!--<img src="<?php print file_create_url($image['uri']);?>" width="500">-->
									  </li>

									<?php

								}
								?>
								</ul>
								<div class="modal-description">
									<div class="modaltitle-wrapper">
					      				<?php
					      					$j = 0;
											foreach($facilities_modal_node as $facilities2){
												?>
													<div class="btn btn-facilities" onclick="showGroupSlide(<?php print $j;?>, 'facilitiesModal')"><?php print $facilities2->title;?></div>
												<?php
												$j++;
											}
										?>
									</div>
									<div class="overflow-box -modalrooms">
										<?php print $facilities->body['und'][0]['value']; ?>
									</div>

								</div>

								<?php

								$i++;
							}
						?>
						<!-- Start switch facilities popup-->

						<div class="facilities-switch-page">
							<div class="lSAction">
								<a class="lSPrev"></a>
								<a class="lSNext" data-toggle="modal" data-target="#facilitiesContentModal" id="modal_click_facilities_content" data-dismiss="modal" aria-label="Close"></a>

							</div>
							<ul class="lSPager lSpg" style="margin-top: 5px;">
								<li class="active">
									<a href="#">1</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
							</ul>
						</div>

						<!-- End switch facilities popup-->

		      		</div>
      </div>
    </div>
  </div>
</div>

<!-- Facilities Modal -->
<div class="modal" data-easein="fadeIn"  id="facilitiesContentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg -services" role="document">
    <div class="modal-content">
      <div class="modal-body slide-modal">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-only">close</span></button>
		      		<div class="group-slide">

	      				<?php
							$i = 1;
							foreach($facilities_content_modal_node as $facilities){
								// Hard code break for only one content
								if ($i == 2) {
									//break;
								}
								?>

								<ul class="lightSliderFacilitiesContent">
								<?php
								foreach($facilities->field_slide_image['und'] as $image){
									?>
									  <li>
 											<?php print theme('image_style',array('style_name' => 'slide_modal', 'path' => $image['uri'])); ?>

							           		<!--<img src="<?php print file_create_url($image['uri']);?>" width="500">-->
									  </li>

									<?php

								}
								?>
								</ul>
								<div class="modal-description">
									<div class="overflow-box -services">
										<?php print $facilities->body['und'][0]['value']; ?>
									</div>

								</div>

								<?php

								$i++;
							}
						?>
						<!-- Start switch facilities popup-->

						<div class="facilities-switch-page active-second">
							<div class="lSAction">
								<a class="lSPrev" onclick="openFacilitiesModal(0)" data-dismiss="modal" aria-label="Close"></a>
								<a class="lSNext"></a>

							</div>
							<ul class="lSPager lSpg" style="margin-top: 5px;">
								<li>
									<a href="#">1</a>
								</li class="active">
								<li>
									<a href="#">2</a>
								</li>
							</ul>
						</div>

						<!-- End switch facilities popup-->

		      		</div>


      </div>
    </div>
  </div>
</div>

<!-- Cafe Modal -->
<div class="modal"  data-easein="fadeIn"  id="cafeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body slide-modal">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-only"></span></button>
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
				<h4 class="modal-title text-modal">
					<?php print $cafe_modal_node->title;?>
				</h4>
				<h2 class="text-bright">ARTISAN</h2>
				<!-- <p>
					Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
				</p> -->
			</div>
			<!-- <div class="modal-description overflow-box -modal"> -->
				<?php //print $cafe_modal_node->body['und'][0]['value']; ?>
			<!-- </div> -->


      </div>
    </div>
  </div>
</div>

<!-- About Modal -->

<div class="modal" data-easein="fadeIn"  id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content text-modal">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-inly"></span></button>
      		<div class="modal-body text-modal">
      			<div class="modal-title modal-label">ABOUT OXOTEL</div>
      			<h3 class="text-center text-modal">OXOTEL</h3>
      			<div class="text-center"><?php print $about_node->body['und'][0]['value'];?></div>
      		</div>
    	</div>
  	</div>
</div>



<!-- Movie Modal -->
<div class="modal" data-easein="fadeIn"  id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content text-modal">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-only">close</span></button>
      		<div class="modal-body text-modal video-modal">
      			<div class="video-iframe-wrapper">
      				<div id="video_player_area"></div>
		      		<?php
		      			$i_video = 1;
						foreach($video_modal_node as $video){
							$parts = parse_url($video->field_youtube_link['und'][0]['value']);
							parse_str($parts['query'], $query);
							$video_v =  $query['v'];
							?>
							<div style="display:none" class="video-iframe" id="video_<?php print $video_v;?>">
								<iframe width="1280" height="560"  src="https://www.youtube.com/embed/<?php print $video_v;?>?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

							</div>
							<?php

							$i_video++ ;
						}


						?>
				</div>
					<ul class="video-thumbnail-wrapper" id="lightSliderVideo">
						<?php
							foreach($video_modal_node as $video){
								$parts = parse_url($video->field_youtube_link['und'][0]['value']);
								parse_str($parts['query'], $query);
								$video_v =  $query['v'];
								?>
									<li class="video-thumbnail" id="video_thumbnail_<?php print $video_v;?>" onClick="showVideo('<?php print $video_v;?>')">
										<?php
										 	$youtube_image_thumbnail = 'http://img.youtube.com/vi/'.$video_v.'/mqdefault.jpg';
											//print theme('image_style',array('style_name' => 'video_thumbnail', 'path' => $video->field_image['und'][0]['uri']));
										?>
										<img src="<?php print $youtube_image_thumbnail;?>" width="230" height="150" />
										<div class="video-title">
											<?php print $video->title; ?>
										</div>
									</li>

								<?php
							}

						?>
					</ul>


      		</div>
    	</div>
  	</div>
</div>

<!-- Term and condition Modal -->

<div class="modal" data-easein="fadeIn" id="conditionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      	<div class="modal-body textSlide-modal">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-inly"></span></button>
	      		<ul class="lightSliderCondition">
	      			<li>
	      				<div>reservation</div>
	      				<h2 class="text-modal">Term and condition</h2>
	      				<div class="overflow-box _300px">
		      				<p>
		      					<strong class="text-bright">CHECK –IN</strong><br />
		      					- Check – in time from 2.00 pm. Leave your luggage is available at reception before check <br />
		      					– in-Arrivals between 12.00 AM midnight and 7.00 AM will be considered as the previous night and will require payment<br />
		      					- Please pay the total of your room balance on arrival. We accept either cash or credit card<br />
		      					- Passport or ID card is strictly required for check <br />
		      					– in. However all of your personal data will be kept privately
			      			</p>
			      			<p>
		      					<strong class="text-bright">CHECK – OUT</strong><br />
		      					- Check – out time before 12.00 PM. Let us know if you’re early bird and would like to check
		      					– out earlier
		      					-Noon late check
		      					– out between 12.00 PM
		      					– 6.00 PM is half day charge and after 6.00 PM is full day charge
		      					- If you have not checked
		      					– out of the room by noon and you do not have a reservation for the next night, Oxotel hostel may have to pack your <br />
		      					belonging to be placed in the luggage area so the room can be cleaned for the new arrivals
		      					-You can leave your luggage with us with free of charge after check – out
			      			</p>
			      			<p>
		      					<strong class="text-bright">KEY CARD</strong><br />
		      					- Guest will get a personal key card to enter their room <br />
		      					- Key card deposit is 100 THB and paid by cash only. The deposit will be returned upon return of card <br />
			      			</p>
			      			<p>
		      					<strong class="text-bright">RECEPTION</strong><br />
		      					- Reception operating time 24 hours service
			      			</p>
			      			<p>
		      					<strong class="text-bright">AGE RESTRICTIONS</strong><br />
		      					- To preserve and maintain our laid<br />
		      					– back & smooth atmosphere we do not allow persons under 15 year of age
		      				</p>
			      			<p>
		      					<strong class="text-bright">NO CURFEW</strong><br />
									- After 10.00 PM the main gate will be closed. When you go out or in after that please use your key card entering the main gate
		      				</p>
			      			<p>
		      					<strong class="text-bright">BREAKFAST</strong><br />
									- Breakfast buffet start from 7.00 AM until 10.00 AM at the breakfast area. It is not permitted to take any food away from there
		      				</p>
			      			<p>
		      					<strong class="text-bright">EATING & DRINKING AREA</strong><br />
									- Eating and drinking (except water) is forbidden in the room. You can only consume your own food and drink in the common area. <br />
									It is forbidden to bring any type of food or drink (except water) into your room
							</p>
			      			<p>
		      					<strong class="text-bright">QUIET TIME </strong><br />
									- Please keep the noise level down in the entire of hostel from 10.00 PM until an early morning hours to avoid disturbing other  guests.<br />
									 Please be generally mindful of their presence as you move around the building
							</p>
							<p>
		      					<strong class="text-bright">RESPECT</strong><br />
		      						- Do not put your personal item on the other bed. Do not pick up the other blanket, pillow or towel from the other bed <br />
		      						- Travelers are expected to respect other guests, staffs and property

							</p>
							<p>
		      					<strong class="text-bright">SAFETY & SECURITY </strong><br />
		      					- The reception, lobby and common areas are under 24 hours CCTV surveillance for your own safety  <br />
		      					- Hostel area and rooms are accessed by key card <br />
		      					- Any guest who in the opinion of our staffs, compromise the comfort, safety or security of other<br />
		      					guests or staffs will  be asked to leave the hostel and will not be offered any of refund

							</p>
							<p>
		      					<strong class="text-bright">NON – SMOKING</strong><br />
		      					- Oxotel hostel is a non – smoking hostel. A 2,000 THB will be charged to anyone who smokes in the public area according to Thai laws.<br />
		      					 You can have your cigarette only at the end of the rear backyard

							</p>
							<p>
		      					<strong class="text-bright">NO DRUGS</strong><br />
		      					- Any type of drugs is forbidden throughout the whole poperty

							</p>
							<p>
		      					<strong class="text-bright">VISITOR RULES</strong><br />
		      					- Outsiders or visitors are only allowed in the lobby area and garden are, not in the guest room <br />
		      					- No visitors are allowed inside the hostel after 10.00  PM
							</p>
							<p>
		      					<strong class="text-bright">PET RULES</strong><br />
		      					- Pets are not allowed in the hostel

							</p>
							<p>
		      					<strong class="text-bright">LAUNDRY</strong><br />
		      					- Oxotel hostel have a laundry service and we provide a washing machine on the 2nd floor. Please dry them in the washing area only <br />
		      					- Any clothes hanging or left in the public areas will be removed by the staffs

							</p>
							<p>
		      					<strong class="text-bright">KITCHEN</strong><br />
		      						- After use, please wash your dirty cups and dishes and please keep the kitchen clean and tidy<br />
		      						- When placing food in the fridge, please write your name and your check – out date on it

							</p>
							<p>
		      					<strong class="text-bright">CLEANLINESS</strong><br />
		      						- Please keep your room and common areas of the hostel clean and tidy to help us maintain the cozy and friendly atmosphere, we are dedicated to welcome all our guests with <br />
		      						- If you are staying in the dormitory room for multiple days and would like to have your bed cleaned, please inform our staffs  before 12.00 noon, beds are cleaned upon request

							</p>
							<p>
		      					<strong class="text-bright">DAMAGES</strong><br />
		      						- If you lose or damage any property belonging to Oxotel hostel, we will have to charge you for it. The compensation must be pa id immediately and in cash.<br />
		      						There is a 100 THB charged for missing the towel

							</p>
							<p>
		      					<strong class="text-bright">CONSERVATION </strong><br />
		      						- For conservation reasons, please turn off the lights, air – condition before leaving your room

							</p>
							<p>
		      					<strong class="text-bright">PERSONAL BELONGINGS</strong><br />
		      					- You can put your luggage in our luggage area  <br />
		      					- Valued articles should be stored in your room <br />
		      					- Oxotel hostel is not responsible for any case of lost, damage or theft

							</p>
							<p>
		      					<strong class="text-bright">PERSONAL BELONGINGS</strong><br />
		      					- f you wish to extend your stay, you must do so, it is subject to availability. Please inform us before your check – out date and with full payment in advance

							</p>
	      				</div>
	      			</li>
	      			<li>
	      				<h2 class="text-modal">Reservation policy</h2>
	      				<div class="overflow-box _300px">
		      			<p>
		      			    <strong class="text-bright">Agoda.com & Expedia.com: </strong>Your credit card has been charged already. Cancellation and modification are upon cancellation policy on each reservation <br />
		      			    <strong class="text-bright">Booking.com:  </strong>Valid credit card details are required to book online.Your credit card is not charged before your arrival.  We just keep your credit card details  for security reasons. You need to pay the total room balance directly to Oxotel Hostel on arrival either cash or credit card. <br />
		      			    <strong class="text-bright">HostelWorld.com:</strong> You will be charged 10% deposit. This is automatically taken by the booking engine not by Oxotel Hostel.The deposit is non – refundable and non – transferable.You need to pay the due balance directly to Oxotel Hostel on arrival either cash or credit card. <br />
		      			    <strong class="text-bright"> Reservation by Phone:</strong> Reservation directly by phone call +66 52 085 334 or +66 95 674 1442. For your standard booking through email or phone reservation, we accept payment by bank transfer only. Your room will blocked until 12.00 pm. noon of the next day. It is only confirmed wh en we have received the payment from you before due. Otherwise your booking will be cancelled <br />
		      			    <strong class="text-bright">Cancellation policy </strong> Oxotel is a small property with only 12 rooms. Because of that we are significantly affected by cancellations. The cancellati on will only be considered final when the Oxotel hostel has received written notification and acknowledged this. The following cancellation charges apply;<br />

		      			    - Cancellations received more than 14 days prior to your arrival: there is no charge. <br />
		      			    - Cancellations received in writing between 7-14 days prior to your arrival will be charged 50% of the full value of the reservation (incl. tax)  <br />
		      			    - Cancellations received in writing less than 7 days will be charged 100% of the full value of the reservation (incl. tax)  <br />
		      			    - When guests don't arrive and haven't cancelled their reservation - a 'no-show' - we will charge the equivalent to your entire stay

	      				</p>
	      				</div>
	      			</li>
	      		</ul>
	      		<!--
      		 	<div class="bookingbtn-group -modal">

 					<div class="dropdown">
 						<a class="btn btn-transparent -modal -booking -orange _invert _capital" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_blank" href="#">Booking</a>

						<ul class="dropdown-menu subbtn-group" aria-labelledby="dLabel">
					  		<li>
	 							<a class="btn btn-transparent -modal -orange _invert _capital _subbutton" target="_blank" href="http://goo.gl/fxf5fk">Agoda</a>
					  		</li>
					  		<li>
	 							<a class="btn btn-transparent -modal -orange _invert _capital _subbutton" target="_blank" href="http://goo.gl/owzdZ2">Booking.com</a>
					  		</li>
					  		<li>
	 							<a class="btn btn-transparent -modal -orange _invert _capital _subbutton" target="_blank" href="http://goo.gl/4DuHOk">Hostel world</a>
					  		</li>
					    </ul>
					</div>
				</div>
				-->
	      	</div>
	    </div>
	</div>
</div>


<!-- About Modal -->
<div class="modal" data-easein="fadeIn" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      	<div class="modal-body map-modal">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-only"></button>
	        	<div id="iframe_map" style="height:500px; width:100%"></div>
	      		<!--<iframe src="https://www.google.com/maps/d/embed?mid=11idAtyrUxD9qZCA6gGRayP18KsA&z=14&ll=18.7758, 98.98203" width="640" height="480"></iframe>-->
	      	</div>
	    </div>
	</div>
</div>

<!-- Contact Modal -->
<div class="modal" data-easein="fadeIn" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      	<div class="modal-body form-modal">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="sr-only"></span></button>
	      		<h2 class="text-modal">ARK US</h2>
	 			<?php
					//module_load_include('inc', 'contact', 'contact.pages');
				 	//echo drupal_render(drupal_get_form('contact_site_form'));
		 			$nid = 18;
					$wnode = node_load($nid);
					$form = drupal_get_form('webform_client_form_' . $nid, $wnode, array());
					print render($form);
				?>
	      	</div>
	    </div>
	</div>
</div>
<script type="text/javascript">
  	$ = jQuery;
  	$(document).ready(function() {

    	$('#modal_click_map').click(function () {
    		if ($('#mapModal').find('#iframe_map').html() == "") {
		   		setTimeout(function(){
	    			init('iframe_map');
		   		}, 200);
    		}
	   	});

    	$('#modal_click_video').click(function () {
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
		    		showGroupSlide(0, 'roomsModal');
		    		refreshGlobal();

	    		}, 200);
			}
			else {
				$(window).trigger('resize');
			}
    	});
    	/*
  		var is_slice_facilities = false;
    	$('#modal_click_facilities').click(function () {

			if (!is_slice_facilities) {
	    		setTimeout(function(){
			    	$(".lightSliderFacilities").lightSlider({
			    		item: 1,
			    		auto: false,
			    		controls: true,
			    	});
		    		is_slice_facilities = true;
		    		showGroupSlide(0, 'facilitiesModal');
		    		refreshGlobal();

	    		}, 200);
			}
			else {
				$(window).trigger('resize');
			}
    	});
    	*/
  		var is_slice_facilities_content = false;
    	$('#modal_click_facilities_content').click(function () {

			if (!is_slice_facilities_content) {
	    		setTimeout(function(){
			    	$(".lightSliderFacilitiesContent").lightSlider({
			    		item: 1,
			    		auto: false,
			    		controls: true,
			    	});
			    	$('.active-second').find('li:eq("1")').addClass('active');
		    		is_slice_facilities_content = true;
		    		showGroupSlide(0, 'facilitiesContentModal');
		    		refreshGlobal();

	    		}, 200);
			}
			else {
				$(window).trigger('resize');
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
    	/*
    	$(".lightSliderCondition").lightSlider({
    		item: 1,
    		auto: false,
    		controls: true,
    	});
    	*/
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

    	// ============== Video =============

  		var is_slice_video = false;
    	$('#modal_click_video').click(function () {
	    	$('.video-thumbnail-wrapper li:first-child').trigger('click');

			if (!is_slice_video) {
	    		setTimeout(function(){
			    	$("#lightSliderVideo").lightSlider({
			    		item: 2,
			    		auto: false,
			    		controls: true,
			    		vertical: true
			    	});
		    		is_slice_video = true;

	    		}, 200);
			}
    	});

    	$('#videoModal').on('hidden.bs.modal', function () {
  			$('.video-thumbnail-wrapper li:first-child').trigger('click');

		})


    switchContent();

  	});
</script>

<script type="text/javascript">
    //google.maps.event.addDomListener(window, 'load', init);

    function init(selectorId) {

        var mapOptions = {
            zoom: 13,
            scrollwheel: false,
            center: new google.maps.LatLng(18.7758, 98.98203),
            styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]}]
        };


        var mapElement = document.getElementById(selectorId);

        var map = new google.maps.Map(mapElement, mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(18.7758, 98.98203),
            map: map,
            title: 'OXOTEL'
        });
    }

    $(document).ready(function () {

    	setTimeout(function(){
        	init('mapDesktop');

		}, 200);

    });
</script>
<!--
<script async defer
        src="https://maps.googleapis.com/maps/api/js?signed_in=true">
</script>
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?signed_in=true&key=AIzaSyCqho1kroGimqIa2gbflvYpea0cFgk8ong">
</script>

