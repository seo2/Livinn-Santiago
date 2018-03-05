
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
	$('#lugares').css({'background-image':'url(assets/img/'+elid+'.jpg)'});
	
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




var map;
function initialize()
{
	// Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#F03C40" },
        { saturation: -20 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  var myLatLng1 = {lat: -33.448114, lng: -70.654901};	
  var myLatLng2 = {lat: -12.1067515, lng: -77.0394485};	
  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: myLatLng1,//Setting Initial Position
    zoom: 16,
    scrollwheel: false,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  });
  
  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');  
  
  
  var marker = new google.maps.Marker({
    position: myLatLng1,
    map: map,
    title: 'Livinn Santiago',
    icon: "assets/img/pointer-livinn.png?v=3"
  });
  
  
  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    title: 'Alta Perú',
    icon: "2017/images/location-pointer.png?ver=2"
  });
  
  	marker.setMap(map);
  	marker2.setMap(map);
	url = "https://www.google.cl/maps/place/Livinn+Santiago+-+Departamentos+para+Estudiantes/@-33.4481095,-70.6559953,18z/data=!4m12!1m6!3m5!1s0x9662c508490f4067:0xa22b2567d585c8b7!2sLivinn+Santiago+-+Departamentos+para+Estudiantes!8m2!3d-33.448114!4d-70.654901!3m4!1s0x9662c508490f4067:0xa22b2567d585c8b7!8m2!3d-33.448114!4d-70.654901";
	url2 = "https://www.google.cl/maps/place/Av.+Camino+Real+1225,+San+Isidro+15073,+Per%C3%BA/@-12.1067515,-77.0416372,17z/data=!4m13!1m7!3m6!1s0x9105c84735b31ba1:0xad6ea4584f6e391a!2sAv.+Camino+Real+1225,+San+Isidro+15073,+Per%C3%BA!3b1!8m2!3d-12.1067515!4d-77.0394485!3m4!1s0x9105c84735b31ba1:0xad6ea4584f6e391a!8m2!3d-12.1067515!4d-77.0394485?hl=es";
	marker.addListener('click', function() {
		window.open(url, '_blank');
	});	
	marker2.addListener('click', function() {
		window.open(url2, '_blank');
	});	
  
  
}





google.maps.event.addDomListener(window, 'load', initialize);


function newLocation(newLat,newLng)
{
	 map.setCenter({
		lat : newLat,
		lng : newLng
	});
}

//Setting Location with jQuery
$(document).ready(function ()
{
	
    $("#1").on('click', function ()
    {
	  newLocation(-33.4454589,-70.6275955);
	  $('.btn-main').removeClass('activo');
	  $(this).addClass('activo');
	});
	
	$("#2").on('click', function ()
    {
	  newLocation(-12.1067515,-77.0394485);
	  $('.btn-main').removeClass('activo');
	  $(this).addClass('activo');
	});
});


