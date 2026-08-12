<?php

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">
        <div class="container">

            <header class="site-header">
                <div class="container">

                    <section class="py-5">
                        <nav class="navbar navbar-expand-lg bg-light">
                            <div class="container">
                                <div class="site-logo">
                                    <?php if (has_custom_logo()) : ?>
                                        <?php the_custom_logo(); ?>
                                    <?php else : ?>
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <?php echo esc_html(get_bloginfo('name')); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent9">
                                    <form class="d-flex align-items-center position-relative ms-lg-3">
                                        <div class="input-group align-items-center mt-3 mt-lg-0">
                                            <?php get_search_form(); ?></div>
                                    </form>
                                    <div class="">
                                        <ul class="navbar-nav ms-auto my-2 my-lg-0">
                                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo esc_url(home_url('/about')); ?>">
                                                    About
                                                </a></li>
                                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo esc_url(home_url('/all-pages')); ?>">
                                                    Blog
                                                </a></li>
                                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo esc_url(home_url('/services')); ?>">
                                                    Services
                                                </a></li>
                                        </ul>

                                    </div>
                                </div>
                        </nav>
                    </section>

                </div>
            </header>
        </div>
        <nav class="site-navigation" aria-label="Main Nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'main-menu',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        </div>
    </header>

    <main class="site-main">