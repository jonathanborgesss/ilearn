<?php
$server = $_SERVER['DOCUMENT_ROOT'];
$autoloadFolder = getenv('folderName');
require $server . $autoloadFolder;
use App\Utility\Builder;
use App\Utility\Session;


$session = new Session();
$session->verifyIfSession();
$builder = new Builder();
$builder->buildHead('main');
$builder->buildNavbar($_SESSION['email'], $_SESSION['name'], $_SESSION['permission']);
$builder->buildFile('Main.php');
$builder->buildScripts();