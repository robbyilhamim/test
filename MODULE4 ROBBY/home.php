<?php
include "connect.php";

$names = $_COOKIE['username'];
if (!isset($_COOKIE['register'])){
 ?>
<style type="text/css">#registeralert{
        display: none;
    }</style>

<?php
}else{
    setcookie("register", "", time() - 3600);
}

if (!isset($_COOKIE['in'])){
    header("location:login.php");
}

if (!isset($_COOKIE['cart'])){
    ?>
    <style type="text/css">#cartalert{
            display: none;
        }</style>

    <?php
}else{
    setcookie("cart", "", time() - 3600);
}


if (!isset($_COOKIE['login'])){
    ?>
    <style type="text/css">#loginalert{
            display: none;
        }</style>

    <?php
}else{


    setcookie("login", "", time() - 3600);
}


if (isset($_COOKIE['navbar'])){
    ?>
    <style type="text/css">.navbar{
            background-color: <?php echo $_COOKIE['navbar']; ?>
        }</style>

    <?php
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

    <style>
        body{
            background-color: white;
        }
    </style>


</head>
<body>

<script>
    function sabunsatu() {
        location.href = "addcartfunc.php?idbeli=1";
    }

    function sabundua() {
        location.href = "addcartfunc.php?idbeli=2";
    }

    function sabuntiga() {
        location.href = "addcartfunc.php?idbeli=3";
    }
</script>

<div class="alert alert-warning alert-dismissible fade show" role="alert" id="registeralert">
    <strong>Selamat!</strong> anda telah berhasil register.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert" id="cartalert">
    <strong>Selamat!</strong> anda telah berhasil menambahkan ke cart.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert" id="loginalert">
    <strong>Selamat!</strong> anda telah berhasil login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#" id>Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0">
           <a href="cart.php" style="color: black"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg> <span class="sr-only">(current)</span>
            <div class="nav-item dropdown"></a>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Selamat datang , <?php echo $_COOKIE['username'] ?>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="editprofile.php">Profile</a>
                    <a class="dropdown-item" href="logoutfunc.php">Log out</a>
                </div>
            </div>
        </form>
    </div>
</nav>

<script>

</script>


<div class="container-home" >
    <div class="card-group">
        <div class="card">
            <img src="1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sabun 1 </h5>
                <p class="card-text">sabun ini mencegah kuman</p>
                <p class="card-text"><small class="text-muted">Rp 50.000</small></p>
            </div>
            <div class="card-footer">
                <button type="button" onclick="sabunsatu()" class="btn btn-primary" style="width: 100%">Beli</button>
            </div>
        </div>
        <div class="card">
            <img src="2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nuvo</h5>
                <p class="card-text">Sabun ini namanya nuvo</p>
                <p class="card-text"><small class="text-muted">Rp 150.000</small></p>
            </div>

            <div class="card-footer">
                <button type="button" onclick="sabundua()"class="btn btn-primary" style="width: 100%">Beli</button>
            </div>
        </div>
        <div class="card">
            <img src="3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Fres</h5>
                <p class="card-text">Sabun ini berkualitas</p>
                <p class="card-text"><small class="text-muted">Rp 200.000</small></p>
            </div>
            <div class="card-footer">
                <button  type="button" onclick="sabuntiga()" class="btn btn-primary" style="width: 100%">Beli</button>
            </div>
        </div>


    </div>
</div>



</body>
</html>
