<?php get_header(); ?>
<div class="container2"></div>
<?php
if (have_posts()) : while (have_posts()) : the_post();
    the_title();
    echo '<div class="entry-content">';
    the_content();
    echo '</div>';
  endwhile;
endif;
pagination();
?>
<section class="container">
  <div class="wave"></div>
</section>
<?php
get_footer();
?>