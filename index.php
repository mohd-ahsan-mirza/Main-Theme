<?php get_header(); ?>
	<nav class="nav-container">
		<ul class="nav-menu">
			<li><a class='nav-menu-active-link' href='<?php echo home_url(); ?>'>Home</a></li>
			<li><a href='<?php $page = get_page_by_title( 'work' ); echo get_permalink($page->ID); ?>'>Work</a></li>
			<!--<li><a href='#'>Blog</a></li>-->
			<li><a href='<?php $page = get_page_by_title( 'contact' ); echo get_permalink($page->ID); ?>'>Contact</a></li>
		</ul>
	</nav>
	<div class='about-content'>
		<aside class='my-pic-container'>
			<img class='my-pic' src="<?php echo site_url('/wp-content/themes/Main Theme/mypic.jpg'); ?>">
		</aside>
		<section class='about-text-container'>
			<p class='about-text'>
				Hi, thank you for visiting my website.<br/><br />
				My name is Ahsan Mirza and I am currently working as a web developer in the city of Toronto, Canada. I am a graduate from Seneca College holding a diploma in computer programming.<br/><br/>
				Intrigued by web development and design, data and predictive analysis, AI and machine learning. Also fond of travelling, multilingualism, fitness and interacting with people in general.<br/><br/>
				My experience as a developer has made me a strong advocate of user's needs. I believe in implementing simple solutions to complex problems.<br/><br/>  
				Always trying to achieve the unachievable and improving myself as a person day by day. My approach to life is simple; don't give up and never stop learning.<br/><br/>
				Say hi on <a href='https://ca.linkedin.com/in/muhammad-ahsan-mirza-460b6378'>LinkedIn</a>
			</p>
		</section>
		<aside class='feed-container'>
			<section class='skills-section'>
				<div class='skills-container'>
					<h1 class='skills-header'>Skills</h1>
					<div class='skill-circle skill-level-expert'><span>PHP</span></div>
					<div class='skill-circle skill-level-advance'><span>JS</span></div>
					<div class='skill-circle skill-level-advance'><span>jQuery</span></div>
					<div class='skill-circle skill-level-expert'><span>SQL</span></div>
					<div class='skill-circle skill-level-expert'><span>OOP</span></div>
					<div class='skill-circle skill-level-advance'><span>WP</span></div>
					<div class='skill-circle skill-level-intermediate'><span>Linux</span></div>
					<div class='skill-circle skill-level-advance'><span>CSS</span></div>
					<div class='skill-circle skill-level-advance'><span>RWD</span></div>
					<div class='skill-circle skill-level-intermediate'><span>QA</span></div>
					<div class='skill-circle skill-level-advance'><span>HTML</span></div>
					<div class='skill-circle skill-level-advance'><span>JIRA</span></div>
					<div class='skill-circle skill-level-intermediate'><span>SVN</span></div>
					<div class='skill-circle skill-level-intermediate'><span>GIT</span></div>
					<div class='skill-circle skill-level-expert'><span>EN</span></div>
					<div class='skill-circle skill-level-basic'><span>FR</span></div>
				</div>
			</section>
		</aside>
	</div>
<?php get_footer(); ?>