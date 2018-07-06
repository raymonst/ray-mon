<!DOCTYPE html>
<html>
	<head>
		<?php include "_inc/head.php" ?>
		<title>Raymon Sutedjo-The - Conversational Analytics</title>
	</head>

	<body>
		<main>
			<h1>CONVERSATIONAL ANALYTICS</h1>
			<span class="intro">Enabling conversations with your data</span>
			<article class="container">
				<div class="container-section">
					<aside>
						<h2>BACKGROUND</h2>
						<hr class="separator" />
					</aside>
					<section>
						<div class="container-section-item">
							<p>Einstein Analytics (EA) provides Salesforce customers with the ability to build analytics dashboards and apps that deliver business insights. While it&rsquo;s incredibly powerful, EA can feel intimidating for novice users who have little experience in analytics and/or Salesforce. To address this gap, the Analytics team built conversational queries to enable and simplify how users interact with their business data.</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>NATURAL LANGUAGE ISN&rsquo;t EASY</h2>
						<hr class="separator" />
					</aside>
					<section>
						<div class="container-section-item">
							<p>Interacting with a machine using plain, non-technical language is tricky. When it works, it&rsquo;s magical; but when it doesn&rsquo;t, it&rsquo;s incredibly frustrating and inefficient. As the team began working on this project, we realized that achieving a completely &ldquo;natural&rdquo; language interaction would be extremely difficult to pull off, given the limited resources we had at hand.</p>
							<figure>
								<img src="_images/conversational-analytics-personas.png" alt="personas" width="750" height="150">
								<figcaption>Analytics personas</figcaption>
							</figure>
						</div>
						<div class="container-section-item">
							<p>We have five Analytics personas across the board and for this feature in particular, we&rsquo;re primarily focused on the analyst &amp; line-of-business-user, who are consumers of analytics apps and dashboards. Our secondary focus is the admin, who build apps and dashboards for their organizations. </p>
							<figure class="image-size-s image-alignment-r">
								<img src="_images/conversational-analytics-research.jpg" alt="conversational-analytics-research" width="800" height="600">
								<figcaption>Conducting research</figcaption>
							</figure>
							<p>In our initial research around the topic of natural language query, we talked to users who fit these profiles and asked them what they would expect from it. Without seeing any UI, we found that users had extremely high expectations, wanting it to answer complicated questions such as &ldquo;how do I get more profit?&rdquo;</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>RE-DEFINING THE SCOPE</h2>
						<hr class="separator" />
					</aside>
					<section>
						<div class="container-section-item">
							<p>With this in mind, the UX team suggested that we start with a simpler first version. High-level queries such as &ldquo;how am I doing?&rdquo; is difficult for the machine to parse and answer without a high quantity and quality of data, analysis, and intelligence. On the other hand, simpler template-based queries such as &ldquo;show me top 5 accounts by revenue&rdquo; can be more easily parsed, even in the absence of &ldquo;smart&rdquo; machine analysis.</p>
							<figure>
								<img src="_images/conversational-analytics-sentence.jpg" alt="conversational-analytics-sentence" width="1200" height="675">
								<figcaption>Simpler template-based queries</figcaption>
							</figure>
							<p>This type of query is also metadata-based, so it&rsquo;s scalable across different types of datasets. The underlying logic between &ldquo;show me <span>top 5</span> <span>accounts</span> by <span>revenue</span>&rdquo; and &ldquo;who are the <span>bottom 10</span> <span>agents</span> by <span>customer satisfaction score</span>&rdquo; are similar, i.e. the sentence pattern is reusable. Last but not least, this query type covers a good portion of potential questions a user may have about their data, which makes it ideal as a starting point.</p>
							<p>We also realized that the right UI context would be critical in grounding the user&rsquo;s expectations. The higher it sits in the UI, the higher the expectation is. We decided to embed the query field in two specific parts of EA: the explorer (where the user explores/plays with a chart to discover further insights) and the builder (where the user builds apps and dashboards). The specificity of these contexts communicates to the users that they can only ask questions that are narrower in scope.</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>MACRO &amp; MICRO INTERACTIONS</h2>
						<hr class="separator" />
					</aside>
					<section>
						<div class="container-section-item">
							<p>I started with two main user flows:</p>
							<ul>
								<li>Creating a new chart using conversational query (builder use case)</li>
								<li>Exploring a chart within an existing dashboard using conversational query (explorer use case)</li>
							</ul>
							</p>
							<p>I also defined some restraints. First, creating a chart and constructing a query is not reciprocal, i.e. the user can create a chart by submitting a query, but they cannot create/modify a query by creating/modifying a chart. Second, each query is independent of the next, i.e. the user can&rsquo;t ask related questions one after another, e.g. &ldquo;What&rsquo;s the average deal amount?&rdquo; > &ldquo;What about ACME?&rdquo; > &ldquo;In East Coast?&rdquo; Though desirable, these functionalities are more &ldquo;nice-to-have&rdquo; than critical. Doing away with them for the first iteration significantly reduces engineering complexity without severely impacting the experience. </p>
							<h3>One Field, a Thousand Micro-Interactions</h3>
							<p>Designing for conversational query presents some unique challenges, due to its minimal UI. The user is basically interacting with <strong>one</strong> field instead of a host of UI components (buttons, fields, toggles, dropdowns, etc). As a result, every single keystroke and every move of the cursor is consequential&mdash;any small bump in the interaction feels much more significant than they would in a full-screen UI. </p>
							<p>After trying out some approaches, I settled on creating a set of interaction flows to show all the different  micro-interaction patterns that include keyboard and mouse logic and query logic (e.g. how to show filter values, relative dates, etc.). This enabled more productive discussions between UX, Engineering, and PM and helped Engineering understand the scope of their work more clearly. These schema went through multiple rounds of iterations, which were informed by continuous feedback from Engineering, PM, and users (via additional research).</p>
							<figure>
								<img src="_images/conversational-analytics-logic-flow.jpg" alt="conversational-analytics-logic-flow" width="1346" height="1794">
								<figcaption>Defining micro-interaction patterns</figcaption>
							</figure>
							
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>PROGRESSIVE ENHANCEMENTS</h2>
						<hr class="separator" />
					</aside>
					<section>
						<div class="container-section-item">
							<p>As the base experience took shape, we were able to add gradual improvements on top of it. </p>
							<h3>Robust Synonyms</h3>
							<p>A salesperson might call potential sales &ldquo;opportunities&rdquo; while another might say &ldquo;deals.&rdquo; We added a set of synonyms to accommodate variations like this.</p>
							<h3>Efficient Shortcut Phrases</h3>
							<p>In sales, an &ldquo;opportunity won&rdquo; is the same as &ldquo;opportunity where stage is &lsquo;closed won.&rsquo;&rdquo; We added shortcut phrases that are tailored to frequent scenarios so the queries are more efficient and natural-sounding.</p>
							<h3>Specific Error Messages</h3>
							<p>A submitted query may contain errors; for instance, the question &ldquo;opportunities greater than&rdquo; is invalid without a numeric value. We identified a number of common but specific error scenarios like this and provided targeted error messages to help the users.</p>
						</div>
					</section>
				</div>

				<div class="container-section">
					<aside>
						<h2>RESULTS &amp; FUTURE WORK</h2>
						<hr class="separator" />
					</aside>
					<section>
						<div class="container-section-item">
							<p>To create/edit analytics apps and dashboards, an EA user previously had to either write code or use declarative tools. Although declarative tools have made it easier to build charts, it still takes <a href="https://www.salesforce.com/blog/2018/03/einstein-analytics-conversational-queries.html" target="_blank">12 clicks on average</a> and requires some prior knowledge of the tool. Conversational queries breaks down this barrier by enabling less technical users to ask questions about their data directly.</p>
							<p><a href="https://www.salesforce.com/blog/2018/03/einstein-analytics-conversational-queries.html" target="_blank">The beta version of conversational query</a> was officially unveiled in early 2018 and the initial response has been incredible. That said, there&rsquo;s plenty of room for improvement. </p>
							<p>To begin with, we&rsquo;re exploring ways to answer higher-level questions (e.g. &ldquo;how do I maximize profit?&rdquo;) so users can get even deeper insights from their data. We&rsquo;re also looking into organization-level customizations that would enable custom synonyms that are unique to each org (think of your company&rsquo;s internal acronyms, for example). There is a ton of potential within this space and we&rsquo;ve only just begun to scratch the surface.</p>
						</div>
					</section>
				</div>

			</article>
		</main>
	</body>

</html>