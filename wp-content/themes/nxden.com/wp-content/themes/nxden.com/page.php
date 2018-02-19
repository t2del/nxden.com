<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/html-header', 'parts/header' ) ); ?>

		<?php 
			if ( have_posts() ) while ( have_posts() ) : the_post(); 
				// echo $post->ID;
				if($post->ID==14) {
					$page_query = new WP_Query( 'page_id='.$post->ID ); // home id #
					while ( $page_query->have_posts() ) : $page_query->the_post();
						the_content(); 
					endwhile;
					wp_reset_postdata();
				} else {
					echo '<div class="page-content"><div class="container">';
						echo '<h2>';
							the_title();
						echo '</h2>';
						the_content();
						comments_template( '', true );			
					echo '</div></div>';
				}
			endwhile; 
		?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/footer','parts/html-footer' ) ); ?>