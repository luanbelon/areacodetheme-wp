<?php
if (!defined('ABSPATH')) {
    exit;
}

function areacode_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Menu Principal', 'areacode-theme'),
    ));
}
add_action('after_setup_theme', 'areacode_theme_setup');

function areacode_theme_logo_html($class = 'logo') {
    $logo_id = (int) get_theme_mod('custom_logo');
    if ($logo_id > 0) {
        $logo_url = wp_get_attachment_image_url($logo_id, 'full');
        if (!empty($logo_url)) {
            return '<img src="' . esc_url($logo_url) . '" class="' . esc_attr($class) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
        }
    }

    $site_icon_id = (int) get_option('site_icon');
    if ($site_icon_id > 0) {
        $site_icon_url = wp_get_attachment_image_url($site_icon_id, 'full');
        if (!empty($site_icon_url)) {
            return '<img src="' . esc_url($site_icon_url) . '" class="' . esc_attr($class) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
        }
    }

    return '<span class="' . esc_attr($class) . ' logo-text">' . esc_html(get_bloginfo('name')) . '</span>';
}

function areacode_theme_enqueue_assets() {
    $style_path = get_template_directory() . '/assets/css/main.css';
    $script_path = get_template_directory() . '/assets/js/theme.js';
    $style_version = file_exists($style_path) ? (string) filemtime($style_path) : '1.0.0';
    $script_version = file_exists($script_path) ? (string) filemtime($script_path) : '1.0.0';

    wp_enqueue_style(
        'areacode-google-fonts',
        'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'areacode-theme-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array('areacode-google-fonts'),
        $style_version
    );

    wp_enqueue_script(
        'areacode-theme-script',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        $script_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'areacode_theme_enqueue_assets');
