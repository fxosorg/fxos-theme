<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>




			<section id="nowEvent" class="org">
				<h1><i class="icon-bullhorn"></i>開催イベント</h1>

				<?php
				/* カスタム投稿タイプを表示する */
				$loop = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => 10 ) );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>

				<article class="box">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="date"><i class="icon-time"></i><?php echo get_post_meta($post->ID,'開催日時',TRUE); ?></p>
					<div class="wrap">
						<p class="thumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('eventthumb') ?></a></p>
						<p class="text"><?php echo mb_substr(strip_tags($post-> post_content),0,150).'...'; ?></p>
					</div>
					<p class="more"><a href="<?php the_permalink() ?>"><i class="icon-circle-arrow-right"></i>くわしく知りたい</a></p>
				</article>
				<?php endwhile; ?>

			</section>
			<section id="pastEvent" class="org">
				<h1><i class="icon-camera-retro"></i>イベントレポート</h1>
				<div class="wrap">
					<article class="box">
						<p class="thumb"><a href="#"><img src="assets/img/mozillathon1.jpg" alt="mozillathon1" width="150"></a></p>
						<p class="more"><a href="#"><i class="icon-circle-arrow-right"></i></a></p>
						<h2>Mozilla Hackathon 2013 春</h2>
						<p class="date">2013.4.27（土）〜28（日）</p>
					</article>
					<article class="box">
						<p class="thumb"><a href="#"><img src="assets/img/mozillathon1.jpg" alt="mozillathon1" width="150"></a></p>
						<p class="more"><a href="#"><i class="icon-circle-arrow-right"></i></a></p>
						<h2>Mozilla Hackathon 2013 春</h2>
						<p class="date">2013.4.27（土）〜28（日）</p>
					</article>
					<article class="box">
						<p class="thumb"><a href="#"><img src="assets/img/mozillathon1.jpg" alt="mozillathon1" width="150"></a></p>
						<p class="more"><a href="#"><i class="icon-circle-arrow-right"></i></a></p>
						<h2>Mozilla Hackathon 2013 春</h2>
						<p class="date">2013.4.27（土）〜28（日）</p>
					</article>
				</div>
			</section>

<?php get_footer(); ?>