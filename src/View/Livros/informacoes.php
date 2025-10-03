<?php
use App\Utility\Paths;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<body class="index-page">

    <main class="main">

        <section class="book-wrapper container my-5">
            <div class="card p-4 shadow rounded-4">

                <div class="mb-4">
                    <a href="livros.html" class="btn btn-outline-accent">
                        ← Voltar
                    </a>
                </div>

                <div class="border-bottom pb-3 mb-4">
                    <h2 class="fw-bold">Nos bastidores da Amazon</h2>
                </div>

                <div class="row g-4 align-items-start">
                    <div class="col-md-4 text-center">
                        <img src="https://m.media-amazon.com/images/I/61dAm62y2QL._SY466_.jpg"
                            alt="Capa do livro Nos bastidores da Amazon" class="img-fluid rounded">
                    </div>

                    <div class="col-md-8">
                        <p><strong>Autor:</strong> Richard L. Brandt</p>
                        <p><strong>Editora:</strong> Benvirá</p>
                        <p><strong>Páginas:</strong> 176</p>
                        <p><strong>Lançamento:</strong> 15 de Março de 2011</p>
                        <p><strong>Edição:</strong> 1</p>
                        <p><strong>Classificação:</strong> 14 anos</p>

                        <div class="bg-light p-3 border-start border-accent mt-4">
                            <p class="fst-italic m-0"><strong>Descrição:</strong> AO modelo de negócios da Amazon é
                                muito simples e torna fácil e conveniente a compra on-line, por isso os consumidores não
                                pensam duas vezes em usar o site para suas compras. Isso se resume a praticamente um
                                botão em cada página, o de comprar agora mesmo com um só clique.Qual a razão de a Amazon
                                ser tão bem-sucedida? Isso muito tem a ver com Jeff Bezos, presidente e fundador da
                                Amazon. A princípio mais um nerd do que um homem de negócios, Jeff teve a visão de
                                investir no inexplorado mercado on-line para vender livros e continuou a descobrir novas
                                oportunidades de mercado, de alimentos a peças de automóveis. Ele é uma verdadeira
                                máquina de calcular, tem muita energia, é apaixonado pelo que faz e decidiu transformar
                                radicalmente o varejo. Com inúmeras entrevistas com funcionários da Amazon, concorrentes
                                e observadores, Richard Brandt decifrou como Bezos pensa, o que dirige suas ações e como
                                ele toma decisões. Qualquer pessoa que esteja nesse negócio pode aprender muito com o
                                exemplo de evolução contínua da Amazon."Jeff Bezos é o novo Steve Jobs. Não espera um
                                mercado explodir, ele o cria. É melhor ainda que a Apple na construção de um
                                ecossistema." Gizmodo, o maior site de tecnologia do mundo"Expõe 'táticas brutais' do
                                fundador da Amazon". Folha de S. Paulo"Obcecada pelo cliente; não pela concorrência."
                                Jeff Bezos</p>
                        </div>

                        <button class="btn btn-accent text-white mt-4 px-4 py-2">
                            Agendar
                        </button>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <!-- Botão de Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Arquivos JS do Vendor -->
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/aos/aos.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Arquivo JS Principal -->
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/js/main.js"></script>

</body>

</html>