<?php
if (!defined('ABSPATH')) {
    exit;
}

function areacode_theme_default_texts() {
    return array(
        'whatsapp_number' => '5531992940120',
        'nav_inicio' => 'Início',
        'nav_produtos' => 'Produtos',
        'nav_processo' => 'Como Trabalhamos',
        'nav_contato' => 'Contato',
        'nav_cta' => 'Fale Conosco',
        'hero_badge' => 'Software House especializada em previdência complementar',
        'hero_title_before' => 'Tecnologia que transforma a',
        'hero_title_highlight' => 'previdência',
        'hero_title_after' => 'complementar',
        'hero_description' => 'Desenvolvemos soluções inovadoras para EFPCs, com o primeiro e único sistema de portabilidade do mercado fechado de previdência.',
        'hero_cta_primary' => 'Conheça nossos produtos',
        'hero_cta_secondary' => 'Fale com um especialista',
        'stat_1_value' => '18+',
        'stat_1_label' => 'Anos de experiência',
        'stat_2_value' => '10+',
        'stat_2_label' => 'EFPCs atendidas',
        'stat_3_value' => '1ª',
        'stat_3_label' => 'Central de Portabilidade',
        'stat_4_value' => '24/7',
        'stat_4_label' => 'Suporte dedicado',
        'products_title_before' => 'Nossos',
        'products_title_highlight' => 'Produtos',
        'products_description' => 'Soluções desenvolvidas especificamente para o mercado de previdência complementar fechada',
        'product_1_kicker' => 'Para EFPCs',
        'product_1_title' => 'Portal do Participante',
        'product_1_description' => 'Plataforma completa para que os participantes acompanhem seus planos de previdência, simulem benefícios, solicitem serviços e acessem documentos.',
        'product_1_feature_1' => 'Simulação de benefícios',
        'product_1_feature_2' => 'Extrato de contribuições',
        'product_1_feature_3' => 'Solicitações online',
        'product_1_feature_4' => 'App mobile',
        'product_2_kicker' => 'Business Intelligence',
        'product_2_title' => 'Painéis de Gestão',
        'product_2_description' => 'Dashboards interativos com indicadores estratégicos para a gestão da sua entidade. Visualize dados em tempo real e acompanhe metas e orçamentos.',
        'product_2_feature_1' => 'Indicadores em tempo real',
        'product_2_feature_2' => 'Relatórios personalizados',
        'product_2_feature_3' => 'Metas e orçamentos',
        'product_2_feature_4' => 'Exportação de dados',
        'product_3_badge' => 'Exclusivo',
        'product_3_kicker' => 'Primeira e única do mercado',
        'product_3_title' => 'Central de Portabilidade',
        'product_3_description' => 'A primeira e única solução de portabilidade para o mercado fechado de previdência complementar. Automatize todo o processo de transferência entre entidades.',
        'product_3_feature_1' => 'Processo automatizado',
        'product_3_feature_2' => 'Conformidade PREVIC',
        'product_3_feature_3' => 'Rastreabilidade total',
        'product_3_feature_4' => 'Integração entre EFPCs',
        'process_title_before' => 'Como',
        'process_title_highlight' => 'Trabalhamos',
        'process_description' => 'Um processo estruturado para entregar soluções de excelência',
        'process_step_1_title' => 'Descoberta',
        'process_step_1_desc' => 'Entendemos suas necessidades e objetivos em profundidade.',
        'process_step_2_title' => 'Design',
        'process_step_2_desc' => 'Criamos interfaces intuitivas e experiências memoráveis.',
        'process_step_3_title' => 'Desenvolvimento',
        'process_step_3_desc' => 'Construímos com tecnologias modernas e boas práticas.',
        'process_step_4_title' => 'Testes',
        'process_step_4_desc' => 'Garantimos qualidade, segurança e performance.',
        'process_step_5_title' => 'Implantação',
        'process_step_5_desc' => 'Deploy seguro com integração aos seus sistemas.',
        'process_step_6_title' => 'Suporte',
        'process_step_6_desc' => 'Acompanhamento contínuo e evolução constante.',
        'cta_title_before' => 'Pronto para modernizar sua',
        'cta_title_highlight' => 'EFPC',
        'cta_description' => 'Converse com nossos especialistas e descubra como nossas soluções podem transformar a gestão da sua entidade.',
        'cta_button' => 'Fale com um especialista',
        'footer_link_produtos' => 'Produtos',
        'footer_link_processo' => 'Processo',
        'footer_link_contato' => 'Contato',
        'footer_rights' => 'Area Code. Todos os direitos reservados.',
    );
}

function areacode_theme_edit_fields() {
    return array(
        'whatsapp_number' => 'WhatsApp (somente números com DDI, ex.: 5531992940120)',
        'nav_inicio' => 'Menu: Início',
        'nav_produtos' => 'Menu: Produtos',
        'nav_processo' => 'Menu: Como Trabalhamos',
        'nav_contato' => 'Menu: Contato',
        'nav_cta' => 'Menu: Botão Fale Conosco',
        'hero_badge' => 'Hero: Badge',
        'hero_title_before' => 'Hero: Título (parte 1)',
        'hero_title_highlight' => 'Hero: Título destaque',
        'hero_title_after' => 'Hero: Título (parte 2)',
        'hero_description' => 'Hero: Descrição',
        'hero_cta_primary' => 'Hero: Botão principal',
        'hero_cta_secondary' => 'Hero: Botão secundário',
        'stat_1_value' => 'Hero: Indicador 1 (valor)',
        'stat_1_label' => 'Hero: Indicador 1 (texto)',
        'stat_2_value' => 'Hero: Indicador 2 (valor)',
        'stat_2_label' => 'Hero: Indicador 2 (texto)',
        'stat_3_value' => 'Hero: Indicador 3 (valor)',
        'stat_3_label' => 'Hero: Indicador 3 (texto)',
        'stat_4_value' => 'Hero: Indicador 4 (valor)',
        'stat_4_label' => 'Hero: Indicador 4 (texto)',
        'products_title_before' => 'Produtos: Título (parte 1)',
        'products_title_highlight' => 'Produtos: Título destaque',
        'products_description' => 'Produtos: Descrição',
        'product_1_kicker' => 'Produto 1: Kicker',
        'product_1_title' => 'Produto 1: Título',
        'product_1_description' => 'Produto 1: Descrição',
        'product_1_feature_1' => 'Produto 1: Feature 1',
        'product_1_feature_2' => 'Produto 1: Feature 2',
        'product_1_feature_3' => 'Produto 1: Feature 3',
        'product_1_feature_4' => 'Produto 1: Feature 4',
        'product_2_kicker' => 'Produto 2: Kicker',
        'product_2_title' => 'Produto 2: Título',
        'product_2_description' => 'Produto 2: Descrição',
        'product_2_feature_1' => 'Produto 2: Feature 1',
        'product_2_feature_2' => 'Produto 2: Feature 2',
        'product_2_feature_3' => 'Produto 2: Feature 3',
        'product_2_feature_4' => 'Produto 2: Feature 4',
        'product_3_badge' => 'Produto 3: Badge',
        'product_3_kicker' => 'Produto 3: Kicker',
        'product_3_title' => 'Produto 3: Título',
        'product_3_description' => 'Produto 3: Descrição',
        'product_3_feature_1' => 'Produto 3: Feature 1',
        'product_3_feature_2' => 'Produto 3: Feature 2',
        'product_3_feature_3' => 'Produto 3: Feature 3',
        'product_3_feature_4' => 'Produto 3: Feature 4',
        'process_title_before' => 'Processo: Título (parte 1)',
        'process_title_highlight' => 'Processo: Título destaque',
        'process_description' => 'Processo: Descrição',
        'process_step_1_title' => 'Processo 1: Título',
        'process_step_1_desc' => 'Processo 1: Descrição',
        'process_step_2_title' => 'Processo 2: Título',
        'process_step_2_desc' => 'Processo 2: Descrição',
        'process_step_3_title' => 'Processo 3: Título',
        'process_step_3_desc' => 'Processo 3: Descrição',
        'process_step_4_title' => 'Processo 4: Título',
        'process_step_4_desc' => 'Processo 4: Descrição',
        'process_step_5_title' => 'Processo 5: Título',
        'process_step_5_desc' => 'Processo 5: Descrição',
        'process_step_6_title' => 'Processo 6: Título',
        'process_step_6_desc' => 'Processo 6: Descrição',
        'cta_title_before' => 'CTA: Título (parte 1)',
        'cta_title_highlight' => 'CTA: Título destaque',
        'cta_description' => 'CTA: Descrição',
        'cta_button' => 'CTA: Texto do botão',
        'footer_link_produtos' => 'Rodapé: Link Produtos',
        'footer_link_processo' => 'Rodapé: Link Processo',
        'footer_link_contato' => 'Rodapé: Link Contato',
        'footer_rights' => 'Rodapé: Texto de direitos',
    );
}

function areacode_theme_get_texts() {
    $defaults = areacode_theme_default_texts();
    $saved = get_option('areacode_edit_mode_texts', array());
    if (!is_array($saved)) {
        $saved = array();
    }

    return wp_parse_args($saved, $defaults);
}

function areacode_theme_text($key) {
    $texts = areacode_theme_get_texts();
    return isset($texts[$key]) ? $texts[$key] : '';
}

function areacode_theme_whatsapp_url() {
    $raw_number = areacode_theme_text('whatsapp_number');
    $number = preg_replace('/\D+/', '', (string) $raw_number);
    return !empty($number) ? 'https://wa.me/' . $number : '#';
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

function areacode_theme_sanitize_edit_mode_texts($input) {
    $defaults = areacode_theme_default_texts();
    $output = array();

    if (!is_array($input)) {
        return $defaults;
    }

    foreach ($defaults as $key => $default_value) {
        $value = isset($input[$key]) ? wp_unslash($input[$key]) : $default_value;
        $value = is_string($value) ? trim($value) : '';
        $output[$key] = sanitize_textarea_field($value);
    }

    return $output;
}

function areacode_theme_register_edit_mode_settings() {
    register_setting(
        'areacode_edit_mode_group',
        'areacode_edit_mode_texts',
        array(
            'type' => 'array',
            'sanitize_callback' => 'areacode_theme_sanitize_edit_mode_texts',
            'default' => areacode_theme_default_texts(),
        )
    );
}
add_action('admin_init', 'areacode_theme_register_edit_mode_settings');

function areacode_theme_add_edit_mode_menu() {
    add_menu_page(
        'Modo Edição',
        'MODO EDIÇÃO',
        'manage_options',
        'areacode-modo-edicao',
        'areacode_theme_render_edit_mode_page',
        'dashicons-edit-page',
        25
    );
}
add_action('admin_menu', 'areacode_theme_add_edit_mode_menu');

function areacode_theme_render_edit_mode_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    $fields = areacode_theme_edit_fields();
    $values = areacode_theme_get_texts();
    ?>
    <div class="wrap">
        <h1>MODO EDIÇÃO</h1>
        <p>Edite os textos da landing page. Ao salvar, os valores são gravados no banco de dados.</p>
        <form method="post" action="options.php">
            <?php settings_fields('areacode_edit_mode_group'); ?>
            <table class="form-table" role="presentation">
                <tbody>
                <?php foreach ($fields as $key => $label) : ?>
                    <tr>
                        <th scope="row">
                            <label for="<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label>
                        </th>
                        <td>
                            <textarea
                                id="<?php echo esc_attr($key); ?>"
                                name="areacode_edit_mode_texts[<?php echo esc_attr($key); ?>]"
                                rows="2"
                                class="large-text"
                            ><?php echo esc_textarea(isset($values[$key]) ? $values[$key] : ''); ?></textarea>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php submit_button('Salvar textos'); ?>
        </form>
    </div>
    <?php
}

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
