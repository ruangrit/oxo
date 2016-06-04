jQuery(function($) {
	var str=location.href.toLowerCase();
	$('.nav li > a').each(function() { 
	//alert(str.indexOf(this.href.toLowerCase()));
//alert(this.href.toLowerCase());
	if (str.indexOf(this.href.toLowerCase()) > -1) {
		//alert('ok');
			$(this).addClass("current-on");
			
			//$(this).parent().addClass("current-on"); 
		}
		else{ 
			$("li.current-on").removeClass("current-on"); 
			}
	});
	
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  })
//current menu
	//var str=location.href.toLowerCase();
//	$('.nav > li > a').each(function() { 
//		if (str.indexOf(this.href.toLowerCase()) > -1) {
//			$("li.current-on").removeClass("current-on");
//			$(this).parent().addClass("current-on"); 
//		}else{ 
//			$("li.current-on").removeClass("current-on"); 
//			}
//	}); 
	
	//if (typeof jQuery != 'undefined') {  
//    // jQuery is loaded => print the version
//    alert(jQuery.fn.jquery);
//	}
$(window).scroll(function() {    
	var scroll = $(window).scrollTop();    
	if (scroll > 1200){
		$('.newsletter').show(400);
	}
	else{
		$('.newsletter').hide(300);
	}
		/*$('.close').click(function(){
	 		$('.newsletter').hide(200);
	 	});*/
		$('.close').click(function() {
  		$('.newsletter').remove();
		});
});
 
})(jQuery);
//scroll
