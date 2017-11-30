<?php

/*
Template Name: Featured
*/

get_header(); ?>

  <main class="featured">
      <h1>Featured Items</h1>
      <!-- This content is being pulled from the photo gallery plugin within wordpress -->
        <?php the_content(); ?>
    </main>

<?php get_footer(); ?>
