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
</head>

<body <?php body_class(); ?>>
<div id="container">
	<header>
		<div class="inner">
			<h1><img src="/wp-content/themes/fxos-theme/assets/img/header_logo.png" alt="Firefox OSコミュニティ"></h1>
			<h2><img src="/wp-content/themes/fxos-theme/assets/img/header_url.png" alt="http://FxOS.org/"></h2>
			<p class="os"><img src="/wp-content/themes/fxos-theme/assets/img/header_os.png" alt=""></p>
			<p class="fox"><img src="/wp-content/themes/fxos-theme/assets/img/header_fox.png" alt=""></p>
			<p class="joinbtn"><a href="https://groups.google.com/forum/?fromgroups#!forum/firefoxos"><i class="icon-plus-sign"></i>コミュニティに登録<span>Googleグループへ</span></a></p>
		</div>
	</header>
	<nav>
		<ul class="gnav wrap">
			<li><a href="/"><i class="icon-home"></i>HOME</a></li>
			<li><a href="/about/"><i class="icon-question-sign"></i>コミュニティについて</a></li>
			<li class="doc"><a href="#"><i class="icon-file-alt"></i>ドキュメント</a>
				<ul>
					<li><a href="/docs/"><i class="icon-user"></i>ユーザ向けドキュメント</a></li>
					<li><a href="/apps/"><i class="icon-wrench"></i>アプリ開発者向けドキュメント</a></li>
					<li><a href="/hacks/"><i class="icon-beaker"></i>Firefox OS本体をいじりたい人向けドキュメント</a></li>
				</ul>
			</li>
			<li><a href="/events/"><i class="icon-calendar"></i>イベント / レポート</a></li>
		</ul>
	</nav>
	<div class="keyvisual">
	</div>
	<div id="wrapper" class="wrap">
		<div id="main">
