<?php
get_header();
?>

<div class="container">
    <h1><?php esc_html_e('Page not found', 'electro-service'); ?></h1>

    <p>
        <?php esc_html_e('The requested page could not be found.', 'electro-service'); ?>
    </p>

    <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php esc_html_e('Back to home', 'electro-service'); ?>
    </a>
</div>

<?php
get_footer();
