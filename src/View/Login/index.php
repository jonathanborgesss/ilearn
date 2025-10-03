<?php
$server = $_SERVER['DOCUMENT_ROOT'];
$autoloadFolder = getenv('folderName');
require $server . $autoloadFolder;

use App\Utility\Builder;
use App\Utility\Session;
$session = new Session();
$builder = new Builder();
$page = $_GET['page'] ?? 'login'; // default is login

// build structure
$builder->buildHead($page);
$builder->buildNavbar($_SESSION['email'] ?? null, $_SESSION['name'] ?? null, $_SESSION['permission'] ?? null);

// include correct content
switch ($page) {
    case 'cadastro':
        $builder->buildFile("Login/cadastro.php");
        break;
    case 'login':
    default:
        $builder->buildFile("Login/login.php");
        break;
}
$builder->buildScripts();