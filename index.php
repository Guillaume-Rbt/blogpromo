<?php get_header() ?>
<div class="container2"></div>
<?php if (have_posts()) : ?>
    <h1 class="title_art"> Nos Articles </h1>
    <?php
    $args = array(
        'hide_empty'         => 0,
        'orderby'            => 'name',
        'order'              => 'DES',
        'show_count'         => 1,
        'use_desc_for_title' => 0,
        'title_li'           => '',
        'style'              => 'list',
        'echo'               => false,
    ); ?>
    <div class="list_cat">
        <?php echo wp_list_categories($args); ?>
    </div>

    <div class="container_article">

        <?php while (have_posts()) : the_post(); ?>
            <div class="art">
                <h5> <?php echo the_title() ?> </h5>
                <?php the_post_thumbnail() ?>
                <p> <?php echo the_excerpt() ?> </p>
                <a target="_blank" href="<?php the_permalink() ?>">Lire l'article</a>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>
    </div>

    <?php pagination() ?>
    <section class="container">
        <div class="wave"></div>
    </section>
    <?php get_footer() ?>