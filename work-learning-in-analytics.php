<?php 
	include "_inc/work-list.php";
	$key = 2;
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
				<li>UX design</li>
				<li>User research</li>
			</ul>
		</header>
		
		<main class="container">
			<div class="container-section">
				<aside>
					<h2>BACKGROUND</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p><a href="https://www.salesforce.com/products/einstein-analytics/products/" target="_blank">Einstein Analytics (EA)</a> is a powerful analytics tool that can deliver key insights, but many users haven&rsquo;t used it to its maximum potential. There are resources in the wild that can help users learn, but they are scattered in various places (e.g. user-created Youtube videos, one-off blog posts, product documentation, etc). This is a major point of frustration for users, which significantly impacts adoption and usage rates.
</p>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>SCATTERED LEARNING RESOURCES</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>Getting started with Einstein Analytics can be a jarring experience. After a user logs in for the first time, they&rsquo;re thrown into the tool immediately with minimal guidance. To get started and understand what&rsquo;s going on, users often have to consult other resources. These include Salesforce-hosted content such as <a href="https://success.salesforce.com/" target="_blank">community forums</a> and <a href="https://help.salesforce.com/" target="_blank">product documentation</a>, as well as non Salesforce-hosted content such as user-generated Youtube videos. <strong>Finding these content, however, is no small task. It&rsquo;s especially burdensome for new users, who already have to deal with a ton of new information.</strong></p>
						<p>The Analytics UX and Product teams heard this feedback loud and clear. We understood that product education are critical to a good user experience in the short- and long-run, and we began to address this issue.</p>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>BUILDING A VISION</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">				
						<p>As the lead designer on this theme, I realized that learning can be a complex process and it isn&rsquo;t always linear. Rather than forcing users on &ldquo;the one true path&rdquo; of learning, the system should meet users where they are and grow with them. This idea became central to my design explorations and helped me think about various ways to support and engage with the user.</p>
						<figure>
							<img src="_images/work-learning-in-analytics-personas.jpg" alt="Analytics personas" width="3000" height="600">
							<figcaption>Analytics personas</figcaption>
						</figure>
						<p>We focused on the <strong>analyst persona</strong>, who consumes and analyzes a large amount of dashboards. Both analysts and line of business users use dashboards, but analysts in particular have to understand the tool better so they can conduct in-depth analysis and make strategic decisions for their company/organization.</p>
						<figure>
							<img src="_images/work-learning-in-analytics-personas-analyst.png" alt="Analyst persona" width="2000" height="1000">	
							<figcaption>Details on the analyst persona</figcaption>
						</figure>
						<p>Salesforce&rsquo;s <a href="https://lightningdesignsystem.com/guidelines/overview/" target="_blank">design principles</a> (clarity, efficiency, consistency, and beauty) are core to all the products we build. However, for this particular area, we needed something more specific. After some research and discussions, we came up the following:
						<ul>
							<li><strong>Supportive</strong>, not disruptive</li>
							<li><strong>Connected</strong>, not separated</li>
							<li><strong>Intelligent and evolving</strong>, not one-size-fits-all and static</li>
						</ul>
						</p>
						<p>These principles guided us in the process and helped us make decisions as we moved forward. Following this, I outlined a sample timeline with key learning moments:</p>
						<figure>
							<img src="_images/work-learning-in-analytics-moments.png" alt="Sample timeline with key learning moments" width="1940" height="400">
							<figcaption>Key learning moments in a user&rsquo;s journey</figcaption>
						</figure>
						<figure class="image-size-s image-alignment-l">
							<img src="_images/work-learning-in-analytics-flow-sample.gif" alt="work-learning-in-analytics-flow-sample" width="1280" height="1024">
							<figcaption>Key moment: initial login</figcaption>
						</figure>
						<p>This helped me build toward the vision and illustrate the various learning experiences that a user may go through. With this as a base, I created sample flows that correspond to each of these moments.</p>
						<figure>
							<img src="_images/work-learning-in-analytics-flows.png" alt="work-learning-in-analytics-flows" width="1770" height="1032">
							<figcaption>Flows for each key moment</figcaption>
						</figure>
					</div>
				</section>
			</div>
	
			<div class="container-section">
				<aside>
					<h2>CREATING A FRAMEWORK</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>While these initial designs created excitement internally within the Analytics teams, we also realized that our problems weren&rsquo;t unique to Analytics. In the words of another designer, there was a significant need &ldquo;&hellip; for a system to aid the design and management of learning experiences.&rdquo;</p>
						<p>At the time, there was an emerging effort to address &ldquo;learning journeys&rdquo; on a platform level across products. Knowing this, I took a step back and began to explore ways to systemize the learning experiences. <strong>Each user may take a different path of learning, but the various mechanisms should be there to assist the user along the way.</strong></p>
						<figure>
							<img src="_images/work-learning-in-analytics-in-app-mechanisms.png" alt="In-app mechanisms" width="1700" height="256">
							<img src="_images/work-learning-in-analytics-in-app-mechanisms-detail.png" alt="In-app mechanisms - walkthrough" width="1360" height="512">
							<figcaption>Inventory of in-app mechanisms that assist with user learning (top), with an example of additional details (bottom)</figcaption>
						</figure>
						<p>I began by examining the in-app mechanisms. Looking at both the content and context scopes helped clarify how and when these mechanisms should be used. Next, I added external mechanisms such as emails and help and training docs. I then generalized the flows and mapped them to this diagram accordingly. </p>
						<figure>
							<img src="_images/work-learning-in-analytics-diagram-01.png" alt="Learning ecosystem diagram 1" width="2600" height="1100">					
							<img src="_images/work-learning-in-analytics-diagram-02.png" alt="Learning ecosystem diagram 2" width="2900" height="1440">			
							<figcaption>Illustrating the interconnectedness of the learning ecosystem</figcaption>
						</figure>
						<p>For example, if a user is looking to learn an existing feature, they could open up the contextual help menu that links to specific help articles, related <a href="https://trailhead.salesforce.com/" target="_blank">Trailhead</a> modules (Salesforce&rsquo;s education platform), the learning map, and the community (where the user can ask questions to other Salesforce users). However, these resources also connect to each other, which helps guide the user regardless of their place in the ecosystem. I repeated this for other common flows, such as first time user login, learning suggested features, and troubleshooting.</p>
					</div>
				</section>
			</div>
	
			<div class="container-section">
				<aside>
					<h2>GOING TACTICAL</h2>
					<hr class="separator" />
				</aside>
				<section>
					<p>Having focused on the longer-term vision, I then switched gears and looked into shorter-term tactical steps to build toward the vision. Some of the in-app mechanisms, such as <a href="https://lightningdesignsystem.com/components/popovers/?variant=walkthrough" target="_blank">walkthroughs</a> and <a href="https://lightningdesignsystem.com/components/tooltips/" target="_blank">tooltips</a>, already existed in Salesforce&rsquo;s design system as components. Others were either new or partially done.</p>
					<p>The learning map and the <a href="work-analytics-learning-app.php" target="_blank">sample app</a>, in particular, were new items that addressed particular pain points for Analytics users. The learning map brought together key content from various sources (documentation, videos, Trailhead, etc.) and organized them in the context of an end-to-end business journey. The sample app provided in-app charts and code examples and best practices, which the user could then repurpose for their own dashboards and apps.</p>
					<figure>
						<img src="_images/work-learning-in-analytics-new-items.png" alt="Learning map & learning adventure app" width="2600" height="860">
						<figcaption>Introducing new mechanisms to the ecosystem</figcaption>
					</figure>
					<figure class="image-size-s image-alignment-r">
						<img src="_images/work-learning-in-analytics-research-notes.png" alt="Research notes" width="1350" height="959">
						<figcaption>Rough notes from research sessions</figcaption>
					</figure>
					<p>To develop these materials, I collaborated closely with the PM and content strategist to come up with the most relevant and helpful content for the user. Throughout this process, we also conducted research to test how well this content addressed users&rsquo; gap in knowledge.</p>
					<p>With these new components, we began by building a one-off solution and slowly introduced it internally and to key customers. We found that the learning map in particular attracted plenty of attention from other product teams who wanted to adapt the concept for their own product line. To fulfill those requests, I adjusted the learning map design to make it more modular and reusable for other contents.</p>
					<figure>
						<img src="_images/work-learning-in-analytics-learning-map.jpg" alt="Modularized learning map" width="1898" height="1360">
						<figcaption>Modularizing the learning map to make it reusable (top), with varying content examples (bottom)</figcaption>
					</figure>					
				</section>
			</div>
	
			<div class="container-section">
				<aside>
					<h2>AN EVOLVING ECOSYSTEM</h2>
					<hr class="separator" />
				</aside>
				<section>
					<p>Building an ecosystem of learning isn&rsquo;t done in a vacuum. The Analytics team constantly adapted existing patterns from the core team, while simultaneously developing new patterns that fit our use cases and sharing this back to the core team.</p>
					<p>In addition, thanks to UX&rsquo;s leadership and vision, learning has evolved to become a major theme in Analytics&rsquo; product strategy, as evidenced in the product keynote during <a href="https://www.salesforce.com/dreamforce/" target="_blank">Dreamforce 2018</a>.</p>								<figure>
						<img src="_images/work-learning-in-analytics-keynote.jpg" alt="work-learning-in-analytics-keynote" width="1400" height="1000">
						<figcaption>Highlighting product learning in the Analytics product keynote</figcaption>
					</figure>					
					<p>Learning is an omnipresent theme that occurs as the user experiences the product. This initiative, which is ongoing, is an attempt to connect the different dots and bring learning closer to the user. By doing so, we aimed to not only improve adoption and usage, but also enable self-sufficiency and help our users become more successful.</p>
				</section>
			</div>

			<?php include "_inc/work-links.php" ?>

		</main>

		<?php include "_inc/footer.php" ?>
		
	</body>

</html>