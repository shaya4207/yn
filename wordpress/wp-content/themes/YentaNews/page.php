<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php get_template_part(  'parts/shared/header'  ); ?>
	<div class="content">
		<div class="main_content">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php // comments_template( '', true ); ?>
			<?php endwhile; ?>

		</div><!-- .main_content -->
		<div class="right_sidebar"> right </div>
		<div class="clear"></div>
	</div><!-- .content-->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>