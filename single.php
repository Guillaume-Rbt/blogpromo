<?php get_header() ?>
<div class="container2"></div>
<div class="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="content-single">
        <h1><?php the_title() ?></h1>
        <p> <img class="imgPost" src="<?php the_post_thumbnail_url(); ?>" alt=""> </p>
        <p><?php the_content() ?></p>
      </div>
  <?php endwhile;
  endif; ?>
</div>

<div class="getfooter">
  <section class="container">
    <div class="wave"></div>
  </section>
  <?php get_footer() ?>
</div>