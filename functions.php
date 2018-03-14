<?php // custom functions.php template @ digwp.com

function iniciarTema(){
    // ACTIVA IMAGENES DESTACADAS  
    add_theme_support( 'post-thumbnails' );
	add_image_size('slider-home', 1170, 400, true);
	add_image_size('slider-home2', 1600, 600, true);
	add_image_size('blog', 465, 202, true);
	add_image_size('eventos', 375, 286, true);
	add_image_size('galeria', 750, 500, true);
	add_image_size('galeria-th', 60, 60, true);
	
		

    // Activar Titulo 
    add_theme_support( 'title-tag' );
    register_nav_menu( 'primary', __( 'Menú Principal', 'menu_principal' ) );
  }
  // Cuando ocurra 'after_setup_theme, invocar "iniciarTema"
  add_action( 'after_setup_theme', 'iniciarTema' );


add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

add_filter( 'wp_calculate_image_srcset', '__return_false' );


function muestra_galeria($post_id = false, $exclude = true, $cantidad = -1) {
		global $post;
		if (!$post_id){
			$post_id = $post->ID;
		}
		$args = array( 'post_type' => 'attachment', 'numberposts' => $cantidad, 'post_status' => null, 'post_parent' => $post_id, 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC'); 
		if ($exclude){
			$args = array_merge( $args, array( 'post__not_in' => array( get_post_thumbnail_id(), $imagen_chica ) ) );
		}
		$attachments = get_posts($args);
		return $attachments;
	}