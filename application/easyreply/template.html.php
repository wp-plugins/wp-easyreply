<?php
/*
$HeadURL: http://plugins.svn.wordpress.org/wp-easyreply/trunk/classes/easyreply/template.html.php $
$LastChangedDate: 2010-06-13 22:42:44 +0100 (Sun, 13 Jun 2010) $
$LastChangedRevision: 252197 $
$LastChangedBy: damianm666 $
*/
?><script>
	function reply()
	{
		document.forms["commentform"].comment.value+=document.forms["commentform"].ReplyNew.value;
	}
</script>
<small>
 	<a href="javascript:reply()">
 		Reply New
 	</a>
 </small>
 <textarea name='ReplyNew' id='ReplyNew' style='visibility: hidden'>@@posters@@</textarea>
