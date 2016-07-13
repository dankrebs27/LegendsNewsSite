$(document).ready(function(){
	/* Script for nav bar to stay up and change size*/
	$(function(){
		var navStatesInPixelHeight = [50,80];

		var changeNavState = function(nav, newStateIndex) {
			nav.data('state', newStateIndex).stop().animate({
				height : navStatesInPixelHeight[newStateIndex] + 'px'
			}, 600);    
		};

		var boolToStateIndex = function(bool) {
			return bool * 1;    
		};

		var maybeChangeNavState = function(nav, condState) {
			var navState = nav.data('state');
			if (navState === condState) {
				changeNavState(nav, boolToStateIndex(!navState));
			}
		};

		$('#topNav').data('state', 1);

		$(window).scroll(function(){
			var $nav = $('#topNav');

			if ($(document).scrollTop() > 0) { /*Document scrolled down*/
				maybeChangeNavState($nav, 1);
				$("#panel").css("bottom","48%");
				$("#lcsCon").fadeOut("slow");
				$("#gameCon").fadeOut("slow");
				$("#communCon").fadeOut("slow");
			} else {
				maybeChangeNavState($nav, 0);  /*Document scrolled up*/
				$("#panel").css("bottom","8%");
				$("#lcsCon").fadeIn("slow");
				$("#gameCon").fadeIn("slow");
				$("#communCon").fadeIn("slow");
			}
		});
	});
	
	$("#roleBtn").click(function(){
        $("#panel").slideToggle("slow")
    });
	
});