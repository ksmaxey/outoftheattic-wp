<?php
/*
Template Name: Contact
*/
get_header(); ?>

<h1>Contact</h1>
    <div class="form-container">
      <form action="mailto:ksmaxey@gmail.com" method="post" id="form" autocomplete="on">
        <div class="form-name">
          <input type="text" name="name" placeholder="Name:" id="name" size="25" maxlength="25"/>
        </div>
        <div class="form-email">
          <input type="email" name="email" placeholder="Email:" id="email" size="50" maxlength="50"/>
        </div>
        <div class="form-message">
          <textarea name="message" id="message" placeholder="Message:" rows="10" cols="30"></textarea>
        </div>
        <!-- User will get a pop up message once this button is clicked -->
        <div class="form-button">
          <button type="button" name="button" id="myBtn">Send</button>
        </div>
      </form>
      <!-- Modal -->
      <div id="myModal" class="modal">
      <!-- Modal Content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Thank You for contacting us, we'll be in touch soon!</p>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
