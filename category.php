<?php get_header() ?>
<div class="container2"></div>
<h1 class="title_art"> <?php $cat = get_the_category();
                        echo $cat[0]->cat_name; ?> </h1>
<?php if (have_posts()) : ?>


  <div class="container_art">

    <?php while (have_posts()) : the_post(); ?>
      <div class="art">
        <h5> <?php echo the_title() ?> </h5>
        <?php the_post_thumbnail() ?>
        <p> <?php echo the_excerpt() ?> </p>
        <a href="<?php the_permalink() ?>">Lire l'article</a>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
  </div>
  <?php pagination() ?>
  <section class="container">
    <div class="wave"></div>
  </section>
  <?php get_footer() ?>