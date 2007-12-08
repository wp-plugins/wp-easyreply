<?php
/*
Plugin Name: WP_EasyReply
Plugin URI: http://www.dcoda.co.uk/index.php/downloads/wordpress/wp_easyreply/
Description: Start replies to all comments since you last commented.
Author: DCoda Ltd
Version: 1.0
Author URI: http://www.dcoda.co.uk
*/

add_action('comment_form', 'DCoda_WP_EasyReply','the_ID');

function DCoda_WP_EasyReply($post_id)
{
  $post=get_postdata($post_id);
  $post=the_post();
  $user=wp_get_current_user(); 
  $coms=get_approved_comments($post_id);
  $lastpost = '1900-01-01 00:00 GMT';
  foreach($coms as $com)
  {
    if ($user->id==$com->user_id)
    {
     $lastpost=$com->comment_date;
    } 
  }
  $posters="";
  foreach($coms as $com) 
  {
    if ($com->comment_date>$lastpost)
   {
     $lf=chr(10);
     $posters.="@$com->comment_author - <blockquote>".htmlentities(@$com->comment_content)."</blockquote>$lf$lf";
   }
  }
  if ($posters!="")
  {
   echo "<small><a style='cursor:hand' onclick='document.forms[\"commentform\"].comment.value+=document.forms[\"commentform\"].ReplyNew.value')>Reply New</a></small>"; 
   echo "<textarea name='ReplyNew' id='ReplyNew' style='visibility: hidden'>$posters</textarea>";
  }
 }
?>