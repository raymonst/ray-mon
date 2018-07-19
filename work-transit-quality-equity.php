<?php 
	include "_inc/work-list.php";
	$workSelected = $work["transit-quality-equity"];
?>

<!DOCTYPE html>
<html>
	<head>
		<?php $page = "work"; include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The / <?php echo $workSelected[0]?></title>
	</head>

	<body class="with-cover">
		<?php include "_inc/nav.php" ?>

		<div class="cover"><img src="_images/work-transit-quality-equity-cover.jpg" alt="work-transit-quality-equity-cover" width="1200" height="900"></div>
		
		<header>
			<div class="title">
				<h1><?php echo $workSelected[0]?></h1>
				<div class="title-link"><a href="#" class="link-cta">view project</a></div>
			</div>
			<span class="intro"><?php echo $workSelected[1]?></span>
			<ul class="role">
				<li>UX design</li>
				<li>User research</li>
				<li>Data visualization</li>
				<li>Front-end development</li>
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
						<p>&ldquo;Transit Quality &amp; Equity&rdquo; was created as a response to <a href="http://www.swissnexsanfrancisco.org/event/urbandatachallenge/" target="_blank">Urban Data Challenge</a>, an international open data competition that aimed to explore urban data sets through data visualization. I chose to address this theme by looking at the question from the lens of equity, i.e. to see how well transit systems serve diverse populations in a city. To accomplish this, I layered economic and demographic data on top of transit data, which allows the users to draw relationships between transit quality and equity.</p>
						<p>After the competition, I continued to expand the project. In one of my courses, I used it as a case study in investigating the role that data visualization could play in city planning.</p>
						<p>The project has been featured on <a href="https://www.citylab.com/transportation/2013/05/mapping-equality-bus/5487/" target="_blank">Citylab</a> and <a href="https://www.fastcodesign.com/1681868/3-creative-ways-to-visualize-urban-public-transportation" target="_blank">Fast Company Design</a>.</p>
						<br/>
						<figure>
							<img src="_images/work-transit-quality-equity-01.jpg" alt="work-transit-quality-equity-01" width="1600" height="900">										<figcaption>Project summary</figcaption>
						</figure>
						<figure>
							<img src="_images/work-transit-quality-equity-02.jpg" alt="work-transit-quality-equity-01" width="1600" height="900">
							<figcaption>Surfacing transit performance data</figcaption>
						</figure>
						<figure>
							<img src="_images/work-transit-quality-equity-03.jpg" alt="work-transit-quality-equity-01" width="1600" height="900">										<figcaption>Adding a layer of economic data as indicators of equity</figcaption>
						</figure>
						<figure>
							<img src="_images/work-transit-quality-equity-04.jpg" alt="work-transit-quality-equity-01" width="1600" height="900">										<figcaption>Same visualization, different city</figcaption>
						</figure>
						<figure>
							<img src="_images/work-transit-quality-equity-05.jpg" alt="work-transit-quality-equity-01" width="1600" height="900">										<figcaption>Same visualization, different city (with economic data turned off)</figcaption>
						</figure>
						<figure>
							<img src="_images/work-transit-quality-equity-06.jpg" alt="work-transit-quality-equity-06" width="1000" height="1500">										<figcaption>Investigating the role of data visualization in city planning</figcaption>
						</figure>
					</div>
				</section>
			</div>

		</main>
		
	</body>

</html>