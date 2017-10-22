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
					<p>Out of the Attic Antiques is searching for individuals that can think on their feet, and are able to utilize provided tools to get the job done. Experience is a plus, but not necessary. The successful applicant must have a burning desire to succeed and an eagerness to learn. We want you to grow with our company where your ideas and suggestions aid in the company’s growth and you are rewarded for it.</p>
					<a href="<?php the_permalink(); ?>"><button type="button" name="button">Read More</button></a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

<?php else: ?>
	<em>No Posts Found</em>
<?php endif; ?>

<?php get_footer(); ?>
