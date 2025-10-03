<?php
use App\Utility\Paths;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<body class="index-page">

  
    <section class="livros">
        <div class="filtros d-flex justify-content-end align-items-center mb-3 gap-2">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="filtrosMenu"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel"></i> Filtros
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="filtrosMenu">
                    <li><button class="dropdown-item ativo" onclick="filtrarLivros('todos', event)">Todos</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('arte', event)">Arte</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('autoajuda', event)">Autoajuda</button>
                    </li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('biografia', event)">Biografia</button>
                    </li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('ciencias', event)">Ciências</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('educacao', event)">Educação</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('fantasia', event)">Fantasia</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('ficcao', event)">Ficção</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('historia', event)">História</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('literatura', event)">Literatura</button>
                    </li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('negocios', event)">Negócios</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('religiao', event)">Religião</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('romance', event)">Romance</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('saude', event)">Saúde</button></li>
                    <li><button class="dropdown-item" onclick="filtrarLivros('tecnologia', event)">Tecnologia</button>
                    </li>
                </ul>
            </div>

            <div class="input-group" style="width: 250px;">
                <input type="text" id="pesquisarLivro" class="form-control" placeholder="Pesquisar..."
                    onkeyup="pesquisarLivros()">
                <button class="btn btn-outline-secondary" type="button" onclick="pesquisarLivros()">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>

        <div class="grid" id="livrosGrid">
            <div class="card negocios">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/61dAm62y2QL._SY466_.jpg"
                        alt="Nos bastidores da Amazon">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Nos bastidores da Amazon</h3>
                    <p>Richard L. Brandt</p>
                    <p>2011</p>
                </div>
            </div>

            <div class="card tecnologia">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/61lyq+ls0rL._SY425_.jpg" alt="Clean Code">
                    <div class="overlay">
                        <a href="#">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Clean Code</h3>
                    <p>Robert C. Martin</p>
                    <p>2008</p>
                </div>
            </div>

            <div class="card ficcao">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/81ibfYk4qmL._SY425_.jpg" alt="Harry Potter">
                    <div class="overlay">
                        <a href="#">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Harry Potter e a Pedra Filosofal</h3>
                    <p>J.K. Rowling</p>
                    <p>1997</p>
                </div>
            </div>

            <div class="card tecnologia">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/41WH7HFsbzL._SY445_SX342_.jpg"
                        alt="O Programador Pragmático">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>O Programador Pragmático</h3>
                    <p>Andrew Hunt e David Thomas</p>
                </div>
            </div>

            <div class="card tecnologia">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/81IGFC6oFmL._SY425_.jpg" alt="Design Patterns">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Design Patterns</h3>
                    <p>Erich Gamma et al.</p>
                </div>
            </div>

            <div class="card tecnologia">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/71e6ndHEwqL._SY385_.jpg" alt="Refactoring">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Refactoring</h3>
                    <p>Martin Fowler</p>
                </div>
            </div>

            <div class="card negocios">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/71KJRfm0pGL._SY466_.jpg" alt="A Startup Enxuta">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>A Startup Enxuta</h3>
                    <p>Eric Ries</p>
                </div>
            </div>

            <div class="card negocios">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/71HNGP3tJbL._SY425_.jpg" alt="O Mítico Homem-Mês">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>O Mítico Homem-Mês</h3>
                    <p>Frederick P. Brooks Jr.</p>
                </div>
            </div>

            <div class="card autoajuda">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/71sP3oQpeKL._SY466_.jpg"
                        alt="Domine seus pensamentos">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Domine seus pensamentos: três ferramentas para renovar sua mente e transformar sua vida</h3>
                    <p>Max Lucado</p>
                </div>
            </div>

            <div class="card religiao">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/5109YEIX0kL._SY425_.jpg"
                        alt="Café com Deus Pai 2025:">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Café com Deus Pai 2025</h3>
                    <p>Júnior Rostirola</p>
                </div>
            </div>

            <div class="card tecnologia">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/81Sc7DUiVmL._SY425_.jpg"
                        alt="Inteligência Artificial: Uma Abordagem Moderna">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Inteligência Artificial: Uma Abordagem Moderna</h3>
                    <p>Stuart Russell & Peter Norvig</p>
                </div>
            </div>

            <div class="card ficcao">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/81zQDb6GMVL._SY425_.jpg"
                        alt="O Guia do Mochileiro das Galáxias">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>O Guia do Mochileiro das Galáxias</h3>
                    <p>Douglas Adams</p>
                </div>
            </div>

            <div class="card ficcao">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/913WHnA9PjL._SY466_.jpg"
                        alt="Percy Jackson e os Olimpianos">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Percy Jackson e os Olimpianos</h3>
                    <p>Rick Riordan</p>
                </div>
            </div>

            <div class="card negocios">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/51UjO3YMafL._SY445_SX342_.jpg"
                        alt="Pai Rico, Pai Pobre">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Pai Rico, Pai Pobre</h3>
                    <p>Robert Kiyosaki</p>
                </div>
            </div>

            <div class="card arte">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/81fMoTGx3KL._SY425_.jpg"
                        alt="A arte da escuta: Desenvolvendo a criatividade pela prática da atenção">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>A arte da escuta: Desenvolvendo a criatividade pela prática da atenção</h3>
                    <p>Julia Cameron</p>
                </div>
            </div>

            <div class="card biografia">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/61Smhyj7KyL._SY466_.jpg" alt="Oppenheimer: Uma Vida">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Oppenheimer: Uma Vida</h3>
                    <p>Ray Monk</p>
                </div>
            </div>

            <div class="card ciencias">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/71XIYr2AXTL._SY466_.jpg"
                        alt="Breves Respostas para Grandes Questões">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Breves Respostas para Grandes Questões</h3>
                    <p>Stephen Hawking</p>
                </div>
            </div>

            <div class="card educacao">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/811oKbyTXNL._SY466_.jpg" alt="Pedagogia do Oprimido">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Pedagogia do Oprimido</h3>
                    <p>Paulo Freire</p>
                </div>
            </div>

            <div class="card fantasia">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/81hCVEC0ExL._SY466_.jpg"
                        alt="O Senhor dos Anéis: A Sociedade do Anel">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>O Senhor dos Anéis: A Sociedade do Anel</h3>
                    <p>J.R.R. Tolkien</p>
                </div>
            </div>

            <div class="card historia">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/71-ghLb8qML._SY425_.jpg"
                        alt="Sapiens: Uma Breve História da Humanidade">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Sapiens: Uma Breve História da Humanidade</h3>
                    <p>Yuval Noah Harari</p>
                </div>
            </div>

            <div class="card literatura">
                <div class="img-container">
                    <img src="http://m.media-amazon.com/images/I/81pdXbEIZhL._SY425_.jpg" alt="Dom Quixote">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Dom Quixote</h3>
                    <p>Miguel de Cervantes</p>
                </div>
            </div>

            <div class="card romance">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/719esIW3D7L._SY466_.jpg" alt="Orgulho e Preconceito">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Orgulho e Preconceito</h3>
                    <p>Jane Austen</p>
                </div>
            </div>

            <div class="card saude">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/71YCJbM4iiL._SY425_.jpg" alt="O Corpo Humano">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>O Corpo Humano</h3>
                    <p>Bill Bryson</p>
                </div>
            </div>

            <div class="card romance">
                <div class="img-container">
                    <img src="https://m.media-amazon.com/images/I/81SwNJ4VKzL._SY425_.jpg" alt="Te vejo ontem">
                    <div class="overlay">
                        <a href="informacoes.html">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Te vejo ontem</h3>
                    <p>Rachel Lynn Solomon</p>
                </div>
            </div>
        </div>
    </section>

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