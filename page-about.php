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
'menu_class'=>'main-menu1',
]
);
?>
</nav>
<?php endif; ?>
</header>
</body>
</html>
<div id="about">
<div class="about-top">
<div class="about-title">
<h1>about</h1>
</div>
<div class="about-logo">
<p>5月からスクールに通いプログラミングの勉強を始める<br/>
   仕事をやりながら帰っての時間を勉強に当てた。<br/>
</p>
</div>
</div>
<div class="about-bottom">
<div class="about-list">
<img src="<?php echo get_template_directory_uri();
?>/img/5CFD7BAC-243A-4E52-B217-860E0FDB5252_4_5005_c.jpeg"  alt="">
</div>
<div class="about-item">
<div class="left-information">
<p class="place">所在地:</p>
<p class="place">お問い合わせ:</p>
<p class="place">将来:</p>
<p class="place">instagram:</p>
<p class="place">twitter:</p>
</div>
<div class="right-information">
<p class="place2">愛知県(あいちけん)</p>
<p class="place2">tourentiancun992@gmail.com</p>
<p class="place3">みんなに使ってもらえるようなサービス、アプリケーションを作り出す。</p>
<p class="place2">tamurayukito</p>
<p class="place2"> @vnSRN0MzjZUehtE</p>
</p>
</div>
</div>
</div>
</div>
<?php get_footer();?>



