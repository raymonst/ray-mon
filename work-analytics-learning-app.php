<?php 
	include "_inc/work-list.php";
	$key = 3;
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
				<div class="title-link"><a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3A00000DoLB3UAN" target="_blank" class="link-cta">view app</a></div>
			</div>
			<span class="intro"><?php echo $workSelected[1]?></span>
			<ul class="role">
				<li>UX design</li>
				<li>Data visualization</li>
			</ul>
		</header>

		<main class="container">
			<div class="container-section">
				<aside>
					<h2>SUMMARY</h2>
					<hr class="separator"/>
				</aside>
				<section>
					<div class="container-section-item">
						<p>Einstein Analytics Studio gives Salesforce customers the ability to build analytics dashboards and apps. While the tool is incredibly powerful, it can be intimidating for users, especially those with little analytics and/or Salesforce experience.</p>
						<p>The Learning Adventure app alleviates this gap in knowledge. For the beginner users, it provides best practice examples so the users can pick the right visualizations for their data and audience. And for the more advanced users, it provides plain language explanations and code examples behind dynamic visualizations, which they can repurpose in their own apps. More importantly, these examples are built and shown in situ, which allows users to learn from real hands-on examples.</p>
						<blockquote>
							<p>This is so meta, the[y] built a suite of dashboards to teach you how to build dashboards. I love it! Very clean, easy to follow, and well made.</p>
							<span>&mdash;Peter Lyons, Senior Associate at Huron Consulting Group</span>
							<div class="quote-decoration">&nbsp;</div>
						</blockquote>
						<p>The learning app is one manifestation of the larger <a href="work-learning-in-analytics.php" target="_blank">&ldquo;learning journeys&rdquo;</a> design effort in Salesforce. It originated as a one-off solution specific to Einstein Analytics, but given its success, we are looking into how to replicate this learning experience in other products.</p>
						<br/>
						<figure>
							<iframe width="100%" height="400" src="https://player.vimeo.com/video/253101855" frameborder="0" allowFullScreen mozallowfullscreen webkitAllowFullScreen></iframe>
							<figcaption>App demo</figcaption>
						</figure>
						<figure>
							<img src="_images/work-analytics-learning-app-01.jpg" alt="The app is divided into themes which cater to different skill levels" width="1400" height="864">										
							<figcaption>The app is divided into themes which cater to different skill levels</figcaption>
						</figure>
						<figure>
							<img src="_images/work-analytics-learning-app-02.jpg" alt="Live in-app chart examples with detailed guidelines" width="1400" height="864">										
							<figcaption>Live in-app chart examples with detailed guidelines</figcaption>
						</figure>
						<figure>
							<img src="_images/work-analytics-learning-app-03.jpg" alt="Live in-app chart examples with detailed guidelines" width="1400" height="864">										
							<figcaption>Live in-app chart examples with detailed guidelines</figcaption>
						</figure>
						<figure>
							<img src="_images/work-analytics-learning-app-04.jpg" alt="More advanced example with code snippets" width="1400" height="864">										
							<figcaption>More advanced example with code snippets</figcaption>
						</figure>
					</div>
				</section>
			</div>

			<?php include "_inc/work-links.php" ?>

		</main>

		<?php include "_inc/footer.php" ?>

	</body>

</html>