<?php
use App\Utility\Paths;
?>

<header id="header" class="header d-flex align-items-center fixed-top">
  <div
    class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="<?php echo Paths::MAIN_FOLDER; ?>" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER; ?>img/logo.png" alt="">
      <h1 class="sitename">iLearn</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="<?php echo Paths::MAIN_FOLDER; ?>#hero" >Home</a></li>
        <li><a href="<?php echo Paths::MAIN_FOLDER; ?>#about">Sobre</a></li>
        <li><a href="<?php echo Paths::MAIN_FOLDER; ?>#features">Recursos</a></li>
        <li><a href="<?php echo Paths::MAIN_FOLDER; ?>#services">Soluções</a></li>
        <li><a href="<?php echo Paths::MAIN_FOLDER; ?>#faq">FAQ</a></li>
        <?php
        switch ($_SERVER['REQUEST_URI']) {
          case '/ilearn/src/View/Livros/':
            ?>
            <li><a href="<?php echo Paths::MAIN_FOLDER . Paths::VIEW_FOLDER; ?>Livros" class="active">Catálogo</a></li>
            <?php
            break;
          default: ?>
            <li><a href="<?php echo Paths::MAIN_FOLDER . Paths::VIEW_FOLDER; ?>Livros">Catálogo</a></li>
            <?php
            break;

        }
        ?>

        <li><a href="<?php echo Paths::MAIN_FOLDER; ?>#contact">Contato</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <?php
    switch ($_SERVER['REQUEST_URI']) {
      case '/ilearn/src/View/Login/':
        ?>
        <a class="btn-getstarted" href="<?php echo Paths::MAIN_FOLDER; ?>">Voltar</a>
        <?php
        break;
      default: ?>
        <a class="btn-getstarted" href="<?php echo Paths::MAIN_FOLDER . Paths::VIEW_FOLDER; ?>Login">Iniciar</a>
        <?php
        break;

    }
    ?>

  </div>
</header>