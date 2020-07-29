<?php get_header(); ?>
<?php
$夏_query = new WP_Query(
array(
'post_type' => 'post',
'category_name' => '夏',
'posts_per_page' => 2,
)
);
?>
<?php
if ( $夏_query->have_posts() ):?>
<?php
while ( $夏_query->have_posts() ) : ?>
<?php $夏_query->the_post(); ?>
<div class="summer">
<div class="summer-content">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>