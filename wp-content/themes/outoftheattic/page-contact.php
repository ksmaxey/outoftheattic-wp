<?php
/*
Template Name: Contact
*/
get_header(); ?>

<main class="contact">
  <h1>Contact</h1>
   <div class="form-container">

  <?= the_content(); ?>

<h2>Social Media</h2>

<?php get_template_part('partials/social_media'); ?>

   </div>
</main>

<?php get_footer(); ?>
