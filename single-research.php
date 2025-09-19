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
      </div>
    </div>
    <div class="row">
      <div class="nine columns">
        <?php the_content(); ?>
      </div>
      <aside class="three columns">
        <div class="team-lead">
          <?php
          $team_lead = get_field('team_lead');
          if ($team_lead): ?>
            <?php if (has_post_thumbnail($team_lead->ID)): ?>
              <div class="team-lead-thumbnail">
                <?php echo get_the_post_thumbnail($team_lead->ID, 'large-thumb'); ?>
                <h4><?php echo esc_html($team_lead->post_title); ?></h4>
                <?php // Fetching and displaying the job title using ACF
                $job_title = get_field('job_title', $team_lead->ID); 
                if ($job_title): ?>
                  <p><?php echo esc_html($job_title); ?></p>
                <?php endif; ?>
              </div>
              <?php else: ?>
              <div class="team-lead-thumbnail">
                <img src="<?php bloginfo('template_directory'); ?>/img/default-team.png" alt="<?php echo esc_html($team_lead->post_title); ?>">
                <h4><?php echo esc_html($team_lead->post_title); ?></h4>
                <?php // Fetching and displaying the job title using ACF
                $job_title = get_field('job_title', $team_lead->ID); 
                if ($job_title): ?>
                  <p><?php echo esc_html($job_title); ?></p>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="research-buttons">
          <a href="#" class="button filled">Publications</a>
          <a href="projects" class="button filled">Projects</a>
        </div>
      </aside>
    </div>
  </div>
</section>

<?php // Get the team members
$team_members = get_field('team_members'); if ($team_members) { ?>
<section class="research-team">
  <span class="line"></span>
  <div class="container">
    <div class="row">
      <h2>Meet The Team</h2>
    </div>
    <div class="team">
    <?php if (have_rows('team')) { // Flexible Content ?>
      <?php while (have_rows('team')) { the_row(); ?>
        <?php if( get_row_layout() == 'profile' ): ?>
          <div class="team-thumbnail">
              <?php
              // Assuming 'member' is a sub field of 'team'
              $member = get_sub_field('individual_profile'); // Get the member object from the sub field
          
              if ($member):
                  // Get the member's post ID
                  $post_id = $member->ID;
          
                  // Get the member's name (post title)
                  $name = get_the_title($post_id);
          
                  // Get the member's job title (custom field)
                  $job_title = get_post_meta($post_id, 'job_title', true);
          
                  // Get the member's featured image
                  $image = get_the_post_thumbnail_url($post_id, 'thumbnail');
          
                  // If there is no featured image, use the default image
                  if (!$image) {
                      $image = get_template_directory_uri() . '/img/nbc-person.png';
                      $image_class = 'class="default"'; // Adding the class if image is not available
                  } else {
                      $image_class = 'class="photo"'; // No class if image is available
                  }
              ?>
                  <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>" <?php echo $image_class; ?>>
                  <h4><?php echo esc_html($name); ?></h4>
                  <p><?php echo esc_html($job_title); ?></p>
              <?php endif; ?>
          </div>
        <?php elseif( get_row_layout() == 'heading' ): ?>
          <h3 class="team_heading"><?php echo get_sub_field('text'); ?></h3>
        <?php endif; ?>
      <?php } ?>
    <?php } ?>
    </div>
  </div>
</section>
<?php } ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>