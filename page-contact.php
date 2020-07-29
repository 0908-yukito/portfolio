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
'menu_class'=>'main-menu5',
]
);
?>
</nav>
<?php endif; ?>
</header>
</body>
</html>
<div class="contact">
<div class="form">
<?php echo do_shortcode( '[contact-form-7 id="88" title="無題"]' ); ?>
</div>
</div>
<?php get_footer();?>