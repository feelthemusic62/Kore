<?php

/*-------------------------
    Sidebar
-------------------------*/
if (function_exists('register_sidebar'))
register_sidebar(array(
	'name'=>'Sidebar',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<span class="titleWid">',
	'after_title' => '</span>',
));

/*-------------------------
    Navigation Menu
-------------------------*/
function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Nav Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

/*-------------------------
    Thumbails
-------------------------*/
add_theme_support( 'post-thumbnails' );

/*-------------------------
    oEmbeds Width
-------------------------*/
if ( ! isset($content_width) ){
	$content_width = 700;
 } else{}

/*-------------------------
    Favicon Childtheme
-------------------------*/
function childtheme_favicon() { ?>
	<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/favicon.ico" />
<?php }
add_action('wp_head', 'childtheme_favicon');

?>