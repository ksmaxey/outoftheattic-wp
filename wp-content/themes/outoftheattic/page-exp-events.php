<?php
/*
Template Name: Events Expanded
*/
get_header(); ?>

<h1>Antiques Roadshow</h1>
  <div class="expanded-wrapper">
    <div class="expanded-imagery">
      <!-- When this image is clicked, a YouTube video will open up full screen and will autoplay -->
      <a href="#" class="youtube-link" youtubeid="6GL1ALnJcB8"><img src="<?php bloginfo('template_url'); ?> /assets/img/ar1.jpg" alt="Antiques Roadshow Excited"></a>
      <img src="<?php bloginfo('template_url'); ?> /assets/img/ar2.jpg" alt="Antiques Roadshow Book">
      <img src="<?php bloginfo('template_url'); ?> /assets/img/ar3.jpg" alt="Antiques Roadshow Painting">
    </div>
    <div class="expanded-text">
      <p>Antiques Roadshow is coming to Out of the Attic Antiques!  Antiques Roadshow is an American television program broadcast on Public Broadcasting Service (PBS) public television stations. The series features local antiques owners who bring in items to be appraised by experts. Provenance, history, and value of the items are discussed. Based on the original British Antiques Roadshow – which premiered in 1979 – the American version first aired in 1997. Antiques Roadshow has been nominated 14 times for a Primetime Emmy!<br><br>
      Check out the video to see more!</p>
      <!--This button redirects the user back to the events page -->
      <a href="events.html" title="Events"><button type="button" name="button">Back To Events</button></a>
    </div>
  </div>


<?php get_footer(); ?>
