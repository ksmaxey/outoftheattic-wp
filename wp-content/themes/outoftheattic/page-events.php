<?php
/*
Template Name: Events
*/
get_header(); ?>

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
    <div class="event">
      <img src="<?php bloginfo(template_url) ?>/assets/img/records.jpg" alt="Record Exchange">
      <div class="event-font">
        <p class="date">SAT <span>DEC 9</span> 10am</p>
        <h2 class="title">Record Exchange</h2>
        <a href="events-expand.html"><button type="button" name="button">Learn More</button></a>
      </div>
    </div>
    <div class="event">
      <img src="<?php bloginfo(template_url) ?>/assets/img/beer.jpg" alt="Craft Beer Festival">
      <div class="event-font">
        <p class="date">SUN <span>DEC 17</span> 5pm</p>
        <h2 class="title">Craft Beer Festival</h2>
        <a href="events-expand.html"><button type="button" name="button">Learn More</button></a>
      </div>
    </div>
    <div class="event">
      <img src="<?php bloginfo(template_url) ?>/assets/img/christmas.jpg" alt="Christmas Day">
        <div class="event-font">
          <p class="date">MON <span>DEC 25</span> All Day</p>
          <h2 class="title">Merry Christmas</h2>
          <a href="events-expand.html"><button type="button" name="button">Learn More</button></a>
        </div>
    </div>
  </div>

<?php get_footer(); ?>
