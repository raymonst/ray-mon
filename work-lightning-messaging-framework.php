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

		<main class="container">
			<div class="container-section">
				<aside>
					<h2>BACKGROUND</h2>
					<hr class="separator"/>
				</aside>
				<section>
					<div class="container-section-item">
						<p>The <a href="http://lightningdesignsystem.com/" target="_blank">Salesforce Lightning Design System (SLDS)</a> aims to create unified digital experiences across the Salesforce ecosystem. However, designers and engineers who consume SLDS often had difficulties determining what components/patterns to use when they needed to communicate with the user (for confirmation, information, error, etc).</p>
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
						<p>This process made me realize that there was a significant gap in the design system. While SLDS had a decent amount of components for the users to choose from, they existed as independent <a href="http://atomicdesign.bradfrost.com/chapter-2/#atoms" target="_blank">&ldquo;atoms&rdquo;</a> with little context and guidelines around how to use them in a page or application.</p>
						<figure class="image-size-s image-alignment-r">
							<img src="_images/work-lightning-messaging-framework-error.png" alt="work-lightning-messaging-framework-error" width="657" height="200">
							<figcaption>Examples of error messages in different components&mdash;text (top) and toast (bottom)</figcaption>
						</figure>
						<p>Adoption was a critical issue for a fledgling design system like SLDS. This gap, in particular, stumped designers and engineers frequently when they built their respective features. They guessed around a lot&mdash;a designer for feature A might use plain text to show an error message, while another designer for feature B decided to use a toast to convey a similar message. Unfortunately, this led to a wildly inconsistent experience across the board, which doesn&rsquo;t inspire confidence in Salesforce.</p>
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
						<figure class="image-size-s image-alignment-r">
							<img src="_images/work-lightning-messaging-framework-classic.png" alt="work-lightning-messaging-framework-classic" width="1000" height="750">
							<figcaption>Looking at past guideline examples</figcaption>
						</figure>						
						<p>I began to explore ways to address this. The first step was to collect all the different messaging examples from various features so I could get a general sense of the diversity of messaging that&rsquo;s possible within the ecosystem. Additionally, I looked at past examples of guidelines to understand what has been done before and learn from them.</p>
						<p>Messaging between the application and the end-user vary in tone, from subtle informational messages to dire system errors. Additionally, messaging can appear in various points of the user&rsquo;s experience (e.g. when logging in, after filling out a form, before deleting a file, etc.). </p>
						<p>As I delved in further, I developed some basic guiding principles for the framework:
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
						<p>In a nutshell, SLDS users were often aware that the components/patterns they needed did exist, but they didn&rsquo;t know <span>when</span> and <span>how</span> to use these components. This became central to my design explorations for the framework.</p>
						<figure>
							<img src="_images/work-lightning-messaging-framework-sketches.png" alt="work-lightning-messaging-framework-sketches" width="1000" height="750">
							<figcaption>Sketching out logic for the framework</figcaption>
						</figure>
						<p>In one of the early approaches, I arranged the various components by &ldquo;type,&rdquo; ranging from system-type messaging (initiated by the system and alerts the user of important system-related issues or status) to feedback-type (initiated by the user and represents the system&rsquo; response to the user input).</p>													
						<figure>
							<img src="_images/work-lightning-messaging-framework-posters.jpg" alt="work-lightning-messaging-framework-posters" width="1400" height="700">
							<figcaption>Early posters with simple categorizations</figcaption>
						</figure>
						<p>The guideline continued to evolve from this basic version. I added more comprehensive guidelines for each component that describe its usage, dos and don&rsquo;ts, variants, etc. to help users understand the variety of contexts that are available for use.</p>
						<figure>
							<img src="_images/work-lightning-messaging-framework-guidelines.png" alt="work-lightning-messaging-framework-guidelines" width="1660" height="642">
							<figcaption>Adding more layers and details to the guideline</figcaption>
						</figure>
						<p>As I added usage details to these components, it also became apparent that different components fit within the UI differently. A modal, for instance, would pop up in the middle of the screen and block the user from doing anything else until they close it. On the other hand, a new notification item would simply sit outside of the user&rsquo;s workspace and were generally not as disruptive to the user.</p>
						<figure>
							<img src="_images/work-lightning-messaging-framework-component-scope.png" alt="work-lightning-messaging-framework-component-scope" width="1352" height="386">
							<figcaption>Examining component scopes, e.g. a modal (left) is naturally more disruptive than a notification (right)</figcaption>
						</figure>
						<figure class="image-size-s image-alignment-l">
							<img src="_images/work-lightning-messaging-framework-component-properties.png" alt="work-lightning-messaging-framework-component-properties" width="1000" height="499">
							<figcaption>Mapping properties to a messaging component</figcaption>
						</figure>
						<p>By thinking about the UI components through this lens, I was able to map various properties to each and come up with an order that made sense.</p>
						<figure>
							<img src="_images/work-lightning-messaging-framework-component-spectrum.png" alt="work-lightning-messaging-framework-component-spectrum" width="2000" height="727">
							<figcaption>Arranging the messaging components along a spectrum</figcaption>
						</figure>
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
						<figure class="image-size-s image-alignment-r">
							<img src="_images/work-lightning-messaging-framework-states.png" alt="work-lightning-messaging-framework-states" width="800" height="1529">
							<figcaption>Examples of typical scenarios for error state along with specific guidelines for each</figcaption>
						</figure>
						<p>As the framework developed, I shopped it around to a number of SLDS users to get feedback. While the users were delighted that a framework was emerging, this version simply wasn&rsquo;t clear enough for them.</p> 
						<p>Seeing usage guidelines for each component and how the components were ordered made sense. However, the user typically wouldn&rsquo;t think of the component as a starting point. Instead, they usually thought about the state first, e.g. &ldquo;I need to show an <span>error</span> message in this flow,&rdquo; or &ldquo;What is the <span>empty state</span> for a new list?&rdquo; etc.</p>
						<p>This discovery helped me evolve the framework. For the next iteration, I put together a number of common states, typical scenarios (for each state), and specific component guidelines (one for each scenario). </p>
						<p>Each of the component guideline here also linked back to the primary component page, which contains more details and examples. This information architecture enabled users to find the specific guideline they needed quickly.  </p>
						<p>This addition made a major difference, as it fit the user&rsquo;s mental model more closely. The users who saw the revised framework were able to find the help they needed much more efficiently.</p>
						<figure>
							<img src="_images/work-lightning-messaging-framework-mental-model.png" alt="work-lightning-messaging-framework-mental-model" width="1411" height="552">
							<figcaption>The information architecture guides users to the specific guideline they need</figcaption>
						</figure>
						<p>Additionally, as I continued to refine the framework, I collaborated closely with the Documentation team to define the UI text patterns and examples, which also became part of the framework.</p>
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
						<figure>
							<img src="_images/work-lightning-messaging-framework-site.jpg" alt="work-lightning-messaging-framework-site" width="1916" height="945">
							<figcaption>Integrating the messaging framework back into Salesforce&rsquo;s Lightning Design System</figcaption>
						</figure>
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

		</main>
	</body>

</html>