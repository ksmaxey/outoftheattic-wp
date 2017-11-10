<?php
/*
Template Name: Featured
*/
get_header(); ?>
<main class="featured">
  <section class="section">
      <h1>Featured Items</h1>
      <div class="grid">

        <?php if (have_posts()) :
          $contentIsLeft = true;
        		while (have_posts()) : the_post(); ?>
            <?php if ($contentIsLeft) { ?>
        				<div class="events-container">
                  <h2><?php the_title(); ?></h2>
                <?php } ?>

        					<?php the_post_thumbnail(); ?>

                  <div>
        		        <?php $image = get_field('featured_image'); ?>
        						<img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
        		        </div>
                  </div>

                  <?php if (!$contentIsLeft) { ?>
                      <h2><?php the_title(); ?></h2>
                    <?php }

                    $contentIsLeft = !$contentIsLeft ?>

        			<?php endwhile; ?>
        		</div>
        	</div>

        <?php else: ?>
        	<em>No Posts Found</em>
        <?php endif; ?>

        </main>

<?php get_footer(); ?>
