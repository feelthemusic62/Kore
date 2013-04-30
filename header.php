<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/devices/favicon.png">
    
    <!-- WP Default -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <!--Resources WP-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.min.css"  type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"  type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/print.css" media="print" />
    
    <!--Resources Ext -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Lato:400" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
	<?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
</head>

<section id="wrapper">
    <header id="head">
        <hgroup id="headBrand">
            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        </hgroup>
        <nav id="generalNav">
            <?php wp_nav_menu( array('menu' => 'Nav Menu')); ?>
        </nav>
    </header>