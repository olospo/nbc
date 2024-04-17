<?php /* Header */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '|', true, 'left' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimal-ui" />
<?php wp_head(); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/img/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/img/favicon-16x16.png"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> 
<?php if( get_field('social_metadata', 'options') ): echo get_field('social_metadata', 'options'); endif; // Social Metadata ?>
<?php if( get_field('google_analytics', 'options') ): echo get_field('google_analytics', 'options'); endif; // Google Analytics Code ?>
<meta name="google-site-verification" content="add-content-here" />
</head>
<body <?php body_class(); ?>>

<nav class="menu">
  <div class="container">
    <div class="primary twelve columns">
<?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
      <a class="menu-toggle mobile_menu" aria-controls="primary-menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
    
    <div class="mobile">
      <?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
    </div>
  </div>
</nav>
<header class="main">
  
  <div class="container">
    <div class="logo six columns">  
      <h1 class="site-title">
        <?php get_template_part( 'inc/logo' ); ?>
      </h1>
    </div>

    
    <!-- Search -->
    <!-- <div class="search" role="search">
      <div class="search_form"><?php get_search_form(); ?></div>
    </div> -->
  </div>
</header>

