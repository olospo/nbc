<?php /* Archive */
$obj = get_queried_object();

$sub = get_field('sub_title', $obj );

get_header(); ?>

<section class="news_archive">
  <span class="line"></span>
  <div class="container">
    <h2>Latest news</h2>


    <div class="twelve columns">
      <div class="news_listing">
          <?php if ( have_posts() ) : while (have_posts()) : the_post();  ?>
            <?php get_template_part('inc/article'); ?>
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