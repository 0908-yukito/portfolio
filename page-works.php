<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タムブログ</title>
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/main.js" charset="UTF-8"></script>
    </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <header>
<div class="header-title">
<div class="header-img">
 <img src="<?php echo get_template_directory_uri();
?>/img/5CFD7BAC-243A-4E52-B217-860E0FDB5252_4_5005_c.jpeg"  alt="">
</div>
<div class="header-list">
<h1>tamugram</h1>
</div>
</div>
<div class="header-item">
<a href="https://twitter.com/@vnSRN0MzjZUehtE">
<img src="<?php echo get_template_directory_uri();
?>/img/twitter-icon.png"  alt=""></a>
<a href="http://www.instagram.com/tamurayukito/">
<img src="<?php echo get_template_directory_uri();
?>/img/instagram-archive-top.png"  alt=""></a>
</div>
<?php if (has_nav_menu('menu-1')):?>
<nav id="site-navigation" class="main-navigation" aria-label="トップメニュー">
<?php
wp_nav_menu(
[
'theme_location'=>'menu-1',
'menu_class'=>'main-menu3',
]
);
?>
</nav>
<?php endif; ?>
</header>
</body>
</html>
<div class="site">
<div class="site1">
<h1>架空のサイト</h1>
<p>デザイン練習のために、架空の飲料水や、水族館などを想定し、デザインしています。デザインのみです。
</p>
<?php
$works_query = new WP_Query(
array(
'post_type' => 'post',
'category_name' => 'works',
'posts_per_page' => 4,
)
);
?>
<?php
if ( $works_query->have_posts() ):?>
<?php
while ( $works_query->have_posts() ) : ?>
<?php $works_query->the_post(); ?>
<div class="works-content">
<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<p id="page-top"><a id="move-page-top">⬆︎</a></p>
</div>
<?php get_footer();?>
