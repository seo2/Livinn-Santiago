<?php include('header.php'); ?>
  	<section id="slider">
	  	
		<div id="info-slider-tipos">
			<h1>TIPOS DE ALOJAMIENTO</h1>
		</div>

		<div class='redes'>
			<ul>
				<li><a target="_blank" href="https://www.facebook.com/LivinnSantiagoChile/"><img src="assets/img/ico-fb.png" class="img-responsive"></a></li>
				<li><a target="_blank" href="https://twitter.com/livinnchile"><img src="assets/img/ico-tw.png" class="img-responsive"></a></li>
				<li><a target="_blank" href="https://www.instagram.com/livinnsantiago/"><img src="assets/img/ico-in.png" class="img-responsive"></a></li>
			</ul>
		</div> 	  			
			
			<div class="owl-carousel owl-theme cienporcien" id="carousel1">
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos-00.jpg" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos-01.jpg" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos-02.jpg" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos-03.jpg" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos-04.jpg" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos-05.jpg" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos-06.jpg" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos-07.jpg" class="img-responsive">
				</div>
			</div>
  	</section>
  	<section id="tour">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>NAVEGAR VISTA 360º</h1>
	  			</div>
	  		</div>
	  	</div>
  	</section>
  	<section id="galeria">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>NUESTROS ESPACIOS COMUNES</h1>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-sm-8 col-sm-offset-2">
	  				<div class="slick slider-parent" data-slick='{"arrows": false }'>
				<?php
				if ($handle = opendir('assets/img/galeria')) {

				    while (false !== ($entry = readdir($handle))) {

				        if ($entry != "." && $entry != ".." && $entry != ".DS_Store" && $entry != "th") {
							$thumb[] = $entry;
				        ?>
						<img src="assets/img/galeria/<?php echo $entry;?>" class="voluntarios-img"/>
				        <?php
				        }
				    }

				    closedir($handle);
				}
				?>						    
				
					</div>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-sm-10 col-sm-offset-1">
					<div class="slick green" data-slick='{"slidesPerRow": 17, "rows":2, "arrows": false }'>
				<?php
				    foreach ($thumb as $entry) {

							$e++;
				        ?>
					    <img src="assets/img/galeria/th/<?php echo $entry;?>" data-thumb="<?php echo $e; ?>" />
				        <?php
				    }

				?>							
					</div>

	  			</div>
	  		</div>
	  	</div>
  	</section>
  	<section id="alojamientos" class="text-center">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>ELIGE TU TIPO DE ALOJAMIENTO</h1>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-sm-10 col-sm-offset-1">
	  				<ul id="tipos-pasos">
		  				<li class="linea activo"><span><i class="fas fa-search"></i></span><br>Encuentra tu<br>habitación</li>
		  				<li class="linea"><span><i class="fas fa-user-plus"></i></span><br>Detalles</li>
		  				<li class="linea"><span><i class="far fa-file-alt"></i></span><br>Términos y<br>condiciones</li>
		  				<li><span><i class="fas fa-check"></i></span><br>Confirmación</li>
	  				</ul>
	  			</div>
	  		</div>
	  		<div class="row text-center">
	  			<div class="col-sm-10 col-sm-offset-1">
	  				<p class="disclaimer">
		  				*precios varían según duración de la estadía<br>
		  				*contacta a nuestro equipo de ventas para ver promociones</p>
	  			</div>
	  		</div>
	  		<div class="row text-left">
	  			<div class="col-sm-4 col-sm-offset-1">
	  				<form action="page-alojamientos.php" method="post" accept-charset="utf-8">
						<div class="form-group row">
							<div class="col-sm-12">
								<label for="exampleInputEmail1" class="tit-alojamiento">N° DE PERSONAS POR DEPARTAMENTO</label>
							</div>
					    	<div class="col-xs-6">
								<div class="radio">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios1" value="option1" checked>
								    1
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios2" value="option2">
								    2
								  </label>
								</div>
								<div class="radio ">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios3" value="option3" >
								    3
								  </label>
								</div>
						    </div>
						    <div class="col-xs-6">
								<div class="radio">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios1" value="option1" >
								    4
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios2" value="option2">
								    6
								  </label>
								</div>
						    </div>
						</div>	  	
						<div class="form-group row">
							<div class="col-sm-12">
								<label for="exampleInputEmail1" class="tit-alojamiento">rango de tiempo de la estadía</label>
							</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio">
								  <label>
								    <input type="radio" name="tiempo" id="optionsRadios1" value="option1" checked>
								    1-3 MESES
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="radio" name="tiempo" id="optionsRadios2" value="option2">
								    4-9 MESES
								  </label>
								</div>
					    	</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio ">
								  <label>
								    <input type="radio" name="tiempo" id="optionsRadios3" value="option3" >
								    10-11 MESES
								  </label>
								</div>
								<div class="radio ">
								  <label>
								    <input type="radio" name="tiempo" id="optionsRadios3" value="option3" >
								    1 Año
								  </label>
								</div>
						    </div>
						</div>		
						<div class="form-group row">
							<div class="col-sm-12">
								<label for="exampleInputEmail1" class="tit-alojamiento">TIPO DE BAÑO</label>
							</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio">
								  <label>
								    <input type="radio" name="bano" id="optionsRadios1" value="option1" checked>
								    COMPARTIDO
								  </label>
								</div>
					    	</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio">
								  <label>
								    <input type="radio" name="bano" id="optionsRadios2" value="option2">
								    PRIVADO
								  </label>
								</div>
						    </div>
						</div>	    					
	  				</form>
	  			</div>
	  			<div class="col-sm-5 col-sm-offset-1" id="habitacion">
		  			<div class="row">
		  				<div class="col-sm-12">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-12">
		  					<a href="javascript:void(0);" class="ver-planos">Ver planos</a>
		  				</div>
		  				<div class="col-sm-12">
		  					<h2>Características</h2>
		  					<ul>
			  					<li>2 Habitaciones Mariposa</li>
			  					<li>Baño Privado</li>
			  					<li>Precio:</li>
			  					<li>$475.000 CLP</li>
		  					</ul>
		  					<a href="javascript:void(0);" class="btn btn-primary">SELECCIONAR<br>HABITACIÓN</a>
		  				</div>
		  			</div>
	  			</div>
	  		</div>
	  	</div>
  	</section>

  	
<?php include('footer.php'); ?>