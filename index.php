<?php 
	include "_inc/tidbits.php";
	include "_inc/work-list.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The / Product & UX Design</title>
	</head>

	<body class="with-cover home">
		<?php include "_inc/nav.php" ?>
		<div class="cover">
			<?php  echo '<img src="_images/home-' . rand(1, 21) . '.jpg" alt="Cover image">' ?>
			<div class="cover-mask">&nbsp;</div>
		</div>
		<header>
			<div class="container-header">
				<h1>Hi</h1>
			</div>
			<div id="header-decoration">&nbsp;</div>
		</header>

		<main class="container">
			<div id="bio">
				<div class="intro">I&rsquo;m Raymon Sutedjo-The, <br/>a product/UX designer</div>
<!-- 				<div class="intro-secondary"></div> -->
				<div class="intro-tertiary">
					
					<p>As a designer, I strive to build products that empower people to accomplish their goals, be it personal or professional. I believe that good design helps people become better versions of themselves.</p>
					<p>Outside of design, I&rsquo;m an urban planning enthusiast and a pop culture aficionado. Fun fact: <?php echo $tidbits[rand (0, 8)]?></p>
				</div>
				<div class="intro-photo">
					<div id="intro-photo-main"><img src="_images/photo.jpg" alt="Raymon Sutedjo-The" width="120" height="120"></div>
				</div>
			</div>
			
			<h2>SELECTED DESIGN WORKS</h2>
			<hr class="separator" />
			<ul class="list-item-visual list-item-visual-s">
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
				?>
				<li class="link-tile">
					<div><a href="work.php">See all works</a><div id="link-decoration">&nbsp;</div>&nbsp;</div>
				</li>
			</ul>
		</main>
		
		<?php include "_inc/footer.php" ?>
		
	</body>
	
</html>