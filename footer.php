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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>