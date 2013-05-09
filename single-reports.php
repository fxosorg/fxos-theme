<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

		<?php if(have_posts()): ?>
		　　<?php while(have_posts()):the_post(); ?>
			<section id="nowEvent" class="org reports">
				<h1><i class="icon-calendar"></i>イベントレポート</h1>
				<article class="box">
					<h2><?php the_title(); ?></h2>
					<p class="date"><?php the_time("Y.m.d"); ?></p>
					<p><?php the_post_thumbnail('reportthumbL') ?></p>
					<div class="contents">
						<?php the_content(); ?>
					</div>
				</article>

			</section>

			<nav class="nav-single">
				<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
				<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
				<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
			</nav><!-- .nav-single -->

		　　<?php endwhile; ?>
		<?php endif; ?>

<?php get_footer(); ?>