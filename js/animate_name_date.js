function makeEaseOut(timing) {
	return function(timeFraction) {
		return 1 - timing(1 - timeFraction);
	}
}

function bounce(timeFraction) {
	for (let a = 0, b = 1, result; 1; a += b, b /= 2) {
		if (timeFraction >= (7 - 4 * a) / 11) {
			return -Math.pow((11 - 6 * a - 11.5 * timeFraction) / 4, 2) + Math.pow(b, 2);
		}
	}
}


let bounceEaseOut = makeEaseOut(bounce);


$(function(){
	var flag_name_date = false;
	var flag_rezume = false;
	$(window).scroll(function(event){
    var top = $(this).scrollTop();
    if (top < 800 && !flag_name_date && top > 360)  {
    	$("#brick_name").css('visibility', 'visible');
    	$(".icon_name__block").css('visibility', 'visible');
    	$(".icon_birth_date__block").css('visibility', 'visible');
    	$("#brick_date").css('visibility', 'visible');
    	flag_name_date = true;
    	animate({
		duration: 900, timing: bounceEaseOut, draw: function(progress) {
			brick_name.style.right = progress * 97.7 + 'px';
		}
	});
    	animate({
		duration: 360, timing(timeFraction) {return Math.pow(2,4.7 * timeFraction);}, draw: function(progress) {
			$(".icon_name__block").css("right", progress * 9.88 + 'px');
		}
	});
    	animate({
		duration: 360, timing(timeFraction) {return Math.pow(2,4.7 * timeFraction);}, draw: function(progress) {
			$(".icon_birth_date__block").css("right", progress * 9.4 + 'px');
		}
	});
    	animate({
		duration: 900, timing: bounceEaseOut, draw: function(progress) {
			brick_date.style.right = progress * 97.7 + 'px';
		}
	});
    }
   else if (top > 1320 && top < 1400 && !flag_rezume) {
   	    $('#brick_xp').css('visibility', 'visible');
   	    flag_rezume = true;
   	    $('#brick_key').css('visibility', 'visible');
   	    $('#brick_educ').css('visibility', 'visible');
   	    $('#brick_dop').css('visibility', 'visible');
   	    $('.icon_xp__block').css('visibility', 'visible');
   	    $('.icon_key__block').css('visibility', 'visible');
   	    $('.icon_educ__block').css('visibility', 'visible');
   	    $('.icon_dop__block').css('visibility', 'visible');
   	    animate({
		duration: 360, timing(timeFraction) {return Math.pow(2,4.7 * timeFraction);}, draw: function(progress) {
			$(".icon_key__block").css("right", progress * 10.2 + 'px');
		}
	});
   	    animate({
		duration: 360, timing(timeFraction) {return Math.pow(2,4.7 * timeFraction);}, draw: function(progress) {
			$(".icon_xp__block").css("right", progress * 10.2 + 'px');
		}
	});
   	    animate({
		duration: 360, timing(timeFraction) {return Math.pow(2,4.7 * timeFraction);}, draw: function(progress) {
			$(".icon_educ__block").css("right", progress * 10.2 + 'px');
		}
	});
   	    animate({
		duration: 360, timing(timeFraction) {return Math.pow(2,4.7 * timeFraction);}, draw: function(progress) {
			$(".icon_dop__block").css("right", progress * 10.2 + 'px');
		}
	});
   	    animate({
		duration: 900, timing: bounceEaseOut, draw: function(progress) {
			brick_key.style.right = progress * 80 + 'px';
		}
	});
   	    animate({
		duration: 900, timing: bounceEaseOut, draw: function(progress) {
			brick_xp.style.right = progress * 208 + 'px';
		}
	});
   	    animate({
		duration: 900, timing: bounceEaseOut, draw: function(progress) {
			brick_dop.style.right = progress * 40 + 'px';
		}
	});
   	    animate({
		duration: 900, timing: bounceEaseOut, draw: function(progress) {
			brick_educ.style.right = progress * 39 + 'px';
		}
	});
   }
});
});