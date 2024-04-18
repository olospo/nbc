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
    <div class="video_background" style="background: url('<?php bloginfo('template_directory'); ?>/img/news.jpg') center center no-repeat; background-size: cover;"></div>
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

<section class="home_stats stat_section">
  <div class="container">
    <div class="stats three">
      <div class="stat blue">
        <div class="circle">
          <span class="unit" data-count="6">6</span>
        </div>
        <span class="description">Programmes</span>
      </div>
      <div class="stat lightblue">
        <div class="circle">
          <span class="unit" data-count="97">97</span>
        </div>
        <span class="description">Publications</span>
      </div>
      <div class="stat pink">
        <div class="circle">
          <span class="unit" data-count="2" data-prefix="£" data-postfix="M">2</span>
        </div>
        <span class="description">Funding</span>
      </div>
    </div>
  </div>
</section>

<section class="home_news">
  <div class="container">
  <div class="news_content">
    <div class="content">
      <h3>Latest News</h3>
      <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
    </div>
  </div>
  <div class="news_background" style="background: url('<?php bloginfo('template_directory'); ?>/img/news.png') center center no-repeat; background-size: cover;"></div>
  </div>
</section>

<div class="container">
  <div class="blue-circle">
    <span class="text">we are beating cancer.</span>
  </div>
</div>

<section class="home_research">
  <span class="line"></span>
  <div class="container">
    <h2>Our research programmes</h2>
    <article>
      <img scr="" />
      <h3>Nucleic Acid Biomarkers</h3>
    </article>
    <article>
      <img scr="" />
      <h3>Translational Immunology</h3>
    </article>
    <article>
      <img scr="" />
      <h3>Rare Cells</h3>
    </article>
    <article>
      <img scr="" />
      <h3>Preclinical Pharmacology</h3>
    </article>
    <article>
      <img scr="" />
      <h3>Digital Cancer Research</h3>
    </article>
    <article>
      <img scr="" />
      <h3>Tissue Biomarkers</h3>
    </article>
    <article>
      <img scr="" />
      <h3>Bioinformatics & Biostatistics</h3>
    </article>
    <article>
      <img scr="" />
      <h3>Operations</h3>
    </article>
  </div>
</section>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
