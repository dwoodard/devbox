if ( $.browser.webkit) {
$(window).load(function(){
	// vertical scroll	
    $('.scroll-pane').jScrollPane({
		showArrows:false,
		scrollbarWidth:25,
		dragMaxHeight:87
	});	
});
} else{
	$(document).ready(function() {	
		// vertical scroll	
    $('.scroll-pane').jScrollPane({
		showArrows:false,
		scrollbarWidth:25,
		dragMaxHeight:87
	});					   
	})
}

$(document).ready(function() {
	
	$(".gallery").colorbox({rel:'gallery'});
	
	// for lightbox
	// if ($("a[rel^='prettyPhoto']").length) {
	// 			$(document).ready(function() {
	// 				// prettyPhoto
	// 				$("a[rel^='prettyPhoto']").prettyPhoto({theme:'facebook'});
	// 			});
	// 	}
	
	//animate menu
	$('#menu .ul_1 li').hover(function(){
			$(this).find('> a').stop().animate({backgroundPosition:'-64px -120px'})
		}, function(){
			$(this).find('> a').stop().animate({backgroundPosition:'-64px -300px'})			
		}
	)
	$('ul#menu').superfish({
      delay:       600,
      animation:   {height:'show'},
      speed:       400,
      autoArrows:  false,
      dropShadows: false
    });
	// lists animate
	$('.list1 li a').hover(function(){
			$(this).stop().animate({paddingLeft:'39'},400, 'easeOutCirc')
		}, function(){
			$(this).stop().animate({paddingLeft:'29'},400, 'easeOutCirc')	
		}
	)
	// buttons animate
	$('.button1').hover(function(){
			$(this).stop().animate({backgroundPosition:'-300px -119px'},400)					 
		}, function(){
			$(this).stop().animate({backgroundPosition:'-100px -119px'},400)	
		}
	)
	
	//gallery
	$('.next, .prev').css({opacity:'0'});
	$('#gallery1 .img_act').css({opacity:'0'});
	$('#gallery1_box').mouseenter(function(){
			$('.next, .prev').stop().animate({opacity:'0.4'},400);
		}).mouseleave(function(){
			$('.next, .prev').stop().animate({opacity:'0'},400);
		}
	)
	$('.next').mouseenter(function(){
			$('.next').stop().animate({opacity:'0.8'},400);
		}).mouseleave(function(){
			$('.next').stop().animate({opacity:'0.4'},400);
		}
	)
	$('.prev').mouseenter(function(){
			$('.prev').stop().animate({opacity:'0.8'},400);
		}).mouseleave(function(){
			$('.prev').stop().animate({opacity:'0.4'},400);
		}
	)
	$("#gallery1").jCarouselLite({
		btnNext: ".next",
		btnPrev: ".prev",
		visible: 10,
		speed: 400,
		easing: 'easeOutCirc'
	});
	
	$('#gallery1 li').mouseenter(function(){
			$(this).find('.img_act').stop().animate({opacity:'1'},400);
		}).mouseleave(function(){
			$(this).find('.img_act').stop().animate({opacity:'0'},400);
		}
	)
 });