<?php
/**
 * The Template for displaying all single posts
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
			<div class="news_article"> 
				<span class="headline_article">
					<h1><?php the_title(); ?></h1>
				</span>
				<span class="date_article">
				<?php the_time('l ~ M d, Y ~ h:ia')?>
				</span>
				<div class="clear"></div>
				<?php the_content(); ?><p>&nbsp;</p>
				<?php comments_template( '', true ); ?>
			</div>
			<?php
/*
<article>

	<h2><?php the_title(); ?></h2>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
	<?php the_content(); ?>			

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>

	<?php comments_template( '', true ); ?>

</article>
*/
?>
			<?php endwhile; ?>
		</div><!-- .main_content -->
		<div class="right_sidebar"> right </div>
		<div class="clear"></div>
	</div><!-- .content-->
</div><!-- .wrapper -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
