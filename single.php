<?php /* Single Post */
get_header();
while ( have_posts() ) : the_post(); ?>
<section class="research hero">
  <?php
  $hero_image = get_field('hero_background_image');

  if ($hero_image) {
    $background_image_url = $hero_image['sizes']['background-img'];
  } else {
    $featured_image_id = get_post_thumbnail_id();
    $background_image_src = wp_get_attachment_image_src($featured_image_id, 'background-img');
    $background_image_url = $background_image_src ? $background_image_src[0] : false;
  }

  if ($background_image_url) { ?>
  <div class="background" style="background: url('<?php echo esc_url($background_image_url); ?>') center center no-repeat; background-size: cover;"></div>
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