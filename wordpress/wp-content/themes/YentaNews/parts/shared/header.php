<?php get_template_part('parts/shared/html-header');?>
		<div class="wrapper">
			<div class="header">
				<ul class="main_menu">
					<?php
						wp_page_menu('show_home=Home');
					?>
				</ul>
				<?php //get_search_form(); ?>
			</div>
<?php
/*
<div class="header">
	<ul class="main_menu">
		<li><a href="./" class="active">Home</a></li>
		<li><a href="#">Archives</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
</div>

<header>
	<h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
	<?php bloginfo( 'description' ); ?>
	<?php get_search_form(); ?>
</header>
*/