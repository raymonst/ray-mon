<?php 
	include "_inc/work-list.php";
	$key = 9;
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
			</div>
			<span class="intro"><?php echo $workSelected[1]?></span>
			<ul class="role">
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
						<p>Giorgio Armani Beauty offers a wealth of beauty products ranging from cosmetics to colognes. The brand created Foundation World, a section on its website that provides a set of tools to help its customers find the best foundation for their make-up routines.</p>
						<p>Examples of these tools include the Foundation Finder (a short quiz to find the most suitable foundation) and Foundation Challenge (a tool to find Armani products similar to what the customer uses). To create these tools, I worked directly in Demandware and developed the necessary front-end components; afterward, I collaborated with the Demandware developers to integrate them accordingly.</p>
						<br/>
						<figure>
							<img src="_images/work-giorgio-armani-beauty-foundation-world-01.jpg" alt="Finding the right foundation" width="700" height="432">
							<figcaption>Finding the right foundation</figcaption>
						</figure>
						<figure>
							<img src="_images/work-giorgio-armani-beauty-foundation-world-02.jpg" alt="Discovering the right beauty product via a quiz" width="700" height="432">
							<figcaption>Discovering the right beauty product via a quiz</figcaption>
						</figure>
						<figure>
							<img src="_images/work-giorgio-armani-beauty-foundation-world-03.jpg" alt="Discovering the right beauty product via a quiz" width="700" height="432">
							<figcaption>Discovering the right beauty product via a quiz</figcaption>
						</figure>
						<figure>
							<img src="_images/work-giorgio-armani-beauty-foundation-world-04.jpg" alt="Summary of answers" width="700" height="432">
							<figcaption>Summary of answers</figcaption>
						</figure>
						<figure>
							<img src="_images/work-giorgio-armani-beauty-foundation-world-05.jpg" alt="Product recommendations based on quiz answers" width="700" height="432">
							<figcaption>Product recommendations based on quiz answers</figcaption>
						</figure>
						<figure>
							<img src="_images/work-giorgio-armani-beauty-foundation-world-06.jpg" alt="Seeking products similar to other brands that user already knows/uses" width="700" height="432">
							<figcaption>Seeking products similar to other brands that user already knows/uses</figcaption>
						</figure>
						<figure>
							<img src="_images/work-giorgio-armani-beauty-foundation-world-07.jpg" alt="Product recommendations based on other brands" width="700" height="432">
							<figcaption>Product recommendations based on other brands</figcaption>
						</figure>
					</div>
				</section>
			</div>

			<?php include "_inc/work-links.php" ?>

		</main>

		<?php include "_inc/footer.php" ?>
		
	</body>

</html>