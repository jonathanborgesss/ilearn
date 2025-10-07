<?php
namespace App\DAO;
use App\Model\Classificacao;
use Exception;
use PDO;
class ClassificacaoDAO{
    public function getClassificacaoById($id)
    {
         try {
              $query = "SELECT * FROM classificacaoindicativa WHERE idClassificacaoIndicativa = '$id'";
              $select = ConnectDB::getConexao()->prepare($query);
              $select->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Classificacao');
              $select->execute();
              return $select->fetch();

         } catch (Exception $e) {
              print ("" . $e . "");
         }
    }
    
    public function getClassificacaoByDescricao($des)
    {
         try {
              $query = "SELECT * FROM classificacaoindicativa WHERE classificacao = '$des'";
              $select = ConnectDB::getConexao()->prepare($query);
              $select->setFetchMode(PDO::FETCH_CLASS, 'app\Model\Classificacao');
              $select->execute();
              return $select->fetch();

         } catch (Exception $e) {
              print ("" . $e . "");
         }
    }

}