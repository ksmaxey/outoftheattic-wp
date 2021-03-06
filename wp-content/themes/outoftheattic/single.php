<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="expand">
		<h1><?php the_title(); ?></h1>
		<div class="blog-expand-grid">
			<main class="blog">
					<?php the_post_thumbnail(); ?>
			</main>
<!-- <?php the_content(); ?> (USE THIS TO LOAD ACTUAL BLOG CONTENT)-->
			<!-- This is the individually scrollable area -->
			<aside class="scrollable expand-container">
				<div class="description">
					<?php the_content(); ?>
				</div>
				<p></p>
			</aside>
		</div>
		<div class="pagination">
			<div class="prev-post"><?php next_post_link('%link', 'newer stuff >')?></div>
			<div class="next-post"><?php previous_post_link('%link', '< older stuff') ?></div>
			<br clear="both" />
		</div>

		<?php endwhile; endif; ?>

		<!--Button that takes the user back to the blog page -->
		<a href="<?php bloginfo('url'); ?>/blog" title="Blog"><button type="button" name="button">Back To Blog</button></a>

		<?php comments_template(); ?>

<?php get_footer(); ?>
