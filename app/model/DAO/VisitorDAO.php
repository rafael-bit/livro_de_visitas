<?php

namespace Ifba\visitantes\model\DAO;

class VisitorDAO {
  # Php Data Object -> Classe PHP utilizada para a manipulação de database de dados
  protected \PDO $connection;

  public function __construct()
  {
      $server = "localhost";
      $database = "visitors";
      $user = "root";
      $password = "";

      $string = "mysql:host={$server};dbname={$database}";

      $this->connection = new \PDO($string, $user, $password);
      
  }

  public function inserir($visitor)
  {
      $sql = "INSERT INTO visitors (name, date_time, rating) VALUES (?, ?, ?)";

      $prep = $this->connection->prepare($sql);
      $prep->bindValue(1, $visitor->getName());
      $prep->bindValue(2, $visitor->getDate());
      $prep->bindValue(3, $visitor->getRating());

      return $prep->execute();
  }
}