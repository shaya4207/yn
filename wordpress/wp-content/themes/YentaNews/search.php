<?php
/**
 * Search results page
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
		<h2>Search Results for '<?php echo get_search_query(); ?>'</h2>	

		<?php while ( have_posts() ) : the_post(); ?>

					<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" class="news_home">
						<span class="date_home"><?php the_time( 'm/d/Y g:ia' ); ?></span>
						<span class="headline_home"><?php the_title(); ?></span>
						<div class="clear"></div>
						<?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  the_post_thumbnail();
							} 
							?>
						<?php the_advanced_excerpt(); ?>
						<div class="read_more">Continue Reading &rarr;</div>
					</a>
					<hr />

		<?php /*
			<li>
				<article>
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
					<?php the_content(); ?>
				</article>
			</li>
		*/?>
		<?php endwhile; ?>
		<?php else: ?>
		<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
		<?php endif; ?>


		<div class="clear"></div>
	</div><!-- end div.main_content -->
	<div class="right_sidebar">
	right
	</div>
	<div class="clear"></div>
</div><!-- end div.content -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>