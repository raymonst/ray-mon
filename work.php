<?php 
	include "_inc/work-list.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The - Design Portfolio</title>
	</head>

	<body>
		<?php include "_inc/nav.php" ?>
		
		<header>
			<div class="title">
				<h1>SELECTED WORKS</h1>
			</div>
		</header>
		
		<main class="container">
			<ul class="list-item-visual">
				<?php
					
				?>
				
				<li>
					<figure><a href="work-conversational-analytics.php"><img src="_images/work-conversational-analytics-cover.png" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-conversational-analytics.php"><?php echo $work["conversational-analytics"][0]?></a></span></div>
					<div class="list-item-visual-description"><span><?php echo $work["conversational-analytics"][1]?></span></div>
				</li>
				<li>
					<figure><a href="work-lightning-messaging-framework.php"><img src="_images/placeholder-2.jpg" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="#"><?php echo $work["lightning-messaging-framework"][0]?></a></span></div>
					<div class="list-item-visual-description"><span><?php echo $work["lightning-messaging-framework"][1]?></span></div>
				</li>
				<li>
					<figure><a href="work-lightning-messaging-framework.php"><img src="_images/placeholder-3.jpg" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="#"><?php echo $work["analytics-learning-app"][0]?></a></span></div>
					<div class="list-item-visual-description"><span><?php echo $work["analytics-learning-app"][1]?></span></div>
				</li>
			</ul>

			<h2>OTHER DESIGN WORKS</h2>
			<hr class="separator" />
			<ul class="list-item-visual list-item-visual-s">
				<li>
					<figure><a href="work-transit-quality-equity.php"><img src="_images/placeholder-4.jpg" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-transit-quality-equity.php">Transit Quality &amp; Equity</a></span></div>
					<div class="list-item-visual-description"><span>Visualizing Urban Mobility</span></div>
				</li>
				<li>
					<figure><a href="work-giorgio-armani-beauty-foundation-world.php"><img src="_images/placeholder-4.jpg" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-giorgio-armani-beauty-foundation-world.php">Giorgio Armani Beauty Foundation World</a></span></div>
					<div class="list-item-visual-description"><span>Helping users find the perfect beauty products</span></div>
				</li>
				<li>
					<figure><a href="work-sams.php"><img src="_images/placeholder-4.jpg" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-sams.php">SAMS</a></span></div>
					<div class="list-item-visual-description"><span>Streamlining access to government assistance</span></div>
				</li>
				<li>
					<figure><a href="work-streetsavvy.php"><img src="_images/placeholder-4.jpg" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-streetsavvy.php">StreetSavvy</a></span></div>
					<div class="list-item-visual-description"><span>Rethinking the pedestrian experience</span></div>
				</li>
				<li>
					<figure><a href="work-conversational-analytics.php"><img src="_images/placeholder-4.jpg" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="work-conversational-analytics.php">Lorem ipsum</a></span></div>
					<div class="list-item-visual-description"><span>Nulla placerat ante quis bibendum pretium ut neque sem.</span></div>
				</li>
			</ul>

			<h2>WRITING</h2>
			<hr class="separator" />
			<ul class="list-item-visual list-item-visual-s">
				<li>
					<figure><a href="https://medium.com/salesforce-ux/designing-the-not-so-happy-path-fde484759a54" target="_blank"><img src="_images/placeholder-4.jpg" alt="" width="800" height="600"></a></figure>
					<div class="list-item-visual-title"><span><a href="https://medium.com/salesforce-ux/designing-the-not-so-happy-path-fde484759a54" target="_blank">Designing the Not-So-Happy Paths</a>&nbsp;&#8599;</span></div>
					<div class="list-item-visual-description"><span>How to craft the right error messages when things go wrong</span></div>
				</li>
				<li>
					<figure><a href="https://medium.com/salesforce-ux/turning-constraints-into-catalysts-for-creativity-ce2393673c1b" target="_blank"><img src="_images/placeholder-4.jpg" alt="" width="800" height="600" target="_blank"></a></figure>
					<div class="list-item-visual-title"><span><a href="https://medium.com/salesforce-ux/turning-constraints-into-catalysts-for-creativity-ce2393673c1b">Turning Constraints into Catalysts for Creativity</a>&nbsp;&#8599;</span></div>
					<div class="list-item-visual-description"><span>Lessons from Designing Inline Edit Experience in Lightning</span></div>
				</li>
				<li>
					<figure><a href="https://medium.com/salesforce-ux/designing-more-efficient-forms-10d23bc72c9f" target="_blank"><img src="_images/placeholder-4.jpg" alt="" width="800" height="600" target="_blank"></a></figure>
					<div class="list-item-visual-title"><span><a href="https://medium.com/salesforce-ux/designing-more-efficient-forms-10d23bc72c9f" target="_blank">Designing More Efficient Forms</a>&nbsp;&#8599;</span></div>
					<div class="list-item-visual-description"><span>Examples from Salesforce&rsquo;s Lightning Experience</span></div>
				</li>
			</ul>

		</main>
		
	</body>

</html>