<?php
if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'id' => 'primary',
			'name' => __('Custom Sidebar', 'the_preppy'),
			'description' => __('A short description of the sidebar', 'the_preppy'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
		register_sidebar(array(
			'name' => 'Footer 1st Column',
			'id'   => 'footer_first_column',
			'description'   => 'Widget area for home page left column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
		register_sidebar(array(
			'name' => 'Footer 2nd Column',
			'id'   => 'footer_second_column',
			'description'   => 'Widget area for home page center column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
		register_sidebar(array(
			'name' => 'Footer 3rd Column',
			'id'   => 'footer_third_column',
			'description'   => 'Widget area for home page right column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
	}
?>
