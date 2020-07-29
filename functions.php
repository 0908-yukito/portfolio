<?php
//cssの取得
function twpp_enqueue_styles() {
wp_enqueue_style( 'main-style-sheet', 
get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 
'twpp_enqueue_styles' );
//管理バーを非表示
add_filter( 'show_admin_bar', '__return_false' );
//jsの取得
function twpp_enqueue_scripts() {
wp_enqueue_script( 'main-js-sheet', get_template_directory_uri() .
'/js/main.js', array(),
false,
true
); }
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );
?>
<?php
function sampletheme_setup() {
register_nav_menus( 
[
'menu-1' => 'メイン',
]
);
}
add_action( 'after_setup_theme', 'sampletheme_setup' );
add_theme_support('post-thumbnails');
?>
