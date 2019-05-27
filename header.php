<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wellington Rabbit Rescue</title>

    <?php wp_head();?>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- <a class="navbar-brand" href="#">Navbar</a> -->
		<?php
		wp_nav_menu( array(
            // remember to change 'primary' to what it is called in the functions folder
			'theme_location'    => 'header_menu',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
	<!--  [contact-form-7 id="10" title="Untitled"] -->
</nav>

<p>This is from header</p>

<div class="container-fluid">
    <img class="w-100"src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bannerRabbit.png" alt="rabbits">
</div>