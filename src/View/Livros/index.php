<?php

use App\Utility\Builder;
use App\Utility\Session;
use App\Utility\Paths;
$server = $_SERVER['DOCUMENT_ROOT'];
$autoloadFolder = getenv('folderName');
require $server . $autoloadFolder;

$session = new Session();
$builder = new Builder();
$builder->buildNavbar($_SESSION['email'], $_SESSION['name'], $_SESSION['permission']);
$page = $_GET['page'] ?? 'livros';

switch($page){
    case "livros":
        $builder->buildHead('livros');
        $builder->buildFile('Livros/livros.php');
        break;
    case "informacoes":
        $builder->buildHead('informacoes');
        $builder->buildFile('Livros/informacoes.php');
        break;
    default:
        $builder->buildHead('livros');
        $builder->buildFile('Livros/livros.php');
}

$builder->buildScripts();