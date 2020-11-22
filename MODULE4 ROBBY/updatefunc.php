<?php
include "connect.php";
$iduser = $_COOKIE['user_id'];

$name = $_POST['name'];
$email = $_POST['email'];
$nope = $_POST['nope'];
$password = $_POST['password'];
$navbar = $_POST['navbar'];


if (isset($navbar)){
    if ($navbar == 1) {
        setcookie("navbar", "", time() - 3600);
    }
    if ($navbar == 2) {
        setcookie("navbar", "red");
    }
    if ($navbar == 3) {
        setcookie("navbar", "blue");
    }
}

$update = mysqli_query($connect , "UPDATE user set nama = '$name' , email = '$email' , no_hp = '$nope' WHERE id = $iduser");

if ($update){
    setcookie("username" , $name);
    setcookie("edit" , "trues");
    header("location:editprofile.php");
}else{
    echo "gagal";
}