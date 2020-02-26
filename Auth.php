<?php
namespace App\Auth;

use PDO ;
session_start();

class Auth{



    private $name;
    private $password;
    private $dbuser='root';
    private $dbpass='';

    public function __construct()
    {

    }

    public function login($data="")
    {
        print_r($data);
        $pdo = new PDO ('mysql:host=localhost; dbname=reg', $this->dbuser, $this->dbpass);
        $query="SELECT * FROM user WHERE name=:name AND password=:password";
        $stmt=$pdo->prepare($query);
        $data1=array(
            ':name'=>$data['name'],
            ':password'=>$data['password']
        );
        $stmt->execute($data1);
        $abc= $stmt->fetchAll();
        return $abc;
    }
    public function getAllUsers()
      {
          $pdo = new PDO ('mysql:host=localhost; dbname=reg', $this->dbuser, $this->dbpass);
          $query="SELECT * FROM req";
          $stmt=$pdo->prepare($query);
          $stmt->execute();
         $data= $stmt->fetchAll();
         return $data;


      }



}





