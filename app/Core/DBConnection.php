<?php
namespace App\Core;
use PDO;


class DBConnection {
  public static function start($config) {
      try {
          return new PDO(
              $config['driver'].':host='.$config['host'].';port='.$config['port'].';dbname='.$config['dbname'],
              $config['username'],
              $config['password']
          );
      } catch(PDOException $e) {
          dd($e->getMessage());
      }
  }
}
