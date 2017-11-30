<?php get_header(); ?>

<h1><?php _e('Categories for ' , 'html5blank'); single_cat_title(); ?></h1>

<?php if (have_posts()) : ?>
<!-- CONTENT -->
<div class="blog">
	<div class="blog-container">
		<?php while (have_posts()) :

			the_post(); ?>
	<!-- The blog sections are broken up into large, medium, and small sections -->
				<div class="blog-large">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<a href="<?php the_permalink(); ?>"><button type="button" name="button">Read More</button></a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

<?php else: ?>
	<em>No Posts Found</em>
<?php endif; ?>

<?php get_footer(); ?>
