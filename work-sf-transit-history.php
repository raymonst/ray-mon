<?php 
	include "_inc/work-list.php";
	$workSelected = $work["sf-transit-history"];
?>

<!DOCTYPE html>
<html>
	<head>
		<?php $page = "work"; include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The / <?php echo $workSelected[0]?></title>
	</head>

	<body class="with-cover">
		<?php include "_inc/nav.php" ?>

		<div class="cover"><img src="_images/work-sf-transit-history-cover.jpg" alt="work-transit-quality-equity-cover" width="1200" height="900"></div>
		
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
						<p>The history of San Francisco&rsquo;s transit system can be traced back as far as 1873, when the first Cable Car began service. This visualization tell its history through an exploratory map that highlights important events as well as the diverse fleets in the system. The visualization borrows the design language from existing transit maps and splits the story into multiple “routes” to reflect how each part of the transit system has its own story. As the story moves through time, there are also points where the routes intersect, which illustrate major events in the history.</p>
						<p>In this project, I took on the role of lead designer. I created the user interaction flows and visual prototypes (both low- and high-fidelity mockups). In addition, I supported data cleanup, content creation, as well as engineering tasks as needed.</p>
						<p>The project has been featured on <a href="https://www.huffingtonpost.com/2013/05/15/san-francisco-transit-history_n_3280949.html" target="_blank">Huffington Post</a> and <a href="http://tumblr.thisbigcity.net/post/51286712752/san-francisco-transit-history-is-an-interactive" target="_blank">thisbigcity</a>.</p>
						<br/>
						<figure>
							<img src="_images/work-sf-transit-history-01.jpg" alt="work-sf-transit-history-01" width="1600" height="900">
							<figcaption>Concept sketches</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sf-transit-history-02.jpg" alt="work-sf-transit-history-02" width="1020" height="574">
							<figcaption>Early design with parallel timelines</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sf-transit-history-03.jpg" alt="work-sf-transit-history-03" width="1600" height="900">												<figcaption>Intro screen</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sf-transit-history-04.jpg" alt="work-sf-transit-history-04" width="1600" height="900">												<figcaption>Showing one storyline from past to present</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sf-transit-history-05.jpg" alt="work-sf-transit-history-05" width="1600" height="900">												<figcaption>Showing two storylines with an overlapping event</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sf-transit-history-06.jpg" alt="work-sf-transit-history-06" width="1600" height="900">												<figcaption>Showing all storylines, which altogether forms a &ldquo;system map&rdquo;</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sf-transit-history-07.jpg" alt="work-sf-transit-history-03" width="1600" height="900">												<figcaption>The user can click on any dot and read about the historical event that happen during that point in time</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sf-transit-history-08.jpg" alt="work-sf-transit-history-03" width="1600" height="900">												<figcaption>Each event is accompanied by an image that illustrates and contextualizes it</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sf-transit-history-09.jpg" alt="work-sf-transit-history-03" width="1600" height="900">												<figcaption>The last dot closes the storyline and talks about future vision</figcaption>
						</figure>
					</div>
				</section>
			</div>

		</main>
		
	</body>

</html>