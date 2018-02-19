<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer', 1, 1 );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
		wp_register_style( 'font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.css', '', '', '' );
        wp_enqueue_style( 'font-awesome' );
		wp_register_style( 'aos', get_stylesheet_directory_uri().'/css/aos.css', '', '', '' );
        wp_enqueue_style( 'aos' );
		wp_register_style( 'main', get_stylesheet_directory_uri().'/css/main.css', '', '', '' );
        wp_enqueue_style( 'main' );
		wp_register_script( 'modernizr', get_stylesheet_directory_uri().'/js/vendor/modernizr-3.5.0.min.js','', '3.5.0', true);
		wp_enqueue_script('modernizr');
		wp_deregister_script('jquery');
		wp_register_script( 'jquery', get_stylesheet_directory_uri().'/js/vendor/jquery-3.2.1.min.js','', '3.2.1', true);
		wp_enqueue_script('jquery');
		wp_register_script( 'bootstrap', get_stylesheet_directory_uri().'/js/vendor/bootstrap.min.js','', '', true);
		wp_enqueue_script('bootstrap');
		wp_register_script( 'aos', get_stylesheet_directory_uri().'/js/vendor/aos.js', '', true);
		wp_enqueue_script('aos');
		wp_register_script( 'parallax', get_stylesheet_directory_uri().'/js/vendor/parallax.min.js','', '', true);
		wp_enqueue_script('parallax');
		wp_register_script( 'plugins', get_stylesheet_directory_uri().'/js/plugins.js','', '', true);
		wp_enqueue_script('plugins');
		wp_register_script( 'main', get_stylesheet_directory_uri().'/js/main.js', '', '', true);
		wp_enqueue_script('main');
	}

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
	
	/* ========================================================================================================================
	
	Author Scripts
	
	======================================================================================================================== */
	
	function register_my_menus() {
	  register_nav_menus(
		array(
		  'header-menu' => __( 'Header Menu' ),
		  'footer-menu' => __( 'Footer Menu' )
		)
	  );
	}
	add_action( 'init', 'register_my_menus' );
	add_filter( 'wpcf7_validate_configuration', '__return_false' ); 
	