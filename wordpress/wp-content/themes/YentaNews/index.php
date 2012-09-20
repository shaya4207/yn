<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php get_template_part( 'parts/shared/header' ); ?>
<div class="content">
	<div class="main_content">

		<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" class="news_home">
				<span class="date_home"><?php the_time( 'm/d/Y g:ia' ); ?></span>
				<div class="only400">
					<?php echo_first_image(get_the_ID());?>
				</div>
				<span class="headline_home">
					<?php the_title(); ?>
				</span>
				<div class="clear"></div>
				<?php strip_tags(the_advanced_excerpt()); ?>
				<span class="comments_count">
					<?php comments_number('','(1 Comment)','(% Comments)')?>
				</span>
				<div class="read_more">Continue Reading &rarr;</div>
			</a>
			<hr />
		<?php
		/*
			<li>
				<article>
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
					<?php the_content(); ?>
				</article>
			</li>
		*/
		?>
		<?php endwhile; ?>
		<?php endif; ?>

		<div class="clear"></div>
	</div><!-- end div.main_content -->
	<div class="right_sidebar">
	right
	</div>
	<div class="clear"></div>
</div><!-- end div.content -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>