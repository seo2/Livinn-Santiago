<?
/*

Template name: Padres y residentes

*/
?>
<?php include('header.php'); ?>
<?php 
    $args = array(
        'post_type' 		=> 'padres_y_residentes',
        'posts_per_page' 	=> 1
    );
    $the_query = new WP_Query( $args ); 

    if($the_query -> have_posts()) :                 
    while ($the_query -> have_posts()) : $the_query -> the_post(); 			
?>	
  	<section id="slider_padres">	
		<div id="beneficiosbox">
			<div class="container">
				<div class="row">
			  		<div class="col-md-4 beneficio">
			  			<div class="row">
				  			<div class="col-sm-10 col-sm-offset-1">
				  				<h2><?php echo get('comparativa_titulo_1'); ?></h2>
				  				<div class="row">
				  					<div class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2">
				  						<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-beneficio1.svg">
				  					</div>
				  				</div>
				  				<div class="row text-center">
				  					<div class="col-sm-12 txt-beneficio1">
				  						<h3><?php echo get('comparativa_precio_1'); ?></h3>
				  						<p><?php echo get('comparativa_bajada_1'); ?></p>
				  					</div>
				  				</div>
				  				<div class="row">
				  					<div class="col-sm-12 txt-beneficio2" id="col1">
				  						<h3>beneficios</h3>
				  						<?php echo get('comparativa_texto_1'); ?>
				  					</div>
				  				</div>
				  			</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4 beneficio">
			  			<div class="row">
				  			<div class="col-sm-10 col-sm-offset-1">
				  				<h2><?php echo get('comparativa_titulo_2'); ?></h2>
				  				<div class="row">
				  					<div class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2">
				  						<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-beneficio2.svg">
				  					</div>
				  				</div>
				  				<div class="row text-center">
				  					<div class="col-sm-12 txt-beneficio1">
				  						<h3><?php echo get('comparativa_precio_2'); ?></h3>
				  						<p><?php echo get('comparativa_bajada_2'); ?></p>
				  					</div>
				  				</div>
				  				<div class="row">
				  					<div class="col-sm-12 txt-beneficio2" id="col2">
				  						<h3>beneficios</h3>
				  						<?php echo get('comparativa_texto_2'); ?>
				  					</div>
				  				</div>
				  			</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4 beneficio">
			  			<div class="row">
				  			<div class="col-sm-10 col-sm-offset-1">
				  				<h2><?php echo get('comparativa_titulo_3'); ?></h2>
				  				<div class="row">
				  					<div class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2">
				  						<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-beneficio3.svg">
				  					</div>
				  				</div>
				  				<div class="row text-center">
				  					<div class="col-sm-12 txt-beneficio1">
				  						<h3><?php echo get('comparativa_precio_3'); ?></h3>
				  						<p><?php echo get('comparativa_bajada_3'); ?></p>
				  					</div>
				  				</div>
				  				<div class="row">
				  					<div class="col-sm-12 txt-beneficio2" id="col3">
				  						<h3>beneficios</h3>
				  						<?php echo get('comparativa_texto_3'); ?>
				  					</div>
				  				</div>
				  			</div>
			  			</div>
			  		</div>
				</div>
			</div>
		</div>  			
  	</section>
<?php endwhile;
      endif;
wp_reset_postdata(); ?> 
  	<section id="alianzas" class="text-center">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>ALIANZAS LIVINN FRIENDLY</h1>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="container" id="descuentos">
		  	<div class="row">
		  		<div class="col-sm-12">
		  			<ul class="controls nav navbar-nav"> 
					<?php
					    //listado de taxonomias
					    $taxonomy = 'tipo_de_alianza';
					    $tax_terms = get_terms($taxonomy);
					    foreach ($tax_terms as $tax_term) {
						    if($tax_term->slug=='destacada'){
					    		echo '<li data-filter=".'.$tax_term->slug.'">'.$tax_term->name.'</li>';
						    }
					    }
					    foreach ($tax_terms as $tax_term) {
						    if($tax_term->slug!='destacada'){
					    		echo '<li data-filter=".'.$tax_term->slug.'">'.$tax_term->name.'</li>';
						    }
					    }
					?>
						<li class="mixitup-sandbox_menu-item mixitup-sandbox_menu-item__filter mixitup-sandbox_menu-item__active" data-filter="all" data-ref="ripple" data-behavior="tooltipC26016" data-tooltip-content="Filter all" data-hide-on-click="true" data-is-fixed="true">Todos</li>
			        </ul>		  			
		  		</div>
		  	</div>
	  		<div class="row elmixitup">
            <?php 
                $args = array(
                    'post_type' 		=> 'alianza',
                    'posts_per_page' 	=> -1,
                    'orderby'   		=> array(
                    'date' 				=>'ASC',
                    
                     )
                );
                $the_query = new WP_Query( $args ); 

                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                $categoria = get_the_terms( $post->ID, 'tipo_de_alianza' );		  			
			?>	
	  			<div class="col-xs-6 col-sm-3 mix <? foreach ( $categoria as $category ) { echo $category->slug . ' '; }?>">	  			
		  			<div class="descuento">
			  			<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-tijera.jpg" class="tijera">
				        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
		  			</div>
	  			</div> 
            <?php endwhile;
                  endif;
            wp_reset_postdata(); ?> 
	  		</div>
	  	</div>
  	</section>
  	<section id="faq-head">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>PREGUNTAS FRECUENTES</h1>
	  			</div>
	  		</div>
	  	</div>
  	</section>
  	<section id="faq-body">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-sm-8 col-sm-offset-2">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php 
                $args = array(
                    'post_type' 		=> 'pregunta_frecuente',
                    'posts_per_page' 	=> -1
                );
                $the_query = new WP_Query( $args ); 
				$i = 0;
                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post();   			
                	$i++;
			?>	
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
					      <h4 class="panel-title">
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><?php the_title(); ?></a>
					      </h4>
					    </div>
					    <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($i==1){ ?>in<?php } ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
					      <div class="panel-body">
					        <?php the_content(); ?>
						  </div>
					    </div>
					  </div>
            <?php endwhile;
                  endif;
            wp_reset_postdata(); ?> 
					
					</div>		  			
	  			</div>
	  		</div>
	  	</div>
  	</section>
  	<section id="mapa-head">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>mapa universidades</h1>
	  			</div>
	  		</div>
	  	</div>
  	</section>
  	<section id="mapa-body">
	  	
	  	<div class="col-md-3 col-md-push-9" id="mapa-box">
		  	<div class="row">
		  		<div class="col-sm-10">
<h2>nuestra localización</h2>
		  			<p>Livinn Santiago, está ubicado en Lord Cochrane 166, cerca a universidades, museos y centros comerciales.</p>
		  			<!-- <a href="javascript:void(0);" class="btn btn-primary">Cómo llegar</a> -->
		  			<h2>Cómo llegar</h2>
		  			<p>a las Universidades en las cercanías</p>
					<div class="form-group">
						<select name="tipolugar2" id="tipoluga2"  class="form-control">
							<option value="0"  >Seleccione</option>
            <?php 
                $args = array(
                    'post_type' 		=> 'universidad',
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
			?>								
							<option value="<?php echo $post_slug; ?>"  ><?php the_title(); ?></option>
            <?php endwhile;
                  endif;
            wp_reset_postdata(); ?> 
						</select>
					</div>			  			
		  		</div>
		  	</div>  			
	  	</div>
	  	<div class="col-md-9 col-md-pull-3" style="height:500px;" id="map-canvas">
	  	</div>
  	</section>
  	<section id="testimonios">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>TESTIMONIOS</h1>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="container">
	  		<div class="row">
            <?php 
                $args = array(
                    'post_type' 		=> 'testimonio',
                    'posts_per_page' 	=> 3
                );
                $the_query = new WP_Query( $args ); 

                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 			
			?>			  		
		  		
	  			<div class="col-sm-4 testimonio">
		  			<div class="row">
		  				<div class="col-xs-6 col-xs-offset-3 col-sm-10 col-sm-offset-1">
			  				<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-sm-10 col-sm-offset-1">
			  				<h2><?php the_title(); ?>,<br><?php echo get('pais'); ?></h2>
			  				<?php the_content(); ?>
		  				</div>
		  			</div>
	  			</div>
            <?php endwhile;
                  endif;
            wp_reset_postdata(); ?> 
	  		</div>
	  	</div>
  	</section>
  	
  	
<?php include('footer.php'); ?>
<script>
	$("#col1").height($("#col3").height());
	$("#col2").height($("#col3").height());
</script>