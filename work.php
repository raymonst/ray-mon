<?php 
	include "_inc/work-list.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<?php $page = "work"; include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The / Design Portfolio</title>
	</head>

	<body>
		<?php include "_inc/nav.php" ?>
		
		<header>
			<div class="title">
				<h1>SELECTED DESIGN WORKS</h1>
			</div>
		</header>
		
		<main class="container">
			<ul class="list-item-visual">
				<?php
 					for ($i = 0; $i <= 2; $i++) {
 					    $title = $work[$i][0];
 					    $description = $work[$i][1];
 					    $url = $work[$i][2];
 					    $image = $work[$i][3];
 						echo '<li>';
 						echo '<figure><a href="' . $url. '"><img src="_images/' . $image . '" alt="' . $title . '"></a></figure>';
 						echo '<div class="list-item-visual-title"><span><a href="' . $url. '">' . $title . '</a></span></div>';
 						echo '<div class="list-item-visual-description"><span>' . $description . '</span></div>';
 						echo '</li>';
 					};

 					/* OUTPUT:
 						<li>
 							<figure><a href="#"><img src="" alt=""></a></figure>
 							<div class="list-item-visual-title"><span><a href="#">TITLE</a></span></div>
 							<div class="list-item-visual-description"><span>DESCRIPTION</span></div>
 						</li>
 					*/
				?>
			</ul>

			<h2>MORE DESIGN WORKS</h2>
			<hr class="separator" />
			<ul class="list-item-visual list-item-visual-s">
				<?php
 					for ($i = 3; $i <= 7; $i++) {
 					    $title = $work[$i][0];
 					    $description = $work[$i][1];
 					    $url = $work[$i][2];
 					    $image = $work[$i][3];
 						echo '<li>';
 						echo '<figure><a href="' . $url. '"><img src="_images/' . $image . '" alt="' . $title . '"></a></figure>';
 						echo '<div class="list-item-visual-title"><span><a href="' . $url. '">' . $title . '</a></span></div>';
 						echo '<div class="list-item-visual-description"><span>' . $description . '</span></div>';
 						echo '</li>';
 					};
				?>
			</ul>

			<h2>WRITING</h2>
			<hr class="separator" />
			<ul class="list-item-visual list-item-visual-s">
				<?php
 					for ($i = 0; $i < count($workWriting); $i++) {
 					    $title = $workWriting[$i][0];
 					    $description = $workWriting[$i][1];
 					    $url = $workWriting[$i][2];
 					    $image = $workWriting[$i][3];
 						echo '<li>';
 						echo '<figure><a href="' . $url. '" target="_blank"><img src="_images/' . $image . '" alt="' . $title . '"></a></figure>';
 						echo '<div class="list-item-visual-title"><span><a href="' . $url. '" target="_blank">' . $title . '</a>&nbsp;<img src="_images/icon-link-external.svg" alt="Open in new tab" width="12" height="12"></span></div>';
 						echo '<div class="list-item-visual-description"><span>' . $description . '</span></div>';
 						echo '</li>';
 					};
				?>
			</ul>

		</main>
		
		<?php include "_inc/footer.php" ?>		
		
	</body>

</html>