<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedagem de Sites - VergaHost</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones de redes sociais -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg-hero.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #ffffff;
            padding: 100px 0;
            position: relative;
        }
        .hero-section h1, .hero-section p {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }
        .services-section {
            padding: 60px 0;
            background-color: #ffffff;
        }
        .contact-section {
            background-color: #343a40;
            color: #ffffff;
            padding: 40px 0;
            margin-top: auto;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        @media (max-width: 576px) {
            .contact-section {
                min-height: 200px;
            }
            .hero-section {
                background-attachment: scroll;
                padding: 80px 0;
            }
        }
        .modal-body ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .btn-whatsapp {
            background-color: #25D366;
            color: white;
        }
        .btn-whatsapp:hover {
            background-color: #20b358;
        }
        .hero-section .card {
            background-color: rgba(255, 255, 255, 0.95);
        }
        .btn-support {
            background-color: #007bff;
            color: #ffffff;
            border-radius: 20px;
            padding: 8px 20px;
            font-weight: bold;
            margin-left: 10px;
        }
        .btn-support:hover {
            background-color: #0056b3;
            color: #ffffff;
        }
        @media (max-width: 991px) {
            .btn-support {
                margin: 10px;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Top Header: Navbar com Logomarca e Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">VergaHost</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-support" href="#contact">Suporte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Primeira Dobra: Hero com Texto e Formulário -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Hospedagem de Sites Rápida e Confiável e Bonita!!!</h1>
                    <p>
                        Tenha seu site online com a VergaHost! Oferecemos hospedagem compartilhada de alta performance, 
                        suporte 24/7 e segurança garantida. Escolha o plano ideal para sua necessidade e comece hoje mesmo. 
                        Tudo isso com preços acessíveis e até 10GB de armazenamento.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 shadow-sm">
                        <h3 class="text-center mb-4">Solicite um Orçamento</h3>
                        <form>
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" placeholder="(XX) XXXXX-XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="seu@email.com" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Segunda Dobra: Serviços -->
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="text-center mb-4">Nossos Planos de Hospedagem</h2>
            <p class="text-center mb-5">Escolha o plano perfeito para o seu site, com até 10GB de armazenamento.</p>
            <div class="row">
                <!-- Plano Básico -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Plano Básico</h3>
                            <p class="card-text">
                                Ideal para sites pessoais e blogs.<br>
                                - 2GB de armazenamento<br>
                                - 1 domínio<br>
                                - 5 contas de e-mail<br>
                                - Suporte via ticket
                            </p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalBasico">Saiba Mais</button>
                        </div>
                    </div>
                </div>
                <!-- Plano Médio -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Plano Médio</h3>
                            <p class="card-text">
                                Perfeito para pequenas empresas.<br>
                                - 5GB de armazenamento<br>
                                - 3 domínios<br>
                                - 15 contas de e-mail<br>
                                - Suporte via ticket e chat
                            </p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalMedio">Saiba Mais</button>
                        </div>
                    </div>
                </div>
                <!-- Plano Completo -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Plano Completo</h3>
                            <p class="card-text">
                                Para sites robustos e e-commerce.<br>
                                - 10GB de armazenamento<br>
                                - Domínios ilimitados<br>
                                - 50 contas de e-mail<br>
                                - Suporte prioritário 24/7
                            </p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalCompleto">Saiba Mais</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terceira Dobra: Contato e Redes Sociais (Footer) -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Entre em Contato</h3>
                    <p>
                        E-mail: contato@vergahost.com.br<br>
                        Telefone: (11) 1234-5678<br>
                        WhatsApp: (11) 98765-4321<br>
                        Horário: Seg-Sex, 9h às 18h
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h3>Siga-nos</h3>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in fa-2x"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modais -->
    <!-- Modal Plano Básico -->
    <div class="modal fade" id="modalBasico" tabindex="-1" aria-labelledby="modalBasicoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBasicoLabel">Plano Básico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>O Plano Básico é ideal para sites pessoais e blogs, oferecendo recursos essenciais para começar:</p>
                    <ul>
                        <li>Armazenamento: 2GB</li>
                        <li>Domínios: 1 domínio</li>
                        <li>Contas de e-mail: 5 (máximo de 10GB por conta)</li>
                        <li>Banco de dados: 1GB</li>
                        <li>Suporte: Via ticket</li>
                    </ul>
                    <p>Comece agora e tenha um site online com performance e segurança!</p>
                </div>
                <div class="modal-footer">
                    <a href="https://wa.me/5511987654321?text=Quero%20saber%20mais%20sobre%20o%20Plano%20Básico" target="_blank" class="btn btn-whatsapp">Fale pelo WhatsApp</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Plano Médio -->
    <div class="modal fade" id="modalMedio" tabindex="-1" aria-labelledby="modalMedioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalMedioLabel">Plano Médio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>O Plano Médio é perfeito para pequenas empresas, com mais recursos e flexibilidade:</p>
                    <ul>
                        <li>Armazenamento: 5GB</li>
                        <li>Domínios: 3 domínios</li>
                        <li>Contas de e-mail: 15 (máximo de 10GB por conta)</li>
                        <li>Banco de dados: 1GB</li>
                        <li>Suporte: Via ticket e chat</li>
                    </ul>
                    <p>Leve seu negócio para o próximo nível com a VergaHost!</p>
                </div>
                <div class="modal-footer">
                    <a href="https://wa.me/5511987654321?text=Quero%20saber%20mais%20sobre%20o%20Plano%20Médio" target="_blank" class="btn btn-whatsapp">Fale pelo WhatsApp</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Plano Completo -->
    <div class="modal fade" id="modalCompleto" tabindex="-1" aria-labelledby="modalCompletoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCompletoLabel">Plano Completo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>O Plano Completo é ideal para sites robustos e e-commerce, com recursos avançados:</p>
                    <ul>
                        <li>Armazenamento: 10GB</li>
                        <li>Domínios: Ilimitados</li>
                        <li>Contas de e-mail: 50 (máximo de 10GB por conta)</li>
                        <li>Banco de dados: 1GB</li>
                        <li>Suporte: Prioritário 24/7</li>
                    </ul>
                    <p>Tenha o melhor desempenho e suporte para seu projeto online!</p>
                </div>
                <div class="modal-footer">
                    <a href="https://wa.me/5511987654321?text=Quero%20saber%20mais%20sobre%20o%20Plano%20Completo" target="_blank" class="btn btn-whatsapp">Fale pelo WhatsApp</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>