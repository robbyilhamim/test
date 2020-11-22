<?php

include "connect.php";

if (!isset($_COOKIE['login'])){
    ?>
    <style type="text/css">#loginalert{
            display: none;
        }</style>

    <?php
}else{
    setcookie("login", "", time() - 3600);
}

if (!isset($_COOKIE['out'])){
    ?>
    <style type="text/css">#logoutalert{
            display: none;
        }</style>

    <?php
}else{
    setcookie("out", "", time() - 3600);
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0">
                <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
        </form>
    </div>
</nav>

<div class="alert alert-warning alert-dismissible fade show" role="alert" id="loginalert">
    <strong>Maaf!</strong> anda telah gagal login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<div class="alert alert-warning alert-dismissible fade show" role="alert" id="logoutalert">
    <strong>selamat!</strong> anda telah berhasil log out.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<div class="container-login">
    <h2>Login</h2>
    <form style="padding: 40px" action="loginfunc.php" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="<?php if (isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?> " required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" value="<?php if (isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" class="form-control" id="password" name="password"required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" >
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <div class="col text-center">
            <button type="submit" class="btn btn-primary" style="text-align: center"">Submit</button>
        </div>

        <p style="text-align: center; margin-top: 10px">Belum Punya Akun?<a href="register.php">register</a></p>


    </form>


</div>




</body>
</html>