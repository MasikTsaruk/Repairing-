<?php
get_header();
?>

<div class="container">
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>

        </article>
    <?php endwhile; ?>

    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
