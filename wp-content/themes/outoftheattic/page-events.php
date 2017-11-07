<?php
/*
Template Name: Events
*/
get_header(); ?>
<main class="events">
  <h1>Events</h1>
    <div class="events-container">
      <div class="event">
        <img src="<?php bloginfo(template_url) ?>/assets/img/hiring.jpg" alt="Antiques Roadshow">
          <div class="event-font">
            <p class="date">FRI <span>NOV 17</span> 5pm</p>
            <h2 class="title">Antiques Roadshow</h2>
            <a href="events-expand.html"><button type="button" name="button">Learn More</button></a>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
