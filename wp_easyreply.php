<?php
/*
Plugin Name: WP_EasyReply
Plugin URI: http://www.dcoda.co.uk/index.php/tag/wp_easyreply/
Description: Start replies to all comments since you last commented.
Author: DCoda Ltd
Version: 2.1.0
Author URI: http://www.dcoda.co.uk
$HeadURL$
$LastChangedDate$
$LastChangedRevision$
$LastChangedBy$
*/
require_once(dirname(__FILE__).'/library/classes/base.php');
require_once(ABSPATH.'/wp-admin/includes/admin.php');
require_once(ABSPATH.'/wp-admin/includes/upgrade.php');
class wp_easyreply extends dcbase7  {}
new wp_easyreply(__FILE__,'wp','easyreply');
?>
