<?php
// Get all Categories (standard WP taxonomy)
$categories = get_terms([
  'taxonomy'   => 'category',
  'hide_empty' => false,
]);

// Determine current term if we're on a Category archive
$current_term_id = is_category() ? get_queried_object_id() : 0;

// URL for “All” (the Posts archive / blog home)
$all_posts_url = get_post_type_archive_link('post');
if (! $all_posts_url) {
    $all_posts_url = get_permalink( get_option('page_for_posts') ); // fallback to blog page if set
}
?>

<ul class="post-filter">
  <li>
    <a href="<?php echo esc_url($all_posts_url); ?>"
       class="button <?php echo ! is_category() ? 'current' : ''; ?>">
      All
    </a>
  </li>

  <?php if (! empty($categories) && ! is_wp_error($categories)) : ?>
    <?php foreach ($categories as $category) :
      $term_link  = get_term_link($category);
      $is_current = ($current_term_id === $category->term_id) ? 'current' : '';
    ?>
      <li>
        <a href="<?php echo esc_url($term_link); ?>"
           class="button <?php echo esc_attr($is_current); ?>">
          <?php echo esc_html($category->name); ?>
        </a>
      </li>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>
