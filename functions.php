<?php


  
  add_theme_support('post-thumbnails');
  add_theme_support("title-tag");

  function english_school_css_pages() {
    wp_enqueue_style("style", get_template_directory_uri() . '/style.css');
    wp_enqueue_style("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css");
    wp_enqueue_style("blog", get_template_directory_uri() . '/css/blog.css');
    wp_enqueue_style("wordpress-blog", get_template_directory_uri() . '/css/wordpress-blog.css');

    wp_enqueue_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
    wp_enqueue_script("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js");
  }
  
  add_action( "wp_enqueue_scripts", "english_school_css_pages");









// add widgets
  function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


?>