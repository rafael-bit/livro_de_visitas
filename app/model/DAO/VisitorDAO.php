<?php

/* ----------------------------------------------------------------
Classe de manipulação do banco de dados
---------------------------------------------------------------- */

namespace Ifba\visitantes\model\DAO;

use Ifba\Visitantes\model\entities\Visitor;

class VisitorDAO {
  # PD0: Php Data Object -> Classe PHP utilizada para a manipulação de base de dados
  protected \PDO $connection;

  public function __construct()
  {
      $server = "";
      $port = "";
      $database = "";
      $user = "";
      $password = "";
  
      $string = "mysql:host={$server};port={$port};dbname={$database}";
  
      try {
          $this->connection = new \PDO($string, $user, $password);
      } catch (\PDOException $e) {
          die("Erro na conexão com o banco de dados: " . $e->getMessage());
      }
  }
  

  public function insert($visitor): bool
  {
      $sql = "INSERT INTO visitors (name, date, rating) VALUES (?, ?, ?)";

      $prep = $this->connection->prepare($sql);
      $prep->bindValue(1, $visitor->getName());
      $prep->bindValue(2, $visitor->getDate());
      $prep->bindValue(3, $visitor->getRating());

      return $prep->execute();
  }

  public function findAll(): array 
  {
    $sql = "SELECT * FROM visitors";
    $prep = $this->connection->prepare($sql);
    $prep->execute();

    $data = $prep->fetchAll(\PDO::FETCH_CLASS, Visitor::class);
    return $data;
    
  }
}