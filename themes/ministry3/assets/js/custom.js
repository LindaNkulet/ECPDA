$(document).ready(function() {
	var arrow = '<span><img src="assets/img/caret-down-white.svg" alt=" "></span>';
    $(".navbar-main__nav-links > ul > li").each(function() {
			if($(this).children("ul").length > 0) {
				$(this).addClass('has-submenu');
				$(this).find('a:first-child').append(arrow);
			}
    });

		$(".navbar-main__hamburger-menu-d").click(function() {
			$(this).find('ul').slideToggle();
			$(this).toggleClass('bdr-green');
		});

		$(".navbar-main__search").click(function() {
			$(".navbar-main__search-form").slideToggle();
			$(this).toggleClass('active');
		});

		$(".top-bar__language button").click(function() {
			$(".top-bar__language").toggleClass("active");
			$(this).parent().find("ul").slideToggle();
		});
		

		// BX Slider
		$('.bxSlider').bxSlider({
			pager: false,
			auto: true,
		});

		// tabs
		$('ul.tabs-whatWeDo li').click(function(){
			var tab_id = $(this).attr('data-tab');
	
			$('ul.tabs-whatWeDo li').removeClass('current');
			$('.tab-content').removeClass('current');
	
			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		});
});
