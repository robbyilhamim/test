<?php

include "connect.php";
$id = $_GET['idbeli'];
$name = $_COOKIE['username'];

$query = mysqli_query($connect,"SELECT id FROM user where nama = '$name'");
$data = mysqli_fetch_array($query);

$id_user = $data['id'];




if ($id == 1) {
    $input = mysqli_query($connect , "INSERT INTO `cart`(`user_id`, `nama_barang`, `harga`) VALUES ('$id_user','sabunsatu','50000') " );
    if ($input){
        setcookie('cart',"true");
        header("location:home.php");

    }else{

    }
}


if ($id == 2) {
    $input = mysqli_query($connect , "INSERT INTO `cart`(`user_id`, `nama_barang`, `harga`) VALUES ('$id_user','Nuvo','150000') " );
    if ($input){
        setcookie('cart',"true");
        header("location:home.php");

    }else{

    }
}

if ($id == 3) {
    $input = mysqli_query($connect , "INSERT INTO `cart`(`user_id`, `nama_barang`, `harga`) VALUES ('$id_user','fres','200000') " );
    if ($input){
        setcookie('cart',"true");
        header("location:home.php");
    }else{

    }
}


