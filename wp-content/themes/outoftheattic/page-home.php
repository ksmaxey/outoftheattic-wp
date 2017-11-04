<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- Welcome to the Site! -->
<div class="home-container">
  <h1 class="limit-min">Welcome To</h1>
  <img class="scale" src="<?php bloginfo('template_url'); ?>/assets/img/attic.png" alt="Homepage Icon">
  <div class="enter-button">
    <a href="<?php echo get_permalink( 7 ); ?>"><button class="enter limit-min-max" type="button">Enter</button></a>
  </div>
</div>
