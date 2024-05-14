<?php /* Footer */ 

// Contact Settings
$email = get_field('email','options');
$phone = get_field('phone_number','options');
$address = get_field('address','options');

// Social
$facebook = get_field('facebook_link','options');
$twitter = get_field('twitter_link','options');
$linkedin = get_field('linkedin_link','options');
$youtube = get_field('youtube_link','options');

wp_footer(); ?>
<footer>
  <div class="container">
    <div class="logo three columns">
      <img src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="<?php echo bloginfo( 'name' ); ?>" class="cruk">
      <img src="<?php bloginfo('template_directory'); ?>/img/manchester-uni-logo.png" alt="<?php echo bloginfo( 'name' ); ?>" class="manchester">

    </div>
    <div class="links nine columns">
      <div class="one-third column">
        <h5>Get in Touch</h5>
        <address>
          <?php echo $address; ?>
        </address>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
      </div>
      <div class="one-third column">
        <h5>Research</h5>
        <?php wp_nav_menu( array( 'theme_location' => 'research', 'container'=> false, 'menu_class'=> 'links' ) ); ?>
      </div>
      <div class="one-third column">
        <h5>Quick Links</h5>
        <ul class="links">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Cookie Policy</a></li>
        </ul>
        <?php
        // Check if at least one social icon is present
        if ($facebook || $twitter || $linkedin || $youtube):
        ?>
        <h5>Connect with us</h5>
        <ul class="social">
          <?php if($facebook): ?>
          <li><a href="<?php echo $facebook; ?>" aria-label="Facebook"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.svg" alt="Facebook" loading="lazy"/></a></li>
          <?php endif; ?>
          <?php if($twitter): ?>
          <li><a href="<?php echo $twitter; ?>" aria-label="Twitter"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.svg" alt="Twitter" loading="lazy"/></a></li>
          <?php endif; ?>
          <?php if($linkedin): ?>
          <li><a href="<?php echo $linkedin; ?>" aria-label="LinkedIn"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin.svg" alt="LinkedIn" loading="lazy"/></a></li>
          <?php endif; ?>
          <?php if($youtube): ?>
          <li><a href="<?php echo$youtube; ?>" aria-label="YouTube"><img src="<?php bloginfo('template_directory'); ?>/img/youtube.svg" alt="YouTube" loading="lazy"/></a></li>
          <?php endif; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
