


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

$('#tipolugar').change(function() {
	slug = $(this).val();
	$('.lugares').addClass('hide');
	$('.lista-'+slug).removeClass('hide');
});

$('#lugares1 a').on('click', function(){
	$('.lugarboxinfo').addClass('hide');
	elid = $(this).attr('id');
	
	$('#txt-'+elid).removeClass('hide');
	bg = $('#txt-'+elid).data('bg');
	console.log(bg);
	$('#lugares').css({'background-image':'url('+bg+')'});
	
});

$('#lugar').change(function() {
	
	$('.lugarboxinfo').addClass('hide');
	elid = $(this).val();
	
	$('#txt-'+elid).removeClass('hide');
	bg = $('#txt-'+elid).data('bg');
	console.log(bg);
	$('#lugares').css({'background-image':'url('+bg+')'});
});


$('.slick').slick();
var $parent = $(".slick.slider-parent");
var $green = $(".slick.green");
var $images = $green.find("img");
var killit = false;

$images.on("click", function(e){
    if( !killit ) {
        e.stopPropagation();
        var idx = $(this).data("thumb");
        $parent.slick("goTo", idx-1);
    }
});

// need to register a flag that doesn't let us click the slider
// as we are trying to swipe it.

$green
    .on("beforeChange", function() {
        killit = true;
    }).on("afterChange", function() {
        killit = false;
    });



   /**
     * EFECTO PARA FLECHAS EN ACORDEON
     */
    
    $(document).on('show','.accordion', function (e) {
         //$('.accordion-heading i').toggleClass(' ');
         alert('test');
         $(e.target).prev('.accordion-heading').addClass('accordion-opened');
    });
    
    $(document).on('hide','.accordion', function (e) {
        $(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
        //$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
    });


$('#habitaciones .row a').on('click',function(){
	$('#habitaciones').addClass('hide');
	$('#habitacion').removeClass('hide');
	titulo = $(this).data('titulo');
	detalles = $(this).data('detalles');
	foto = $(this).data('foto');
	$('.titulo').html(titulo);
	$('.detalles').html(detalles);
	$('#habitacion img').attr('src',foto);
	$('#paso2').addClass('activo');
	$('#habfield').val(titulo);
});
$('a.volver').on('click',function(){
	$('#habitaciones').removeClass('hide');
	$('#habitacion').addClass('hide');
	$('#paso2').removeClass('activo');
});

$('#habitacion a.btn-primary').on('click',function(){
/*
	$('#habitacion').addClass('hide');
	$('#paso3').addClass('activo');
	
	
	$('#terminos').removeClass('hide');
*/

	$('#filtros').addClass('hide');
	$('#habitacion').addClass('hide');
	$('#paso4').addClass('activo');
	$('#confirma').removeClass('hide');
});

$('#terminos a.btn-primary').on('click',function(){
	$('#terminos').addClass('hide');
	$('#paso4').addClass('activo');
	$('#confirma').removeClass('hide');
});


//Filter Personas
$('.radio input[name="personas"]').change(function() {
	var filter = $(this).val()
	filterList(filter);
});

//Personas filter function
function filterList(value) {
	var list = $("#habitaciones .row");
	$(list).fadeOut("fast");
	if (value == "All") {
		$("#habitaciones").find(".row").each(function (i) {
			$(this).delay(200).slideDown("fast");
		});
	} else {
		//Notice this *=" <- This means that if the data-category contains multiple options, it will find them
		//Ex: data-category="Cat1, Cat2"
		$("#habitaciones").find(".row[data-personas*=" + value + "]").each(function (i) {
			$(this).delay(200).slideDown("fast");
		});
	}
}


//Filter News
$('.radio input[name="bano"]').change(function() {
	var filter2 = $(this).val()
	filterList2(filter2);
});

//News filter function
function filterList2(value) {
	var list = $("#habitaciones .row");
	$(list).fadeOut("fast");
	if (value == "All") {
		$("#habitaciones").find(".row").each(function (i) {
			$(this).delay(200).slideDown("fast");
		});
	} else {
		//Notice this *=" <- This means that if the data-category contains multiple options, it will find them
		//Ex: data-category="Cat1, Cat2"
		$("#habitaciones").find(".row[data-bano*=" + value + "]").each(function (i) {
			$(this).delay(200).slideDown("fast");
		});
	}
}

//Filter News
$('.radio input[name="tiempo"]').change(function() {
	var filter3 = $(this).val()
	$('.tiempo').addClass('hide');
	if(filter3 ==4){
		$('.12meses').removeClass('hide');
		$('#btn-selecciona').data('tiempo','1 año');
		$('#timefield').val('1 año');
	}else if(filter3 ==3){
		$('.10meses').removeClass('hide');
		$('#btn-selecciona').data('tiempo','10 a 11 meses');
		$('#timefield').val('10 a 11 meses');
	}else if(filter3 ==2){
		$('.4meses').removeClass('hide');
		$('#btn-selecciona').data('tiempo','4 a 9 meses');
		$('#timefield').val('4 a 9 meses');
	}else if(filter3 ==1){
		$('.1meses').removeClass('hide');
		$('#btn-selecciona').data('tiempo','1 a 3 meses');
		$('#timefield').val('1 a 3 meses');
	}else{
		$('.12meses').removeClass('hide');
		$('#btn-selecciona').data('tiempo','1 año');
		$('#timefield').val('1 año');
	} 
});



