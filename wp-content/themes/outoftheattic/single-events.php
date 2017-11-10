<?php
/*
Template Name: Events Expanded
*/
get_header(); ?>
<main class="events">
  <h1><?php the_title(); ?></h1>
    <div class="expanded-wrapper">
      <div class="expanded-imagery">
        <!-- When this image is clicked, a YouTube video will open up full screen and will autoplay -->
        <?php $image = get_field('event_image'); ?>
        <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
      </div>
      <div class="expanded-text">
        <?php the_content(); ?>
        <!--This button redirects the user back to the events page -->
        <a href="<?php bloginfo('url'); ?>/events" title="Events"><button type="button" name="button">Back To Events</button></a>
      </div>
    </div>
  </main>


<?php get_footer(); ?>
