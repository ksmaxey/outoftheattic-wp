<?php
/*
Template Name: Home
*/
get_header('splash'); ?>

<!-- Welcome to the Site! -->
<main class="home">
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="backgroundthumb" style="background-image: url('<?php echo $thumb['0'];?>')">
    <div class="home-container">
      <h1 class="limit-min">Welcome To</h1>
      <img class="scale" src="<?php bloginfo('template_url'); ?>/assets/img/attic.png" alt="Homepage Icon">
      <div class="enter-button">
        <a href="<?php bloginfo('url'); ?>/about"><button class="enter limit-min-max" type="button">Enter</button></a>
      </div>
    </div>
  </div>
</main>

<?php get_footer('splash'); ?>
