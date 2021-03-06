<?php get_header(); ?>

<main class="events">
	<h1>Events</h1>
	<div class="events-border">

<?php if (have_posts()) : ?>
<!-- CONTENT -->
		<?php while (have_posts()) :

			the_post(); ?>
				<div class="events-container">
					<?php the_post_thumbnail(); ?>
					<div class="event">
		        <?php $image = get_field('event_image'); ?>
						<img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
		          <div class="event-font">
								<!-- These are entered using the custom fields within wordpress -->
		            <p class="date"><?php the_field('event_day'); ?>
										<span><?php the_field('event_date'); ?></span>
										<?php the_field('event_time'); ?>
								</p>
		            <h2 class="title"><?php the_title(); ?></h2>
		            <a href="<?php the_permalink(); ?>"><button type="button" name="button">Learn More</button></a>
		        </div>
		      </div>
			<?php endwhile; ?>
		</div>

<?php else: ?>
	<em>No Posts Found</em>
<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
