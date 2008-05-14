<?php
class dc_easyreply_1_0_1 extends dc_base_2_1_0 {
	function init()
	{
		add_action('comment_form', array($this,'reply'),'the_ID');	
	}

	function reply($post_id)
	{
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
		$reply=$this->loadHTML('easyreply_reply');
  		foreach($coms as $com) 
  		{
    			if ($com->comment_date>$lastpost)
   			{
   				$newreply=$reply;
   				$newreply=str_replace('@@commentor@@',$com->comment_author,$newreply);
   				$newreply=str_replace('@@comment@@',htmlentities(@$com->comment_content),$newreply);
     				$posters.=$newreply;
  			}
  		}
  		if ($posters!="")
  		{
  			$page=$this->loadHTML('easyreply');
  			$page=str_replace('@@posters@@',$posters,$page);
  			echo $page;
  		}
	}
}
?>