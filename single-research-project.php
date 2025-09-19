<?php
/*
Template Name: Project
Template Post Type: research
*/

get_header();

while ( have_posts() ) : the_post();

  // Determine the source for hero fields: prefer parent when available
  $post_id   = get_the_ID();
  $parent_id = wp_get_post_parent_id( $post_id );
  $hero_id   = $parent_id ?: $post_id;

  // Featured image (from parent if available)
  $featured_image_id   = get_post_thumbnail_id( $hero_id );
  $background_image_url = $featured_image_id ? wp_get_attachment_image_src( $featured_image_id, 'background-img' ) : false;

  // ACF icon (from parent if available)
  $icon = get_field( 'icon', $hero_id );
?>

<section class="research hero">
  <?php if ( $background_image_url ) : ?>
    <div class="background"
         style="background: url('<?php echo esc_url( $background_image_url[0] ); ?>') center center no-repeat; background-size: cover;"></div>
  <?php endif; ?>

  <?php if ( ! empty( $icon ) ) : ?>
    <div class="container">
      <div class="circle">
        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ?? '' ); ?>" />
      </div>
    </div>
  <?php endif; ?>
</section>

<section class="post research">
  <div class="container flex">
    <div class="twelve columns">
      <div class="breadcrumbs">
        <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>
      </div>
    </div>

    <div class="row">
      <div class="nine columns">
        <h1><?php
        $parent_id = wp_get_post_parent_id( get_the_ID() );
        if ( $parent_id ) {
          echo esc_html( get_the_title( $parent_id ) ) . ' ';
        }
        the_title();
        ?></h1>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end loop ?>

<?php get_footer(); ?>
