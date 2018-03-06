
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

$('#lugar').change(function() {
	
	$('.lugarboxinfo').addClass('hide');
	elid = $(this).val();
	
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









$('#habitaciones .row a').on('click',function(){
	$('#habitaciones').addClass('hide');
	$('#habitacion').removeClass('hide');
	$('#paso2').addClass('activo');
});
$('a.volver').on('click',function(){
	$('#habitaciones').removeClass('hide');
	$('#habitacion').addClass('hide');
	$('#paso2').removeClass('activo');
});

$('#habitacion a.btn-primary').on('click',function(){
	$('#habitacion').addClass('hide');
	$('#paso3').addClass('activo');
	$('#terminos').removeClass('hide');
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
	  newLocation(-33.448114,-70.654901);
	  $('.btn-main').removeClass('activo');
	  $(this).addClass('activo');
	});
	
	$("#2").on('click', function ()
    {
	  newLocation(-33.4445206,-70.6509277);
	  $('.btn-main').removeClass('activo');
	  $(this).addClass('activo');
	});
});

var map;
function initialize()
{
	// Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#5abfc1" },
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
  var myLatLng2 = {lat: -33.4445206, lng: -70.6509277};	
  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: myLatLng1,//Setting Initial Position
    zoom: 17,
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
	url2 = "https://www.google.cl/maps/dir/Universidad+de+Chile,+Santiago/Livinn+Santiago+-+Departamentos+para+Estudiantes+-+Lord+Cochrane+166,+Santiago,+Santiago,+Regi%C3%B3n+Metropolitana/@-33.4470128,-70.6582427,16z/am=t/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x9662c5a0db4a5977:0xb5a7550e9b5b5d8!2m2!1d-70.650391!2d-33.443809!1m5!1m1!1s0x9662c508490f4067:0xa22b2567d585c8b7!2m2!1d-70.654901!2d-33.448114!3e0?hl=es";
	marker.addListener('click', function() {
		window.open(url, '_blank');
	});	
	marker2.addListener('click', function() {
		window.open(url2, '_blank');
	});	
  
  
}

  
function initMap(destino) {
    var livinnsantiago = {lat: -33.448114, lng: -70.654901};
    if(destino=='1'){
		destination = {lat: -33.4411287, lng: -70.640793};
    }else{
		destination = {lat: -33.4445206, lng: -70.6509277};
    }
	console.log(destino);
	console.log(destination);
	var styles = [
		{
		  stylers: [
		    { hue: "#5abfc1" },
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
		
	var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

    var map = new google.maps.Map(document.getElementById('map-canvas'), {
      center: livinnsantiago,
      zoom: 16,
	    scrollwheel: false,
	    mapTypeControlOptions: {
	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
	    }
    });

	var directionsDisplay = new google.maps.DirectionsRenderer({
		map: map
	});
	//Associate the styled map with the MapTypeId and set it to display.
	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');  

    // Set destination, origin and travel mode.
    var request = {
		destination: destination,
		origin: livinnsantiago,
		travelMode: 'WALKING'
    };

	var marker = new google.maps.Marker({
	    position: livinnsantiago,
	    map: map,
	    title: 'Livinn Santiago',
	    icon: "assets/img/pointer-livinn.png?v=3"
	});
		  
	var marker = new google.maps.Marker({
	    position: destination,
	    map: map,
	    title: 'Universidad de Chile',
	    icon: "assets/img/marker.png?v=2"
	});

    // Pass the directions request to the directions service.
    var directionsService = new google.maps.DirectionsService();
    directionsService.route(request, function(response, status) {
      if (status == 'OK') {
        // Display the route on the map.

		directionsDisplay.setOptions({
			suppressMarkers : true
	  	});

        directionsDisplay.setDirections(response);
        
      }
    });
        
}




$('#tipoluga2').change(function() {
	destino = $(this).val();
	console.log(destino);
	if(destino!='0'){
		initMap(destino);
	}else{
		initialize();
	}
});

