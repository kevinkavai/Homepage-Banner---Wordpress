<?php
/**
 * Plugin Name: Homepage Banner
 * Plugin URI: 
 * Description: This plugin helps in controlling the front page banner
 * Version: 1.0
 * Author: Kevin Kavai
 * Author URI: https://twitter.com/nivekkav
 */

//  Define essentials
if (!defined('ABSPATH')) exit; 

define( 'HB_MINIMUM_WP_VERSION', '1.0' );

define( 'HB_VERSION',            '1.0' );
// define( 'HB_PLUGIN_DIR1',         plugin_dir_path(__DIR__ ) );
define( 'HB_PLUGIN_DIR',     plugin_dir_url( dirname( __FILE__ ) ).'homepage-banner/' );
define( 'HB_IMG',     plugin_dir_url( dirname( __FILE__ ) ).'homepage-banner/img/' );
define( 'HB_JS',     plugin_dir_url( dirname( __FILE__ ) ).'homepage-banner/js/' );
define( 'HB_CSS',     plugin_dir_url( dirname( __FILE__ ) ).'homepage-banner/css/' );
define( 'HB_PLUGIN_FILE',   __FILE__ );

//  Add menu for the HB banner
add_action( 'admin_menu', 'HB_banner' );

function HB_banner(){

  $page_title = 'Homepage Banner';
  $menu_title = 'Homepage Banner';
  $capability = 'manage_options';
  $menu_slug  = 'HB-banner';
  $function   = 'HB_banner_page';
  $icon_url   = 'dashicons-archive';
  $position   = 4;

  add_menu_page( $page_title,
                 $menu_title, 
                 $capability, 
                 $menu_slug, 
                 $function, 
                 $icon_url, 
                 $position );
}

if( !function_exists("HB_banner_page") ){
function HB_banner_page(){
  $out = null;

  $out = '<h1>Welcome to the HB banner page</h1>';
  $out .= '<p>This plugin works in the background to get the image banner to display</p>';

  echo $out;

  }
}


// Added scripts for our header
function newHeaderScripts(){
	wp_enqueue_script('Sly',  HB_JS. 'sly.min.js', array( 'jquery' ), TRUE);
	wp_enqueue_script('JQuery Lazy', '//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js', TRUE);
	wp_enqueue_script('JQuery Lazy Plugin', '//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js',TRUE);
	wp_enqueue_script('Facelift GFX 1', HB_JS . 'facelift_gfx_custom_plugins.js', TRUE);
	wp_enqueue_script('Facelift GFX 2', HB_JS . 'facelift_gfx_scripts.min.js', array( 'jquery') , TRUE);

	wp_enqueue_script('Jquery UI', HB_JS . 'jquery-ui.js', TRUE);
	wp_enqueue_script('Jquery Debounce', HB_JS . 'throttle-debounce.min.js', array( 'jquery'));
	wp_enqueue_script('Jquery Vide', HB_JS . 'jquery.vide.js', array( 'jquery'));
	wp_enqueue_script('HB Custom Scripts', HB_JS . 'allscripts.js', array( 'jquery'));
}

add_action( 'wp_enqueue_scripts', 'newHeaderScripts' );

// Added scripts for our header

//  Kevin added stylesheets for the HB landing
function HB_styles(){
  $src = HB_CSS. 'style.css'; 
  wp_enqueue_style('HB Banner CSS',$src);

}

add_action('wp_enqueue_scripts', 'HB_styles');
//  Kevin added stylesheets for the HB landing

// Additional functions by Kevin

// $linkKev = 'social.json';

// function smedia(){
//   global $linkKev;
  
//   $social = file_get_contents($linkKev); 
//   $smedia = json_decode($social, true);

//   $sm = $smedia["links"];
//   $smT = count($sm);

//   $s = '';
  

//   for($i = 0; $i < $smT; $i++){
// 	$link  = $sm[$i]["link"];
// 	$title = $sm[$i]["key"];
// 	$icon  = $sm[$i]["icon"];

// 	$s .= '<li>';
// 	$s .= '<a href="'.$link.'" target="_blank" title="'.$title.'">';
// 	$s .= '<span class="'.$icon.'"></span>';
// 	$s .= '</a>';
// 	$s .= '</li>';
//   }

//   return $s;
// }

// function getHomeBanner(){
// 	  // ob_start();
// 	  require 'home-banner.php';
// 	  // $out = ob_get_flush();
//     // return $out;
   
// }


// This is the shortcode that reads the content of the homepage

function getHomeBanner(){
	  require_once 'home-banner.php';
}
add_shortcode( 'home-banner', 'getHomeBanner' ); ?>