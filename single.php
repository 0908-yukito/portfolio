<?php get_header();?>
<div id="single">
<?php
if ( in_category('夏') ) {
  include(TEMPLATEPATH . '/single-summer.php');
  } else if ( in_category('卒業旅行') ) {
  include(TEMPLATEPATH . '/single-travel.php');
  }
?>
<?php get_footer();?>