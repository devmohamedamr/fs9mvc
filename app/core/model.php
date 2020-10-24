<?php


namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;

class model{

    static function db(){
            $options = [
                //required
                'username' => 'root',
                'database' => 'fs8_proone',
                //optional
                'password' => '',
                'type' => 'mysql',
                'charset' => 'utf8',
                'host' => 'localhost',
                'port' => '3306'
            ];
            
          return  $db = new Database($options);  
    }

}