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
					<p class="date"><?php echo get_post_meta($post->ID,'開催日時',TRUE); ?></p>
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




	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>