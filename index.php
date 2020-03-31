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
				<h1>HI</h1>
			</div>
			<div id="header-decoration">&nbsp;</div>
		</header>

		<main class="container">
			<div id="bio">
				<div class="intro">I&rsquo;m Raymon Sutedjo-The, <br/>a product/UX designer</div>
				<div class="intro-secondary">&hellip; and <?php echo $tidbits[rand (0, 9)]?></div>
				<div class="intro-tertiary">
<!-- 					<p><strong>(Skip to <a href="resume.php">resume</a> or <a href="work.php">portfolio</a>)</strong></p> -->
					<p>My design journey officially started when I attended the <a href="http://www.saic.edu/" target="_blank">School of the Art Institute of Chicago</a>, where I dabbled in fine arts before eventually graduating with a BFA in Visual Communication. I stayed in Chicago afterwards and worked at a number of digital agencies as both a visual designer and front-end developer, which gave me a broad exposure to the field. </p>
					<p>A desire for change led me to California, where I attended <a href="https://www.ischool.berkeley.edu/" target="_blank">UC Berkeley School of Information</a> and focused my studies on User Experience Design. After obtaining my Masters degree, I worked at <a href="https://www.salesforce.com/" target="_blank">Salesforce</a> as a product designer and built enterprise tools for businesses large and small. I&rsquo;m currently at <a href="https://www.medium.com/" target="_blank">Medium</a>, leading the reader experience team to create the best place to read intelligent stories on the internet.</p>
					<p>As a designer, I excel at building user-friendly digital products, crafting design systems that scale at enterprise level, and understanding how design fits within the business.</p>
					<p>Outside of design, I&rsquo;m an urban planning enthusiast and a pop culture aficionado. I might look spooky, but I&rsquo;m really nice.</p>	
				</div>
				<div class="intro-photo">
					<div id="intro-photo-main"><img src="_images/photo.jpg" alt="Raymon Sutedjo-The" width="120" height="120"></div>
					<div id="intro-photo-decoration">&nbsp;</div>
					<ul id="intro-photo-links">
						<li><a href="https://www.linkedin.com/in/raymonst/" target="_blank"><img src="_images/icon-linkedin.svg" alt="LinkedIn link" width="12" height="12"></a></li>
						<li><a href="https://twitter.com/raymonst" target="_blank"><img src="_images/icon-twitter.svg" alt="Twitter link" width="12" height="12"></a></li>
					</ul>
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