<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="container">
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <article <?php post_class(); ?> id="page-<?php the_ID(); ?>">
            <h1><?php the_title(); ?></h1>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile; ?>
</div>

<?php
get_footer();
