<?php
namespace App\Model;
    class Usuario{
    
        private $idUsuario;
        private $nome;
        private $fkAcesso;
        private $email;
        private $senha;
        
        function getId() {
            return $this->idUsuario;
        }
    
        function getNome() {
            return $this->nome;
        }
    
        function getEmail() {
            return $this->email;
        }
        function getSenha() {
            return $this->senha;
        }
    
        function getAcesso() {
            return $this->fkAcesso;
        }
    
        function setId($id) {
            $this->idUsuario = $id;
        }
    
        function setNome($nome) {
            $this->nome = $nome;
        }
    
        function setEmail($email) {
            $this->email = $email;
        }
        function setSenha($senha) {
            $this->senha = $senha;
        }
        function setAcesso($acesso) {
            $this->fkAcesso = $acesso;
        }
}