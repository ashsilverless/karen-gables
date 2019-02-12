<?php
/**
 * The header for our theme
 *
 * @package Karen Gables Lodge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Alegreya|Alegreya+Sans" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

		<nav>

			<div class="container">

				<div class="row">

					<div class="col-lg-1 col-sm-2 brand">
						<a href="#page" alt="<?php wp_title(''); ?>" title="<?php wp_title(''); ?>">KG</a>
					</div>

					<div class="col-lg-9 col-sm-5 col-6">

						<div class="nav-wrapper">

							<div class="nav-wrapper__trigger hamburger hamburger--collapse">
								<div class="hamburger-box">
									<div class="hamburger-inner">
    									<span>Menu</span>
    									</div>
								</div>
							</div>

							<div class="nav-wrapper__menu">

							    <?php
							    wp_nav_menu( array(
							    'theme_location' => 'main-menu',
							    'container_class' => 'mainMenu' ) );
							    ?>

							</div>

						</div>

					</div>

					<div class="col-lg-2 col-sm-5 col-6 text-right telephone">
						<?php the_field('telephone_number', 'option');?>
					</div>


				</div>

				<div class="tour-link text-right">

					<a href="">

						<img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/360-icon.png"/>

						<span>House Tour</span>

					</a>

				</div>

			</div>

		</nav>

	<main>
