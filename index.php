<?php /*
Plugin Name: EasyReply ( DISCONTINUED )
Plugin URI: http://easyreply.dcoda.co.uk/
Description: Discontinued as similar functionality is now part of WordPress
Author: dcoda
Author URI: 
Version: DISCONTINUED
License: GPLv2 or later
*/
@require_once  dirname ( __FILE__ ) . '/library/wordpress/application.php';
if (class_exists("wv43v_application"))
{
	new wv43v_application ( __FILE__);
}