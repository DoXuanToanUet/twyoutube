<?php 
/**
 * Plugin Name:       TW Youtube Api
 * Plugin URI:        https://doxuantoan.com/
 * Description:       Tạo trang Youtube từ Youtube api 
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            ToanWordpress
 * Author URI:        https://doxuantoan.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

    if( !defined('ABSPATH')){
            exit();
    }
    if( !defined('TW_YOUTUBE_API_PLUGIN_DIR_PATH') ){
        define( "TW_YOUTUBE_API_PLUGIN_DIR_PATH", plugin_dir_path(__FILE__) );
    }
    if( !defined('TW_YOUTUBE_API_PLUGIN_URL') ){
        define( "TW_YOUTUBE_API_PLUGIN_URL",   plugins_url()."/tw-youtube");
    }

    // echo TW_YOUTUBE_API_PLUGIN_DIR_PATH;
    // echo TW_YOUTUBE_API_PLUGIN_URL;
    

//Theme Options
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'TW General Settings',
        'menu_title' => 'TW Settings',
        'menu_slug'  => 'tw-general-settings',
        'capability' => 'manager_options',
        'redirect'   => false
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'TW Youtube Settings',
        'menu_title'  => 'TW Youtube ',
        'parent_slug' => 'tw-general-settings',
    ));

}
// include_once TW_YOUTUBE_API_PLUGIN_DIR_PATH ."/inc/inc_twyoutubeapi_acf.php";
include_once TW_YOUTUBE_API_PLUGIN_DIR_PATH ."/inc/inc_twyoutubeshort.php";
include_once TW_YOUTUBE_API_PLUGIN_DIR_PATH ."/inc/inc_twyoutubeshort_playlist.php";
include_once TW_YOUTUBE_API_PLUGIN_DIR_PATH ."/inc/inc_twyoutubeshort_search.php";
include_once TW_YOUTUBE_API_PLUGIN_DIR_PATH ."/inc/inc_twyoutubeshort_story.php";
function tw_youtubeapi_scripts()
{
    $version = '1.0';
    wp_enqueue_style('twYoutubeapiCss', TW_YOUTUBE_API_PLUGIN_URL .'/assets/css/style.css', array(), $version, 'all');
    wp_enqueue_script('twYoutubeapiJs', TW_YOUTUBE_API_PLUGIN_URL .'/assets/js/main.js', array(), $version, true);
    wp_enqueue_script('jquery'); # Loading the WordPress bundled jQuery version.
}

add_action('wp_enqueue_scripts', 'tw_youtubeapi_scripts');


add_action( 'admin_enqueue_scripts', 'twload_admin_style' );
function twload_admin_style() {
    wp_register_style( 'twytadmin_css', TW_YOUTUBE_API_PLUGIN_URL  . '/assets/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'twytadmin_css', TW_YOUTUBE_API_PLUGIN_URL  . '/assets/css/admin-style.css', false, '1.0.0' );
  
   
}

// include_once TW_YOUTUBE_API_PLUGIN_DIR_PATH ."/inc/inc_twyoutubeapi.php";
function twyt_active_func(){
     // create page when active plugin 
    $yt_post = array(
        'post_title'    => "Youtube page",
        'post_content'  => "",// shortcode
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name" => "youtube-channel"
    );
    
    // Insert the post into the database
    $yt_id= wp_insert_post( $yt_post );
    
}
register_activation_hook(__FILE__,'twyt_active_func');

add_filter( 'page_template', 'twyt_page_template' );
function twyt_page_template($page_template){
   
    if ( is_page( 'youtube-channel' ) ) {
        $page_template = dirname( __FILE__ ) . "/twtemplate-page/tbl_twyoutubeapi.php";
    }
    return $page_template;
}
  
