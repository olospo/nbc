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

<?php
// Get authors
$authors = get_field('authors'); // relationship field returning post objects
if ($authors) : ?>
<section class="publication-authors">
  <div class="container">
    <h2>Authors</h2>
    <div class="team">
      <?php foreach ($authors as $author) :
        $post_id = $author->ID;
        $name = get_the_title($post_id);
        $job_title = get_post_meta($post_id, 'job_title', true);
        $image = get_the_post_thumbnail_url($post_id, 'thumbnail');

        if (!$image) {
          $image = get_template_directory_uri() . '/img/nbc-person.png';
          $image_class = 'class="default"';
        } else {
          $image_class = 'class="photo"';
        }
      ?>
        <div class="team-thumbnail">
          <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>" <?php echo $image_class; ?>>
          <h4><?php echo esc_html($name); ?></h4>
          <p><?php echo esc_html($job_title); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>