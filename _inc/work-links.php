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

<div id="work-links">
	<a  id="work-links-prev" href="<?php echo $prevLink;?>">
		<span>PREVIOUS</span><br/>
		<h4><?php echo $prevTitle?></h4>
		<?php echo $prevSubtitle?>
	</a>
	<span id="work-links-prev-arrow"></span>
	<a id="work-links-next" href="<?php echo $nextLink;?>">
		<span>NEXT</span><br/>
		<h4><?php echo $nextTitle?></h4>
		<?php echo $nextSubtitle?>
	</a>
</div>

