<?php $doi = get_post_meta(get_the_ID(), 'doi', true); ?>

<article class="publication one-third column">
  <div class="content">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php if ($doi) {
      echo '<p><strong>DOI:</strong> <a href="https://www.doi.org/' . esc_attr($doi) . '" target="_blank" rel="noopener">';
      echo esc_html($doi);
      echo '</a></p>';
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
  </div>
</article>