<?php

if (!defined('ABSPATH')) {
    exit;
}
?>

</main>

<footer class="site-footer">
    <div class="container">
        <p>
            &copy;
            <?php echo esc_html(wp_date('Y')); ?>
            <?php echo esc_html(get_bloginfo('name')); ?>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>