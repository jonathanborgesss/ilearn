<?php

namespace App\Controller;

use App\DAO\ConnectDB;

$server = $_SERVER['DOCUMENT_ROOT'];
$autoloadFolder = getenv('folderName');
require_once $server . $autoloadFolder;

use App\Utility\Paths;
use App\Model\Usuario;
use App\Utility\Session as SessionManager;
use App\DAO\SenhaDAO as SenhaDAO;
use App\DAO\UsuarioDAO as UsuarioDAO;

$user = new Usuario();
$userdao = new UsuarioDAO();
$passwordDao = new SenhaDAO();
$session = new SessionManager();

$d = filter_input_array(INPUT_POST);

class ControllerUsuario
{
     public function Cadastrar($nome, $emailD, $senha)
     {
          $acesso = 1;
          $user = new Usuario();
          $userdao = new UsuarioDAO();
          $passwordDao = new SenhaDAO();
          $session = new SessionManager();
          $user->setNome($nome);
          $user->setEmail($emailD);
          $hashedPassword = $passwordDao->hashPassword($senha);
          $user->setSenha($hashedPassword);
          $user->setAcesso($acesso);
          $email = $user->getEmail();
          $query = "SELECT email FROM usuario where email = '$email'";
          $select = ConnectDB::getConexao()->query($query);
          if ($select->rowCount()) {
               header('Location: ' . Paths::MAIN_FOLDER . Paths::VIEW_FOLDER . "Conta");
               exit();
          }

          $userdao->insertUser($user);
          $user = $userdao->getUserById(ConnectDB::getConexao()->lastInsertId());
          $session->setSession($user);
     }
     public function Login($email, $senha)
     {
          $user = new Usuario();
          $userdao = new UsuarioDAO();
          $passwordDao = new SenhaDAO();
          $session = new SessionManager();
          $user = $userdao->getUserByEmail($email);
          if (!$user) {
               setcookie("NoEmail", $email, time() + 60 * 60, "/");
               header('Location: ' . Paths::MAIN_FOLDER . Paths::VIEW_FOLDER . 'Conta');
               exit();
          } else {
               if ($passwordDao->matchPassword($senha, $user->getSenha())) {
                    $session->setSession($user);
                    header('Location: ' . Paths::MAIN_FOLDER);
                    exit();
               } else {
                    setcookie("WrongPassword", $senha, time() + 60 * 60, "/");
                    header('Location: ' . Paths::MAIN_FOLDER . Paths::VIEW_FOLDER . 'Conta');
                    exit();
               }
          }
     }
     public function Update($pkUsuario, $fkAcesso, $nome, $email, $senha)
     {
          $usuario = new Usuario();
          $usuarioDao = new UsuarioDAO();
          $usuario->setId($pkUsuario);
          echo$nome;
          $usuario = $usuarioDao->getUserById($usuario->getId());
          $usuario->setEmail($email ? $email : $usuario->getEmail());
          $usuario->setAcesso($fkAcesso ? $fkAcesso : $usuario->getAcesso());
          $usuario->setSenha($senha ? $senha : $usuario->getSenha());
          $usuarioDao->updateUser($usuario);
          echo"<hr>";
          print_r($usuario);
          echo "<hr>";
          print_r($usuarioDao->getUserById($usuario->getId()));
     }
}


$controllerUsuario = new ControllerUsuario();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
     if (isset($_POST['cadastrar'])) {
          $controllerUsuario->Cadastrar($d['name'], $d['email'], $d['password']);
          header('Location: ' . Paths::MAIN_FOLDER);
          exit();
     }
     if(isset($_POST['update'])){
          $pkUser = $d['pkUsuario'];
          $nome = isset($d['nome']) ? $d['nome'] : null;
          $email = isset($d['email']) ? $d['email'] : null;
          $senha = isset($d['password']) ? $d['password'] : null;
          $fkAcesso = isset($d['acesso']) ? $d['acesso'] : null;
          $controllerUsuario->Update($pkUser, $fkAcesso, $nome,$email,$senha);
          header('Location: ' . Paths::MAIN_FOLDER . Paths::VIEW_FOLDER . "Perfil");
          exit();
     }

     if (isset($_POST['login'])) {
          $email = $d['email'];
          $senha = $d['password'];

          $controllerUsuario->Login($email, $senha);
          header('Location: ' . Paths::MAIN_FOLDER);
          exit();
     }
    
}
