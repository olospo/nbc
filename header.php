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
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<header class="main">
  <div class="container">
    <div class="logo four columns">  
      <h1 class="site-title">
        <?php get_template_part( 'inc/logo' ); ?>
      </h1>
    </div>
    <nav class="menu eight columns">
    <?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
      <a class="menu-toggle mobile_menu" aria-controls="primary-menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
        
      <div class="mobile">
        <?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
      </div>
    </nav>
    <!-- Search -->
    <!-- <div class="search" role="search">
      <div class="search_form"><?php get_search_form(); ?></div>
    </div> -->
  </div>
</header>