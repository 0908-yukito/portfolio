
<?php get_header(); ?>
<div id="wrapper">
<div class="contents">
<div id="important">
<div class="important-title">
<h1 class="important-logo">Declaration</h1>
<div class="important-list">
<h1>人と人との笑顔を繋ぐパイプラインを</h1>
<p>世界一のサービスを作り出すこと<br/>
これがこれからの目標でもあり<span>夢</span>です。</p>
</div>
</div>
</div>
<div id="school">
<div class="school-title">
<h1>school</h1>
</div>
<div class="left-school">
<div class="left-item">
<h1>1ヶ月目</h1>
</div>
<div class="left">
<h1>1週目</h1>
<p>web入門</p>
<div class="triangle">
</div>
</div>
<div class="left">
<h1>2週目</h1>
<p>HTML,CSS</p>
<div class="triangle">
</div>
</div>
<div class="left">
<h1>3週目</h1>
<p>JavaScript,JQuery</p>
<div class="triangle">
</div>
</div>
<div class="left">
<h1>4週目</h1>
<p>Vue.js</p>
</div>
</div>
<div class="triangle-1">
</div>
<div class="arrow01">
</div>
<div class="left-title">
<h1>身についたスキル</h1>
<ul>
<li>プロトタイプ</li>
<li>LP(動きなし)</li>
<li>LP(動きあり)</li>
<li>シングルページ</li>
</ul>
</div>
<div class="right-school">
<div class="right-item">
  <h1>2ヶ月目</h1>
</div>
<div class="right">
<h1>1週目</h1>
<p>web入門</p>
<div class="triangle">
</div>
</div>
<div class="right">
<h1>2週目</h1>
<p>HTML,CSS</p>
<div class="triangle">
</div>
</div>
<div class="right">
<h1>3週目</h1>
<p>JavaScript,JQuery</p>
<div class="triangle">
</div>
</div>
<div class="right">
<h1>4週目</h1>
<p>Vue.js</p>
</div>
</div>
<div class="arrow03">
</div>
<div class="right-title">
<h1>身についたスキル</h1>
<ul>
<li>サーバーレスアプリケーション</li>
<li>コンテンツ管理システム</li>
<li>weB API</li>
<li>webアプリケーション</li>
</ul>
</div>
</div>
<div class="flex">
<div class="Blog-title">
<h1>Blog</h1>
</div>
<?php
$思い出_query = new WP_Query(
array(
'post_type' => 'post',
'category_name' => '思い出',
'posts_per_page' => 4,
)
);
?>
<?php
if ( $思い出_query->have_posts() ):?>
<?php
while ( $思い出_query->have_posts() ) : ?>
<?php $思い出_query->the_post(); ?>
<div class="flex-logo">
<div class="flex-title">
<?php the_title(); ?>
</div>
<div class="flex-data">
<?php echo get_the_date('Y-m-d'); ?>
</div>
<div class="flex-thumbnall">
<?php the_post_thumbnail(); ?>
</div>
<div class="flex-item">
<a href="<?php the_permalink(); ?>">more</a>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php wp_reset_postdata(); ?>
<p id="page-top"><a id="move-page-top">⬆︎</a></p>
</div>
</div>
</div>
<?php get_footer(); ?>


