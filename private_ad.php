<?php
/*
 * Plugin Name:       Private Ad
 * Plugin URI:        https://dreamreflectionmedia.com/
 * Description:       Welcome to the Private ad Plugin you can Show your own ad to your post via Private ad plugin. it will help you to grow your business.
 * Version:           1.0
 * Requires at least: 5.6
 * Author:            Pankaj Bachhal
 * Author URI:        https://www.instagram.com/pankaj_bachhal/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       privatead
 * Tags:              private ad, ad , advertisement, dream reflection media, Private, pankaj bachhal, dynamic ad, show ad
*/
defined('ABSPATH') || die("You Can't Access this File Directly");
define('PRIVATEAD_DIR_PATH', __FILE__); // PLUGIN_DIR_PATH - Global variable

class private_ad {
    function __construct(){
        $this->plugin = plugin_basename(__FILE__);
        function load_ad_plugin_media_file_asap() {
            wp_enqueue_media();
            }
            add_action( 'admin_enqueue_scripts', 'load_ad_plugin_media_file_asap' );
    }
};

$privatead = new private_ad();

add_filter( 'plugin_action_links_' .plugin_basename(__FILE__), 'privateadlnk' );

function privateadlnk($privatead_actions){
    $gotoprivatead = array(
        '<a href="' . admin_url( 'admin.php?page=private-advertisement' ) .'">Go To</a>',
        );
        $privatead_actions = array_merge( $privatead_actions, $gotoprivatead );
        return $privatead_actions;
}

register_activation_hook(__FILE__, function(){
    global $wpdb;
    $private_ad_plgn_table = $wpdb->prefix . 'privatead';
    $get_charset = $wpdb->get_charset_collate();
    $sql_add = "CREATE TABLE $private_ad_plgn_table (
    id int(11) NOT NULL AUTO_INCREMENT,
    advertisement_name varchar(200) NULL,
    advertisement_category varchar(200) NULL,
    advertisement_redirection varchar(200) NULL,
    advertisement_company varchar(200) NULL,
    advertisement_delay varchar(200) NULL,
    advertisement__images varchar(200) NULL,
    PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql_add );
});

register_deactivation_hook(__FILE__,function(){
    global $wpdb;
    $private_ad_plgn_table = $wpdb->prefix . 'privatead';
    $sql_remove = "DROP TABLE IF EXISTS $private_ad_plgn_table";
    $wpdb->query($sql_remove);
    
});

// backend style & script
add_action('admin_enqueue_scripts','private_ad_scripts');
function private_ad_scripts(){
    wp_enqueue_style('private_ad__dev__css', plugins_url('/assets/private_ad_css/advertisement.css', __FILE__) );
    wp_enqueue_script('private_ad__dev__javascript', plugins_url('/assets/private_ad_js/advertisement.js',  __FILE__));
    wp_enqueue_script('jquery');
    wp_localize_script('private_ad__dev__javascript','ajax_object',admin_url("admin-ajax.php"));
}

// Adding private ad plugin to the menu 
function add_private_ad__plugin_to_menu(){
    add_menu_page(
        "private_advertisement", //page title
        "Advertisement", //menu title
        "manage_options", //admin level
        "private-advertisement", //page slug ~ parent slug
        "private_advertisement__main__callback__function", //callback function
        "dashicons-admin-site-alt2", //icon url
        5 //position
        );

        add_submenu_page(
            "private-advertisement", //parent slug
            "My Categories", //page title
            "My Categories", //menu title
            "manage_options", //capability = user level access
            "my-categories", //menu slug
            "private_advertisement__submain__callback__function"  //callback function
            );
            
        add_submenu_page(
            "private-advertisement", //parent slug
            "My Ads", //page title
            "My Ads", //menu title
            "manage_options", //capability = user level access
            "my-ads", //menu slug
            "private_advertisement__submain__my_ads_callback__function"  //callback function
            );
}
add_action("admin_menu","add_private_ad__plugin_to_menu");


function private_advertisement__submain__callback__function(){
//all page functions
require_once plugin_dir_path( __FILE__ )."/advertisement_view/categories.php";
wp_enqueue_style('private_ad__bootstrap_min__css', plugins_url('/assets/private_ad_css/bootstrap.min.css', __FILE__) );
wp_enqueue_script('private_ad__js', plugins_url('/assets/private_ad_js/advertisement.js', __FILE__));
wp_enqueue_script('proslider__icon_js', plugins_url('/assets/projs/proicon.js', __FILE__));
wp_enqueue_script('proslider__bootstrap_bundle_js', plugins_url('/assets/private_ad_js/bootstrap.bundle.min.js', __FILE__));
}


function private_advertisement__main__callback__function(){
    //all page functions
    require_once plugin_dir_path( __FILE__ )."/advertisement_view/firstview_of_ad.php";
    wp_enqueue_style('private_ad__bootstrap_min__css', plugins_url('/assets/private_ad_css/bootstrap.min.css', __FILE__) );
    wp_enqueue_script('private_ad__js', plugins_url('/assets/private_ad_js/advertisement.js', __FILE__));
    wp_enqueue_script('proslider__icon_js', plugins_url('/assets/projs/proicon.js', __FILE__));
    wp_enqueue_script('proslider__bootstrap_bundle_js', plugins_url('/assets/private_ad_js/bootstrap.bundle.min.js', __FILE__));
}

function private_advertisement__submain__my_ads_callback__function(){
    //all page functions
    require_once plugin_dir_path( __FILE__ )."/advertisement_view/my_ads.php";
    wp_enqueue_style('private_ad__bootstrap_min__css', plugins_url('/assets/private_ad_css/bootstrap.min.css', __FILE__) );
    wp_enqueue_script('private_ad__js', plugins_url('/assets/private_ad_js/advertisement.js', __FILE__));
    wp_enqueue_script('proslider__icon_js', plugins_url('/assets/projs/proicon.js', __FILE__));
    wp_enqueue_script('proslider__bootstrap_bundle_js', plugins_url('/assets/private_ad_js/bootstrap.bundle.min.js', __FILE__));
}

// Adding Private Ad Data To The Data


//slider data
add_action('wp_ajax_private_ad_data','sub_ajax_private_ad_data');
add_action('wp_ajax_nopriv_private_ad_data','sub_ajax_private_ad_data');

function sub_ajax_private_ad_data(){
    if($_REQUEST['param']=='save_plugin'){
    global $wpdb;
    $private__ad__table = $wpdb->prefix.'privatead';

    $private__ad_name__is = sanitize_text_field($_REQUEST['get_Advertisement_name']);
    $private__ad_category__is = sanitize_text_field($_REQUEST['get_Advertisement_category']);
    $private__ad_redirection__is = sanitize_text_field($_REQUEST['get_Advertisement_Redirection']);
    $private__ad_company__is = sanitize_text_field($_REQUEST['get_Advertisement_company']);
    $private__ad_delay__is = sanitize_text_field($_REQUEST['get_Advertisement_delay_time']);
    $private__ad_images__is = sanitize_text_field($_REQUEST['get__ad_banner']);
    
    $data = array(
    "advertisement_name"=> $private__ad_name__is,
    "advertisement_category"=> $private__ad_category__is,
    "advertisement_redirection"=> $private__ad_redirection__is,
    "advertisement_company"=> $private__ad_company__is,
    "advertisement_delay"=> $private__ad_delay__is,
    "advertisement__images"=> $private__ad_images__is
    ); 
    $wpdb->insert($private__ad__table, $data);
    echo json_encode(array("status"=>1,"message"=>'success',"data"=>esc_attr($data)));
    }
    wp_die();
    }


// Deleting the ad data by id 
//delete the data from the table
add_action('wp_ajax_delete_my__advertisement_by_id','pri_ad_confirmed_del_by_iddd');

add_action('wp_ajax_nopriv_delete_my__advertisement_by_id','pri_ad_confirmed_del_by_iddd');

function pri_ad_confirmed_del_by_iddd(){
if($_REQUEST['param']=='save_plugin'){

global $wpdb;
$prefix = $wpdb->prefix;
$table = $prefix.'privatead';
$where = array( 'id' => sanitize_text_field($_REQUEST['id']) );
$wpdb->delete($table, $where);
$success = sanitize_text_field('success');
$statusval = sanitize_text_field(1);

echo json_encode(array("status"=>esc_attr($statusval),"msg"=>esc_attr($success)));

}
wp_die();

}

// Updating the ad data by id

add_action('wp_ajax_update_edited_ads','pri_ad_confirmed_edit_by_iddd');
add_action('wp_ajax_nopriv_update_edited_ads','pri_ad_confirmed_edit_by_iddd');
function pri_ad_confirmed_edit_by_iddd(){
    if (!isset($_REQUEST['rdm-nonce']) || ! wp_verify_nonce( $_REQUEST['rdm-nonce'], 'edit__mypr_ad' ) ) {
        wp_send_json_error(['message' => 'Error']);
    }
    else if($_REQUEST['param']=='save_plugin'){
    // if($_REQUEST['param']=='save_plugin'){
        global $wpdb;
        $prefix = $wpdb->prefix;
        $ad_table___update = $prefix.'privatead';

        $newAdCategory = sanitize_text_field($_REQUEST['add-new-ad-category']);
        $newAdRedirection = sanitize_text_field($_REQUEST['add-new-ad-redirection-link']);
        $newAdDelayTime = sanitize_text_field($_REQUEST['ad-new-time-delay']);
        $newAdBanner = sanitize_text_field($_REQUEST['ad-new-banner']);

        $advertisement_updated__data = array(
            "advertisement_category"=> $newAdCategory,
            "advertisement_redirection"=> $newAdRedirection,
            "advertisement_delay"=> $newAdDelayTime,
            "advertisement__images"=> $newAdBanner
        );
        $where_ad = array( 'id' => sanitize_text_field($_REQUEST['id']) );
        $wpdb->update($ad_table___update, $advertisement_updated__data, $where_ad);
       
        $adding_updating__success = sanitize_text_field('success'+ $_REQUEST['id']);
        $updating_ad_status = sanitize_text_field(1);

        echo json_encode(array("status"=>esc_attr($_REQUEST['id']),"msg"=>esc_attr($adding_updating__success)));
    }
    wp_die();
}


add_filter( 'the_content', 'pri_ad_confirmed_insersion_of_pri_ad_post' );
 
function pri_ad_confirmed_insersion_of_pri_ad_post( $content ) {
    global $wpdb;
    $private_add_data_result = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}privatead ", OBJECT));
    foreach ( $private_add_data_result as $private_add_data_key=>$private_value22 ) {
            $id = $private_add_data_result[$private_add_data_key]->id;
            $advertisement_category = $private_add_data_result[$private_add_data_key]->advertisement_category;
            $advertisement_redirection = $private_add_data_result[$private_add_data_key]->advertisement_redirection;
            $advertisement_company = $private_add_data_result[$private_add_data_key]->advertisement_company;
            $advertisement_delay = $private_add_data_result[$private_add_data_key]->advertisement_delay;
            $advertisement__images = $private_add_data_result[$private_add_data_key]->advertisement__images;
   
  
     
    $ad_code = '<div id="ad_banner_div"><a href="'.$advertisement_redirection.'" id="ad_redirection" target="_blank"><img id="ad_real_bannner" src="'.$advertisement__images.'" width="100%" style="object-fit: cover;"/></a></div><style>img#ad_real_bannner{width:100%; object-fit:cover;}</style>';
 
    if ( is_single()) {
        if( in_category($advertisement_category)){
            
        return pri_ad_confirmed_insersion_of_pri_ad_post_after_para( $ad_code, 3, $content );
        }
    }
     }
     
    return $content;
}
  
// Parent Function
  
function pri_ad_confirmed_insersion_of_pri_ad_post_after_para( $insertion, $paragraph_id, $content ) 
{
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    foreach ($paragraphs as $index => $paragraph) {
 
        if ( trim( $paragraph ) ) {
            $paragraphs[$index] .= $closing_p;
        }
 
        if ( $paragraph_id == $index + 1 ) {
            $paragraphs[$index] .= $insertion;
        }
    }
     
    return implode( '', $paragraphs );
}


 
$second_ad_code = $first_ad_code;
 
if ( is_single()) {
    if( in_category('second')){
// $content = pri_ad_confirmed_insersion_of_pri_ad_post_after_para( $first_ad_code, 3, $content ); 
$content = pri_ad_confirmed_insersion_of_pri_ad_post_after_para( $second_ad_code, 6, $content );
return $content;
    }


}




