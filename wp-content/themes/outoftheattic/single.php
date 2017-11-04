<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div class="blog-expand-grid">
			<main>
				<img src="<?php bloginfo('template_url'); ?>/assets/img/hiring2.jpg" alt="Now Hiring" id="expand-blog-image">
			</main>
<!-- <?php the_content(); ?> (USE THIS TO LOAD ACTUAL BLOG CONTENT)-->
			<!-- This is the individually scrollable area -->
			<aside class="scrollable expand-container">
				<div class="description">
					<?php the_content(); ?>
					<ul>
						<li>Applicant must have Reliable Transportation</li>
						<li>Must be punctual and able to keep track of all appointments</li>
						<li>Must demonstrate strong Computer, Tablet, and Phone skills</li>
						<li>Must have a positive attitude and want to grow with the company</li>
						<li>Consistent Communication is key</li>
						<li>Professional Dress</li>
					</ul>
				</div>
				<div class="skills">
					<h2>These Skills are a Plus:</h2>
					<ul>
						<li>Associates Degree in Business/Marketing</li>
						<li>Public Speaker</li>
						<li>Great People Skills</li>
						<li>Antique Knowledge (not required)</li>
					</ul>
				</div>
				<p>If interested in applying, please use the form located on our Contact page.</p>
			</aside>
		</div>
		<!--Button that takes the user back to the blog page -->
		<a href="<?php echo get_permalink( 13 ); ?>" title="Blog"><button type="button" name="button">Back To Blog</button></a>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
