<?php /* Single Research */
get_header();

while ( have_posts() ) : the_post(); ?>
  
<section class="research hero">
  <div class="background" style="background: url(' <?php bloginfo('template_directory'); ?>/img/research.jpg') center center no-repeat; background-size: cover;"></div>
  <div class="container">
    <div class="eight columns">
      <div class="circle">
        <?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>
      </div>
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
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <aside class="three columns">
        <div class="team_lead">
          <h3>Team Lead</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </aside>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>