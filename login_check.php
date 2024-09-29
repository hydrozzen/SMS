<?php
$host = "localhost";
$user = "root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);

if($data===false){
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]==POST)
{
    $name = $_POST['username'];
    $pass = $_POST['password'];


    $sql ="select * from user where username ='".$name."'" AND password ='".$pass."' ";
}

?>
