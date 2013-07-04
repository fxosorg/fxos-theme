<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("feeds", "1");

function initialize() {
	var feed = new google.feeds.Feed("https://groups.google.com/forum/feed/firefoxos/msgs/rss.xml?num=15");
	feed.setNumEntries(8);
	feed.load(function(result) {
		if (!result.error) {
			var container = document.getElementById("feed");
			for (var i = 0; i < result.feed.entries.length; i++) {
				var entry = result.feed.entries[i];
				var dd = new Date(entry.publishedDate); // now
				var yearNum = dd.getYear();
				if (yearNum < 2000) yearNum += 1900;
				var m = dd.getMonth() + 1;
				if (m < 10) {m = "0" + m;}
				var d = dd.getDate();
				if (d < 10) {d = "0" + d;}
				var date = yearNum + "." + m + "." + d + " ";
				container.innerHTML += "<li><a href='" + entry.link + "' target='_blank'><i class='icon-angle-right'></i>" + entry.title + "<span>（" + date + "のスレッド）</span></a></li>";
			}
		}
	});
}
google.setOnLoadCallback(initialize);
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42237012-1', 'fxos.org');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="container">
	<?php if ( is_home() ) { ?>
	<header class="top">
	<?php } else { ?> 
	<header class="elsepage">
	<?php } ?> 
		<div class="inner">
			<h1><img src="/wp-content/themes/fxos-theme/assets/img/header_logo.png" alt="Firefox OSコミュニティ"></h1>
			<h2><img src="/wp-content/themes/fxos-theme/assets/img/header_url.png" alt="http://FxOS.org/"></h2>
			<?php if ( is_home() ) { ?>
			<p class="os"><img src="/wp-content/themes/fxos-theme/assets/img/header_os.png" alt=""></p>
			<p class="fox"><img src="/wp-content/themes/fxos-theme/assets/img/header_fox.png" alt=""></p>
			<?php } ?> 
			<p class="joinbtn"><a href="https://groups.google.com/forum/?fromgroups#!forum/firefoxos"><i class="icon-plus-sign"></i>コミュニティに登録<span>Googleグループへ</span></a></p>
		</div>
	</header>
	<nav>
		<ul class="gnav wrap">
			<li><a href="/"><i class="icon-home"></i>HOME</a></li>
			<li><a href="/about/"><i class="icon-question-sign"></i>コミュニティについて</a></li>
			<li class="doc"><a href="#"><i class="icon-file-alt"></i>ドキュメント</a>
				<ul>
					<li><a href="/docs/"><i class="icon-user"></i>ユーザ向け</a></li>
					<li><a href="/apps/"><i class="icon-wrench"></i>アプリ開発者向け</a></li>
					<li><a href="/hacks/"><i class="icon-beaker"></i>Firefox OS本体のカスタマイズ</a></li>
				</ul>
			</li>
			<li><a href="/reports/"><i class="icon-calendar"></i>イベントレポート</a></li>
		</ul>
	</nav>
	<div class="keyvisual">
	</div>
	<div id="wrapper" class="wrap">
		<div id="main">
