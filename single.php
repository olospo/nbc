<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="research hero">
  <?php
  $featured_image_id = get_post_thumbnail_id();
  $background_image_url = wp_get_attachment_image_src($featured_image_id, 'background-img');
  if ($background_image_url) { ?>
  <div class="background" style="background: url('<?php echo $background_image_url[0]; ?>') center center no-repeat; background-size: cover;"></div>
  <?php } ?>
</section>

<section class="post news">
  <div class="container flex">
    <div class="twelve columns">
      <div class="breadcrumbs">
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
      </div>
    </div>
    <div class="row">
      <div class="nine columns">
        <span class="date"><?php the_date(); ?></span>
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="content twelve columns">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>