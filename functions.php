<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Настройка возможностей темы.
 */
function electro_service_setup(): void
{
    // WordPress самостоятельно формирует <title>.
    add_theme_support('title-tag');

    // Возможность назначать изображение записи или страницы.
    add_theme_support('post-thumbnails');

    // Логотип, редактируемый из админки.
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Более современная HTML-разметка стандартных элементов WordPress.
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Регистрируем место для меню.
    register_nav_menus([
        'primary' => __('Main Menu', 'electro-service'),
    ]);
}

add_action('after_setup_theme', 'electro_service_setup');

/**
 * Подключение CSS и JavaScript.
 */
function electro_service_assets(): void
{
    wp_enqueue_style(
        'electro-service-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'electro-service-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'electro_service_assets');
