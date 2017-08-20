<?php 

function simplewptheme_setup(){
	//featured image support
	add_theme_support('post-thumbnails');
	//menus
	register_nav_menus(array(
           'primary' => __('Primary Menu')
		));
}

add_action('after_setup_theme','simplewptheme_setup');

//custom excerpt length

function simplewptheme_excerpt_length(){
    return 60;
}

add_filter('excerpt_length','simplewptheme_excerpt_length');

function simplewptheme_sidebar_init($id){
  register_sidebar( array(
		'name'          => __( 'Sidebar', 'simplewptheme' ),
		'id'            => 'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action('widgets_init','simplewptheme_sidebar_init');