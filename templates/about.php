<?php /* Template Name: About */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="research hero">
  <div class="background" style="background: url(' <?php bloginfo('template_directory'); ?>/img/research.jpg') center center no-repeat; background-size: cover;"></div>
</section>

<section class="post research">
  <div class="container flex">
    <div class="twelve columns">
      <div class="breadcrumbs">
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
      </div>
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="row">
      <div class="twelve columns">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>