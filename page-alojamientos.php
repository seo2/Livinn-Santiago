<?
/*

Template name: Alojamientos

*/
?>
<?php include('header.php'); ?>
<?php
		$the_query = new WP_Query( array(
		    'post_type' 		=> 'tipo_de_alojamiento'
		) );
		while ( $the_query->have_posts() ) :   
	  			 $the_query->the_post();
?>	
  	<section id="slider">	  	
		<div id="info-slider-tipos">
			<h1>TIPOS DE ALOJAMIENTO</h1>
		</div>
			<div class="owl-carousel owl-theme cienporcien" id="carousel1">
		   	<?php
			   	$i = 0;
				$sliders = get_order_field('slider_foto');
				foreach($sliders as $slider){   
					$i++;
			?>   				
				<div class="slide cienporcien">
					<img src="<?php echo get('slider_foto',1,$slider); ?>" class="img-responsive">
				</div>
			<?php } ?>
			</div>
  	</section>
  	<section id="galeria">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>NUESTRO EDIFICIO</h1>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-sm-8 col-sm-offset-2">
	  				<div class="slick slider-parent" data-slick='{"arrows": false }'>
		   	<?php
				$galeria = get_order_field('galeria_de_fotos_foto');
				foreach($galeria as $galeria){   
				    $params1 = array( 'width' => 750, 'height' => 500, 'crop' => true );	
				  	$foto1	 = get('galeria_de_fotos_foto',1,$galeria);
				  	$fotito1 = bfi_thumb( $foto1, $params1 );					
			?>   	
						<img src="<?php echo $fotito1; ?>"/>
			<?php } ?>				    
				
					</div>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-sm-10 col-sm-offset-1">
					<div class="slick green" data-slick='{"slidesPerRow": 17, "rows":2, "arrows": false }'>
			<?php
				$e = 0;
				$galeria = get_order_field('galeria_de_fotos_foto');
				foreach($galeria as $galeria){   
				    $params1 = array( 'width' => 60, 'height' => 60, 'crop' => true );	
				  	$foto1	 = get('galeria_de_fotos_foto',1,$galeria);
				  	$fotito1 = bfi_thumb( $foto1, $params1 );		
							$e++;
			?>   	
					    <img src="<?php echo $fotito1; ?>" data-thumb="<?php echo $e; ?>" />
			<?php } ?>	
					
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
<?php
	endwhile;
?>			  	
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
		  				<li id="paso4" class=""><span><i class="fas fa-file-alt"></i></span><br> Cotizar</li>
<!-- 		  				<li id="paso4"><span><i class="fas fa-check"></i></span><br>Confirmación</li> -->
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
	  			<div class="col-sm-4 col-sm-offset-1" id="filtros">
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
								    <input type="radio" name="bano" id="optionsRadios1" value="Compartido">
								    COMPARTIDO
								  </label>
								</div>
					    	</div>
					    	<div class="col-xs-6 col-sm-12">
								<div class="radio">
								  <label>
								    <input type="radio" name="bano" id="optionsRadios2" value="Privado">
								    PRIVADO
								  </label>
								</div>
						    </div>
						</div>	    					
	  				</form>
	  			</div>
	  			<div class="col-sm-5 col-sm-offset-1 animated fadeInLeft" id="habitaciones">
            <?php 
                $args = array(
                    'post_type' 		=> 'alojamiento',
                    'posts_per_page' 	=> -1,
                    'orderby'   		=> array(
                    'date' 				=>'ASC',
                    
                     )
                );
                $the_query = new WP_Query( $args ); 

                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
					global $post;
					$post_slug=$post->post_name;	
				    $params1 = array( 'width' => 418, 'height' => 278, 'crop' => true );	
				  	$foto1	 = get_the_post_thumbnail_url();
				  	$fotito1 = bfi_thumb( $foto1, $params1 );	  			
			?>	
		  			<div class="row" data-personas="<?php echo get('detalles_personas'); ?>" data-bano="<?php echo get('detalles_tipo_de_bano'); ?>">
		  				<div class="col-sm-6">
		  					<img src="<?php echo $fotito1; ?>" class="img-responsive">
		  				</div>
		  				<div class="col-sm-6">
		  					<h3><?php the_title(); ?></h3>
		  					<h4>
			  					Desde 
			  					<span class="tiempo 12meses"><?php echo get('detalles_precio_12_meses'); ?></span>
			  					<span class="tiempo 10meses hide"><?php echo get('detalles_precio_10_11_meses'); ?></span>
			  					<span class="tiempo 4meses hide"><?php echo get('detalles_precio_4_9_meses'); ?></span>
			  					<span class="tiempo 1meses hide"><?php echo get('detalles_precio_1_3_meses'); ?></span>
		  					</h4>
		  					<a href="javascript:void(0);" data-id="1" data-titulo="<?php the_title(); ?>" data-detalles="<?php the_content(); ?>" data-foto="<?php echo $fotito1; ?>">Ver detalles</a>
		  				</div>
		  			</div>
            <?php endwhile;
                  endif;
            wp_reset_postdata(); ?> 

	  			</div>
	  			<div class="col-sm-5 col-sm-offset-1 hide animated fadeInRight" id="habitacion">
		  			<div class="row">
		  				<div class="col-sm-12">
		  					<img src="<?php bloginfo('template_url'); ?>/assets/img/preview-hab.jpg" class="img-responsive">
		  				</div>
<!--
		  				<div class="col-sm-12">
		  					<a href="javascript:void(0);" class="ver-planos">Ver planos</a>
		  				</div>
-->
		  				<div class="col-sm-12">
		  					<h2>Características</h2>
		  					<ul>
			  					<li class="titulo"></li>
		  					</ul>
		  					<div class="detalles">
		  						
		  					</div>
		  					<a href="javascript:void(0);" class="btn btn-primary" data-hab="" data-tiempo="" id="btn-selecciona">SELECCIONAR<br>HABITACIÓN</a>  
		  					<a href="javascript:void(0);" class="link volver"> o Elegir otra</a> 
		  				</div>
		  			</div>
	  			</div>
	  			<div class="col-sm-5 col-sm-offset-1 hide animated fadeInRight" id="terminos">
		  			<div class="row">
		  				<div class="col-sm-12">
			            <?php 
			                $args = array(
			                    'page_id' 		=> 139
			                );
			                $the_query = new WP_Query( $args ); 
			
			                if($the_query -> have_posts()) :                 
			                while ($the_query -> have_posts()) : $the_query -> the_post(); 			
						?>		
		  					<h2><?php the_title(); ?></h2>
		  					<div id="terms">
		  						<?php the_content(); ?>
		  					</div>
			            <?php endwhile;
			                  endif;
			            wp_reset_postdata(); ?>
		  					<a href="javascript:void(0);" class="btn btn-primary">Acepto</a>  
		  				</div>
		  			</div>
	  			</div>
	  			<div class="col-sm-6 col-sm-offset-3 hide animated fadeInRight" id="confirma">
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
								  <input id="habfield" name="habitacion" type="hidden" >
								  <input id="timefield" name="tiempo" type="hidden" >								    
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