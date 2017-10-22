<?php
/*
Template Name: Blog
*/
get_header(); ?>

<h1>Blog</h1>
  <main class="blog">
    <!-- The blog sections are broken up into large, medium, and small sections -->
    <div class="blog-container">
      <div class="blog-large">
        <h2>We're Hiring!</h2>
        <img src="<?php bloginfo('template_url'); ?>/assets/img/hiring.jpg" alt="New Items" alt="Now Hiring">
        <p>Out of the Attic Antiques is searching for individuals that can think on their feet, and are able to utilize provided tools to get the job done. Experience is a plus, but not necessary. The successful applicant must have a burning desire to succeed and an eagerness to learn. We want you to grow with our company where your ideas and suggestions aid in the company’s growth and you are rewarded for it.</p>
        <a href="blog-expand.html"><button type="button" name="button">Read More</button></a>
      </div>
      <div class="blog-medium">
        <div class="blog-medium-content">
          <h3>New Items</h3>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/bike.jpg" alt="New Items">
          <p>We have some great new items in!  Whether you're looking for a new (not really) bike, globe, or dive mask, we have you covered!  Check out some pictures by clicking the read more button.</p>
        </div>
        <a href="blog-expand.html"><button type="button" name="button">Read More</button></a>
      </div>
      <div class="blog-small" id="item_1">
        <div class="blog-small-content">
          <h3>Extremely Valuable</h3>
          <a href="blog-expand.html"><button type="button" name="button">More</button></a>
        </div>
      </div>
      <div class="blog-small" id="item_2">
        <div class="blog-small-content">
          <h3>How To Start</h3>
          <a href="blog-expand.html"><button type="button" name="button">More</button></a>
        </div>
      </div>
      <div class="blog-small" id="item_3">
        <div class="blog-small-content">
          <h3>We're On TV!</h3>
          <a href="blog-expand.html"><button type="button" name="button">More</button></a>
        </div>
      </div>
      <div class="blog-small" id="item_4">
        <div class="blog-small-content">
          <h3>About Our Staff</h3>
          <a href="blog-expand.html"><button type="button" name="button">More</button></a>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
