<?php
function load_stylesheet()
{
    wp_register_style('style', get_template_directory_uri() .
        '/css/main.css', array(), false, 'all');
    wp_enqueue_style('style');

    wp_enqueue_style(
        'Montserrat',
        "https://fonts.googleapis.com/css?family=Montserrat:700|Montserr
        at:normal|Montserrat:300"
    );

    wp_enqueue_style(
        'fontawesome',
        'https://use.fontawesome.com/releases/v5.2.0/css/all.css'
    );
}

add_action('wp_enqueue_scripts', 'load_stylesheet');

function add_menu_support()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_menu_support');

register_nav_menus(
    array(
        'top-menu' => __(
            'Top Menu',
            'my-blog'
        )
    )
);

add_image_size ('smallest', 150, 150, true);

function my_event_post_type(){
    $args=array(
        'labels'=>array(
            'name' => 'Events',
            'singular_name' => 'Event'
        ),
        'public'=>true,
        'has_archive'=>true,
        'supports'=>array('title' , 'editor' , 'thumbnail', 'excerpt' , 'categories'),
    );
  register_post_type('events' , $args);
  
}
add_action( 'init' , 'my_event_post_type' );

function my_taxonomies_event()
{
  $args=array(
      'labels'=>array(
          'name' => 'Events',
          'singular_name' => 'Event'
      ),
      'public'=>true,
      'hierrarcical'=>false,
  );
  register_taxonomy( 'event_category' , array('events'), $args);
}
add_action( 'init' , 'my_taxonomies_event' );