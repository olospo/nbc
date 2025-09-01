<?php
// Get all Programmes that actually have Publications
$programmes = get_terms([
  'taxonomy'   => 'research-programme',
  'hide_empty' => false,
]);

// Determine current term if we're on a Programme archive
$current_term_id = is_tax('research-programme') ? get_queried_object_id() : 0;

// URL for “All” (the Publications CPT archive)
$all_posts_url = get_post_type_archive_link('publications');
?>

<ul class="pub-filter">
  <li>
    <a href="<?php echo esc_url($all_posts_url); ?>"
       class="button <?php echo ! is_tax('research-programme') ? 'current' : ''; ?>">
      All
    </a>
  </li>

  <?php if (! empty($programmes) && ! is_wp_error($programmes)) : ?>
    <?php foreach ($programmes as $programme) :
      $term_link     = get_term_link($programme);
      $is_current    = ($current_term_id === $programme->term_id) ? 'current' : '';
    ?>
      <li>
        <a href="<?php echo esc_url($term_link); ?>"
           class="button <?php echo esc_attr($is_current); ?>">
          <?php echo esc_html($programme->name); ?>
        </a>
      </li>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>