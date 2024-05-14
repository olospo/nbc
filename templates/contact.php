<?php /* Template Name: Contact */
  
// Contact Settings
$email = get_field('email','options');
$phone = get_field('phone_number','options');
$address = get_field('address','options');
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="research hero">
  <div class="background" style="background: url(' <?php bloginfo('template_directory'); ?>/img/research.jpg') center center no-repeat; background-size: cover;"></div>
</section>

<section class="post contact">
  <div class="container flex">
    <div class="twelve columns">
      <div class="breadcrumbs">
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
      </div>
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="row">
      <div class="eight columns">
        <?php the_content(); ?>
      </div>
      <aside class="four columns">
        <h2>Get in touch</h2>
        <h3>Address:<h3>
        <address>
          <?php echo $address; ?>
        </address>
        <h3>Email:</h3> 
        <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
      </aside>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>