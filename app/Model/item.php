<?php

namespace App\Model;
use App\Core\DBConnection;
use PDO;


class Item {

  protected $pdo;

  public function __construct(){
    $this->pdo = DBConnection::start(
        [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'port' => '8889', // Add the port number here
            'dbname' => 'warehouse',
            'username' => 'root',
            'password' => 'root',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    );
}


  public function insert($data){
    $statement = $this->pdo->prepare("INSERT INTO items (sku, title, quantity, company, location, created_at, updated_at) VALUES (:sku, :title, :quantity, :company, :location, now(), now())");

    return $statement->execute($data);
  }

  public function update($data){
    $statement = $this->pdo->prepare("UPDATE items SET quantity = 35 WHERE sku = LG345678");

    return $statement->execute($data);
  }
}