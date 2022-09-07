<?php
require get_theme_file_path('/inc/custom-post-type.php');
require get_theme_file_path('/inc/general-settings-fields.php');

function porfolio_scripts(){
    wp_enqueue_script('main-portfolio-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('portfolio_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('portfolio_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'porfolio_scripts');

//add nav menu
function menu_config(){ 
    register_nav_menus( 
       array(
         "main-menu" => "Main Menu",
            "footer-solutions"=> "Footer Solutions", 
            "footer-legal" => "Footer Legal", 
            "footer-links" => "Footer Links"
       )
       );  


  }
 
  add_action("after_setup_theme", "menu_config", 0);


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
    $filetype = wp_check_filetype( $filename, $mimes );
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  }, 10, 4 );
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  function fix_svg() {
    echo '';
  }
  add_action( 'admin_head', 'fix_svg' );

  add_filter( 'acf/settings/rest_api_format', function () {
    return 'standard';
} );