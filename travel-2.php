<?php get_header(); ?>
<?php
$思い出_query = new WP_Query(
array(
'post_type' => 'post',
'category_name' => '卒業旅行',
'posts_per_page' => 2,
)
);
?>
<?php
if ( $思い出_query->have_posts() ):?>
<?php
while ( $思い出_query->have_posts() ) : ?>
<?php $思い出_query->the_post(); ?>
<div id="travel">
<div class="travel-content">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>