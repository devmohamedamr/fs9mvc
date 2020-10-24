<?php 

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;


class homecontroller extends controller{

    public function __construct()
    {
        Session::start(); 
    }
    public function index(){

        $user = new user();
        $data =  $user->GetAllUsers();

        $title = 'home index';
        $h1 = 'mohamed amr';
        $this->view("home/index",['title'=>$title,'h1'=>$h1,'data'=>$data]);
    }


    public function add(){
        echo 'add';
      }


    public function login(){
        $this->view('home/login',['title'=>'login']);
    }  

    public function postlogin(){
        $v = GUMP::is_valid($_POST,[
            'email'=>'required'
        ]);

        if($v == 1){
            $user = new user();
            $data =  $user->GetUser($_POST['email'],$_POST['password']);
           
            Session::Set('user',$data);
            header('LOCATION: user/index');
        }
    }


}