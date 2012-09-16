jQuery(document).ready(function($) {
	general($);
	rwd_toggle($);
});

function general($){
	$('.news_home img').attr('align','left');//gives the image in .news_home align="left"
	$('.news_article img').attr('align','left');//gives the image in .news_article align="left"
	$('.news_home').each(function(){
		$(this).mouseover(function(){
			if($(window).width() >= 400){
				$parent = $(this);
				$readmore = $(this).children().last();
				$readmore.show();
				$readmore.css('left',($parent.width()-$readmore.width())/2);
				$readmore.css('top',($parent.height()-$readmore.height())/2);
				$(this).mouseout(function(){
					$readmore.hide();
				})
			}
		})
	})
}

function rwd_toggle($){
	if(readCookie('resp') == 'no'){
		$('.rwd').text('Return to Mobile Site');
	}
	$('.rwd').click(function(){
		if(readCookie('resp') == null){
			createCookie('resp','no',7);
		}else if(readCookie('resp') == 'yes'){
			createCookie('resp','no',7);
		}else if(readCookie('resp') == 'no'){
			createCookie('resp','yes',7);
		}
		window.location.reload(true);
		return false;
	})
}


function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}