<?
/*

Template name: Comunidad

*/
?>
<?php include('header.php'); ?>
  	<section id="slider-blog">
	  	
		<div id="info-slider-tipos">
			<h1>BLOG</h1>
		</div>  			
			
			<div class="owl-carousel owl-theme cienporcien" id="carousel1">
				<div class="slide cienporcien">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-blog1.jpg" class="img-responsive">
				</div>
			</div>
  	</section>
  	<section id="blog" class="text-center">
	  	<div class="container">
	  		<div class="row">
            <?php 
	            if($_GET['pagina']){
					$offset = 6 * ($_GET['pagina'] - 1);
				}else{
	            	$offset = 0;
				}
                $args = array(
                    'post_type' 		=> 'post',
                    'posts_per_page' 	=> 6,
                    'offset'			=> $offset
                );
                $the_query = new WP_Query( $args ); 

                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 			
			?>		  			
	  			<div class="col-sm-4 blog-post">
		          	<?php the_post_thumbnail('blog', array('class' => 'img-responsive')); ?>
	  				<h2><a href="javascript:void(0);"><?php the_title(); ?></a></h2>
	  				<?php the_excerpt(); ?>
	  			</div>
            <?php endwhile;
                  endif;
            wp_reset_postdata(); ?> 
	  		</div>
	  	</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<a href="page-comunidad.php" class="ease vermas black" id="vermasblog">
						CARGAR MÁS
					</a>
				</div>
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
  				</div>
  				<div class="col-md-8 comunidadbox">
					<div data-is data-is-api="<?php bloginfo('template_url'); ?>/assets/instashow2/api/" data-is-source='["@livinnsantiago"]' data-is-post-template='classic' data-is-responsive='[{"minWidth":375,"columns":2,"rows":2,"gutter":"0"},{"minWidth":768,"columns":"3","rows":2,"gutter":"0"}]' data-is-gutter='20' data-is-post-elements='[]' data-is-popup-elements='["user","location","followButton","instagramLink","likesCount","share","text","date"]' data-is-lang='es'></div>
  				</div>
  			</div>
  		</div>
  	</section>  
  	<section id="eventos-head">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-lg-12 text-center">
	  				<h1>Eventos</h1>
	  			</div>
	  		</div>
	  	</div>
  	</section>	
  	<section id="eventos-body">
	  	<div class="grid text-center">
            <?php 
	            if($_GET['pagina']){
					$offset = 6 * ($_GET['pagina'] - 1);
				}else{
	            	$offset = 0;
				}
                $args = array(
                    'post_type' 		=> 'evento',
                    'posts_per_page' 	=> 6,
					'offset'			=> $offset
                );
                $the_query = new WP_Query( $args ); 

                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 		
			    $params1 = array( 'width' => 375, 'height' => 286, 'crop' => true );	
			  	$foto1	 = get_the_post_thumbnail_url();
			  	$fotito1 = bfi_thumb( $foto1, $params1 );
				$post_slug=$post->post_name;	
				
				$i = 0;
				$imagenes = muestra_galeria();
				foreach ($imagenes as $imagen):
					$i++;
				if($i==1){
			?>			  	
		  	<a href="<?php echo wp_get_attachment_url($imagen->ID); ?>" class="evento <?php echo $post_slug; ?>" style="background-image: url(<?php echo $fotito1; ?>);">
			  	<h2><?php the_title(); ?></h2>
			  	<span><i class="fal fa-plus-circle"></i></span>
		  	</a>
            <?php
	            }else{
		    ?>
			<a href="<?php echo wp_get_attachment_url($imagen->ID); ?>" class="hide <?php echo $post_slug; ?>"></a>		    
		    <?php        
	            }	            
	            		endforeach;
	            	endwhile;
                  endif;
            wp_reset_postdata();
             ?> 

		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<a href="javascript:void(0);" class="ease vermas black" id="vermaseventos">
						CARGAR MÁS <span id="loadereventos" style="display:none"><i class="fas fa-circle-notch fa-spin"></i></span>
					</a>
				</div>
			</div>
		</div>
  	</section>	
  	

  	
<?php include('footer.php'); ?>


<div id="pagesblog" style="display:none;">
<?php 
	$postperpage 	= 6;
	$rowcount 		= 0;

	$args = array(
        'post_type' 		=> 'evento',
        'posts_per_page' 	=> -1
    );
    $the_query = new WP_Query( $args ); 

	$rowcount = $the_query->post_count;

	echo "Total Items: ".$rowcount;
	
	$paginas = ceil($rowcount/$postperpage); 
	
	echo " - Páginas: ".$paginas;
	
	$x = 1;
	while($x <= $paginas) {
	?>
		<a href="<?php bloginfo('url'); ?>/comunidad?pagina=<?php echo  $x.$cola; ?>"></a>
	<?php 
		$x++; 
	}
	?>
	
</div>

<script>
<?php if($paginas<=1){ ?>
	$('#vermasblog').hide();
<?php } ?>	
	
var pages 	= new Array();
var current = 0; 
var loaded 	= new Array();
	
$('#pagesblog a').each(function(index) {
    pages[index] = $(this).attr('href');
    loaded[$(this).attr('href')] = 0;
});

$('#vermasblog').on('click', function(){
  	loaded[pages[current+1]] = loaded[pages[current+1]] + 1; 
    if(loaded[pages[current+1]] <= 1){
         loadMoreContent(current+1);     
	}
}) 

function loadMoreContent(position) {
    if(position < pages.length) {
		$('#loaderblog').fadeIn('slow', function() {
			$.post(pages[position], function(data) {
				pines = $(data).find(".blog-post");
				console.log(pines);
				$('#loaderblog').fadeOut('slow', function() {
					$('#blog .row').append( $(pines).hide().fadeIn(2000));
			        current=position;
			        if(position +1 < pages.length) {
					
					}else{
					 	$('#vermasblog').hide();
					}
			    });
	    	});
		});
    }
}
</script>


<script>
<?php 
    $args = array(
        'post_type' 		=> 'evento',
        'posts_per_page' 	=> 6,
        'offset'			=> $offset
    );
    $the_query = new WP_Query( $args ); 

    if($the_query -> have_posts()) :                 
    while ($the_query -> have_posts()) : $the_query -> the_post();
		$post_slug=$post->post_name;	
?>	
		var lightbox = $('.<?php echo $post_slug; ?>').simpleLightbox();	
<?php endwhile;
      endif;
wp_reset_postdata(); ?> 
</script>

<div id="pageseventos" style="display:none;">
<?php 
	$postperpage = 6;
	$rowcount 	 = 0;

	$args = array(
        'post_type' 		=> 'evento',
        'posts_per_page' 	=> -1
    );
    $the_query = new WP_Query( $args ); 

	$rowcount = $the_query->post_count;

	echo "Total Items: ".$rowcount;
	
	$paginas = ceil($rowcount/$postperpage); 
	
	echo " - Páginas: ".$paginas;
	
	$x = 1;
	while($x <= $paginas) {
	?>
	
		<a href="<?php bloginfo('url'); ?>/comunidad?pagina=<?php echo  $x.$cola; ?>"></a>
	<?php 
		$x++; 
	}
	?>
	
</div>

<script>
<?php if($paginas<=1){ ?>
	$('#vermaseventos').hide();
<?php } ?>	
	
var pages 	= new Array();
var current = 0; 
var loaded 	= new Array();
	
$('#pageseventos a').each(function(index) {
    pages[index] = $(this).attr('href');
    loaded[$(this).attr('href')] = 0;
});

$('#vermaseventos').on('click', function(){
  	loaded[pages[current+1]] = loaded[pages[current+1]] + 1; 
    if(loaded[pages[current+1]] <= 1){
         loadMoreContent(current+1);     
	}
}) 

function loadMoreContent(position) {
    if(position < pages.length) {
		$('#loadereventos').fadeIn('slow', function() {
			$.post(pages[position], function(data) {
				pines = $(data).find(".evento");
				console.log(pines);
				$('#loadereventos').fadeOut('slow', function() {
					$('#eventos-body .grid').append( $(pines).hide().fadeIn(2000));
			        current=position;
					<?php 
					    $args = array(
					        'post_type' 		=> 'evento',
					        'posts_per_page' 	=> -1,
					        'offset'			=> 6
					    );
					    $the_query = new WP_Query( $args ); 
					
					    if($the_query -> have_posts()) :                 
					    while ($the_query -> have_posts()) : $the_query -> the_post();
							$post_slug=$post->post_name;	
					?>	
							var lightbox = $('.<?php echo $post_slug; ?>').simpleLightbox();	
					<?php endwhile;
					      endif;
					wp_reset_postdata(); ?> 
			        if(position +1 < pages.length) {
					
					}else{
					 	$('#vermaseventos').hide();
					}
			    });
	    	});
		});
    }
}
</script>