<a href="<?php echo get_site_url(); ?>">
  <?php
  // Check if the current page is the home page
  if (is_front_page()) { ?>
    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php echo bloginfo( 'name' ); ?>">
  <?php } else { ?>
    <img src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="<?php echo bloginfo( 'name' ); ?>">
  <?php } ?>
</a>