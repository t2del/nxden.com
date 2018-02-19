<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700" rel="stylesheet">
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	
	<?php if($post->post_name=="home")  { ?>
		<div id="fullpage">
	<?php } ?>	