<?php 
//custom post register
// add_post_type_support( "sliders", "thumbnail" ); 


function register_custom_type(){ 
  

   //  features 
    register_post_type("features", array(
      'show_in_rest' => true, 
       'has_archive' => true,
       "supports" => array("title", "editor"), 
       "public" => true, 
       "show_ui" => true, 
       "hierarchical" => true,
       "labels" => array(
          "name" => "Features", 
          "add_new_item" => "Add New Feature", 
          "edit_item" => "Edit Feature", 
          "all_items" => "All Features", 
          "singular_name" => "Feature"
       ), 
       "menu_icon" => "dashicons-screenoptions"
    )
    ); 

    //  testimonials  
    register_post_type("testimonials", array(
      'show_in_rest' => true, 
       'has_archive' => true,
       "supports" => array("title", "editor"), 
       "public" => true, 
       "show_ui" => true, 
       "hierarchical" => true,
       "labels" => array(
          "name" => "Testimonials", 
          "add_new_item" => "Add New Testimonial", 
          "edit_item" => "Edit Testimonial", 
          "all_items" => "All Testimonials", 
          "singular_name" => "Testimonial"
       ), 
       "menu_icon" => "dashicons-testimonial"
    )
    ); 

    //  testimonials  
    register_post_type("videos", array(
      'show_in_rest' => true, 
       'has_archive' => true,
       "supports" => array("title", "editor"), 
       "public" => true, 
       "show_ui" => true, 
       "hierarchical" => true,
       "labels" => array(
          "name" => "videos", 
          "add_new_item" => "Add New video", 
          "edit_item" => "Edit video", 
          "all_items" => "All videos", 
          "singular_name" => "video"
       ), 
       "menu_icon" => "dashicons-video-alt3"
    )
    ); 
}


add_action( 'init', 'register_custom_type' );

add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/webduel', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
   
  ) );
} );

function my_awesome_func(){ 
   return get_field('logo', 'option'); 
}



