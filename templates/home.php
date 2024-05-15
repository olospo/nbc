<?php /* Template Name: Home */
get_header();

while ( have_posts() ) : the_post(); ?>


<section class="home hero">
  <div class="background" style="background: url(' <?php bloginfo('template_directory'); ?>/img/placeholder.jpg') center center no-repeat; background-size: cover;"></div>
  <a href="#next"><div class="next_section">
    <img src="<?php bloginfo('template_directory'); ?>/img/arrow_down.svg" />
  </div></a>
</section>

<div class="container">
  <div class="pink-circle">
    <span class="text">Together.</span>
  </div>
</div>

<section class="home_statement" id="next">
  <span class="line"></span>
  <div class="container">
    <div class="eight columns">
      <h2>Our mission is to discover, develop, validate and implement biomarkers in clinical trials that support optimised treatment of patients with cancer.</h2>
    </div>
  </div>
</section>

<section class="home_video">
  <div class="container">
    <div class="video_background" style="position: relative; overflow: hidden; padding-top: -56.25%;">
    <iframe 
      id="videoFrame"
      width="100%" 
      height="100%" 
      src="https://www.youtube.com/embed/G1hKzCkywM8?autoplay=0&mute=0&loop=1&controls=1&fs=0&showinfo=0&rel=0&modestbranding=1"  
      frameborder="0" 
      allow="autoplay; encrypted-media" 
      allowfullscreen
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
    </iframe>
    </div>
  <div class="video_content">
    <div class="content">
      <h3>World leading translational research</h3>
      <p>Detecting cancer earlier, predicting treatment responses, anticipating side effects, supporting development of new personalised treatments</p>
      <h3>A team science approach</h3>
      <p>Working at the interface between discovery scientists and clinical researchers to harness knowledge of tumour biology to deliver impactful tests in patient samples for better outcomes.</p>
    </div>
  </div>
  </div>
</section>
<style>
  .ytp-chrome-top {
    display: none !important;
  }
</style>


<section class="home_recruitment">
  <div class="container">
    <div class="recruitment_content">
      <div class="content">
        <h3>Recruitment</h3>
        <p>The CRUK National Biomarker Centre provides state-of-the-art facilities where researchers can further develop both their science and their careers in a highly collaborative and supportive environment. Find information about the roles we have on offer.</p>
        <a href="#" class="button primary">Our Opportunities</a>
      </div>
    </div>
    <div class="recruitment_background" style="background: url('<?php bloginfo('template_directory'); ?>/img/news.png') center center no-repeat; background-size: cover;"></div>
  </div>
</section>

<div class="container">
  <div class="pink-circle">
    <span class="text">we are beating cancer.</span>
  </div>
</div>

<?php get_template_part( 'inc/research' ); ?>

<section class="home_stats stat_section">
  <div class="container">
    <h2>National Biomarker Centre in numbers</h2>
  </div>
  <div class="container">
    <div class="stats three">
      <div class="stat blue">
        <div class="circle">
          <span class="unit" data-count="372">372</span>
        </div>
        <span class="description">ctDNA analysis by ddPCR delivered to GCP</span>
      </div>
      <div class="stat lightblue">
        <div class="circle">
          <span class="unit" data-count="1703">1703</span>
        </div>
        <span class="description">Samples sequenced by NGS</span>
      </div>
      <div class="stat pink">
        <div class="circle">
          <span class="unit" data-count="2050">2050</span>
        </div>
        <span class="description">Samples sequenced by T7-MBD seq</span>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
