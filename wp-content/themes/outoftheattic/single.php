<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div class="blog-expand-grid">
			<main class="blog">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/hiring2.jpg" alt="Now Hiring" id="expand-blog-image">
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
			<div class="prev-post"><?php next_post_link('%link', 'newer stuff')?></div>
			<div class="next-post"><?php previous_post_link('%link', 'older stuff') ?></div>
			<br clear="both" />
		</div>

		<?php endwhile; endif; ?>

		<!--Button that takes the user back to the blog page -->
		<a href="<?php bloginfo('url'); ?>/blog" title="Blog"><button type="button" name="button">Back To Blog</button></a>

		<?php comments_template(); ?>

		<div class="comments-form">
			<form action="">
				<input type="text" placeholder="Name">
				<input type="email" placeholder="Email">
				<textarea placeholder="Comment"></textarea>
				<button><input type="submit" name="submit" value="submit"></button>
			</form>

<?php get_footer(); ?>
