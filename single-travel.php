<?php get_header(); ?>
<?php
$卒業旅行_query = new WP_Query(
array(
'post_type' => 'post',
'category_name' => '卒業旅行',
'posts_per_page' => 2,
)
);
?>
<?php
if ( $卒業旅行_query->have_posts() ):?>
<?php
while ( $卒業旅行_query->have_posts() ) : ?>
<?php $卒業旅行_query->the_post(); ?>
<div id="travel">
<div class="travel-content">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer();?>