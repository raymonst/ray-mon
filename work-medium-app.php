<?php 
	include "_inc/work-list.php";
	$key = 0;
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
				<li>Prototyping</li>
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
						<p><a href="https://medium.com/" target="_blank">Medium</a> is a place where anyone can publish their ideas and find an audience among 170+ million readers on the platform. While there is an abundance of quality content, readers sometimes find it hard to read stories from writers and publications they enjoy. The existing experience relied heavily on algorithmically-ranked stories in a feed, which meant that readers see recommendations from all over Medium, but not always from the sources they explicitly follow. This also meant that writers and publications found it challenging to build an audience on Medium. <!-- To address this, we explored, designed, and built the next version of the Medium mobile app to solidify Medium&rsquo;s status as a place where ideas live and prosper??? --></p>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>WHY THE APP?</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<figure class="image-size-xs image-alignment-l">
							<img src="_images/work-medium-app-feed.png" alt="work-medium-app-feed" width="356" height="685" >
							<figcaption>The existing app experience relied heavily on algorithmically-ranked stories in a feed</figcaption>
						</figure>
						<p>Users find Medium content from both internal sources (e.g. medium.com homepage, app, email digests) and external (e.g. social media, messaging, email). App users are a smaller group compared to web users, but they also tend to be more engaged with the product, i.e. they use the product more frequently, read more stories, etc.</p>
						<p>The existing app worked relatively fine. It served millions of users and drove a significant part of the business (via paid subscription). Over time, however, the content distribution had become <a href="https://ev.medium.com/toward-a-more-relational-medium-e801ff4653a4" target="_blank">more transactional and less relational</a>, which led to more headline-driven content and less robust discovery. Ultimately, this ran contrary to the company&rsquo;s mission and would have a deleterious impact on the user experience in the long term. This is especially important for paying members, who are at risk of attrition if they no longer find value in the content that Medium has to offer. Given that app users are smaller in number yet more highly engaged overall, we decided that the app would be a good place to test out our ideas before rolling out more globally. </p>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>SETTING THE STAGE</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>We started off with a &ldquo;north star&rdquo; design sprint to create a vision for the app experience. I led the overall effort and collaborated with three other designers from both the reader and creator experience groups. We focused our explorations on key surfaces (app home, writer/publication home, and story page) and investigated the following themes:
							<ul>
								<li><strong>Discovery</strong><br/>How might we help readers explore and discover content that&rsquo;s relevant to them and encourage them to build ongoing relationships with entities they find interesting?</li>
								<li><strong>Sense of place</strong><br/>How might we convey a sense of place, brand, and trust for both readers and creators (i.e. writers &amp; publications) on the platform so they continue to find value in Medium?
								<li><strong>Story reading</strong><br/>How might we make reading stories more efficient and fluid so readers can discover more content with less friction?</li>
							</ul>							
						</p>
						<figure>
							<img src="_images/work-medium-app-north-star-sketches.png" alt="work-medium-app-north-star-sketches" width="1000" height="1041" >
							<figcaption>Initial sketches exploring the new app experience.<br/>Designs by Andrew Johnson, Hilla Katki, Matthew Herzog, and me.</figcaption>
						</figure>
						<p>From here, we built a scrappy prototype and shared it with executives (and later with the whole company) to get input &amp; buy-in. </p>
						<figure>
							<img src="_images/work-medium-app-north-star-video.jpg" alt="work-medium-app-north-star-video" width="1867" height="800" >
							<figcaption>Stills from video of a prototype demonstrating what the new app experience may look and feel like.</figcaption>
						</figure>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>PLANNING &amp; ROADMAP</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>The output from the design sprint helped create alignment across the board and while the resulting designs weren’t final, they pointed in the right direction. Given the scale of this project, we thought it&rsquo;d be useful to establish some core principles that would guide us along the way. Alexis Lloyd (VP Design) led this exercise and we established the following principles:
							<ul>
								<li><strong>Context</strong><br/>As a reader, I know exactly where I am in Medium&rsquo;s ecosystem and I can navigate to/from other parts of Medium with confidence.</li>
								<li><strong>Continuity</strong><br/>As a reader, I can seamlessly move from one story to another (or from one writer/publication to another) with ease and I&rsquo;m always discovering something new on Medium.</li>
								<li><strong>Completion</strong><br/>As a reader, I feel a sense of accomplishment and learning after spending time on Medium. My time is well-spent and I&rsquo;m not consuming content endlessly.</li>
							</ul>							
						</p>
						<p>Redesigning a mobile app is no small feat, so to make it more manageable, I worked with product managers on the team to break it down into smaller chunks. By doing this, we could tackle multiple key parts of the experience and work on them in parallel. We also planned out how we would test this with users along the way.</p>
						<figure>
							<img src="_images/work-medium-app-plan.png" alt="work-medium-app-plan" width="2560" height="1200" >
							<figcaption>A high-level plan to make the vision a reality.</figcaption>
						</figure>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>THE CORE READING EXPERIENCE</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>As a product, we want the reading experience on Medium to be as smooth as possible so the user can focus on the content. However, we wanted to make sure that <strong>context</strong> and <strong>continuity</strong> are integral to the new experience as well.</p>
						<figure class="image-size-xs image-alignment-r">
							<img src="_images/work-medium-app-seamless-old.gif" alt="work-medium-app-seamless-old" width="300" height="300" >
							<figcaption>In an early concept, stories were treated like cards in a stack and users could go from one story to the next seamlessly.</figcaption>
						</figure>
						<p>I proposed an initial idea to improve continuity by treating stories like a stack of cards where the user could continuously read one story after another or &ldquo;skip&rdquo; to the next story if desired.</p>
						<p>This tested fairly well with users, who adapted to the concept and began using the &ldquo;next&rdquo; button as a way to preview stories beyond the headlines. This insight showed us that there was value in a slightly longer story preview, which gave users a little more context beyond the story title.</p>
						<p>After more explorations, we moved away from the &ldquo;stack of cards&rdquo; metaphor. To simplify the model even further, we settled on a design where longer story previews were displayed one after another in the context of the writer/publication, and the full story is expanded inline within the same context. By doing so, the story&rsquo;s context is always clear and we enable the user to seamlessly discover other stories from the same entity simply by scrolling.</p>
						<figure class="figure-l figure-side-by-side">
							<img class="figure-side-by-side-size-l" src="_images/work-medium-app-seamless.png" alt="work-medium-app-seamless" width="1526" height="1300" >
							<video class="figure-side-by-side-size-s" src="_images/work-medium-app-seamless.m4v" width="" height="" autoplay muted loop controls></video>
							<figcaption>Viewing the full story inline keeps users in the same context and nudges them to continue discovering other stories, which are displayed immediately following the open story.</figcaption>
						</figure>

						<figure> 
						</figure>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>STREAMLINING THE APP ARCHITECTURE</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>We saw the redesign process as an opportunity to simplify the overall app architecture. Our usage data and research showed that the mobile app was primarily used for reading. Writers and publication editors may occasionally edit their stories or check their story stats in the app, but the majority of creator activities occurred on desktop web. As such, we didn&rsquo;t think that &ldquo;write&rdquo; warranted such a premium placement in the app&rsquo;s primary navigation bar. We moved it out of the nav bar and into the user&rsquo;s &ldquo;you&rdquo; tab, making it secondary but still fairly accessible.</p>
						<p>Our data also showed that <a href="https://medium.design/a-library-to-call-your-own-9c1fcdb6e4bc" target="_blank">reading list</a>, a place for the user&rsquo;s saved stories, was a heavily used feature but only by a portion of app users. We didn&rsquo;t want to hide it completely, but placing it in the primary navigation bar didn&rsquo;t seem right for most users either. We eventually decided to tuck it inside app home, which seemed to be the right compromise. Since home is the first surface in the app, users could still easily access the reading list if they wanted to, but those who don&rsquo;t use reading list aren&rsquo;t constantly seeing it in the primary nav bar.</p>
						<figure>
							<img src="_images/work-medium-app-architecture.png" alt="work-medium-app-architecture" width="1560" height="974" >								<figcaption>Simplifying the base app architecture helps reduce noise in the experience.</figcaption>
						</figure>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>HOME SWEET HOME</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>App home is essential because it&rsquo;s the first thing users see when they open the app. The existing home experience relied heavily on the feed, which we wanted to reorient. We started by trying out a drastically different home, which showed writers/publications only (no stories) to reflect the entity-driven thinking. However, this didn&rsquo;t test well with users (during the first private beta). While this had the potential to surface previously unseen writers/publications, the lack of stories meant that the home surface got stale quickly.</p>
						<figure>
							<img src="_images/work-medium-app-home.png" alt="work-medium-app-home" width="1525" height="1700" >
							<figcaption>The evolution of app home design, starting with an entities-only version and ending with a version that encompassed a balanced mix of content.<br/>Early designs by Andrew Johnson, later designs by Matthew Herzog and me.</figcaption>
						</figure>
						<p>With this realization, we adjusted the design to strike a better balance between stories and entities in the iterations that followed. In addition, we looked into how editorial content could fit within the new home experience.</p>
						<figure>
							<img src="_images/work-medium-app-modules.png" alt="work-medium-app-modules" width="965" height="965" >
							<figcaption>Modular designs allows for variety in content while maintaining a sense of consistency on home. In the future, we&rsquo;d dynamically swap the content and order of these modules to cater to individual user&rsquo;s interests.</figcaption>
						</figure>					
						<figure class="image-size-s image-alignment-r">
							<img src="_images/work-medium-app-badges.png" alt="work-medium-app-badges" width="750" height="750" >											<figcaption>Badges nudge users to read from authors and publications they follow.</figcaption>
						</figure>
						<p>We eventually landed on a version with a more balanced mix of content from the user&rsquo;s followed entities, recommended and trending stories, editorially selected stories, and curated writers &amp; publications. We also designed the homepage in a modular way that would allow it to scale and become more dynamic in the future. </p>
						<p>This homepage was also designed with <strong>completion</strong> in mind. We prioritized creators that the user follows by listing them first on the page. When they publish, the user sees numbered badges that correspond to those new stories and the user could clear this by visiting the creator&rsquo;s page and reading their stories. We also removed the infinite feed and let the homepage reach an actual end, which would discourage users from scrolling endlessly.</p>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>LISTENING TO USERS</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>Research findings from the first private beta group helped shape the design and led us to a more robust version of the product. As we prepared for the second, larger private beta group, we wanted to include both qualitative and quantitative measures so we could get a more holistic understanding overall. In addition to the ongoing user interviews, we set up an in-app feedback form to get more user input and programmed events tracking in the beta app to capture user behavior. Researcher Laura Carroll also set up benchmark surveys to measure user satisfaction more broadly and consistently as the product continued to evolve.</p>
						<p>From this survey, we saw that a majority of respondents (58%) was either very or somewhat satisfied with the beta version of the app. On the other hand, we also received feedback around story discovery, with one user remarking that &ldquo;&hellip; [i]t&rsquo;s more difficult to find article suggestions as well as to bookmark to read later.&rdquo; We knew that moving away from the infinite feed would negatively impact some users who are used to discovering content that way. That said, we also measured other success metrics that would be more indicative of where the product was heading towards strategically.</p>
						<figure>
							<table>
								<tr class="table-header">
									<th></th>
									<th colspan="2">Android</th>
									<th colspan="2">iOS</th>
								</tr>
								<tr class="table-header table-header-secondary">
									<th></th>
									<th>Members</th>
									<th>Non-members</th>
									<th>Members</th>
									<th>Non-members</th>
								</tr>
								<tr>
									<td>Follow rate for writers and publications</td>
									<td>Positive</td>
									<td>Positive</td>
									<td>Positive</td>
									<td>Positive</td>
								</tr>
								<tr>
									<td>Repeat reading from followed writers and publications</td>
									<td>Neutral to positive</td>
									<td>Neutral</td>
									<td>Neutral to positive</td>
									<td>Positive</td>
								</tr>
							</table>
							<p class="text-secondary">Note: &ldquo;Members&rdquo; are Medium users who have purchased subscriptions and have access to all stories on Medium. &ldquo;Non-members&rdquo; are Medium users who are registered but aren&rsquo;t subscribed; they can access stories that aren&rsquo;t behind the paywall, but are limited to 3 stories/month for paywalled stories.</p>
						</figure>
						<p>Initial quantitative results suggested that the new app experience drove entity affinity across the board. Users were generally following more creators and reading more content from said creators. It remained to be seen whether this would translate more broadly to all users, but early signs were promising.</p>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>OTHER KEY EXPERIENCES</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>As the core app experience took shape, we started addressing other key app experiences that were critical for launch. One of these was the experience for non-member users, who can only read a limited number of paywalled stories each month. Non-members need to be crystal clear on how many stories they have left before having to upgrade to a paid membership and they should never use up their free story by accident. To address this, I intentionally added some friction to the non-member reading experience so they&rsquo;re in control of their reading choices on Medium.</p>
						<figure>
							<figcaption>Meter + Paywall Non-members have to tap twice to load a paywalled story. In certain cases, friction in the experience is desired.</figcaption>
						</figure>
						<p>Medium&rsquo;s product changes were accompanied by an <a href="https://blog.medium.com/a-more-expressive-medium-starting-with-medium-63b562206d8f" target="_blank">evolved brand</a> that conveys the openness of the platform. This brand identity is an integral part of Medium&rsquo;s future direction and as such, must be communicated through all product surfaces. I collaborated with the brand team to design and implement this language in product (which included significant changes to typography, colors, and illustration styles), and coordinated subsequent efforts with other designers and scrum teams on the product side for final implementation.</p>
						<figure class="figure-l">
							<img src="_images/work-medium-app-rebrand.png" alt="work-medium-app-rebrand" width="1480" height="1076" >
							<figcaption>Medium&rsquo;s evolved brand as seen on various product surfaces.<br/>Additional designs by Abby Aker (email digest) and Ryan Hubbard (web homepage).</figcaption>
						</figure>
						<p>Medium&rsquo;s own brand wasn&rsquo;t the only thing that changed. As designers on the reader experience group worked through the app designs, there was a parallel effort happening on the creator side to <a href="https://blog.medium.com/a-more-expressive-medium-483e567b19ff" target="_blank">enable more expressiveness through customizations</a>. This would result in a better sense of brand, place, and context for creators and their work on Medium.</p>
						<p>Naturally, the creator&rsquo;s creative decisions needed to be translated into the app so readers could experience it as they read content from various creators. However, the app environment differed slightly from its web counterpart and had its own constraints. To get around these limitations, we decided that the app&rsquo;s official first version would only show key parts of the customization (with future plans to implement themes in full).</p>
						<figure>
							<img src="_images/work-medium-app-themes.png" alt="work-medium-app-themes" width="1542" height="1590" >
							<figcaption>An example of different themes being applied to the same publication to convey a sense of brand, place, and context. The app&rsquo;s official first version would show essential parts of the customization, with a more complete implementation to follow.</figcaption>
						</figure>
						<p>All the product and brand changes that happened during this process unfortunately strained our existing design system. We found that some of the components, semantics, and structure we had been using no longer served our product needs and consequently, we decided to make some fundamental updates to the system. I also used this opportunity to improve accessibility in the system, which resulted in better usability on all product surfaces. I then conducted an audit across all our product surfaces and stress-tested the proposed changes to ensure the system was not only robust enough for current uses, but also flexible enough to accommodate future changes if needed.</p>
						<figure class="figure-l">
							<img src="_images/work-medium-app-design-system.png" alt="work-medium-app-design-system" width="2400" height="1720" >							<figcaption>Changes to the design system had to be audited and evaluated globally. Above is an example of how I stress-tested typography changes across product surfaces.</figcaption>
						</figure>
					</div>
				</section>
			</div>

			<div class="container-section">
				<aside>
					<h2>RELEASE</h2>
					<hr class="separator" />
				</aside>
				<section>
					<div class="container-section-item">
						<p>This grand effort culminated in a public release in October 2020, marking a major step forward in the product&rsquo;s evolution, though it&rsquo;s certainly far from the end. More importantly, however, it reflected Medium&rsquo;s continuing march towards its core mission to deepen people&rsquo;s understanding of the world and spread ideas that matter.</p>
						<figure>
							<figcaption>final screens w dark mode</figcaption>
						</figure>
					</div>
				</section>
			</div>

			<?php include "_inc/work-links.php" ?>

		</main>

		<?php include "_inc/footer.php" ?>
		
	</body>

</html>