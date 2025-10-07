<?php
use App\DAO\AutorDAO;
use App\DAO\ClassificacaoDAO;
use App\DAO\EditoraDAO;
use App\DAO\ImagemDAO;
use App\DAO\LivroDAO;
use App\Utility\Paths;
$idLivro = $_GET['id'] ?? 1;
$autorDAO = new AutorDAO();
$livroDAO = new LivroDAO();
$editoraDAO = new EditoraDAO();
$classificacaoDAO = new ClassificacaoDAO();
$imagemDAO = new ImagemDAO();
$livro = $livroDAO->getLivroById($idLivro);
if (!$livro) {
    echo "erro: livro nao encontrado";
    return;
}
$titulo = $livro->getTitulo();
$descricao = $livro->getDescricao();
$qntPaginas = $livro->getPaginas();
$lancamento = $livro->getLancamento();
$edicao = $livro->getEdicao();

$idImagem = $livro->getImagem();
$imagem = $imagemDAO->getImagemById($idImagem);

$idAutor = $livro->getAutor();
$autor = $autorDAO->getAutorById($idAutor);
$nomeAutor = $autor->getNome();

$idEditora = $livro->getEditora();
$editora = $editoraDAO->getEditoraById( $idEditora );
$nomeEditora = $editora->getNome();

$idClassificacao = $livro->getClassificacao();
$classificacao = $classificacaoDAO->getClassificacaoById($idClassificacao);
$nomeClassificacao = $classificacao->getClassificacao();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<body class="index-page">

    <main class="main">

        <section class="book-wrapper container my-5">
            <div class="card p-4 shadow rounded-4">

                <div class="mb-4">
                    <a href="<?php echo Paths::MAIN_FOLDER . Paths::VIEW_FOLDER ?>Livros" class="btn btn-outline-accent">
                        ← Voltar
                    </a>
                </div>

                <div class="border-bottom pb-3 mb-4">
                    <h2 class="fw-bold"><?php echo $livro->getTitulo(); ?></h2>
                </div>

                <div class="row g-4 align-items-start">
                    <div class="col-md-4 text-center">
                        <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>img/Livros/<?php echo $imagem->getNome()  ?>"
                            alt="Capa do livro Nos bastidores da Amazon" class="img-fluid rounded">
                    </div>

                    <div class="col-md-8">
                        <p><strong>Autor: </strong><?php echo $nomeAutor?></p>
                        <p><strong>Editora: </strong><?php echo $nomeEditora?></p>
                        <p><strong>Páginas: </strong><?php echo $qntPaginas ?></p>
                        <p><strong>Lançamento: </strong><?php echo $lancamento ?></p>
                        <p><strong>Edição: </strong><?php echo $edicao ?></p>
                        <p><strong>Classificação: </strong><?php echo $nomeClassificacao ?> anos</p>

                        <div class="bg-light p-3 border-start border-accent mt-4">
                            <p class="fst-italic m-0"><strong>Descrição: </strong><?php echo $descricao ?></p>
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