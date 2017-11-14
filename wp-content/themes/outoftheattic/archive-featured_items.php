<?php
/*
Template Name: Featured
*/
get_header(); ?>
<main class="featured">
  <section class="section">
      <h1>Featured Items</h1>

      <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

      <div class="grid">
        <div class="item">
          <?php the_post_thumbnail(); ?>
          <div class="item__details">
            <?php the_title(); ?>
          </div>
          <div>
		        <?php $image = get_field('featured_image'); ?>
						<img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
		        </div>

        <?php endwhile; endif; ?>

          </div>
        </div>

    </section>
  </main>

<?php get_footer(); ?>
