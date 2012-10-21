<?php
/*
Template Name: Simple Sitemap
*/
?>



<?php get_template_part( 'parts/shared/header' ); ?>
<div class="content">
	<div class="main_content">
		
		<?php wp_simple_sitemap(); ?>

		<div class="clear"></div>
	</div><!-- end div.main_content -->
	<div class="right_sidebar">
	right
	</div>
	<div class="clear"></div>
</div><!-- end div.content -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>