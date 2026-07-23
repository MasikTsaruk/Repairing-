<aside
    id="secondary"
    class="widget-area"
    aria-label="<?php esc_attr_e('Blog Sidebar', 'electro-service'); ?>">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php endif; ?>

    <?php get_search_form(); ?>
</aside>