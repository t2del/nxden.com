<header class="main" data-aos="fade-up">
	<div class="container">
		<div class="user-links text-right">
			<ul>
				<li><a href="<?php echo site_url('wp-login.php'); ?>" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-4 brand">
				<a href="<?php echo site_url(); ?>">
					<h1 class="title"><?php bloginfo( 'name' ); ?></h1>
				</a>
			</div>
			<div class="col-md-8">
				<nav>
					<div class="toggle">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
			</div>
		</div>
	</div>
</header>
