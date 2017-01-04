<?php get_header(); ?>
	<nav class="nav-container">
		<ul class="nav-menu">
			<li><a href='<?php echo home_url(); ?>'>Home</a></li>
			<li><a href='<?php $page = get_page_by_title( 'work' ); echo get_permalink($page->ID); ?>'>Work</a></li>
			<!--<li><a href='#'>Blog</a></li>-->
			<li><a class='nav-menu-active-link' href='<?php $page = get_page_by_title( 'contact' ); echo get_permalink($page->ID); ?>'>Contact</a></li>
		</ul>
	</nav>
	<div class='contact-content'>
		<div class='contact-container'>
			<form class='contact-form'>
				<div><input class='input-name' type="text" placeholder="Name"><div class='error name'></div></div><br/>
				<div><input class='input-email' type="email" placeholder="Email"><div class='error email'></div></div><br/>
				<div><input class='input-subject' type="text" placeholder="Subject"><div class='error subject'></div></div><br/>
				<div><textarea class='input-message' rows="4" cols="50" placeholder="Message"></textarea><div class='error message'></div></div>
				<input class='input-submit' type="submit" value="Submit">
			</form>
		</div>
	</div>
<?php get_footer(); ?>