<?php
use App\Utility\Paths
?>

<!DOCTYPE html>
<html lang="pt-BR">

<body class="index-page">

  <main class="main">
    <!-- Seção Hero -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-globe me-2"></i>
                Conectando leitores, transformando a educação.
              </div>

              <h1 class="mb-4">
                Sua biblioteca digital e <br>
                <span class="accent-text">colaborativa</span>
              </h1>

              <p class="mb-4 mb-md-5">
                Acreditamos que cada livro compartilhado abre uma porta para o futuro.<br>
                Por isso, criamos uma plataforma vibrante que conecta leitores curiosos e autores talentosos, unindo
                todos pela paixão de democratizar o conhecimento e celebrar o poder da leitura. Seja bem-vindo ao
                iLearn.
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>img/hero.png" alt="Hero Image" class="img-fluid">
            </div>
          </div>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-people-fill"></i>
              </div>
              <div class="stat-content">
                <h4>Comunidade</h4>
                <p class="mb-0">Troca de experiências.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-book"></i>
              </div>
              <div class="stat-content">
                <h4>Acervo Diverso</h4>
                <p class="mb-0">Leitura para todos.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div class="stat-content">
                <h4>Autores</h4>
                <p class="mb-0">Novos talentos.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-patch-check-fill"></i>
              </div>
              <div class="stat-content">
                <h4>Verificado</h4>
                <p class="mb-0">Conteúdo confiável.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- Seção Sobre -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">SOBRE</span>
            <h2 class="about-title">Quem somos?</h2>
            <p class="about-description">Somos uma plataforma digital movida por um propósito: conectar pessoas através
              das histórias. Nascemos como uma comunidade colaborativa, guiada pela ODS 4 (Educação de Qualidade), onde
              sua experiência de leitura importa. Aqui, leitores, estudantes e autores se encontram para compartilhar,
              avaliar e democratizar o acesso a um universo de conhecimento, fortalecendo juntos a educação.</p>

            <div class="row feature-list-wrApper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Promoção da Leitura</li>
                  <li><i class="bi bi-check-circle-fill"></i> Democratização da Leitura</li>
                  <li><i class="bi bi-check-circle-fill"></i> Conectividade e Inclusão</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Inovação e Tecnologia</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ambiente Seguro</li>
                  <li><i class="bi bi-check-circle-fill"></i> Vitrine para Autores</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrApper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>img/about.png" alt="Business Meeting" class="img-fluid main-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>+300<span>Livros</span></h3>
                <p>Conectando Milhares de Leitores</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- Seção Recursos -->
    <section id="features" class="features section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Recursos</h2>
        <p>Desenvolvemos ferramentas para enriquecer sua jornada de leitura. Explore como nossa plataforma conecta você
          a novas histórias, pessoas e oportunidades.</p>
      </div>

      <div class="container">

        <div class="d-flex justify-content-center">

          <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                <h4>Comunidade</h4>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                <h4>Acervo</h4>
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                <h4>Autores</h4>
              </a>
            </li>
          </ul>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Conecte-se com a comunidade</h3>
                <p class="fst-italic">
                  Descubra uma comunidade vibrante de leitores apaixonados. Compartilhe suas opiniões, avalie livros e
                  troque ideias sobre suas leituras favoritas. Encontre novas perspectivas e faça amigos com interesses
                  em comum.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Participe de discussões sobre os livros que você
                      ama..</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Leia resenhas de outros usuários e descubra novas
                      leituras.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Avalie livros e compartilhe suas opiniões.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>img/1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Um Universo de Livros ao Seu Alcance </h3>
                <p class="fst-italic">
                  Explore um catálogo diversificado de livros físicos e digitais, abrangendo todos os gêneros e
                  interesses. De clássicos atemporais a lançamentos de autores independentes, encontre sua próxima
                  grande leitura em nossa plataforma.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Navegue por categorias e encontre livros facilmente.</span>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Descubra recomendações personalizadas com base nos seus
                      gostos.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Veja seus livros favoritos em listas de leitura
                      personalizadas.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>img/2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Sua Voz Literária Amplificada</h3>
                <p class="fst-italic">
                  Se você é um autor independente, esta é a sua chance de compartilhar sua obra com um público engajado.
                  Publique seus livros em nossa plataforma e conecte-se diretamente com leitores em busca de novas
                  histórias e perspectivas.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Divulgue seus livros para uma comunidade de leitores
                      interessados.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Receba feedback direto dos leitores sobre o seu
                      trabalho.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Faça parte de um espaço que valoriza a diversidade de vozes
                      na literatura.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>img/3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- Seção de Chamada para Ação -->
    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row content justify-content-center align-items-center position-relative">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="display-4 mb-4">Junte-se à nossa comunidade de leitores</h2>
            <p class="mb-4">Crie seu perfil gratuito, compartilhe suas paixões literárias e descubra um universo de
              novas histórias e conhecimentos esperando por você.</p>
            <a href="<?php echo Paths::MAIN_FOLDER . Paths::VIEW_FOLDER ?>Login/?page=cadastro" class="btn btn-cta">Crie Sua Conta</a>
          </div>

          <div class="shape shape-1">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z"
                transform="translate(100 100)"></path>
            </svg>
          </div>

          <div class="shape shape-2">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z"
                transform="translate(100 100)"></path>
            </svg>
          </div>

          <div class="dots dots-1">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              </pattern>
              <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
            </svg>
          </div>

          <div class="dots dots-2">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              </pattern>
              <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
            </svg>
          </div>

          <div class="shape shape-3">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z"
                transform="translate(100 100)"></path>
            </svg>
          </div>
        </div>

      </div>

    </section>

    <section id="stats" class="stats section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Leitores</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Livros</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Resenhas</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Autores</p>
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- Seção de Serviços -->
    <section id="services" class="services section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Soluções</h2>
        <p>Criamos um espaço com benefícios claros para cada tipo de usuário. Veja como nossa plataforma pode ajudar
          você a atingir seus objetivos, sejam eles de leitura, escrita ou aprendizado.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-upload"></i>
              </div>
              <div>
                <h3>Para o Autor Independente</h3>
                <p>Publique suas obras, alcance uma comunidade de leitores engajados, receba feedbacks valiosos e
                  construa sua audiência em um ambiente de apoio.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-search"></i>
              </div>
              <div>
                <h3>Para o Leitor Curioso</h3>
                <p>Encontre sua próxima leitura favorita, organize suas listas, participe de debates e receba
                  recomendações personalizadas com base no seu gosto.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
              <div>
                <h3>Para Educadores e Alunos</h3>
                <p>Utilize nossa plataforma como uma ferramenta de apoio educacional. Encontre livros com alta qualidade
                  didática e promova o hábito da leitura em sala de aula.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-clipboard-data"></i>
              </div>
              <div>
                <h3>Para Clubes de Leitura</h3>
                <p>Crie grupos privados ou públicos, organize discussões e gerencie as leituras do seu clube do livro de
                  forma simples e integrada em nossa plataforma.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Seção de Perguntas Frequentes -->
    <section class="faq-9 faq section light-background" id="faq">

      <div class="container">
        <div class="row">

          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">Tem alguma pergunta? Cheque nosso FAQ</h2>
            <p class="faq-description">Separamos aqui as respostas para as perguntas mais comuns sobre nossa plataforma.
            </p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                  fill="currentColor"></path>
              </svg>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">

              <div class="faq-item">
                <h3>Como funciona a plataforma? É gratuita?</h3>
                <div class="faq-content">
                  <p>Nossa plataforma é um espaço colaborativo para amantes da leitura. O cadastro e o acesso a todas as
                    funcionalidades de comunidade, como resenhas e listas, são totalmente gratuitos.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Posso adicionar qualquer livro ou apenas os que estão no site?</h3>
                <div class="faq-content">
                  <p>Você pode cadastrar qualquer livro que já leu, seja ele físico ou digital, para compartilhar sua
                    experiência. Nosso acervo é construído pela própria comunidade!</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Sou autor(a). Como posso publicar meu livro aqui?</h3>
                <div class="faq-content">
                  <p>É muito simples! Crie sua conta, acesse a área "Para Autores" e envie sua obra para nossa análise.
                    Após a aprovação, seu livro ficará visível para toda a comunidade.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>A plataforma é segura para todos os públicos?</h3>
                <div class="faq-content">
                  <p>Sim. Temos diretrizes claras para a comunidade e um processo de moderação para garantir que o
                    ambiente seja seguro, respeitoso e acolhedor para todos os leitores.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>O que são as avaliações com "foco na didática"?</h3>
                <div class="faq-content">
                  <p>Além da avaliação sobre a história, incentivamos que os usuários avaliem o quão bom um livro é para
                    aprender algo. Isso ajuda estudantes e educadores a encontrar os melhores materiais.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Seção de Chamada para Ação 2 -->
    <section id="call-to-action-2" class="call-to-action-2 section dark-background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Pronto para começar a sua jornada literária?</h3>
              <p>Explore nosso acervo, descubra o que nossa comunidade está lendo e encontre sua próxima grande
                história. A aventura está a apenas um clique de distância.</p>
              <a class="cta-btn" href="<?php echo Paths::MAIN_FOLDER . Paths::VIEW_FOLDER ?>Livros">Explore o Acervo Agora</a>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Seção de Contato -->
    <section id="contact" class="contact section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contato</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Nossos Canais</h3>
              <p>Você pode nos encontrar em diversos lugares. Escolha o canal de sua preferência para tirar dúvidas, dar
                sugestões ou reportar um problema.</p>
              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Endereço de Email</h4>
                  <p>ilearn@gmail.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Contato</h3>
              <p>Adoramos ouvir nossa comunidade! Se você tem alguma dúvida, sugestão ou simplesmente quer conversar
                sobre livros, envie uma mensagem. Estamos aqui para ajudar.</p>
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                data-aos-delay="200">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Seu Nome" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Seu Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Assunto" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Mensagem"
                      required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Carregando</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>

                    <button type="submit" class="btn">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">iLearn</span>
          </a>
          <div class="footer-contact pt-1">
            <p>Conectando leitores, transformando a educação</p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links Úteis</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#features">Recursos</a></li>
            <li><a href="#services">Soluções</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Suporte</h4>
          <ul>
            <li><a href="#">Termos de Serviço</a></li>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Diretrizes da Comunidade</a></li>
            <li><a href="#">Fale Conosco</a></li>
            <li><a href="#">Ajuda</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">iLearn</strong> <span>Todos os Direitos
          Reservados</span></p>
    </div>

  </footer>

  <!-- Botão de Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

</body>

</html>