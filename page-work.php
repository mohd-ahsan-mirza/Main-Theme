<?php get_header(); ?>
	<nav class="nav-container">
		<ul class="nav-menu">
			<li><a href='<?php echo home_url(); ?>'>Home</a></li>
			<li><a class='nav-menu-active-link' href='<?php $page = get_page_by_title( 'work' ); echo get_permalink($page->ID); ?>'>Work</a></li>
			<!--<li><a href='#'>Blog</a></li>-->
			<li><a href='<?php $page = get_page_by_title( 'contact' ); echo get_permalink($page->ID); ?>'>Contact</a></li>
		</ul>
	</nav>
	<div class='work-content'>
		<aside class='work-process-container'>
			<section class='work-process-section'>
				<h1 class='work-process-header'>How I work</h1>
				<img class='work-process-image' src="<?php echo site_url('/wp-content/themes/Main Theme/Process.png'); ?>">
			</section>
		</aside>
		<div class='portfolio-container'>
			<div class='portfolio'>
				<h1 class='portfolio-header'>Portfolio</h1>
				<div class='portfolio-project-container'>
					<section class='portfolio-project-section'>
						<h2 class='portfolio-project-header'>Invoicing application for Carpenter Union of Toronto</h2>
						<p class='portfolio-project-text'>
							The Carpenter Union of Toronto wanted to improve the production and delivery of their invoices.They also wanted to transition from their old 
							Excel macro invoices.<br/><br/>
							My task was to design and develop the application from scratch to finish, which was from design to the launch phase using WordPress on LAMP stack.<br/><br/>
							
							<ul class='portfolio-project-detail-list'>
								<li>Started the development process by first gathering the business requirements and translating them into a technical documentation.</li>
								<li>Developed and implemented a data model that enabled not only the central repository of all invoices but also allowed for future statistical analysis and reporting opportunities.</li>
								<li>Provided access to the tool from desktop, mobile or tablet devices for ease of use and on-site invoicing using responsive web design and mobile first strategy.</li>
								<li>Designed a unique and simple user interface for each different type of user.</li>
								<li>Along with myriad functionalities, added options such as emailing or downloading invoices in PDF format.</li>
								<li>In the final stage of the development process, provided multilingual experience by customizing a third party WordPress plugin and integrating it with the application.</li>
							</ul>
							<br/>  
							After development, I coordinated with QA and then afterward launched the application for UAT. 
							Approximately 7000 people will be using this application in the near future.
						</p>
						<!--
						<blockquote class='porfolio-project-review'>
							<p class='porfolio-project-review-text'>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, 
								pharetra a, ultricies in, diam. Sed arcu. Cras consequat.
								<br/><br />
							</p>
							<strong class='porfolio-project-review-text-author'> Name, Position, Company</strong>
						</blockquote>
						<blockquote class='porfolio-project-review'>
							<p class='porfolio-project-review-text'>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, 
								pharetra a, ultricies in, diam. Sed arcu. Cras consequat.
								<br/><br />
							</p>
							<strong class='porfolio-project-review-text-author'> Name, Position, Company</strong>
						</blockquote>
						<p class='portfolio-project-note'>For more information please contact me</p>
						-->
					</section>
					<section class='portfolio-project-section'>
						<h2 class='portfolio-project-header'>Geolocating Government Representatives of Canada and USA</h2>
						<p class='portfolio-project-text'>
							A Philanthropic company in the USA required a functionality that would generate a list of Canadian and USA government representatives in the surrounding regions of a 
							given Postal / Zip Code and send it along with their details to a third party API service. The final goal was to allow a user to send a letter in an 
							email to the selected government officials.<br/><br/> 
							I was tasked to develop a WordPress plugin for this functionality.<br/><br/>
							I initiated the development process by first dividing the functionality into two parts. The Canadian side and the USA side. In both cases, a distinct third party API service 
							was to be used for each country. In the next step, I learned the details of how to use those API services. Afterward, I developed a prototype of the plugin and wrote down the 
							attributes and objects of the tool using the business requirements. I implemented the plugin using core principles of OOP. I also wrote a short JavaScript code for front-end 
							development. The script would work in conjunction with the plugin so that the user input could be validated and processed. <br/><br/>
							After development, I worked with a team of multiple vendors and developers, in order to integrate the plugin as part of a larger application. The tool is in continuous 
							development and numerous features have been added to it, such as an intermediate modal window screen to add custom recipients in the list of selected government 
							representatives.
						</p>
						<!--
						<blockquote class='porfolio-project-review'>
							<p class='porfolio-project-review-text'>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, 
								pharetra a, ultricies in, diam. Sed arcu. Cras consequat.
								<br/><br />
							</p>
							<strong class='porfolio-project-review-text-author'> Name, Position, Company</strong>
						</blockquote>
						<blockquote class='porfolio-project-review'>
							<p class='porfolio-project-review-text'>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, 
								pharetra a, ultricies in, diam. Sed arcu. Cras consequat.
								<br/><br />
							</p>
							<strong class='porfolio-project-review-text-author'> Name, Position, Company</strong>
						</blockquote>
						<p class='portfolio-project-note'>For more information please contact me</p>
						-->
					</section>
				</div>
			</div>
		</div>
		<aside class='testimony-container'>
			<section class='testimony-section'>
				<h1 class='testimony-header'>Testimonies</h1>
				<blockquote class='testimony'>
					<p class='testimony-text'>
						Ahsan Mirza is a diligent member of the team at Spire Software. His hard work, attention to detail, and strong problem solving skills benefited each project 
						that he worked on. Called upon to do everything from front end programming to database schema design to virtual machine set up, Ahsan always applied himself 
						with the greatest commitment to the challenges put before him. His positive attitude and strong social skills made him a pleasure to work with and a trusted 
						customer contact person for support issues. A fine worker!
						<br/><br />
					</p>
					<strong class='testimony-text-author'> Ryan Gallimore, Managing Director, Spire Software Canada</strong>
				</blockquote>
				<!--
				<blockquote class='testimony'>
					<p class='testimony-text'>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, 
						pharetra a, ultricies in, diam. Sed arcu. Cras consequat.
						<br/><br />
					</p>
					<strong class='testimony-text-author'> Name, Position, Company</strong>
				</blockquote>
				-->
			</section>
		</aside>
	</div>
<?php get_footer(); ?>