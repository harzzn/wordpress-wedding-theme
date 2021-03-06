<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo get_template_directory_uri(); ?>/node_modules/bootswatch/paper/bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Mr+De+Haviland" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/styles/main.css" rel="stylesheet">

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
			<header class="col-md-10 col-md-offset-1 text-center">
				<h1>
					<?php echo WPWT_BRIDES_NAME; ?>
					<br><img src="<?php echo get_template_directory_uri(); ?>/images/heart.svg" class="header__heart" />
					<br><?php echo WPWT_GROOMS_NAME; ?>
				</h1>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<div class="navigation-line"></div>
				</nav>
			</header>