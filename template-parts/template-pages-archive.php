<?php
/*
Template Name: Archive Page
*/

get_header();
?>

<main class="posts-archive">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'  =>  'post',
        'post_status'       =>  'publish',
        'orderby'   => 'date',
        'order'     => 'ASC',
        'posts_per_page' => 5,
        'paged' => $paged
    );

    $posts_query = new WP_Query($args);

    if ($posts_query->have_posts()) { ?>

        <div class="index-grid">
            <div class="grid-column">
                <?php while ($posts_query->have_posts()) {
                    $posts_query->the_post(); ?>
                    <div class="related-item">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="title"><?php the_title(); ?></h3>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

    <?php wp_reset_postdata();
    }

    ?>

    </section>


    <div class='pagination'>
        <?php
        $big = 999999999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $posts_query->max_num_pages
        ));
        ?>
        <div>



</main>

<?php get_footer(); ?>