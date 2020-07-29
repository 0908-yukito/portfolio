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
'menu_class'=>'main-menu4',
]
);
?>
</nav>
<?php endif; ?>
</header>
</body>
</html>
<?php
$思い出_query = new WP_Query(
array(
'post_type' => 'post',
'category_name' => '学園',
'posts_per_page' => 2,
)
);
?>
<div class="flex-about">
<?php
if ( $思い出_query->have_posts() ):?>
<?php
while ( $思い出_query->have_posts() ) : ?>
<?php $思い出_query->the_post(); ?>
<div class="flex-content">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>