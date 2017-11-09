<?php
  $facebook = get_field('facebook', 'options');
  $twitter = get_field('facebook', 'options');
  $instagram = get_field('facebook', 'options');

if ($twitter || $facebook || $instagram) { ?>

<div class="icons-div">
  <?php //FACEBOOK
  if ($facebook) { ?>
  <a href="<?= $facebook; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="Facebook Icon" class="icons"></a>
<?php } ?>

<?php //TWITTER
if ($twitter) { ?>
  <a href="<?= $twitter; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/twitter.png" alt="Twitter Icon" class="icons"></a>
  <?php } ?>

  <?php //INSTAGRAM
  if ($instagram) { ?>
  <a href="<?= $instagram; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.png" alt="Instagram Icon" class="icons"></a>
  <?php } ?>

</div>
<?php } ?>
