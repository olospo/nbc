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

<section class="home_stats stat_section">
  <div class="container">
    <h2>National Biomarker Centre in numbers</h2>
  </div>
  <div class="container">
    <div class="stats two">
      <div class="stat blue">
        <div class="circle">
          <span class="unit" data-count="11">11</span>
        </div>
        <span class="description">PhD Students</span>
      </div>
      <div class="stat pink">
        <div class="circle">
          <span class="unit" data-count="102">102</span>
        </div>
        <span class="description">Staff</span>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>