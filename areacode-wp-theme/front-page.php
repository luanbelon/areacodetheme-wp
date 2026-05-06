<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main">
    <?php $wa_url = esc_url(areacode_theme_whatsapp_url()); ?>
    <section id="hero" class="hero-section">
        <div class="hero-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero-bg.jpg'); ?>');"></div>
        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <div class="hero-badge">
                <span class="pulse-dot"></span>
                <span><?php echo esc_html(areacode_theme_text('hero_badge')); ?></span>
            </div>

            <h1>
                <?php echo esc_html(areacode_theme_text('hero_title_before')); ?>
                <span class="text-gradient"><?php echo esc_html(areacode_theme_text('hero_title_highlight')); ?></span>
                <?php echo esc_html(areacode_theme_text('hero_title_after')); ?>
            </h1>
            <p>
                <?php echo esc_html(areacode_theme_text('hero_description')); ?>
            </p>

            <div class="hero-cta">
                <a href="#produtos" class="btn btn-primary"><?php echo esc_html(areacode_theme_text('hero_cta_primary')); ?></a>
                <a href="<?php echo $wa_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline"><?php echo esc_html(areacode_theme_text('hero_cta_secondary')); ?></a>
            </div>

            <div class="hero-stats">
                <div class="stat"><strong><?php echo esc_html(areacode_theme_text('stat_1_value')); ?></strong><span><?php echo esc_html(areacode_theme_text('stat_1_label')); ?></span></div>
                <div class="stat"><strong><?php echo esc_html(areacode_theme_text('stat_2_value')); ?></strong><span><?php echo esc_html(areacode_theme_text('stat_2_label')); ?></span></div>
                <div class="stat"><strong><?php echo esc_html(areacode_theme_text('stat_3_value')); ?></strong><span><?php echo esc_html(areacode_theme_text('stat_3_label')); ?></span></div>
                <div class="stat"><strong><?php echo esc_html(areacode_theme_text('stat_4_value')); ?></strong><span><?php echo esc_html(areacode_theme_text('stat_4_label')); ?></span></div>
            </div>
        </div>
    </section>

    <section id="produtos" class="products-section section-spacing">
        <div class="container">
            <div class="section-header">
                <h2><?php echo esc_html(areacode_theme_text('products_title_before')); ?> <span class="text-gradient"><?php echo esc_html(areacode_theme_text('products_title_highlight')); ?></span></h2>
                <p><?php echo esc_html(areacode_theme_text('products_description')); ?></p>
            </div>

            <div class="products-grid">
                <article class="product-card">
                    <div class="icon-box" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M16 19v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.8"/><circle cx="9" cy="7" r="3" stroke="currentColor" stroke-width="1.8"/><path d="M22 19v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="1.8"/><path d="M16 3.13a3 3 0 0 1 0 5.82" stroke="currentColor" stroke-width="1.8"/></svg>
                    </div>
                    <p class="product-kicker"><?php echo esc_html(areacode_theme_text('product_1_kicker')); ?></p>
                    <h3><?php echo esc_html(areacode_theme_text('product_1_title')); ?></h3>
                    <p><?php echo esc_html(areacode_theme_text('product_1_description')); ?></p>
                    <ul>
                        <li><?php echo esc_html(areacode_theme_text('product_1_feature_1')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_1_feature_2')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_1_feature_3')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_1_feature_4')); ?></li>
                    </ul>
                </article>

                <article class="product-card">
                    <div class="icon-box" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M3 3v18h18" stroke="currentColor" stroke-width="1.8"/><path d="M7 14v3M12 10v7M17 7v10" stroke="currentColor" stroke-width="1.8"/></svg>
                    </div>
                    <p class="product-kicker"><?php echo esc_html(areacode_theme_text('product_2_kicker')); ?></p>
                    <h3><?php echo esc_html(areacode_theme_text('product_2_title')); ?></h3>
                    <p><?php echo esc_html(areacode_theme_text('product_2_description')); ?></p>
                    <ul>
                        <li><?php echo esc_html(areacode_theme_text('product_2_feature_1')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_2_feature_2')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_2_feature_3')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_2_feature_4')); ?></li>
                    </ul>
                </article>

                <article class="product-card product-card-featured">
                    <span class="product-badge"><?php echo esc_html(areacode_theme_text('product_3_badge')); ?></span>
                    <div class="icon-box icon-box-highlight" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M8 8h-6v6M16 16h6v-6M18 8l-4 4 4 4M6 16l4-4-4-4" stroke="currentColor" stroke-width="1.8"/></svg>
                    </div>
                    <p class="product-kicker"><?php echo esc_html(areacode_theme_text('product_3_kicker')); ?></p>
                    <h3><?php echo esc_html(areacode_theme_text('product_3_title')); ?></h3>
                    <p><?php echo esc_html(areacode_theme_text('product_3_description')); ?></p>
                    <ul>
                        <li><?php echo esc_html(areacode_theme_text('product_3_feature_1')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_3_feature_2')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_3_feature_3')); ?></li>
                        <li><?php echo esc_html(areacode_theme_text('product_3_feature_4')); ?></li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="processo" class="process-section section-spacing">
        <div class="container">
            <div class="section-header">
                <h2><?php echo esc_html(areacode_theme_text('process_title_before')); ?> <span class="text-gradient"><?php echo esc_html(areacode_theme_text('process_title_highlight')); ?></span></h2>
                <p><?php echo esc_html(areacode_theme_text('process_description')); ?></p>
            </div>

            <div class="process-grid">
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8"/><path d="m21 21-4.3-4.3" stroke="currentColor" stroke-width="1.8"/></svg></div><span>01</span><h3><?php echo esc_html(areacode_theme_text('process_step_1_title')); ?></h3><p><?php echo esc_html(areacode_theme_text('process_step_1_desc')); ?></p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M12 3v18M5 8h14M5 16h14" stroke="currentColor" stroke-width="1.8"/></svg></div><span>02</span><h3><?php echo esc_html(areacode_theme_text('process_step_2_title')); ?></h3><p><?php echo esc_html(areacode_theme_text('process_step_2_desc')); ?></p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M8 18 18 8M7 7h.01M17 17h.01" stroke="currentColor" stroke-width="1.8"/><rect x="3" y="3" width="18" height="18" rx="3" stroke="currentColor" stroke-width="1.8"/></svg></div><span>03</span><h3><?php echo esc_html(areacode_theme_text('process_step_3_title')); ?></h3><p><?php echo esc_html(areacode_theme_text('process_step_3_desc')); ?></p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="1.8"/></svg></div><span>04</span><h3><?php echo esc_html(areacode_theme_text('process_step_4_title')); ?></h3><p><?php echo esc_html(areacode_theme_text('process_step_4_desc')); ?></p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19h14M12 3v10m0 0-4-4m4 4 4-4" stroke="currentColor" stroke-width="1.8"/></svg></div><span>05</span><h3><?php echo esc_html(areacode_theme_text('process_step_5_title')); ?></h3><p><?php echo esc_html(areacode_theme_text('process_step_5_desc')); ?></p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z" stroke="currentColor" stroke-width="1.8"/></svg></div><span>06</span><h3><?php echo esc_html(areacode_theme_text('process_step_6_title')); ?></h3><p><?php echo esc_html(areacode_theme_text('process_step_6_desc')); ?></p></article>
            </div>
        </div>
    </section>

    <section id="contato" class="cta-section section-spacing">
        <div class="container">
            <div class="cta-box">
                <h2><?php echo esc_html(areacode_theme_text('cta_title_before')); ?> <span class="text-gradient"><?php echo esc_html(areacode_theme_text('cta_title_highlight')); ?></span>?</h2>
                <p><?php echo esc_html(areacode_theme_text('cta_description')); ?></p>
                <a href="<?php echo $wa_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary"><?php echo esc_html(areacode_theme_text('cta_button')); ?></a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
