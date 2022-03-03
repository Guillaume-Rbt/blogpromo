<?php get_header() ?>
<div class="container2"></div>
<div class="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="content-single">
        <h1><?php the_title() ?></h1>
        <p>
          <img class="imgPost" src="<?php the_post_thumbnail_url(); ?>" alt="">
        </p>
        <?php the_content() ?>
      </div>
    <?php endwhile; ?>

    <h2>Projets</h2>

    <div class="container-projet">

      <div class="card_p">
        <?php $numP = 0; ?>
        <h5> <?php echo get_post_meta(get_the_ID(), 'nom_projet', true) ?> </h5>
        <p><?php $gallery_data = get_post_meta(get_the_ID(), 'img_project', true); ?></p>
        <?php echo wp_get_attachment_image($gallery_data, 'medium'); ?>
        <p> <?php echo get_post_meta(get_the_ID(), 'des_projet', true); ?></p>
        <h5> Technologies utilisées </h5>
        <p> <?php echo get_post_meta(get_the_ID(), 'tech_projet', true) ?>
          <?php $link = (get_post_meta(get_the_ID(), 'git_project', true)) ?>
        <h5> Liens </h5>
        <?php $link = (get_post_meta(get_the_ID(), 'git_project', true)) ?>
        <p> <?php echo '<a target="_blank" href="' . $link . '">Lien Github du projet</a>' ?> </p>
        <?php if (get_post_meta(get_the_ID(), 'heberge_project', true)) : ?>
          <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'heberge_project', true) . '">Lien du projet hébergé</a>' ?> </p>
        <?php endif ?>
        <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'git_app', true) . '">Lien vers mon Github' ?> </p>
        <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'linkedin_app', true) . '">Lien vers mon LinkedIn</a>' ?> </p>

      </div>


      <div class="card_p">
        <?php $numP = 0; ?>
        <h5> <?php echo get_post_meta(get_the_ID(), 'nom_projet2', true) ?> </h5>
        <p><?php $gallery_data = get_post_meta(get_the_ID(), 'img_project2', true); ?></p>
        <?php echo wp_get_attachment_image($gallery_data, 'medium'); ?>
        <p> <?php echo get_post_meta(get_the_ID(), 'des_projet2', true); ?></p>
        <h5> Technologies utilisées </h5>
        <p> <?php echo get_post_meta(get_the_ID(), 'tech_projet2', true) ?>
          <?php $link = (get_post_meta(get_the_ID(), 'git_project2', true)) ?>
        <h5> Liens </h5>
        <?php $link = (get_post_meta(get_the_ID(), 'git_project2', true)) ?>
        <p> <?php echo '<a target="_blank" href="' . $link . '">Lien Github du projet</a>' ?> </p>
        <?php if (get_post_meta(get_the_ID(), 'heberge_project2', true)) : ?>
          <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'heberge_project2', true) . '">Lien du projet hébergé</a>' ?> </p>
        <?php endif ?>
        <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'git_app2', true) . '">Lien vers mon Github' ?> </p>
        <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'linkedin_app2', true) . '">Lien vers mon LinkedIn</a>' ?> </p>

      </div>

      <div class="card_p">
        <?php $numP = 0; ?>
        <h5> <?php echo get_post_meta(get_the_ID(), 'nom_projet3', true) ?> </h5>
        <p><?php $gallery_data = get_post_meta(get_the_ID(), 'img_project3', true); ?></p>
        <?php echo wp_get_attachment_image($gallery_data, 'medium'); ?>
        <p> <?php echo get_post_meta(get_the_ID(), 'des_projet3', true); ?></p>
        <h5> Technologies utilisées </h5>
        <p> <?php echo get_post_meta(get_the_ID(), 'tech_projet3', true) ?>
        <h5> Liens </h5>
        <?php $link = (get_post_meta(get_the_ID(), 'git_project3', true)) ?>
        <p> <?php echo '<a target="_blank" href="' . $link . '">Lien Github du projet</a>' ?> </p>
        <?php if (get_post_meta(get_the_ID(), 'heberge_project3', true)) : ?>
          <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'heberge_project3', true) . '">Lien du projet hébergé</a>' ?> </p>
        <?php endif ?>
        <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'git_app3', true) . '">Lien vers mon Github' ?> </p>
        <p> <?php echo '<a target="_blank" href="' . get_post_meta(get_the_ID(), 'linkedin_app3', true) . '">Lien vers mon LinkedIn</a>' ?> </p>
      </div>



    </div>
  <?php endif; ?>
</div>
<section class="container">
  <div class="wave"></div>
</section>
<?php get_footer() ?>