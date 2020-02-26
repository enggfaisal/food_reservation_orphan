<?php
include ("Auth.php");
use App\Auth\Auth;

$obj1= new Auth();
$data = $obj1->login($_POST);

if(!empty($data)){
    header("location:main.php");
}
else {

    echo "<script type='text/javascript'>alert('invalid username and password')</script>";


    header("location:back.php");
    

}