<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <div class="container footer-wrap">
        <?php echo areacode_theme_logo_html('logo footer-logo'); ?>
        <div class="footer-links">
            <a href="#produtos">Produtos</a>
            <a href="#processo">Processo</a>
            <a href="https://wa.me/+5531992940120" target="_blank" rel="noopener noreferrer">Contato</a>
        </div>
        <p>&copy; <?php echo esc_html(wp_date('Y')); ?> Area Code. Todos os direitos reservados.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
