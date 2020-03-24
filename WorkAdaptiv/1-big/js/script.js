$(function(){

	var $mt = $('nav .menu__toggle');
	var $menu = $('nav ol');

	$(window).resize(function(){
		if($menu.css('display')) == 'none' && window.innerWidth > 680) {
			$menu.show();
	}
	});

	$mt.click(function() {
		$menu.slideToggle(500);
	});

});
