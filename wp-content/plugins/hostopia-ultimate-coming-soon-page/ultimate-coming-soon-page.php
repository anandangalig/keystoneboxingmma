<?php
/*
Plugin Name: Hostopia Ultimate Coming Soon Page
Plugin URI: http://www.seedprod.com
Description: Creates an Under Construction page. Based on version 1.11.1 By SeedProd. Modified by Hostopia Inc. according to WPTOD-3.
Version: 1.4
Author: Hostopia Inc.
Author URI: http://www.hostopia.com
License: GPLv2
Copyright 2014  Hostopia Inc. (email : info@hostopia.com)
*/

/**
 * Init
 *
 * @package WordPress
 * @subpackage Ultimate_Coming_Soon_Page
 * @since 0.1
 */

/**
 * Require config to get our initial values
 */
#error_reporting(E_ALL);
#ini_set('display_errors','On');

load_plugin_textdomain('ultimate-coming-soon-page',false, dirname( plugin_basename( __FILE__ ) ) . '/languages/');

require_once('framework/framework.php');
require_once('inc/config.php');

/**
 * Upon activation of the plugin, see if we are running the required version and deploy theme in defined.
 *
 * @since 0.1
 */
function seedprod_ucsp_activation() {
    if ( version_compare( get_bloginfo( 'version' ), '3.0', '<' ) ) {
        deactivate_plugins( __FILE__  );
        wp_die( __('WordPress 3.0 and higher required. The plugin has now disabled itself. On a side note why are you running an old version :( Upgrade!','ultimate-coming-soon-page') );
    }
}

/**
 * Remove some role when plugin activated.
 *
 * @since 0.1
 */
/*function remove_role_install(){
	remove_role( 'author' );
	remove_role( 'contributor' );
	remove_role( 'editor' );
	remove_role( 'subscriber' );
}
register_activation_hook(__FILE__, 'remove_role_install');*/

/**
 * Restore removed role.
 *
 * @since 0.1
 */
/*function restore_all_role_deactivate(){
	
}
register_deactivation_hook( __FILE__, 'restore_all_role_deactivate' );*/

// Disabled auto updates for current plugin.
$DISABLE_UPDATE = array( 'hostopia-ultimate-coming-soon-page');
function filter_plugin_updates_hucsp( $update ) {    
    global $DISABLE_UPDATE; // ??. wp-config.php
    if( !is_array($DISABLE_UPDATE) || count($DISABLE_UPDATE) == 0 ){  return $update;  }
    foreach( $update->response as $name => $val ){
        foreach( $DISABLE_UPDATE as $plugin ){
            if( stripos($name,$plugin) !== false ){
                unset( $update->response[ $name ] );
            }
        }
    }
    return $update;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates_hucsp' );