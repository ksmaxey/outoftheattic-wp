<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

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
        <div class="icons-div">
          <a href="https://www.facebook.com/OutoftheAtticAntiques/"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="Facebook Icon" class="icons"></a>
          <a href="https://www.twitter.com/"><img src="<?php bloginfo('template_url'); ?>/assets/img/twitter.png" alt="Twitter Icon" class="icons"></a>
          <a href="https://www.instagram.com/outoftheatticantiques/"><img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.png" alt="Instagram Icon" class="icons"></a>
        </div>
    </nav>
  </header>
	<main>
