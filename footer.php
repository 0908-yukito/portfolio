<footer>
<?php if (has_nav_menu('menu-1')):?>
<nav id="site-navigation" class="main-navigation" aria-label="トップメニュー">
<?php
wp_nav_menu(
[
'theme_location'=>'menu-2',
'menu_class'=>'main-menu2',
]
);
?>
</nav>
<div class="footer-list">
<h1>tamugram</h1>
</div>
<?php endif; ?>
</footer>