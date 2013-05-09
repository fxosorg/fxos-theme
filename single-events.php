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
			<section id="nowEvent" class="org events">
				<h1><i class="icon-bullhorn"></i>イベント詳細</h1>


				<article class="box">
					<h2><?php the_title(); ?></h2>
					<div class="wrap">
						<p class="thumb"><a href="#"><img src="assets/img/mozillathon1.jpg" alt="mozillathon1" width="200"></a></p>
						<div class="text">
							<dl>
								<dt>開催日時</dt>
								<dd><?php echo get_post_meta($post->ID,'開催日時',TRUE); ?></dd>
								<dt>会場</dt>
								<dd><?php echo get_post_meta($post->ID,'会場',TRUE); ?></dd>
								<dt>定員</dt>
								<dd><?php echo get_post_meta($post->ID,'定員',TRUE); ?></dd>
								<dt>ハッシュタグ</dt>
								<dd><?php echo get_post_meta($post->ID,'ハッシュタグ',TRUE); ?></dd>
						</div>
					</div>
					<p class="more"><a href="<?php echo get_post_meta($post->ID,'詳細ページ',TRUE); ?>"><i class="icon-circle-arrow-right"></i>詳細ページ＆申し込み</a></p>
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>