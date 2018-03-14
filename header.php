<?php 
	include('BFI_Thumb.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Livinn Santiago</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/simplelightbox.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/livinn.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script defer src="<?php bloginfo('template_url'); ?>/assets/js/fontawesome-all.min.js"></script>

	<link href="<?php bloginfo('template_url'); ?>/assets/img/logofavicon.ico" rel="shortcut icon" type="image/x-icon"/>

  </head>
  <body>
	<a href="<?php bloginfo('url'); ?>/tipos-de-alojamiento#alojamientos" id="btn-reserva" class="ease">Reserva Ahora</a>
  	<header>
	  	<div class="container">
		  	<div class="row hidden-xs" id="submenu">
	  			<div class="col-xs-4">
		  			<a href="<?php bloginfo('url'); ?>" class="lang esp">ESP</a>
		  			<a href="<?php bloginfo('url'); ?>/en" class="lang eng">ENG</a>
	  			</div>
	  			<div class="col-xs-8 text-right">
		  			<ul>
			  			<li class="location"><span>Select a Location/<br>Elige una ubicación</span></li>
			  			<li class="bandera"><a href="javascript:void(0);"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-cl.png"><br><span>CL</span></a></li>
			  			<li class="bandera"><a href="javascript:void(0);"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-co.png"><br><span>CO</span></a></li>
<!-- 			  			<li class="bandera"><a href="javascript:void(0);"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-us.png"><br><span>US</span></a></li> -->
			  			<li class="bandera"><a href="javascript:void(0);"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-po.png"><br><span>PL</span></a></li>
		  			</ul>
	  			</div>
		  	</div>

		    <nav class="navbar">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-header.png" class="logo">  </a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav nav-pills navbar-nav navbar-right text-center">
		            <li <?php if(is_home()){ ?> class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>" class="lh40">Lord Cochrane</a></li>
		            <li <?php if(is_page('tipos-de-alojamiento')){ ?> class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>/tipos-de-alojamiento">Tipos de<br>Alojamientos</a></li>
		            <li <?php if(is_page('padres-y-futuros-residentes')){ ?> class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>/padres-y-futuros-residentes">Padres y futuros<br>residentes</a></li>
		            <li <?php if(is_page('comunidad')){ ?> class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>/comunidad" class="lh40">Comunidad</a></li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>
	  	</div>
  	</header>

		<div class='redes'>
			<ul>
				<li><a target="_blank" href="https://www.facebook.com/LivinnSantiagoChile/"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-fb.png" class="img-responsive"></a></li>
				<li><a target="_blank" href="https://twitter.com/livinnchile"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-tw.png" class="img-responsive"></a></li>
				<li><a target="_blank" href="https://www.instagram.com/livinnsantiago/"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-in.png" class="img-responsive"></a></li>
			</ul>
		</div> 	