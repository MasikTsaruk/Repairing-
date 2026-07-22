<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="container">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>

            </article>

        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

    <?php else : ?>

        <p>Материалы не найдены.</p>

    <?php endif; ?>
</div>

<?php
get_footer();
