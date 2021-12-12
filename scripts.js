$(function(){
	$('.testin-data').find('div:first').show();
		if($(this).attr('class') == 'nav-active') return false;
		var link = $(this).attr('href');
		var prevActive =$('.pagination > a.nav-active').attr('href');
		$('.pagination > a.nav-active').removeClass('nav-active');
		$(this).addClass('nav-active');
		return false;
});