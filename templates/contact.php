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

<section class="post research">
  <div class="container flex">
    <div class="twelve columns">
      <h1><?php the_title(); ?></h1>
      <div class="breadcrumbs">
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
      </div>
    </div>
    <div class="row">
      <div class="nine columns">
        <?php the_content(); ?>
      </div>
      <aside class="three columns">
        <h5>Get in touch</h5>
        <address>
          <?php echo $address; ?>
        </address>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br />
        Phone: <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
      </aside>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>