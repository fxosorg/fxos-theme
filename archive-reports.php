<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="pastEvent" class="org">
		<h1><i class="icon-calendar"></i></i>イベントレポート</h1>
		<div class="wrap">
			<article class="box">
				<p class="thumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('reportthumb') ?></a></p>
				<p class="more"><a href="#"><i class="icon-circle-arrow-right"></i></a></p>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="date"><?php the_time("Y.m.d"); ?></p>
			</article>
		</div>
	</section>

<?php get_footer(); ?>