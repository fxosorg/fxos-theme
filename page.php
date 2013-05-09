<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<section class="gray page">
		<h1><i class="icon-calendar"></i><?php the_title(); ?></h1>
		<article class="box">
			<!--<p class="date"><?php the_time("Y.m.d"); ?></p>-->
			<div class="contents">
				<?php the_content(); ?>
			</div>
		</article>

	</section>
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>