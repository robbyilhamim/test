<?php

include "connect.php";


$name = $_POST['name'];
$email = $_POST['email'];
$nope = $_POST['nope'];
$password = $_POST['password'];



$register = mysqli_query($connect , "INSERT INTO `user`(`nama`, `email`, `no_hp`, `password`) VALUES ('$name','$email','$nope','$password') " );


 if ($register){
     setcookie("username",$name);
     setcookie("register","true");
     header("location:home.php");


 }
 else{
     echo "gagal";
 }
?>
