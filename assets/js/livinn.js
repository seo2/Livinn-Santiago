
$("#carousel1").owlCarousel({
	 items:1,
	 loop: true,
	 autoplay: true,
	 nav: false,
	 dots: false
});

$("#carousel2").owlCarousel({
	 items:1,
	 loop: true,
	 autoplay: true,
	 nav: false,
	 dots: true
});

$('[data-toggle="tooltip"]').tooltip();

$('#lugares1 a').on('click', function(){
	$('.lugarboxinfo').addClass('hide');
	elid = $(this).attr('id');
	
	$('#txt-'+elid).removeClass('hide');
	console.log('../img/'+elid+'.jpg');
	$('#lugarboxfoto').css({'background-image':'url(assets/img/'+elid+'.jpg)'});
	
});