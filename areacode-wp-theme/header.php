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
            <a href="#hero">Início</a>
            <a href="#produtos">Produtos</a>
            <a href="#processo">Como Trabalhamos</a>
            <a href="#contato">Contato</a>
            <a href="https://wa.me/+5531992940120" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">Fale Conosco</a>
        </nav>
    </div>

    <nav id="mobile-menu" class="mobile-nav" aria-hidden="true">
        <a href="#hero">Início</a>
        <a href="#produtos">Produtos</a>
        <a href="#processo">Como Trabalhamos</a>
        <a href="#contato">Contato</a>
        <a href="https://wa.me/+5531992940120" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">Fale Conosco</a>
    </nav>
</header>
