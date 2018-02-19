<?php
/**
 * @package NXDen Frontpage
 * @version 1.0
 */
/*
Plugin Name: Frontpage
Plugin URI: http://nxden.com/
Description: Frontpage
Author: Dennis Macapagal
Version: 1.0
Author URI: http://nxden.com/
*/
	
	add_action( 'init', array('nxden_frontpage','register_quote') );
	add_shortcode('quotes', array('nxden_frontpage','show_quotes'));
	
class nxden_frontpage {
	
	
	public static function show_quotes() {
		$args = array( 'post_type' => 'quote', 'posts_per_page' => 1 , 'orderby' => 'rand');
		$loop = new WP_Query( $args );
		echo '<section id="top" class="hero-section section parallax-window" data-parallax="scroll" data-image-src="'.get_template_directory_uri().'/img/home.jpg"><div class="slider-wrapper " data-aos="fade-down"><div class="section-wrapper"><div class="container">';
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="quotes">'; 
					echo '<h1>"'.get_the_content().'"</h1> -'.get_the_title();
				echo '</div>';
			endwhile;
		echo '</div></div></div></section>';
	}
	public static function register_quote() {
		register_post_type( 'quote',
			array(
				'labels' => array(
					'name' => __( 'Quotes'),
					'singular_name' => __( 'Quotes' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'quote'),
				'supports' => array( 'title', 'editor', 'custom-fields' ),
			)			
		);
	} 
	
	
}