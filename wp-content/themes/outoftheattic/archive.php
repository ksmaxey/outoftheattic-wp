<?php get_header(); ?>

<!-- PAGE TITLE -->
			<h1>Archives</h1>

<?php if (have_posts()) : ?>
	<!-- CONTENT -->
	<div class="blog">
		<div class="blog-container">
	<?php while (have_posts()) :

		the_post(); ?>
					<div class="blog-large">
						<h2><?php the_title(); ?></h2>
						<?php the_post_thumbnail(); ?>
						<p><?php  the_excerpt();?></p>
						<a href="<?php the_permalink(); ?>"><button type="button" name="button">Read More</button></a>
					</div>
				<?php endwhile; ?>
				<!-- Sidebar fixed on page -->
				<div>
					<?php get_sidebar(); ?>
				</div>

			</div>
		</div>

		<div class="">
			<?php previous_posts_link('<button><i class="pagination-left"></i> Next Post</button>') ?>
		</div>
		<div class="">
			<?php next_posts_link('<button>Previous Post<i class="pagination-right"></i></button>') ?>
		</div>

			<?php else: ?>
				<em>No Posts Found</em>
			<?php endif; ?>

<?php get_footer(); ?>
