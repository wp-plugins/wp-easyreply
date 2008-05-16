<?php
/*
Plugin Name: WP_EasyReply
Plugin URI: http://www.dcoda.co.uk/index.php/downloads/wordpress/wp_easyreply/
Description: Start replies to all comments since you last commented.
Author: DCoda Ltd
Version: 2.0.0
Author URI: http://www.dcoda.co.uk
*/
require_once(dirname(__FILE__).'/library/classes/base.php');
class DCodaEasyReply extends dc_base_2_2_0  {
	function init()
	{
		$this->setPath(__FILE__);
		$this->loadClass('easyreply');
	}
}
new DCodaEasyReply();

?>
