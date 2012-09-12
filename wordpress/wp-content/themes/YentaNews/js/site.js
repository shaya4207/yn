jQuery(document).ready(function($) {
	general($);
});

function general($){
	$('.news_home img').attr('align','left');//gives the image in .news_home align="left"
	$('.news_article img').attr('align','left');//gives the image in .news_article align="left"
	$('.news_home').each(function(){
		$(this).mouseover(function(){
			$parent = $(this);
			$readmore = $(this).children().last();
			$readmore.show();
			$readmore.css('left',($parent.width()-$readmore.width())/2);
			$readmore.css('top',($parent.height()-$readmore.height())/2);
			$(this).mouseout(function(){
				$readmore.hide();
			})
		})
	})
}