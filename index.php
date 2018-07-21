<?php 
	include "_inc/work-list.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The / UX Design</title>
	</head>

	<body class="with-cover home">
		<?php include "_inc/nav.php" ?>
		<div class="cover"><img src="_images/bg-01.jpg" alt="bg-01" width="800" height="533"></div>
		<header>
			<div class="container-header">
				<h1>HI</h1>
			</div>
			<div id="decoration">&nbsp;</div>
		</header>

		<main class="container">
			<div id="bio">
				<div class="intro">I&rsquo;m Raymon Sutedjo-The, <br/>a product/UX designer based in the Bay Area, California&hellip;</div>
				<div class="intro-secondary">&amp; I like bright colors. Bright, bright colors.</div>
				<div class="intro-tertiary">
					<p>My design journey started when I attended the School of the Art Institute of Chicago, where I dabbled in fine arts before eventually graduating with a BFA in Visual Communication. I stayed in Chicago afterwards and worked at a number of digital agencies as both a visual designer and front-end developer, which gave me a broad exposure to the field. </p>
					<p>A desire for change led me to California, where I attended UC Berkeley School of Information and focused my studies on User Experience Design. After obtainining my Masters degree, I began working at Salesforce as a product designer, where I’m still employed at the moment.</p>
					<p>As a designer, I excel at building user-friendly digital products, crafting design systems that scale at enterprise level, and understanding how design fits within the business.</p>
					<p>Outside of design, I’m an urban planning enthusiast and a pop culture aficionado. I might look spooky, but I’m really nice.</p>	
				</div>
				<div class="intro-photo"></div>
			</div>
			
			<h2>SELECTED DESIGN WORKS</h2>
			<hr class="separator" />
			<ul class="list-item-visual list-item-visual-s">
				<li>
					<figure><a href="work-conversational-analytics.php"><img src="_images/work-conversational-analytics-cover.png" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-conversational-analytics.php"><?php echo $work["conversational-analytics"][0]?></a></span></div>
					<div class="list-item-visual-description"><span><?php echo $work["conversational-analytics"][1]?></span></div>
				</li>
				<li>
					<figure><a href="work-lightning-messaging-framework.php"><img src="_images/work-lightning-messaging-framework-cover.png" alt="work-lightning-messaging-framework-cover" width="1600" height="1200"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-lightning-messaging-framework.php"><?php echo $work["lightning-messaging-framework"][0]?></a></span></div>
					<div class="list-item-visual-description"><span><?php echo $work["lightning-messaging-framework"][1]?></span></div>
				</li>
				<li>
					<figure><a href="work-analytics-learning-app.php"><img src="_images/work-analytics-learning-app-cover.png" alt="work-analytics-learning-app-cover" width="1200" height="900"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-analytics-learning-app.php"><?php echo $work["analytics-learning-app"][0]?></a></span></div>
					<div class="list-item-visual-description"><span><?php echo $work["analytics-learning-app"][1]?></span></div>
				</li>
				<li class="link-tile">
					<div><a href="work.php">See all</a><div id="link-decoration">&nbsp;</div>&nbsp;</div>
				</li>
			</ul>
		</main>
		
		<?php include "_inc/footer.php" ?>
		
	</body>
	
</html>