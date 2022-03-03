<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_register_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', [], false, true);
    wp_enqueue_script('iconify');
}

function theme_title_parts($title)
{
    unset($title['tagline']);
    return $title;
}

function CPT_apprenant()
{
    $labels = [
        "name" => __("Apprenants", "custom-post-type-ui"),
        "singular_name" => __("Apprenant", "custom-post-type-ui"),
        "menu_name" => __("Apprenants", "custom-post-type-ui"),
        "all_items" => __("Tous les apprenants", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Apprenants", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "apprenant", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
        "posts_per_page" => '-1',
    ];

    register_post_type("apprenant", $args);
};



function liste_app()
{ ?>

    <div class="container-app">

        <?php $query = new WP_Query(array('post_type' => 'Apprenant', 'nopaging' => true)); ?>

        <?php if ($query->have_posts()) : ?>

            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <div class="app-card">
                    <div class="background"> </div>
                    <h4> <?php the_title() ?> </h4>
                    <p class="img-card"> <?php the_post_thumbnail() ?></p>
                    <h5> A propos de moi </h5>
                    <p> <?php the_content() ?> </p>
                    <p class="link_app"><a href="<?php the_permalink() ?>">En savoir plus </a></p>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
<?php } ?>

<?php function icon_tech()
{ ?>
    <?php echo '<h5> Voici les technologies et outils utilisés durant la formation :  </h5>' ?>
    <div class="content_icon">
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="akar-icons:html-fill"></span>' ?>
            <?php echo '<p class="tech-txt">HTML 5 </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="file-icons:php"></span>' ?>
            <?php echo '<p class="tech-txt">PHP </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="bi:wordpress"></span>' ?>
            <?php echo '<p class="tech-txt">Wordpress </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="akar-icons:css-fill"></span>' ?>
            <?php echo '<p class="tech-txt">CSS 3 </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="file-icons:adobe-photoshop"></span>' ?>
            <?php echo '<p class="tech-txt">PhotoShop </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="file-icons:adobe-illustrator"></span>' ?>
            <?php echo '<p class="tech-txt">Illustrator </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="akar-icons:bootstrap-fill"></span>' ?>
            <?php echo '<p class="tech-txt">Bootstrap </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="akar-icons:javascript-fill"></span>' ?>
            <?php echo '<p class="tech-txt">Javascript </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="bx:bxl-visual-studio"></span>' ?>
            <?php echo '<p class="tech-txt">VS Code </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="file-icons:adobe-premiere"></span>' ?>
            <?php echo '<p class="tech-txt">Premiere</p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="akar-icons:sass-fill"></span>' ?>
            <?php echo '<p class="tech-txt">SASS </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="akar-icons:figma-fill"></span>' ?>
            <?php echo '<p class="tech-txt">Figma </p>' ?>
        </div>
        <div class="icon">
            <?php echo ' <span class="iconify" data-icon="akar-icons:github-fill"></span>' ?>
            <?php echo '<p class="tech-txt">GitHub </p>' ?>
        </div>
    </div>
<?php } ?>

<?php function list_article()
{ ?>
    <?php $query1 = new WP_Query(array('post_type' => 'Article')); ?>
    <?php if ($query1->have_posts()) : ?>


        <?php while ($query1->have_posts()) : $query1->the_post(); ?>
            <?php echo ' <h5>' . the_title() . '</h5>'; ?>
            <?php echo ' <p> ' . the_content() . '<p>'; ?>

        <?php endwhile; ?>

    <?php endif; ?>

<?php } ?>

<?php
function pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) {
        return;
    }
    echo '<div aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if ($active) {
            $class .= ' active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
}

function masque()
{
    echo "<div style='height:40px; width:100vw; background: #001064; position:absolute; margin-top:-30px' class='masque'></div>";
}

?>

<?php
add_filter("document_title_parts", 'theme_title_parts');
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_action('init', 'CPT_apprenant');
add_shortcode('Apprenant', 'liste_app');
add_shortcode('icon_tech', 'icon_tech');
add_shortcode('list_art', 'list_article');
add_shortcode('masque', 'masque');