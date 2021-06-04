<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title('', true); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Sans+Pro:400,700,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>


    <div class="animsition">

	  <header id="navigation" class="navbar-inverse navbar-fixed-top">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <?php
              // check to see if the logo exists and add it to the page
              if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
               <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" ></a>
                <?php // add a fallback if the logo doesn't exist
              else : ?>
               <h1 class="site-title"><a class="navbar-brand" href="<?php echo home_url(); ?>">
                 <?php bloginfo( 'name' ); ?>
                 </a></h1>
              <?php endif; ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav ml-auto', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
                </div>
              </nav>

			       </div>
    </header>
