<?php /* Single Research */
get_header();

while ( have_posts() ) : the_post(); ?>
  
<section class="research hero">
  <div class="background" style="background: url(' <?php bloginfo('template_directory'); ?>/img/research.jpg') center center no-repeat; background-size: cover;"></div>
</section>

<section class="research_title">
  <span class="line"></span>
  <div class="container">
    <div class="eight columns">
      <div class="circle">
        <img src="<?php bloginfo('template_directory'); ?>/img/icons/nucleic.svg" type="image/svg+xml"/>
      </div>
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</section>

<section class="post research">
  <div class="container flex">
    <div class="twelve columns">
      <div class="breadcrumbs">
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
      </div>
    </div>
    <div class="row">
      <div class="nine columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet consectetur adipiscing elit pellentesque. Enim tortor at auctor urna. Tristique senectus et netus et. Cursus metus aliquam eleifend mi in nulla posuere sollicitudin. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In tellus integer feugiat scelerisque varius morbi enim. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin. Mi bibendum neque egestas congue quisque egestas. Leo vel orci porta non pulvinar neque laoreet suspendisse. Duis ut diam quam nulla porttitor massa id neque. Gravida in fermentum et sollicitudin ac orci phasellus egestas tellus. Pharetra vel turpis nunc eget lorem. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus.</p>
        <p>Cum sociis natoque penatibus et. Et leo duis ut diam quam nulla porttitor massa id. Dictum sit amet justo donec enim. Augue lacus viverra vitae congue eu consequat ac. Nulla facilisi etiam dignissim diam quis. Semper quis lectus nulla at volutpat diam. Consequat id porta nibh venenatis cras sed felis eget. Phasellus faucibus scelerisque eleifend donec. Dictum non consectetur a erat nam at lectus urna. Aliquet risus feugiat in ante metus dictum at tempor commodo. Mattis ullamcorper velit sed ullamcorper morbi tincidunt. In iaculis nunc sed augue lacus viverra vitae congue. Sagittis orci a scelerisque purus. Fermentum dui faucibus in ornare quam viverra.</p>
      </div>
      <aside class="three columns">
        <div class="team_lead">
          <h3>Team Lead</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="latest_publications">
        <h3>Latest Publications</h3>
        <?php
        $featured_posts = get_field('publications');
        if( $featured_posts ): ?>
          <ul>
          <?php 
          $counter = 0;
          foreach( $featured_posts as $post ): 
            if($counter < 3) :
              // Setup this post for WP functions (variable must be named $post).
              setup_postdata($post); ?>
              <li>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
          <?php 
            $counter++;
            endif;
          endforeach; ?>
          </ul>
          <?php 
          // Reset the global post object so that the rest of the page works correctly.
          wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
      </aside>
    </div>
  </div>
</section>

<section class="research_publications_projects">
  <div class="container">
    <div class="six columns">
      <h3>Publications</h3>
      <?php
      $featured_posts = get_field('publications');
      if( $featured_posts ): ?>
          <ul>
          <?php foreach( $featured_posts as $post ): 
      
              // Setup this post for WP functions (variable must be named $post).
              setup_postdata($post); ?>
              <li>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
          <?php endforeach; ?>
          </ul>
          <?php 
          // Reset the global post object so that the rest of the page works correctly.
          wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
    <div class="six columns">
      <h3>Projects</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>