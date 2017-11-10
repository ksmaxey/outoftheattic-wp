<?php
/*
Template Name: Featured
*/
get_header(); ?>
<main class="featured">
  <section class="section">
      <h1>Featured Items</h1>
      <div class="grid">

        <?php if (have_posts()) : ?>
        <!-- CONTENT -->
        		<?php while (have_posts()) :

        			the_post(); ?>
        	<!-- The blog sections are broken up into large, medium, and small sections -->
        				<div class="events-container">
        					<?php the_post_thumbnail(); ?>
        					<div>
        		        <?php $image = get_field('featured_image'); ?>
        						<img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
        		        </div>
        		      </div>
        			<?php endwhile; ?>
        		</div>
        	</div>

        <?php else: ?>
        	<em>No Posts Found</em>
        <?php endif; ?>

        </main>

<?php get_footer(); ?>
