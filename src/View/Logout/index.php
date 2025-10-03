<?php
use App\Utility\Paths;
use App\Utility\Session;
$server = $_SERVER['DOCUMENT_ROOT'];
$autoloadFolder = getenv('folderName');
require_once $server . $autoloadFolder;
$session = new Session();
$session->destructSessions();
header("Location: " . Paths::MAIN_FOLDER);
exit();