<?php
include "connect.php";

$email = $_POST['email'];
$password = $_POST['password'];
$remember = $_POST['remember'];




$query = mysqli_query($connect,"SELECT * FROM user where email = '$email'");

if (! mysqli_num_rows($query)) {
    header("location:login.php");
    setcookie('login','1');
}
while($data = mysqli_fetch_array($query)){
    if ($data['password'] == $password){

        setcookie("login","true");
        setcookie("in","true");
        setcookie('username',$data['nama']);
        setcookie('user_id' , $data['id']);

        if ($remember == 'on'){
            setcookie('remember','1');
            setcookie('email',$email);
            setcookie('password',$password);

        }

        header("location:home.php");


    }
    else{
        header("location:login.php");
        setcookie('login','1');
    }
}

