<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <?php $wa_url = esc_url(areacode_theme_whatsapp_url()); ?>
    <div class="container footer-wrap">
        <?php echo areacode_theme_logo_html('logo footer-logo'); ?>
        <div class="footer-links">
            <a href="#produtos"><?php echo esc_html(areacode_theme_text('footer_link_produtos')); ?></a>
            <a href="#processo"><?php echo esc_html(areacode_theme_text('footer_link_processo')); ?></a>
            <a href="<?php echo $wa_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(areacode_theme_text('footer_link_contato')); ?></a>
        </div>
        <p>&copy; <?php echo esc_html(wp_date('Y')); ?> <?php echo esc_html(areacode_theme_text('footer_rights')); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
