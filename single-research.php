<?php /* Single Research */
get_header();

while ( have_posts() ) : the_post(); ?>
  
<section class="research hero">
  <?php
  $featured_image_id = get_post_thumbnail_id();
  $background_image_url = wp_get_attachment_image_src($featured_image_id, 'background-img');
  if ($background_image_url) { ?>
  <div class="background" style="background: url('<?php echo $background_image_url[0]; ?>') center center no-repeat; background-size: cover;"></div>
  <?php } 
  $icon = get_field('icon');
  if( !empty( $icon ) ):  ?>
  <div class="container">
      <div class="circle">
        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
      </div>

  </div>
  <?php endif; ?>
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
          <?php
          $team_lead = get_field('team_lead');
          if ($team_lead): ?>
            <?php if (has_post_thumbnail($team_lead->ID)): ?>
            <div class="team-lead-thumbnail">
              <?php echo get_the_post_thumbnail($team_lead->ID, 'large-thumb'); ?>
            </div>
            <?php endif; ?>
            <h4><?php echo esc_html($team_lead->post_title); ?></h4>
          <?php endif; ?>
        </div>
      </aside>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>