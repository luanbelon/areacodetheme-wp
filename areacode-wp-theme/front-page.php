<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main">
    <section id="hero" class="hero-section">
        <div class="hero-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero-bg.jpg'); ?>');"></div>
        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <div class="hero-badge">
                <span class="pulse-dot"></span>
                <span>Software House especializada em previdência complementar</span>
            </div>

            <h1>Tecnologia que transforma a <span class="text-gradient">previdência</span> complementar</h1>
            <p>
                Desenvolvemos soluções inovadoras para EFPCs, com o primeiro e único sistema de
                portabilidade do mercado fechado de previdência.
            </p>

            <div class="hero-cta">
                <a href="#produtos" class="btn btn-primary">Conheça nossos produtos</a>
                <a href="https://wa.me/+5531992940120" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Fale com um especialista</a>
            </div>

            <div class="hero-stats">
                <div class="stat"><strong>18+</strong><span>Anos de experiência</span></div>
                <div class="stat"><strong>10+</strong><span>EFPCs atendidas</span></div>
                <div class="stat"><strong>1ª</strong><span>Central de Portabilidade</span></div>
                <div class="stat"><strong>24/7</strong><span>Suporte dedicado</span></div>
            </div>
        </div>
    </section>

    <section id="produtos" class="products-section section-spacing">
        <div class="container">
            <div class="section-header">
                <h2>Nossos <span class="text-gradient">Produtos</span></h2>
                <p>Soluções desenvolvidas especificamente para o mercado de previdência complementar fechada</p>
            </div>

            <div class="products-grid">
                <article class="product-card">
                    <div class="icon-box" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M16 19v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.8"/><circle cx="9" cy="7" r="3" stroke="currentColor" stroke-width="1.8"/><path d="M22 19v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="1.8"/><path d="M16 3.13a3 3 0 0 1 0 5.82" stroke="currentColor" stroke-width="1.8"/></svg>
                    </div>
                    <p class="product-kicker">Para EFPCs</p>
                    <h3>Portal do Participante</h3>
                    <p>Plataforma completa para que os participantes acompanhem seus planos de previdência, simulem benefícios, solicitem serviços e acessem documentos.</p>
                    <ul>
                        <li>Simulação de benefícios</li>
                        <li>Extrato de contribuições</li>
                        <li>Solicitações online</li>
                        <li>App mobile</li>
                    </ul>
                </article>

                <article class="product-card">
                    <div class="icon-box" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M3 3v18h18" stroke="currentColor" stroke-width="1.8"/><path d="M7 14v3M12 10v7M17 7v10" stroke="currentColor" stroke-width="1.8"/></svg>
                    </div>
                    <p class="product-kicker">Business Intelligence</p>
                    <h3>Painéis de Gestão</h3>
                    <p>Dashboards interativos com indicadores estratégicos para a gestão da sua entidade. Visualize dados em tempo real e acompanhe metas e orçamentos.</p>
                    <ul>
                        <li>Indicadores em tempo real</li>
                        <li>Relatórios personalizados</li>
                        <li>Metas e orçamentos</li>
                        <li>Exportação de dados</li>
                    </ul>
                </article>

                <article class="product-card product-card-featured">
                    <span class="product-badge">Exclusivo</span>
                    <div class="icon-box icon-box-highlight" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M8 8h-6v6M16 16h6v-6M18 8l-4 4 4 4M6 16l4-4-4-4" stroke="currentColor" stroke-width="1.8"/></svg>
                    </div>
                    <p class="product-kicker">Primeira e única do mercado</p>
                    <h3>Central de Portabilidade</h3>
                    <p>A primeira e única solução de portabilidade para o mercado fechado de previdência complementar. Automatize todo o processo de transferência entre entidades.</p>
                    <ul>
                        <li>Processo automatizado</li>
                        <li>Conformidade PREVIC</li>
                        <li>Rastreabilidade total</li>
                        <li>Integração entre EFPCs</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="processo" class="process-section section-spacing">
        <div class="container">
            <div class="section-header">
                <h2>Como <span class="text-gradient">Trabalhamos</span></h2>
                <p>Um processo estruturado para entregar soluções de excelência</p>
            </div>

            <div class="process-grid">
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8"/><path d="m21 21-4.3-4.3" stroke="currentColor" stroke-width="1.8"/></svg></div><span>01</span><h3>Descoberta</h3><p>Entendemos suas necessidades e objetivos em profundidade.</p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M12 3v18M5 8h14M5 16h14" stroke="currentColor" stroke-width="1.8"/></svg></div><span>02</span><h3>Design</h3><p>Criamos interfaces intuitivas e experiências memoráveis.</p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M8 18 18 8M7 7h.01M17 17h.01" stroke="currentColor" stroke-width="1.8"/><rect x="3" y="3" width="18" height="18" rx="3" stroke="currentColor" stroke-width="1.8"/></svg></div><span>03</span><h3>Desenvolvimento</h3><p>Construímos com tecnologias modernas e boas práticas.</p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="1.8"/></svg></div><span>04</span><h3>Testes</h3><p>Garantimos qualidade, segurança e performance.</p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19h14M12 3v10m0 0-4-4m4 4 4-4" stroke="currentColor" stroke-width="1.8"/></svg></div><span>05</span><h3>Implantação</h3><p>Deploy seguro com integração aos seus sistemas.</p></article>
                <article class="process-item"><div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z" stroke="currentColor" stroke-width="1.8"/></svg></div><span>06</span><h3>Suporte</h3><p>Acompanhamento contínuo e evolução constante.</p></article>
            </div>
        </div>
    </section>

    <section id="contato" class="cta-section section-spacing">
        <div class="container">
            <div class="cta-box">
                <h2>Pronto para modernizar sua <span class="text-gradient">EFPC</span>?</h2>
                <p>Converse com nossos especialistas e descubra como nossas soluções podem transformar a gestão da sua entidade.</p>
                <a href="https://wa.me/+5531992940120" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Fale com um especialista</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
