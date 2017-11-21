<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
		<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<header>
<!--This logo is also a link to the home screen -->
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/attic.png" alt="Logo" class="logo" id="logo"></a>
<!-- Navigation Menu -->
    <nav class="menu">
        <?php html5blank_nav(); ?>
<!-- Social Media Icons in a div to keep them close together -->
					<?php get_template_part('partials/social_media'); ?>
    </nav>
  </header>
	<main>
