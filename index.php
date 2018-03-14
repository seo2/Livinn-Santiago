<?php include('header.php'); ?>

<?php
		$the_query = new WP_Query( array(
		    'post_type' 		=> 'home'
		) );
		while ( $the_query->have_posts() ) :   
	  			 $the_query->the_post();
?>						

  	<section id="slider">
	  	
		<div id="info-slider">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/livinn-es-una-aventura.png">
			<h1 class="cyan">Ven y descubre</h1>
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
  	<section id="acerca" class="text-center">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-sm-10 col-sm-offset-1">
					<?php the_content(); ?>						
	  			</div>
	  		</div>
	  	</div>
  	</section>	

  	<section id="beneficios">
		<div class="owl-carousel owl-theme cienporcien" id="carousel2">
		   	<?php
			   	$i = 0;
				$sliders = get_order_group('slider_beneficios_imagen');
				foreach($sliders as $slider){   
					$i++;
			?>   			
			<div class="slide cienporcien">
				<div class="info text-center">
					<h2><?php echo get('slider_beneficios_titulo',$slider); ?></h2>
					<a href="<?php bloginfo('url'); ?>/tipos-de-alojamiento#galeria" class="ease vermas">
						VER MÁS
					</a>
				</div>
				<img src="<?php echo get('slider_beneficios_imagen',$slider); ?>" class="img-responsive">
			</div>
			<?php } ?>
		</div>

<?php

					endwhile;
?>			
		<div id="beneficios-box">
			<h3>Beneficios Incluidos</h3>
			<div id="beneficios-ico">
<?php
		$the_query = new WP_Query( array(
		    'post_type' 		=> 'beneficio',
            'posts_per_page' 	=> -1
		    
		) );
		while ( $the_query->have_posts() ) :   
	  			 $the_query->the_post();
?>				
				<a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="<?php echo get('tooltip'); ?>">
					<div class="icobox">
						<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
						<p><?php the_title(); ?></p>
					</div>
				</a>
<?php

					endwhile;
?>		
				
				<div class="clearfix"></div>
			</div>
			<h3>Servicios Disponibles</h3>
			<div id="servicios-ico">
<?php
		$the_query = new WP_Query( array(
		    'post_type' 		=> 'servicio',
            'posts_per_page' 	=> -1
		) );
		while ( $the_query->have_posts() ) :   
	  			 $the_query->the_post();
?>				
				<a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="<?php echo get('tooltip'); ?>">
					<div class="icobox">
						<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
						<p><?php the_title(); ?></p>
					</div>
				</a>
<?php

					endwhile;
?>		
				<div class="clearfix"></div>
			</div>
		</div>
  	</section>
  	<section id="comunidad">
  		<div class="container">
  			<div class="row text-center">
  				<div class="col-md-4 comunidadbox" >
  					
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/hash_livinn_santiago.png" class="img-responsive" id="hashlivinn">
							<h2>¡Usa el #livinnsantiago y repostearemos tus fotos en nuestra redes sociales!</h2>
						</div>
					</div>
					<a href="<?php bloginfo('url'); ?>/comunidad" class="ease vermas">
						VER MÁS
					</a>
  				</div>
  				<div class="col-md-8 comunidadbox">
					<div data-is data-is-api="<?php bloginfo('template_url'); ?>/assets/instashow2/api/" data-is-source='["@livinnsantiago"]' data-is-post-template='classic' data-is-responsive='[{"minWidth":375,"columns":2,"rows":2,"gutter":"0"},{"minWidth":768,"columns":"3","rows":2,"gutter":"0"}]' data-is-gutter='20' data-is-post-elements='[]' data-is-popup-elements='["user","location","followButton","instagramLink","likesCount","share","text","date"]' data-is-lang='es'></div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section id="lugares">
	  	<div id="overlay" class="cienporcien"></div>
  		<div class="container cienporcien">
  			<div class="row cienporcien">
  				<div class="col-sm-11 cienporcien">
  					<div class="row cienporcien">
  						<div class="col-sm-4 lugarbox">
  							<h1 class="hidden-xs">Lugares de interés<br>en Chile</h1>
  							<h1 class="visible-xs">Lugares de interés en Chile</h1>
  							<p>Selecciona tu lugar para visitar</p>
  							<div class="form-group">
	  							<select name="tipolugar" id="tipolugar"  class="form-control">
									<?php	
									foreach( get_terms( 'tipo_de_lugar', array('orderby' => 'id', 'order' => 'ASC', 'hide_empty' => false, 'parent' => 0 ) ) as $parent_term ) {
										//print_r($parent_term);
									// display top level term name
									echo '<option value="'.$parent_term->slug.'">'.$parent_term->name . '</option>';
									
									
									}
									?>
	  							</select>
							</div>
  							<div class="form-group visible-xs">
							<?php	
								$i = 0;
							foreach( get_terms( 'tipo_de_lugar', array('orderby' => 'id', 'order' => 'ASC', 'hide_empty' => false, 'parent' => 0 ) ) as $parent_term ) {	
								$slug = $parent_term->slug;
								$i++;
								if($i>1){
									$clase = 'hide';
								}
							?>	  							
	  							<select name="lugar" id="lugar"  class="form-control lista-<?php echo $slug; ?> <?php echo $clase; ?> lugares">
		  							
		  							<option value="">Seleccione</option>
						<?php
								$the_query = new WP_Query( array(
								    'post_type' => 'lugar',
								    'tax_query' => array(
								       array (
								            'taxonomy' 	=> 'tipo_de_lugar',
								            'field'    	=> 'slug',
								            'terms' 	=> $slug,
								        )
								    ),
								) );
								while ( $the_query->have_posts() ) :   
							  			 $the_query->the_post();
							  			 global $post;
							  			 $post_slug=$post->post_name;
						?>	
		  							<option value="<?php echo $post_slug; ?>"><?php the_title(); ?></option>
						<?php
						
								endwhile;
						?>			  		
	  							</select>
  						<?php } ?>
							</div>
							<?php	
								$i = 0;	
							foreach( get_terms( 'tipo_de_lugar', array('orderby' => 'id', 'order' => 'ASC', 'hide_empty' => false, 'parent' => 0 ) ) as $parent_term ) {	
								$slug = $parent_term->slug;
								$i++;
								if($i>1){
									$clase = 'hide';
								}else{
									$clase = '';
								}
							?>
  							<ol id="lugares1" class="hidden-xs lista-<?php echo $slug; ?> <?php echo $clase; ?> lugares">
						<?php
							
								$the_query = new WP_Query( array(
								    'post_type' 		=> 'lugar',
								    'tax_query' => array(
								       array (
								            'taxonomy' 	=> 'tipo_de_lugar',
								            'field'    	=> 'slug',
								            'terms' 	=> $slug,
								        )
								    ),
								    
								) );
								while ( $the_query->have_posts() ) :   
							  			 $the_query->the_post();
							  			 global $post;
							  			 $post_slug=$post->post_name;
						?>	
	  							<li><a href="javascript:void(0);" id="<?php echo $post_slug; ?>"><?php the_title(); ?></a></li>
						<?php
								endwhile;
						?>		
  							</ol>
  						<?php } ?>
  						</div>
  						
  						<div class="col-sm-7 col-sm-offset-1 text-right cienporcien" id="lugarboxinfo">
						<?php
								$the_query = new WP_Query( array(
								    'post_type' 		=> 'lugar',
									'posts_per_page' 	=> -1
								) );
								while ( $the_query->have_posts() ) :   
									$the_query->the_post();
									global $post;
									$post_slug=$post->post_name;
						?>		  						
							<div id="txt-<?php echo $post_slug; ?>" class="lugarboxinfo hide" data-bg="<?php echo the_post_thumbnail_url(); ?>">
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>
						<?php
								endwhile;
						?>		
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	
<?php include('footer.php'); ?>