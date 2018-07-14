<?php 
	include "_inc/work-list.php";
	$workSelected = $work["lightning-messaging-framework"];
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The / <?php echo $workSelected[0]?></title>
	</head>

	<body class="with-cover">
		<?php include "_inc/nav.php" ?>

		<div class="cover"><img src="_images/work-conversational-analytics-cover.png" alt="work-conversational-analytics-cover" width="1280" height="1024"></div>

		<header>
			<div class="title">
				<h1><?php echo $workSelected[0]?></h1>
			</div>
			<span class="intro"><?php echo $workSelected[1]?></span>
			<ul class="role">
				<li>UX design</li>
				<li>User research</li>
			</ul>
		</header>

		<main>
			<article class="container">
				<div class="container-section">
					<aside>
						<h2>BACKGROUND</h2>
						<hr class="separator"/>
					</aside>
					<section>
						<div class="container-section-item">
							<p>The Salesforce Lightning Design System (SLDS) aims to create unified digital experiences across the Salesforce ecosystem. However, designers and engineers who consume SLDS often had difficulties determining what components/patterns to use when they needed to communicate with the user (for confirmation, information, error, etc).</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>A CRITICAL GAP</h2>
						<hr class="separator"/>
					</aside>
					<section>
						<div class="container-section-item">
							<p>As part of the Platform UX team, I was heavily involved in the birth of SLDS, focusing mostly on the design of form components. After the initial phase, I continued to be a part of the project and gathered feedback from product teams who used SLDS. </p>
							<p>This process made me realize that there was a significant gap in the design system. While SLDS had a decent amount of components for the users to choose from, they existed as independent “atoms” with little context and guidelines around how to use them in a page or application.</p>
							<p>Adoption was a critical issue for a fledgling design system like SLDS. This gap, in particular, stumped designers and engineers often when they built their respective features. They guessed around a lot--a designer for feature A might use plain text to show an error message, while another designer for feature B decided to use a toast to convey a similar message. Unfortunately, this led to a wildly inconsistent experience across the board, which doesn&rsquo;t inspire confidence in Salesforce.</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>BUILDING A FRAMEWORK INSIDE A DESIGN SYSTEM</h2>
						<hr class="separator"/>
					</aside>
					<section>
						<div class="container-section-item">
							<p>I began to explore ways to address this. The first step was to collect all the different messaging examples from various features so I could get a general sense of the diversity of messaging that&rsquo;s possible within the ecosystem.</p>
							<p>Messaging between the application and the end-user vary in tone, from subtle informational messages to dire system errors. Additionally, messaging can appear in various points of the user&rsquo;s experience (e.g. when logging in, after filling out a form, before deleting a file, etc.). </p>
							<p>As I delved in, I developed some basic guiding principles that are central to the messaging framework:
							<ul>
								<li><strong>Timely, not noisy.</strong><br/>Deliver messages at the right time. Not every interaction requires messaging to go with it.</li>
								<li><strong>Informative, not verbose.</strong><br/>Say what&rsquo;s necessary and not much more.</li>
								<li><strong>Actionable, not static.</strong><br/>Enable shortcuts for relevant actions to improve efficiency.</li>
								<li><strong>Cross device, not duplicative.</strong><br/>When appropriate, alert users on all their devices, but clear the messaging once user has read it.</li>							
							</ul>
							</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>FOCUSING ON THE PROBLEM</h2>
						<hr class="separator"/>
					</aside>
					<section>
						<div class="container-section-item">
							<p>In a nutshell, SLDS users were often aware that the components/patterns they needed did exist, but they didn&rsquo;t know when and how to use these components. To clarify this, I built out comprehensive guidelines for each component that describe its usage, dos and don&rsquo;ts, variants, etc. During this process, I also collaborated closely with the Docs team to define the UI text patterns and examples.</p>
							<p>As I looked through the examples, I noticed that some components were naturally more disruptive than others. A modal, for instance, would pop up in the middle of the screen and block the user from doing anything else until they close it. On the other hand, a new notification item would simply sit outside of the user&rsquo;s workspace and were generally not that disruptive to the user. </p>
							<p>By thinking about the UI components through this lens, I was able to map various properties to each and come up with an order that made sense.</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>EVOLVING THE FRAMEWORK</h2>
						<hr class="separator"/>
					</aside>
					<section>
						<div class="container-section-item">
							<p>AI shopped this version around to a number of SLDS users to get some feedback. While the users were delighted that a framework was emerging, this version simply wasn&rsquo;t clear enough for them. Seeing usage guidelines for each component and how the components were ordered made sense. However, the user typically wouldn&rsquo;t think of the component as a starting point; instead, they usually thought about the state first. E.g. “I need to show an error message in this flow,” or “What is the empty state for a new list?” etc.</p>
							<p>This discovery helped me evolve the framework. For the next iteration, I put together a number of common states, typical scenarios (for each state), and specific component guidelines (one for each scenario). </p>
							<p>Each of the component guideline here also linked back to the primary component page, which contains more details and examples. This information architecture enabled users to find the specific guideline they needed quickly.  </p>
							<p>This addition made a major difference, as it fit the user&rsquo;s mental model more closely. The users who saw the revised framework were able to find the help they needed much more efficiently.</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>BACK TO THE MOTHER SHIP</h2>
						<hr class="separator"/>
					</aside>
					<section>
						<div class="container-section-item">
							<p>The messaging framework started off as a personal design exploration to address a gap within SLDS and I built it separately from the main design system by choice. At the time, the main design system environment didn&rsquo;t have an easy way for contributors to add/edit content. As such, building the draft framework in a separate environment gave me far more flexibility and velocity, which was essential in the early stages.</p>
							<p>As I refined the framework and shared it with others, it quickly became a go-to resource for SLDS users. The enthusiastic response demonstrated that the “framework” concept was highly valuable for users, which convinced the SLDS team to integrate it to the main design system site. The messaging framework became an official part of the Lightning Design System as of <a href="https://lightningdesignsystem.com/release-notes/" target="_blank">SLDS v2.2</a>.</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>MATURING &amp; SCALING A DESIGN SYSTEM</h2>
						<hr class="separator"/>
					</aside>
					<section>
						<div class="container-section-item">
							<p>What started off as a personal project has now become an essential part of Salesforce&rsquo;s design system. The framework takes out guesswork around messaging and helps designers and product teams build their features with more confidence, while ensuring a clear and consistent experience across products. More importantly, it set an exemplary standard for other SLDS guidelines in development. </p>
							<p>A new design system may start out with what the basic components are, but as it matures and scales, the system needs to address when to use them and how these components work together to create an experience. The Lightning Messaging Framework is an example of that evolution.</p>
						</div>
					</section>
				</div>

			</article>
		</main>
	</body>

</html>