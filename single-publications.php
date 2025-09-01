<?php /* Single Research */
get_header();

$doi = get_post_meta(get_the_ID(), 'doi', true);

while ( have_posts() ) : the_post(); ?>
  
<section class="post research">
  <div class="container flex">
    <div class="twelve columns">
      <div class="breadcrumbs">
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <h1><?php the_title(); ?></h1>
        <?php if ($doi) {
          echo '<h2><strong>DOI:</strong> <a href="https://www.doi.org/' . esc_attr($doi) . '" target="_blank" rel="noopener">';
          echo esc_html($doi);
          echo '</a></h2>';
        }
        ?>
        <?php
        $programmes = get_the_terms(get_the_ID(), 'research-programme');
        if ($programmes && ! is_wp_error($programmes)) {
          foreach ($programmes as $programme) {
            $term_link = get_term_link($programme);
            if (! is_wp_error($term_link)) {
              echo '<a href="' . esc_url($term_link) . '" class="button publication">' . esc_html($programme->name) . '</a> ';
            }
          }
        }
        ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>