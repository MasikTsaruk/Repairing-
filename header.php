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
        <div class="container header-inner">

            <div class="site-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo esc_html(get_bloginfo('name')); ?>
                    </a>
                <?php endif; ?><span></span>
                <a href="<?php echo esc_url(home_url('/about')); ?>">
                    About Us
                </a>
                <a href="<?php echo esc_url(home_url('/services')); ?>">
                    Services
                </a>
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

            <div class="header-search">
                <?php get_search_form(); ?>
            </div>

        </div>
    </header>

    <main class="site-main">