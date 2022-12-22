<?php
add_theme_support( 'post-thumbnails' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
  register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'header_menu_reponsive' => 'Header Menu Reponsive',
    'footer_menu' => 'Footer Menu',
  )
);
}

require_once ( get_stylesheet_directory() . '/theme-option.php' );
function theme_scripts() {

  //stryling kay lye//
    //wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css' );
    
    //wp_enqueue_style( 'favicon', get_template_directory_uri() . '/assets/images/favicon.ico' );
    
    
    //scripts//

    //script kay lye//
    //wp_enqueue_script( 'jquery-min',get_template_directory_uri() .'/assets/plugins/jquery/jquery.min.js', array(), false, true );
   
    
    
    // wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    // wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_uri());   
    //wp_enqueue_script( 'jquery-3.1.0.min','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), false, true );
    // wp_enqueue_script( 'main-lib', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );
    // wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
    //wp_localize_script('custom', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
  }
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
/*
add_action('init', 'slider');
function slider()
{
    $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Add New', 'Slide'),
        'add_new_item' => __('Add New Slide'),
        'edit_item' => __('Edit Slide'),
        'new_item' => __('New Slide'),
        'view_item' => __('View Slide'),
        'search_items' => __('Search Slide'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('slider', $args);

}
add_action('init', 'all_menu');
function all_menu()
{
    $labels = array(
        'name' => _x('Menus', 'post type general name'),
        'singular_name' => _x('Menu', 'post type singular name'),
        'add_new' => _x('Add New', 'Menu'),
        'add_new_item' => __('Add New Menu'),
        'edit_item' => __('Edit Menu'),
        'new_item' => __('New Menu'),
        'view_item' => __('View Menu'),
        'search_items' => __('Search Menu'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'all_menu_icon' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'all_menu_position' => null,
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('all_menu', $args);

}
add_action('init', 'all_menu_category', 0);
function all_menu_category()
{
    $labels = array(
        'name' => _x('Category', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' => __('Search Category'),
        'all_items' => __('All Category'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update  Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category'),
        'all_menu_name' => __('Category'),
    );
    register_taxonomy('all_menu_category', array('all_menu'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'all_menu_category'),
    ));
}

add_action('init', 'jobs');
function jobs()
{
    $labels = array(
        'name' => _x('Jobs', 'post type general name'),
        'singular_name' => _x('jobs', 'post type singular name'),
        'add_new' => _x('Add New', 'Jobs'),
        'add_new_item' => __('Add New Jobs'),
        'edit_item' => __('Edit Jobs'),
        'new_item' => __('New Jobs'),
        'view_item' => __('View Jobs'),
        'search_items' => __('Search jobs'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('jobs', $args);

}
add_action('init', 'job_category', 0);
function job_category()
{
    $labels = array(
        'name' => _x('Category', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' => __('Search Category'),
        'all_items' => __('All Category'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update  Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category'),
        'menu_name' => __('Category'),
    );
    register_taxonomy('job_category', array('jobs'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'job_category'),
    ));
}*/

function crunchify_stop_loading_wp_embed_and_jquery() {
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
        //wp_deregister_script('jquery');  // Bonus: remove jquery too if it's not required
    }
}
add_action('init', 'crunchify_stop_loading_wp_embed_and_jquery');
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
add_filter( 'embed_oembed_discover', '__return_false' );
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
//add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
add_filter('show_admin_bar', '__return_false');
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
/*
function theme_name_get_year_archive_array() {
  $years = array();
  $years_args = array(
    'type' => 'monthly',
    'format' => 'custom', // My advise: WordPress Core shoud be add support "format=array" to keep it easy to catch for many custom cases
    'before' => '',
    'after' => '|',
    'echo' => false,
    'post_type' => 'post',
    'order' => 'ASC'
  );
 
  // Get Years
  $years_content = wp_get_archives($years_args);
  if (!empty($years_content) ) {
    $years_arr = explode('|', $years_content);
    $years_arr = array_filter($years_arr, function($item) {
      return trim($item) !== '';
    }); // Remove empty whitespace item from array
 
    foreach($years_arr as $year_item) {
      $year_row = trim($year_item);
      preg_match('/href=["\']?([^"\'>]+)["\']>(.+)<\/a>/', $year_row, $year_vars);
 
      if (!empty($year_vars)) {
        $years[] = array(
          'name' => $year_vars[2], // Ex: January 2020
          'value' => $year_vars[1] // Ex: http://demo.com/2020/01/
        );
      }
    }
  }
 
  return $years;
}
*/



 
// Run before the headers and cookies are sent.
//add_action( 'after_setup_theme', 'wpdocs_custom_login' );





/*add_action('init','custom_login');

function custom_login(){
 global $pagenow;
 if( 'wp-login.php' == $pagenow && $_GET['action']!="logout") {
  wp_redirect(home_url());
  exit();
 }
}*/


add_action('init', 'Service');
function Service()
{
    $labels = array(
        'name' => _x('Service', 'post type general name'),
        'singular_name' => _x('Service', 'post type singular name'),
        'add_new' => _x('Add New', 'Service'),
        'add_new_item' => __('Add New Service'),
        'edit_item' => __('Edit Service'),
        'new_item' => __('New Service'),
        'view_item' => __('View Service'),
        'search_items' => __('Search Service'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('Service', $args);

}


add_action('init', 'Review');
function Review()
{
    $labels = array(
        'name' => _x('Review', 'post type general name'),
        'singular_name' => _x('Review', 'post type singular name'),
        'add_new' => _x('Add New', 'Review'),
        'add_new_item' => __('Add New Review'),
        'edit_item' => __('Edit Review'),
        'new_item' => __('New Review'),
        'view_item' => __('View Review'),
        'search_items' => __('Search Review'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('Review', $args);

}