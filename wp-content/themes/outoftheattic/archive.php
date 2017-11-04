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
		        <img src="<?php bloginfo(template_url) ?>/assets/img/roadshow.jpg" alt="Antiques Roadshow">
		          <div class="event-font">
		            <p class="date">FRI <span><?php the_field('event_date'); ?></span> 5pm</p>
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
