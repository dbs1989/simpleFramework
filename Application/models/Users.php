<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Users
{
  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
  * Este método busca um usuário armazenados na base de dados com um
  * determinado ID
  * @param    int     $id   Identificador único do usuário
  *
  * @return   array
  */
  public static function findById(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetch();
  }

  public function insert($nome, $idade){
    $conn = new Database();  
    $result = $conn->executeQuery('INSERT INTO users (name, idade)
     VALUES (:NOME, :IDADE)', 
      array(':NOME' => $nome, ':IDADE' => $idade)
    );
      
    return $result->fetchAll(PDO::FETCH_ASSOC);
    
  }

  public function update($id, $nome, $idade){
    $conn = new Database();  
    $result = $conn->executeQuery('UPDATE users SET 
    name = :NOME, 
    idade = :IDADE
    WHERE id = :ID ', 
      array(':NOME' => $nome, ':IDADE' => $idade, ':ID' => $id)
    );
      
    return $result->fetchAll(PDO::FETCH_ASSOC);
    
  }

  public static function delete(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('DELETE FROM users WHERE id = :ID', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }


}
