<?php /* Page */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="post research">
  <div class="container flex">
    <div class="twelve columns">
      <h1><?php the_title(); ?></h1>
      <div class="breadcrumbs">
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
      </div>
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