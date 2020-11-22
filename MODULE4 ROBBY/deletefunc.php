<?php

include "connect.php";

$id = $_GET['id'];

mysqli_query($connect,"delete from cart where id = '$id'");


setcookie("delete","true");
header("location:cart.php");

?>
