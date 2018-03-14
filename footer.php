  	<footer>
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-sm-12 text-center">
	  				<p>Lord Cochrane 166, Santiago<br>
					<a href="mailto:info@livinnsantiago.com">info@livinnsantiago.com</a><br>
					<a href="tel:+56942996906">+56 9 42996906</a> - <a href="tel:+56931959233">+56 9 3195 9233</a> - <a href="tel:+56944495610">+56 9 4449 5610</a><br>
					Horarios de ventas: Lunes a Viernes: 8:30 a 19:00 Sabado: 12:00 A 18:00</p>
	  				<p class="legales">© Copyright <a href="javascript:void(0);">Livinn Santiago</a> | <a href="javascript:void(0);">Términos y condiciones</a> </p>
	  			</div>
	  		</div>
	  	</div>
  	</footer>
<!--Start of Tawk.to Script-->

<script type="text/javascript">

	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	
	(function(){
	
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	
	s1.async=true;
	
	s1.src='https://embed.tawk.to/57ab46e0190355c10d503632/default';
	
	s1.charset='UTF-8';
	
	s1.setAttribute('crossorigin','*');
	
	s0.parentNode.insertBefore(s1,s0);
	
	})();

</script>

<!--End of Tawk.to Script-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/instashow2/elfsight-instagram-feed.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/simple-lightbox.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/mixitup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR6hB5MYlR_drVTQ9_4BdAjkEEU7OF6fI"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/livinn.js?v=1.2"></script>
	<?php if(is_page('padres-y-futuros-residentes')){ ?>
	<script>
		
	var myMixitUp = document.querySelector('.elmixitup');
	
	var mixer = mixitup(myMixitUp,{
		load: {
	        filter: '.destacadas'
	    }
	});
		google.maps.event.addDomListener(window, 'load', initialize);
		
		
		function newLocation(newLat,newLng)
		{
			 map.setCenter({
				lat : newLat,
				lng : newLng
			});
		}

		
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
		    icon: "<?php bloginfo('template_url'); ?>/assets/img/pointer-livinn.png?v=3"
		  });
		  
		  
		  	marker.setMap(map);
			url = "https://www.google.cl/maps/place/Livinn+Santiago+-+Departamentos+para+Estudiantes/@-33.4481095,-70.6559953,18z/data=!4m12!1m6!3m5!1s0x9662c508490f4067:0xa22b2567d585c8b7!2sLivinn+Santiago+-+Departamentos+para+Estudiantes!8m2!3d-33.448114!4d-70.654901!3m4!1s0x9662c508490f4067:0xa22b2567d585c8b7!8m2!3d-33.448114!4d-70.654901";
			marker.addListener('click', function() {
				window.open(url, '_blank');
			});	
		  
		  
		}
		
		  
		function initMap(destino) {
		    var livinnsantiago = {lat: -33.448114, lng: -70.654901};

            <?php 
                $args = array(
                    'post_type' 		=> 'universidad',
                    'posts_per_page' 	=> -1,
                    'orderby'   		=> array(
                    'date' 				=>'ASC',
                    
                     )
                );
                $the_query = new WP_Query( $args ); 
				$e = 0;
                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
					global $post;
					$post_slug=$post->post_name;	
					$e++;  		
					if($e==1){	
			?>				
					if(destino=='<?php echo $post_slug; ?>'){
						destination = {lat: <?php echo get('coordenadas_latitud'); ?>, lng: <?php echo get('coordenadas_longitud'); ?>};
			<?php   }else{ ?>		
					}else if(destino=='<?php echo $post_slug; ?>'){	
						destination = {lat: <?php echo get('coordenadas_latitud'); ?>, lng: <?php echo get('coordenadas_longitud'); ?>};
            <?php 	
	            	}
	            	endwhile;
                  endif;
            wp_reset_postdata(); ?> 		    
		    	}
		    
/*
		    if(destino=='1'){
				destination = {lat: -33.4411287, lng: -70.640793};
		    }else{
				destination = {lat: -33.4445206, lng: -70.6509277};
		    }
*/
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
			    icon: "<?php bloginfo('template_url'); ?>/assets/img/pointer-livinn.png?v=3"
			});
				  
			var marker = new google.maps.Marker({
			    position: destination,
			    map: map,
			    title: 'Universidad de Chile',
			    icon: "<?php bloginfo('template_url'); ?>/assets/img/marker.png?v=2"
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
	</script>		
	<?php } ?>

  </body>
</html>