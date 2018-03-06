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
					<img src="assets/img/slider-alojamientos/1.png" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos/2.png" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos/3.png" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos/4.png" class="img-responsive">
				</div>
				<div class="slide cienporcien">
					<img src="assets/img/slider-alojamientos/5.png" class="img-responsive">
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
  	
  	<section id="tour">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>TOUR VIRTUAL</h1>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-sm-12 text-center">
		  			<!-- Large modal -->
		  			<br><br>
		  			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
			  			VER <i class="fas fa-play-circle"></i>
			  		</button>

					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="tour-modal">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
						    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						    <div class="row">
						    	<div class="col-sm-12">
						  			<div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!4v1520276441382!6m8!1m7!1sCAoSLEFGMVFpcFBjUmxwZkhnT19WN3lsLVJxVVBCZjA0bnBvVDNJaGE4LXlfNVpH!2m2!1d-33.448058929013!2d-70.654812282821!3f246.89686646542128!4f-17.559340352549498!5f0.7820865974627469' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe></div>
						    	</div>
						    </div>
					    </div>
					  </div>
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
		  				<li id="paso1" class="linea activo"><span><i class="fas fa-search"></i></span><br>Encuentra tu<br>habitación</li>
		  				<li id="paso2" class="linea"><span><i class="fas fa-user-plus"></i></span><br>Detalles</li>
		  				<li id="paso3" class="linea"><span><i class="fas fa-file-alt"></i></span><br>Términos y<br>condiciones</li>
		  				<li id="paso4"><span><i class="fas fa-check"></i></span><br>Confirmación</li>
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
								    <input type="radio" name="personas" id="optionsRadios2" value="6">
								    6
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios1" value="4" >
								    4
								  </label>
								</div>
								<div class="radio ">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios3" value="3" >
								    3
								  </label>
								</div>
						    </div>
						    <div class="col-xs-6">
								<div class="radio">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios2" value="2">
								    2
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="radio" name="personas" id="optionsRadios1" value="1" >
								    1
								  </label>
								</div>
						    </div>
						</div>	  	
						<div class="form-group row">
							<div class="col-sm-12">
								<label for="exampleInputEmail1" class="tit-alojamiento">rango de tiempo de la estadía</label>
							</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio ">
								  <label>
								    <input type="radio" name="tiempo" id="optionsRadios3" value="4" >
								    1 Año
								  </label>
								</div>
						    </div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio ">
								  <label>
								    <input type="radio" name="tiempo" id="optionsRadios3" value="3" >
								    10-11 MESES
								  </label>
								</div>
					    	</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio">
								  <label>
								    <input type="radio" name="tiempo" id="optionsRadios2" value="2">
								    4-9 MESES
								  </label>
								</div>
					    	</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio">
								  <label>
								    <input type="radio" name="tiempo" id="optionsRadios1" value="1">
								    1-3 MESES
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
								    <input type="radio" name="bano" id="optionsRadios1" value="compartido">
								    COMPARTIDO
								  </label>
								</div>
					    	</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio">
								  <label>
								    <input type="radio" name="bano" id="optionsRadios2" value="privado">
								    PRIVADO
								  </label>
								</div>
						    </div>
						</div>	    					
	  				</form>
	  			</div>
	  			<div class="col-sm-5 col-sm-offset-1 animated fadeInLeft" id="habitaciones">
		  			<div class="row" data-personas="6" data-bano="compartido">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>2 habitaciones Camarotes</h3>
		  					<h4>Desde $230.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="2" data-bano="compartido">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>Studio Familiar</h3>
		  					<h4>Desde $281.750</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="4" data-bano="compartido">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>3 habitaciones. Master suite</h3>
		  					<h4>Desde $300.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="2" data-bano="compartido">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>1 habitación</h3>
		  					<h4>Desde $315.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="4" data-bano="compartido">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>3 Habitaciones, pieza individual</h3>
		  					<h4>Desde $330.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="1" data-bano="privado">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>2 Habitaciones. Pegadas</h3>
		  					<h4>Desde $400.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="3" data-bano="compartido">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>3 Habitaciones. Premium 10 y 11</h3>
		  					<h4>Desde $425.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="3" data-bano="privado">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>3 Habitaciones. Premium 10 y 11</h3>
		  					<h4>Desde $450.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="2" data-bano="privado">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>2 Habitaciones. Mariposa</h3>
		  					<h4>Desde $475.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
		  			<div class="row" data-personas="1" data-bano="privado">
		  				<div class="col-sm-6">
		  					<img src="assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3>Studio Privado, cama queen</h3>
		  					<h4>Desde $490.000</h4>
		  					<a href="javascript:void(0);" data-id="1">Ver detalles</a>
		  				</div>
		  			</div>
	  			</div>
	  			<div class="col-sm-5 col-sm-offset-1 hide animated fadeInRight" id="habitacion">
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
		  					<a href="javascript:void(0);" class="link volver"> o Elegir otra</a> 
		  				</div>
		  			</div>
	  			</div>
	  			<div class="col-sm-5 col-sm-offset-1 hide animated fadeInRight" id="terminos">
		  			<div class="row">
		  				<div class="col-sm-12">
		  					<h2>Términos y Condiciones</h2>
		  					<div id="terms">
		  						<p>El uso por parte de cualquier persona (en adelante el USUARIO) del sitio web cuya dirección electrónica es&nbsp;www.livinn.com.co&nbsp;, así como de los subsitios web que se deriven o estén sustentados en dicho sitio web (en adelante conjuntamente la PÁGINA WEB), o de los cuales también sea titular CA Ventures, constituye la aceptación y acuerdo pleno e incondicional por parte del USUARIO de los siguientes Términos y Condiciones de Uso de la PÁGINA WEB: El acceso y/o uso de la PÁGINA WEB atribuye a quien accede la condición de USUARIO, aceptando, desde ese mismo momento, plenamente y sin reserva alguna, los presentes Términos y Condiciones de Uso de la PÁGINA WEB así como las condiciones particulares que, en su caso, complementen, modifiquen o&nbsp; sustituyan Términos y Condiciones de Uso de la PÁGINA WEB, cuando así suceda, en relación con todos los servicios y contenidos de la PÁGINA WEB.<br><br><strong>Artículo 1: Uso de la PÁGINA WEB, sus servicios y contenidos</strong><br><br><strong>1.1.</strong> El ingreso a la PAGINA WEB constituye el consentimiento del USUARIO a utilizar la PÁGINA WEB y sus servicios y contenidos sin contravenir la legislación vigente, la buena fe, los usos generalmente aceptados y el orden público, la moral y las buenas costumbres. Asimismo, queda prohibido el uso de la PÁGINA WEB con fines ilícitos o lesivos contra la PÁGINA WEB o cualquier tercero, o que, de cualquier forma, puedan causar perjuicio o impedir el normal funcionamiento de la PÁGINA WEB.<br><br><strong>1.2.</strong> Respecto de los contenidos (informaciones, textos, gráficos, archivos de sonido y/o imagen, fotografías, diseños, y cualquier otra información disponible en la PÁGINA WEB), queda expresamente prohibido:<br><br><strong>1.2.1.</strong>&nbsp;Su reproducción, distribución o modificación, a menos que se cuente con la autorización de sus legítimos titulares o resulte legalmente permitido.<br><br><strong>1.2.2.</strong>&nbsp;Cualquier violación de los derechos de la PÁGINA WEB o de sus legítimos titulares sobre los mismos.1.2.3.&nbsp;Su utilización para cualquier fin comercial o publicitario, distinto de los estrictamente permitidos.<br><br><strong>1.2.4.</strong> Cualquier intento de obtener los contenidos de la PÁGINA WEB por cualquier medio distinto de los que se pongan a disposición de los usuarios así como de los que habitualmente se emplean en la red, siempre que no causen perjuicio alguno a la PÁGINA WEB pues de hacerlo, se considerará una conducta prohibida.<br><br><strong>Artículo 2: Responsabilidad del Usuario por daños y perjuicios</strong><br><br>El uso de la PÁGINA WEB se realizará bajo la única y exclusiva responsabilidad del USUARIO. Dicha responsabilidad se extenderá al uso, por parte del USUARIO o de cualquier tercero, de cualesquiera contraseña o similares asignadas para el acceso a la PÁGINA WEB o a cualesquiera de sus servicios. Sin perjuicio de lo anterior, se reserva el derecho a denegar en cualquier momento y sin necesidad de aviso previo, el acceso a la PÁGINA WEB a aquellos usuarios que incumplan estas condiciones generales, o las particulares que en cada caso les sean de aplicación.<br><br><strong>Artículo 3: Modificación unilateral</strong><br><br>CA Ventures podrá modificar unilateralmente y sin previo aviso, siempre que lo considere oportuno, la estructura y diseño de la PÁGINA WEB, así como modificar o eliminar los servicios, los contenidos y las condiciones de acceso y/o uso de la PÁGINA WEB.<br><br><strong>Artículo 4: Hipervínculos</strong><br><br>El establecimiento de cualquier "hipervínculo" entre una página de otro portal y cualquiera de las páginas de la PÁGINA WEB estará sometido a las siguientes condiciones:<br><br><strong>4.1</strong>.&nbsp;No se permite la reproducción total o parcial de ninguno de los servicios ni contenidos de la PÁGINA WEB.<br><br><strong>4.2</strong>.&nbsp;No se establecerán deep-links con las páginas de la PÁGINA WEB ni de sus servicios ni se creará un browser o un border enviroment sobre las mismas.<br><br><strong>4.3.</strong>&nbsp;No se incluirá ninguna manifestación falsa, inexacta o incorrecta sobre las páginas de la PÁGINA WEB y los servicios y, en particular, salvo aquellos signos que formen parte del mismo "hipervínculo", las páginas en las que se establezcan "hipervínculos" con&nbsp; la PÁGINA WEB no contendrán ninguna marca, nombre comercial, rótulo, denominación, logotipo, eslogan u otros signos distintivos pertenecientes a la PÁGINA WEB.<br><br><strong>4.4.</strong>&nbsp;Bajo ninguna circunstancia, la PÁGINA WEB será responsable de los contenidos o servicios puestos a disposición del público en las páginas desde las que se realicen los "hipervínculos " ni de las informaciones y manifestaciones incluidas en las mismas. CA Ventures no se hace responsable por los contenidos de otras páginas web a donde dirijan los “hipervínculos” activados en la PÁGINA WEB ni por los daños o perjuicios que los USUARIOS puedan sufrir durante su visita a ellas. Igualmente, se deja expresa&nbsp; constancia que el acceso y uso de las páginas web a las cuales dirigen los “hipervínculos” activados en la PÁGINA WEB se encuentran sometidos a términos y condiciones particulares para cada página y que pueden ser distintos a estos Términos y Condiciones de Uso.<br><br><strong>Artículo 5: Exclusión de Garantías y Responsabilidad</strong><br><br>La PÁGINA WEB no otorga ninguna garantía ni se hace responsable, en ningún caso, de los daños y perjuicios de cualquier naturaleza que pudieran traer causa de:<br><br><strong>5.1.</strong>&nbsp;La falta disponibilidad, mantenimiento y efectivo funcionamiento de la PÁGINA WEB y/o de sus servicios o contenidos.<br><br><strong>5.2.</strong>&nbsp;La falta de utilidad, adecuación o validez de la PÁGINA WEB y/o de sus servicios o contenidos para satisfacer necesidades, actividades, resultados concretos o expectativas de los usuarios.<br><br><strong>5.3.</strong>&nbsp;La existencia de virus, programas maliciosos o lesivos en los contenidos.<br><br><strong>5.4.</strong>&nbsp;La recepción, obtención, almacenamiento, difusión o transmisión, por parte de los USUARIOS, de los contenidos.<br><br><strong>5.5.</strong>&nbsp;El uso ilícito, negligente, fraudulento, contrario a los presentes Términos y Condiciones de Uso, a la buena fe, a los usos generalmente aceptados o al orden público, de la PÁGINA WEB, sus servicios o contenidos, por parte de los USUARIOS.<br><br><strong>5.6.</strong>&nbsp;La falta de licitud, calidad, fiabilidad, utilidad y disponibilidad de los servicios prestados por terceros y puestos a disposición de los usuarios en la PÁGINA WEB.<br><br><strong>5.7.</strong>&nbsp;El incumplimiento por parte de terceros de sus obligaciones o compromisos en relación con los servicios prestados a los USUARIOS a través de la PÁGINA WEB.<br><br><strong>Artículo 6: Duración</strong><br><br>La duración de la prestación del servicio de la PÁGINA WEB y de los servicios es de carácter indefinido. Sin perjuicio de lo anterior, CA Ventures&nbsp; se reserva el derecho de interrumpir, suspender o terminar la prestación del servicio de la PÁGINA WEB o de cualquiera de los servicios que lo integran, en los mismos términos que se recogen en la condición cuarta.<br><br><strong>Artículo 7: Propiedad Intelectual</strong><br><br>A los efectos de preservar los posibles derechos de propiedad intelectual, en el caso de que cualquier usuario o un tercero considere que se ha producido una violación de sus legítimos derechos por la introducción de un determinado contenido en la PÁGINA&nbsp; WEB, deberá notificar dicha circunstancia a la PÁGINA WEB indicando:<br><br><strong>7.1.</strong>&nbsp;Datos personales del interesado titular de los derechos presuntamente infringidos.<br><br>Si la reclamación la presenta un tercero distinto del interesado, deberá indicar la representación con la que actúa.<br><br><strong>7.2.</strong>&nbsp;Indicación de los contenidos protegidos por los derechos de propiedad intelectual y su ubicación en la PÁGINA WEB.<br><br><strong>7.3.</strong>&nbsp;Acreditación de los citados derechos de propiedad intelectual.<br><br><strong>7.4.</strong>&nbsp;Declaración expresa en la que el interesado se responsabiliza de la veracidad de las informaciones facilitadas en la notificación. Queda prohibida la reproducción o uso de marcas o contenidos incluidos en la PÁGINA WEB de propiedad de CA Ventures o de&nbsp; terceros sin la autorización de su titular.<br><br><strong>Artículo 8: Recolección y Uso de Datos Personales</strong><br><br>Los datos e información personal que CA Ventures pueda recolectar en la PÁGINA WEB durante el uso normal de la misma serán utilizados para el control del uso y posterior desarrollo de la misma, en cumplimiento de la ley. Cuando el USUARIO se contacte con la PÁGINA WEB, puede ser posible que datos tales como nombre, documento de identidad, ocupación, fecha de nacimiento y domicilio sean almacenados a los efectos de responder a los requerimientos del USUARIO. El USUARIO podrá requerir que dicha&nbsp; información le sea suministrada o removida de la base de datos a su requerimiento.<br><br><strong>Artículo 9: Concursos y Activaciones</strong><br><br>Todos los concursos y activaciones que se presenten en la PAGINA WEB se regirán bajo los términos y condiciones particulares, los cuales serán publicados dentro de la PAGINA WEB cada vez que se genere cualquiera de estas actividades en recuadros promocionales.</p>
		  					</div>
		  					<a href="javascript:void(0);" class="btn btn-primary">Acepto</a>  
		  				</div>
		  			</div>
	  			</div>
	  			<div class="col-sm-5 col-sm-offset-1 hide animated fadeInRight" id="confirma">
		  			<div class="row">
		  				<div class="col-sm-12">
		  					<h2>Ingresa tus datos de contacto</h2>
		  					<p>Uno de nuestros ejecutivos te contactará.</p>
		  				</div>
		  				<div class="col-sm-12">
		  					<form class="form-horizontal">
								<fieldset>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
								  <div class="col-md-8">
								  <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="apellido">Apellido</label>  
								  <div class="col-md-8">
								  <input id="apellido" name="apellido" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="mail">Email</label>  
								  <div class="col-md-8">
								  <input id="mail" name="mail" type="email" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<!-- Select Basic -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="pais">País de Nacimiento</label>
								  <div class="col-md-8">
								    <select id="pais" name="pais" class="form-control">
								      <option value="1">Chile</option>
								      <option value="2">USA</option>
								      <option value="3">Australia</option>
								    </select>
								  </div>
								</div>
								
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="ciudad">Ciudad</label>  
								  <div class="col-md-8">
								  <input id="ciudad" name="ciudad" type="text" placeholder="" class="form-control input-md" required="">
								    
								  </div>
								</div>
								
								<!-- Textarea -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="comentarios">Comentarios/Preguntas</label>
								  <div class="col-md-8">                     
								    <textarea class="form-control" id="comentarios" name="comentarios"></textarea>
								  </div>
								</div>
								
								<!-- Button -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="enviar"></label>
								  <div class="col-md-8">
								    <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
								  </div>
								</div>
								
								</fieldset>
							</form>

		  				</div>
		  			</div>
	  			</div>
	  		</div>
	  	</div>
  	</section>
  	
<?php include('footer.php'); ?>