$(function(){
	function box_null(){
		$('#menu').animate({opacity:'hide'},0);
		$('#content').css({height:'0'});
		$('#content > article').css({opacity:'0',visibility:'hidden', position:'absolute'});
	}
	function open_page(){
		$(page).css({visibility:'visible'}).animate({opacity:'1'},400, function(){
			act=page;
		});
	}
	box_null();
	var act;
	page=location.hash.slice(0,-1);
	if (page!='') {
		var nav=page.substr(6);
		nav='.nav'+nav;
		$(nav).addClass('active');
		
		$('h1').css({paddingTop:'50px'});
		$('h1').html('<a href="/" id="logo">ARCH architectural company</a>')
		$('#content').css({height:'450px'});
		$('#menu').css({ opacity:'1', display:'block'});
		open_page();
	}
	$('a').click(function(){
		th=$(this);
		page=th.attr('href');
		if (page.substr(page.indexOf('#'),6)=='#page_') {
			
			if (act) {
				$('#menu li').removeClass('active');
				
				location.hash=page+'/';
				th.parent().addClass('active');
				$(act).animate({opacity:'0'},400, function(){
						$(act).css({visibility:'hidden'})								   
						$('#content > article').css({opacity:'0',visibility:'hidden'});
						open_page();										   
				});
			} else {
				location.hash=page+'/';
				var nav=page.substr(6);
				nav='.nav'+nav;
				$(nav).addClass('active');
				
				$('h1').html('<a href="/" id="logo">ARCH architectural company</a>')
				$('h1').stop().animate({paddingTop:'50'},400,function(){
					$('#menu').animate({ opacity:'show'},400, function(){
						$('#content').animate({height:'450px'},400, function(){
							open_page();												 
						});											   
					})				
				})
			}
				return false;
			}
	})
})