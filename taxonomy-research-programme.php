<?php /* News Archive */
get_header(); ?>

<section class="publication_archive">
  <span class="line"></span>
  <div class="container">
    <h2><?php
      if (is_tax('research-programme')) {
        $term = get_queried_object();
        echo esc_html($term->name) . ' Publications';
      } else {
        echo 'Publications';
      }
      ?></h2>
    <div class="filters twelve columns">
      <p>Filter by research group:</p>
      <div class="filter-container">
        <?php get_template_part('inc/filter'); ?>
      </div>
    </div>
    <div class="twelve columns">
      <div class="news_listing">
          <?php if ( have_posts() ) : while (have_posts()) : the_post();  ?>
            <?php get_template_part('inc/publication'); ?>
          <?php endwhile; ?>
        </div>
        <div class="twelve columns">
        <?php numeric_posts_nav(); ?>
        </div>
        <?php else : ?>
        <!-- No posts found -->
        <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php get_footer();  ?>
