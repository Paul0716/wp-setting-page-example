<?php
    /*
    Plugin Name: wp-setting-page-example
    Plugin URI:  
    Description: wp-setting-page-example
    Author: paultaku
    Version: 
    Author URI: 
    */
    
    if( !class_exists("WP_pku_setting_page") ){
        class WP_pku_setting_page{
            function __construct() {
                add_action( 'admin_menu', array( $this, 'admin_menu' ) );
            }
        
            function admin_menu() {
                add_options_page(
                    'WP_pku_setting_page',
                    'WP_pku_setting_page',
                    'manage_options', // user permission
                    'WP_pku_setting_page',
                    array(
                        $this,
                        'settings_page_content'
                    )
                );
            }
        
            function  settings_page_content() {
                // code content
        	}
        }
        new WP_pku_setting_page;
    }