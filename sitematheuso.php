<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub & TI - Portal Educacional</title>
    <style>
        /* Variáveis de cores e estilos */
        :root {
            --primary: #2b2d42;
            --secondary: #8d99ae;
            --accent: #ef233c;
            --light: #edf2f4;
            --dark: #1a1c28;
            --success: #4caf50;
            --warning: #ff9800;
            --info: #2196f3;
            --transition: all 0.3s ease;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --radius: 8px;
        }

        /* Reset e estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: var(--accent);
            transition: var(--transition);
        }

        a:hover {
            color: var(--primary);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: var(--radius);
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            text-align: center;
        }

        .btn:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--accent);
            color: var(--accent);
        }

        .btn-outline:hover {
            background: var(--accent);
            color: white;
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--primary);
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--accent);
            margin: 15px auto;
            border-radius: 2px;
        }

        /* Header e Navegação */
        header {
            background: var(--primary);
            color: white;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--accent);
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            color: white;
            font-weight: 500;
            position: relative;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: var(--transition);
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(43, 45, 66, 0.8), rgba(43, 45, 66, 0.8)), url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        /* GitHub Section */
        .github-section {
            background: white;
        }

        .github-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .github-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .github-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .github-card-img {
            height: 200px;
            background-color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        .github-card-content {
            padding: 25px;
        }

        .github-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* TI Courses Section */
        .courses-section {
            background: var(--light);
        }

        .courses-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 12px 24px;
            background: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            border-bottom: 3px solid transparent;
        }

        .tab-btn.active {
            border-bottom: 3px solid var(--accent);
            color: var(--accent);
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .course-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .course-card-img {
            height: 180px;
            background-color: var(--info);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .course-card-content {
            padding: 20px;
        }

        .course-card h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .course-card .price {
            font-weight: bold;
            color: var(--accent);
            font-size: 1.2rem;
            margin: 10px 0;
        }

        /* Resources Section */
        .resources-section {
            background: white;
        }

        .accordion {
            max-width: 800px;
            margin: 0 auto;
        }

        .accordion-item {
            margin-bottom: 15px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .accordion-header {
            padding: 20px;
            background: var(--primary);
            color: white;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }

        .accordion-content {
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: var(--transition);
            background: white;
        }

        .accordion-content.active {
            padding: 20px;
            max-height: 300px;
            overflow-y: auto;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(to right, var(--primary), var(--dark));
            color: white;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: var(--radius);
            color: var(--dark);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--radius);
            font-family: inherit;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(239, 35, 60, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--accent);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ccc;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--accent);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #ccc;
        }

        /* Responsividade */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .nav-menu {
                position: fixed;
                top: 80px;
                right: -100%;
                flex-direction: column;
                background: var(--primary);
                width: 250px;
                height: calc(100vh - 80px);
                padding: 40px 20px;
                transition: var(--transition);
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            }
            
            .nav-menu.active {
                right: 0;
            }
            
            .nav-menu li {
                margin: 15px 0;
            }
            
            .hamburger {
                display: block;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .github-card-img, .course-card-img {
                height: 160px;
            }
        }

        /* Animações */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">
                <i class="fas fa-code"></i> GitHub & TI
            </a>
            <ul class="nav-menu">
                <li><a href="#home">Início</a></li>
                <li><a href="#github">GitHub</a></li>
                <li><a href="#cursos">Cursos</a></li>
                <li><a href="#recursos">Recursos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <h1 class="fade-in">Domine o GitHub e Tecnologia da Informação</h1>
            <p class="fade-in delay-1">Aprenda com especialistas e leve suas habilidades de desenvolvimento para o próximo nível</p>
            <div class="hero-buttons fade-in delay-2">
                <a href="#cursos" class="btn">Explorar Cursos</a>
                <a href="#github" class="btn btn-outline">Aprender GitHub</a>
            </div>
        </div>
    </section>

    <!-- GitHub Section -->
    <section id="github" class="github-section">
        <div class="container">
            <h2 class="section-title">O que é GitHub?</h2>
            <div class="github-grid">
                <div class="github-card fade-in">
                    <div class="github-card-img">
                        <i class="fab fa-github"></i>
                    </div>
                    <div class="github-card-content">
                        <h3>Controle de Versão</h3>
                        <p>GitHub é uma plataforma de hospedagem de código-fonte com controle de versão usando o Git. Ele permite que você trabalhe em projetos colaborativos com outros desenvolvedores em qualquer lugar do mundo.</p>
                    </div>
                </div>
                <div class="github-card fade-in delay-1">
                    <div class="github-card-img">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <div class="github-card-content">
                        <h3>Colaboração</h3>
                        <p>Com recursos como pull requests, issues e projetos, o GitHub facilita a colaboração entre equipes, permitindo revisão de código, discussão de funcionalidades e organização de tarefas.</p>
                    </div>
                </div>
                <div class="github-card fade-in delay-2">
                    <div class="github-card-img">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="github-card-content">
                        <h3>Hospedagem e Implantação</h3>
                        <p>Além de armazenar seu código, o GitHub oferece recursos como GitHub Pages para hospedagem de sites estáticos e integração com serviços de CI/CD para implantação automatizada.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TI Courses Section -->
    <section id="cursos" class="courses-section">
        <div class="container">
            <h2 class="section-title">Aulas de Tecnologia da Informação</h2>
            <div class="courses-tabs">
                <button class="tab-btn active" data-category="programacao">Programação</button>
                <button class="tab-btn" data-category="web">Desenvolvimento Web</button>
                <button class="tab-btn" data-category="dados">Ciência de Dados</button>
                <button class="tab-btn" data-category="devops">DevOps</button>
            </div>
            <div class="courses-grid">
                <div class="course-card fade-in" data-category="programacao">
                    <div class="course-card-img">
                        <i class="fab fa-python"></i>
                    </div>
                    <div class="course-card-content">
                        <h3>Python para Iniciantes</h3>
                        <p>Aprenda os fundamentos da programação com Python, uma das linguagens mais populares e versáteis.</p>
                        <div class="price">R$ 299,00</div>
                        <a href="#" class="btn">Saiba Mais</a>
                    </div>
                </div>
                <div class="course-card fade-in delay-1" data-category="web">
                    <div class="course-card-img">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <div class="course-card-content">
                        <h3>JavaScript Moderno</h3>
                        <p>Domine JavaScript e frameworks modernos como React, Vue e Angular para desenvolvimento web.</p>
                        <div class="price">R$ 399,00</div>
                        <a href="#" class="btn">Saiba Mais</a>
                    </div>
                </div>
                <div class="course-card fade-in delay-2" data-category="dados">
                    <div class="course-card-img">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="course-card-content">
                        <h3>Análise de Dados com Python</h3>
                        <p>Aprenda a usar bibliotecas como Pandas, NumPy e Matplotlib para análise e visualização de dados.</p>
                        <div class="price">R$ 499,00</div>
                        <a href="#" class="btn">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section id="recursos" class="resources-section">
        <div class="container">
            <h2 class="section-title">Recursos de Aprendizado</h2>
            <div class="accordion">
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <span>Guia de Comandos Git Essenciais</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Aqui estão os comandos Git mais importantes para seu fluxo de trabalho diário:</p>
                        <ul>
                            <li><code>git init</code> - Inicializa um repositório Git</li>
                            <li><code>git clone [url]</code> - Clona um repositório remoto</li>
                            <li><code>git add [arquivo]</code> - Adiciona alterações ao staging area</li>
                            <li><code>git commit -m "mensagem"</code> - Registra as alterações no histórico</li>
                            <li><code>git push</code> - Envia alterações para o repositório remoto</li>
                            <li><code>git pull</code> - Obtém alterações do repositório remoto</li>
                            <li><code>git branch</code> - Lista, cria ou deleta branches</li>
                            <li><code>git checkout [branch]</code> - Muda para uma branch específica</li>
                            <li><code>git merge [branch]</code> - Combina branches</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-item fade-in delay-1">
                    <div class="accordion-header">
                        <span>Fluxo de Trabalho no GitHub</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>O fluxo de trabalho típico no GitHub envolve os seguintes passos:</p>
                        <ol>
                            <li>Fork do repositório original</li>
                            <li>Clone do repositório forkado para sua máquina local</li>
                            <li>Criação de uma branch para sua feature ou correção</li>
                            <li>Realizar commits das suas alterações</li>
                            <li>Push das alterações para seu fork</li>
                            <li>Abertura de um Pull Request para o repositório original</li>
                            <li>Discussão e revisão do código</li>
                            <li>Merge do Pull Request após aprovação</li>
                        </ol>
                    </div>
                </div>
                <div class="accordion-item fade-in delay-2">
                    <div class="accordion-header">
                        <span>Boas Práticas de Commit</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Seguir boas práticas de commit é essencial para um histórico limpo e compreensível:</p>
                        <ul>
                            <li>Commits atômicos (uma mudança lógica por commit)</li>
                            <li>Mensagens de commit claras e descritivas</li>
                            <li>Usar o modo imperativo na mensagem ("Adiciona funcionalidade" em vez de "Adicionando funcionalidade")</li>
                            <li>Incluir contexto necessário para entender a mudança</li>
                            <li>Referenciar issues ou tickets quando aplicável</li>
                            <li>Evitar commits com código quebrado ou que não compila</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="contact-section">
        <div class="container">
            <h2 class="section-title">Entre em Contato</h2>
            <div class="contact-grid">
                <div class="contact-info fade-in">
                    <h3>Informações de Contato</h3>
                    <p>Estamos aqui para responder qualquer dúvida sobre nossos cursos ou sobre o uso do GitHub.</p>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Av. Paulista, 1000, São Paulo - SP</li>
                        <li><i class="fas fa-phone"></i> (11) 9999-9999</li>
                        <li><i class="fas fa-envelope"></i> contato@githubeti.com.br</li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="contact-form fade-in delay-1">
                    <h3>Envie uma Mensagem</h3>
                    <form id="formContato" action="enviar.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <input type="text" id="assunto" name="assunto" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>GitHub & TI</h3>
                    <p>Oferecemos os melhores cursos e recursos para dominar o GitHub e avançar na carreira de Tecnologia da Informação.</p>
                </div>
                <div class="footer-col">
                    <h3>Links Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Início</a></li>
                        <li><a href="#github">GitHub</a></li>
                        <li><a href="#cursos">Cursos</a></li>
                        <li><a href="#recursos">Recursos</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Cursos Populares</h3>
                    <ul class="footer-links">
                        <li><a href="#">Python para Iniciantes</a></li>
                        <li><a href="#">JavaScript Moderno</a></li>
                        <li><a href="#">Git e GitHub Completo</a></li>
                        <li><a href="#">Desenvolvimento Web Fullstack</a></li>
                        <li><a href="#">Ciência de Dados</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Inscreva-se na Newsletter</h3>
                    <p>Receba atualizações sobre novos cursos e conteúdos exclusivos.</p>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Seu e-mail" required>
                        </div>
                        <button type="submit" class="btn">Inscrever</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 GitHub & TI. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        // Menu mobile toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });

        // Fechar menu ao clicar em um link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });

        // Accordion functionality
        const accordionHeaders = document.querySelectorAll('.accordion-header');
        
        accordionHeaders.forEach(header => {
            header.addEventListener('click', () => {
                const accordionItem = header.parentElement;
                const accordionContent = header.nextElementSibling;
                
                // Fecha todos os outros itens do accordion
                document.querySelectorAll('.accordion-content').forEach(content => {
                    if (content !== accordionContent) {
                        content.classList.remove('active');
                    }
                });
                
                // Alterna o item atual
                accordionContent.classList.toggle('active');
            });
        });

        // Filtro de categorias de cursos
        const tabButtons = document.querySelectorAll('.tab-btn');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove a classe active de todos os botões
                tabButtons.forEach(btn => btn.classList.remove('active'));
                
                // Adiciona a classe active ao botão clicado
                button.classList.add('active');
                
                // Filtra os cursos
                const category = button.getAttribute('data-category');
                const courseCards = document.querySelectorAll('.course-card');
                
                courseCards.forEach(card => {
                    if (category === 'todos' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Animação de scroll para as seções
        window.addEventListener('scroll', () => {
            const elements = document.querySelectorAll('.fade-in');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if (elementPosition < screenPosition) {
                    element.style.opacity = 1;
                    element.style.transform = 'translateY(0)';
                }
            });
        });

        // Form submission
        const contactForm = document.getElementById('formContato');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulação de envio (substituir por código PHP real)
            alert('Mensagem enviada com sucesso! Em breve entraremos em contato.');
            contactForm.reset();
        });
    </script>
</body>
</html>
