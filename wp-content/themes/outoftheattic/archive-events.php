<?php get_header(); ?>

<main class="events">
	<h1>Events</h1>

<?php if (have_posts()) : ?>
<!-- CONTENT -->
		<?php while (have_posts()) :

			the_post(); ?>
	<!-- The blog sections are broken up into large, medium, and small sections -->
				<div class="events-container">
					<?php the_post_thumbnail(); ?>
					<div class="event">
		        <?php $image = get_field('event_image'); ?>
						<img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
		          <div class="event-font">
		            <p class="date"><span><?php the_field('event_day'); ?></span><span><?php the_field('event_date'); ?></span><span><?php the_field('event_time'); ?></span></p>
		            <h2 class="title"><?php the_title(); ?></h2>
		            <a href="events-expand.html"><button type="button" name="button">Learn More</button></a>
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
