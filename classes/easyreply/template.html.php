<?php
/*
$HeadURL$
$LastChangedDate$
$LastChangedRevision$
$LastChangedBy$
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
