<?php

use App\Utility\Builder;
use App\Utility\Session;
use App\Utility\Paths;
$server = $_SERVER['DOCUMENT_ROOT'];
$autoloadFolder = getenv('folderName');
require $server . $autoloadFolder;

$session = new Session();
$builder = new Builder();
$builder->buildHead('livros');
$builder->buildNavbar($_SESSION['email'], $_SESSION['name'], $_SESSION['permission']);
$builder->buildFile('Livros/livros.php');
$builder->buildScripts();