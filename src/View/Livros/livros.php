
<?php
use App\DAO\ConnectDB;
use App\Utility\Paths;
use App\DAO\LivroDAO;

$autorDAO = new App\DAO\AutorDAO();
$generoDAO = new App\DAO\GeneroLiterarioDAO();
$generoLivroDAO = new App\DAO\GeneroLivroDAO();
$imagemDAO = new App\DAO\ImagemDAO();
$livroDAO = new App\DAO\LivroDAO();
$query = "SELECT COUNT(idLivro) AS total FROM livro";
$select = ConnectDB::getConexao()->prepare($query);
$select->execute();
$total_records = $select->fetchColumn();

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
if ($current_page == 0) {
    $current_page = 1;
}
$records_per_page = 3;
$offset = ($current_page - 1) * $records_per_page;

$query = "SELECT * FROM livro LIMIT $offset, $records_per_page";
$selectLivro = ConnectDB::getConexao()->prepare($query);
$selectLivro->setFetchMode(PDO::FETCH_ASSOC);
$selectLivro->execute();

$total_pages = ceil($total_records / $records_per_page);
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
            <?php
            while ($row = $selectLivro->fetch()) {
                $autor = $autorDAO->getAutorById($row["fkAutor"]);
                $generoLivro = $generoLivroDAO->getGeneroLivroByLivroId($row['idLivro']);
                $genero = $generoDAO->getGeneroById($generoLivro->getFkGenero());
                $imagem = $imagemDAO->getImagemById($row["fkImagem"]);
                $nome = $row["titulo"];
                $lancamento = $row['lancamento'];


                /*
                $imagick = new Imagick();

                $imagick->readImageBlob($imagem['data']);
                print($imagick->readImageBlob($imagem['data'], $imagem['nome']));
                print($imagick->getImageBlob() . ' ');
                $imagick->setImageFormat("jpg");
                $imageData = $imagick->getImageBlob();
                */

                ?>
                <div class="card negocios">
                <div class="img-container">
                    <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>img/Livros/<?php echo $imagem->getNome()  ?>"
                        alt="Nos bastidores da Amazon">
                    <div class="overlay">
                        <a href="<?php echo Paths::MAIN_FOLDER . Paths::VIEW_FOLDER ?>Livros/?page=informacoes&id=<?php echo $row["idLivro"];?>">Saiba mais</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3><?php echo  $nome; ?></h3>
                    <p><?php echo $autor->getNome();?></p>
                    <p><?php echo  $lancamento; ?></p>
                </div>
            </div>
                <?php

            }

            ?>
        </div>
    </section>

    <!-- Botão de Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Arquivos JS do Vendor -->
    <script
        src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER; ?>/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER; ?>/vendor/aos/aos.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER; ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER; ?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script
        src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER; ?>/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Arquivo JS Principal -->
    <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER; ?>/js/main.js"></script>

</body>

</html>