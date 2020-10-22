<?php 
	include "_inc/work-list.php";
	$key = 7;
	$workSelected = $work[$key];
?>

<!DOCTYPE html>
<html>
	<head>
		<?php $page = "work"; include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The / <?php echo $workSelected[0]?></title>
	</head>

	<body class="with-cover">
		<?php include "_inc/nav.php" ?>
		
		<div class="cover"><?php echo '<img src="_images/' . $workSelected[3] . '" alt="' . $workSelected[2] . '">'?></div>
		
		<header>
			<div class="title">
				<h1><?php echo $workSelected[0]?></h1>
				<div class="title-link"><a href="_files/streetsavvy-report.pdf" target="_blank" class="link-cta">read project report</a></div>
			</div>
			<span class="intro"><?php echo $workSelected[1]?></span>
			<ul class="role">
				<li>UX design</li>
				<li>User research</li>
				<li>Data visualization</li>
			</ul>
		</header>
		
		<main class="container">
			<div class="container-section">
				<aside>
					<h2>SUMMARY</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>StreetSavvy is a mobile web-based mobile mapping tool that aims to improve the pedestrian experience&mdash;particularly women&mdash;by helping users make informed decisions about which route to walk. It combines a combination of time-sensitive data about safety, an easy way to define their own safety preferences, and the ability to navigate a route &ldquo;hands free.&rdquo;</p>
						<p>In this project, I led the design process while keeping our product&rsquo;s goal in mind, i.e. to build a tool where people can explore data based on their own idea of what safety means to them, rather than an imposed &ldquo;safety algorithm.&rdquo; By letting users explore positive data beyond standard crime statistics, we aim to provide a more balanced, socially conscious tool for data-driven discussions about safety.</p>
						<p>StreetSavvy was developed as a <a href="http://www.ischool.berkeley.edu/programs/mims/projects/2014/streetsavvy" target="_blank">Masters final project</a> and it won the 2014 Chen Awards in the &ldquo;Enhancing User Experience&rdquo; category.</p>
						<br/>
						<figure>
							<img src="_images/work-streetsavvy-01.jpg" alt="Early wireframes" width="1200" height="675">
							<figcaption>Early wireframes</figcaption>
						</figure>
						<figure>
							<img src="_images/work-streetsavvy-02.jpg" alt="Talking to potential users about pedestrian safety (left) & conducting usability testing (right)" width="1200" height="675">
							<figcaption>Talking to potential users about pedestrian safety (left) and conducting usability testing (right)</figcaption>
						</figure>
						<figure>
							<img src="_images/work-streetsavvy-03.jpg" alt="Grouping themes via affinity diagrams" width="1200" height="675">
							<figcaption>Grouping themes via affinity diagrams</figcaption>
						</figure>
						<figure>
							<img src="_images/work-streetsavvy-04.jpg" alt="Final prototype - defining search parameters" width="1200" height="675">
							<figcaption>Final prototype - defining search parameters</figcaption>
						</figure>
						<figure>
							<img src="_images/work-streetsavvy-05.jpg" alt="Final prototype - visualizing contextualized safety data" width="700" height="432">
							<figcaption>Final prototype - visualizing contextualized safety data</figcaption>
						</figure>
						<figure>
							<iframe src="https://player.vimeo.com/video/281396159" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<figcaption>Primary user flow demo</figcaption>
						</figure>
						

						
					</div>
				</section>
			</div>

			<?php include "_inc/work-links.php" ?>

		</main>

		<?php include "_inc/footer.php" ?>
		
	</body>
	
</html>