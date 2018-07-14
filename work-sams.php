<?php 
	include "_inc/work-list.php";
	$workSelected = $work["sams"];
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The / <?php echo $workSelected[0]?></title>
	</head>

	<body class="with-cover">
		<?php include "_inc/nav.php" ?>

		<div class="cover"><img src="_images/work-sams-cover.png" alt="work-sams-cover" width="1400" height="864"></div>

		<header>
			<div class="title">
				<h1><?php echo $workSelected[0]?></h1>
				<div class="title-link"><a href="#" class="link-cta">view prototype</a></div>
			</div>
			<span class="intro"><?php echo $workSelected[1]?></span>
			<ul class="role">
				<li>UX design</li>
				<li>User research</li>
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
						<p>SAMS was created as a response to E.A.T. School Lunch UX Challenge, a competition to design &ldquo;&hellip; model electronic application for the National School Lunch Program and help millions of American students access school meals.&rdquo; Built on top of the <a href="https://designsystem.digital.gov/" target="_blank">US Web Design System</a>, SAMS applies behavioral UX principles to create a better experience, such as providing default values, breaking up the long form into manageable chunks, and live input validation.</p>
						<p>As with many government forms, applicants may not need to complete all of the information asked. The skip logic depends on the information that the applicant enters; in this application, for instance, a user doesn&rsquo;t need to provide income data if they receive government assistance such as food stamps. Architecting and building a smart form with skip logic, validation rules, and reusable information was challenging, but iterative designs and user testing helped me meet this goal.</p>
						<br/>
						<figure>
							<iframe src="https://player.vimeo.com/video/157064150" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<figcaption>App walkthrough</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sams-01.jpg" alt="work-sams-01" width="1400" height="864">
							<figcaption>Introduction page</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sams-02.png" alt="work-sams-02" width="1400" height="864">
							<figcaption>Surfacing contextual help assists user along the way</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sams-03.png" alt="work-sams-03" width="1400" height="864">
							<figcaption>Summarizing user&rsquo;s information as they progress through the application</figcaption>
						</figure>
						<figure>
							<img src="_images/work-sams-04.jpg" alt="work-sams-04" width="1400" height="864">
							<figcaption>Conducting usability research</figcaption>
						</figure>
					</div>
				</section>
			</div>
		</main>

	</body>

</html>