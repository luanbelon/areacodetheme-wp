<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="topo">
    <?php $wa_url = esc_url(areacode_theme_whatsapp_url()); ?>
    <div class="container nav-wrap">
        <a href="#hero" class="logo-link" aria-label="Area Code">
            <?php echo areacode_theme_logo_html('logo'); ?>
        </a>

        <button class="menu-toggle" aria-expanded="false" aria-controls="mobile-menu" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="desktop-nav">
            <a href="#hero"><?php echo esc_html(areacode_theme_text('nav_inicio')); ?></a>
            <a href="#produtos"><?php echo esc_html(areacode_theme_text('nav_produtos')); ?></a>
            <a href="#processo"><?php echo esc_html(areacode_theme_text('nav_processo')); ?></a>
            <a href="#contato"><?php echo esc_html(areacode_theme_text('nav_contato')); ?></a>
            <a href="<?php echo $wa_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm"><?php echo esc_html(areacode_theme_text('nav_cta')); ?></a>
        </nav>
    </div>

    <nav id="mobile-menu" class="mobile-nav" aria-hidden="true">
        <a href="#hero"><?php echo esc_html(areacode_theme_text('nav_inicio')); ?></a>
        <a href="#produtos"><?php echo esc_html(areacode_theme_text('nav_produtos')); ?></a>
        <a href="#processo"><?php echo esc_html(areacode_theme_text('nav_processo')); ?></a>
        <a href="#contato"><?php echo esc_html(areacode_theme_text('nav_contato')); ?></a>
        <a href="<?php echo $wa_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm"><?php echo esc_html(areacode_theme_text('nav_cta')); ?></a>
    </nav>
</header>
