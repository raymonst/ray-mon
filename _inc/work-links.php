<?php
	$prev = $work[$key - 1];			
	$prevTitle = $prev[0];
	$prevSubtitle = $prev[1];
	$prevLink = $prev[2];

	$next = $work[$key + 1];
	$nextTitle = $next[0];
	$nextSubtitle = $next[1];
	$nextLink = $next[2];
?>
			
<a href="<?php echo $prevLink;?>"><?php echo $prevTitle?></a><?php echo $prevSubtitle?>
	
<br/>

<a href="<?php echo $nextLink;?>"><?php echo $nextTitle?></a><?php echo $nextSubtitle?></a>

