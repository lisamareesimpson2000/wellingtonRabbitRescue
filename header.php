<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Wellington Rabbit Rescue</title>

    <?php wp_head();?>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light custom_nav" role="navigation">
  <div class="container">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
			<?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="logo">';
			?>
		<?php
		wp_nav_menu( array(
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
</nav>

<!-- <p>This is from header</p> -->

<div >
<?php //$header_images_id = get_theme_mod('custom-header');
//var_dump(defaultsHeader); 
//$header_images_url = wp_get_attachment_image_url( $header_images_id , 'full' );
				//echo '<img src="' . esc_url( $header_images_url ) . '" alt="banner">';
				?>
<img class="img-fluid mx-auto d-block w-100" alt="responsive" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
    <!-- <img class="w-100"src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/bannerRabbit.png" alt="rabbits"> -->
</div>