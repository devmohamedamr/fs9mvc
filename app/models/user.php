<?php

namespace MVC\models;

use MVC\core\model;

class user extends model{

    public function GetAllUsers(){
        $data =  model::db()->rows("SELECT * FROM user"); 
        return $data;
    }


    public function GetUser($email,$password){
        $data =  model::db()->row("SELECT * FROM user Where `email` = ? && `password` = ? ",[$email,$password]); 
        return $data;
    }
}