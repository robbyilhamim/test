<?php

include "connect.php";

$names = $_COOKIE['username'];
$query = mysqli_query($connect,"SELECT * FROM user where nama = '$names'");
$data = mysqli_fetch_array($query);
$id = $data['id'];

if (isset($_COOKIE['navbar'])){
    ?>
    <style type="text/css">.navbar{
            background-color: <?php echo $_COOKIE['navbar']; ?>
        }</style>

    <?php
}

if (!isset($_COOKIE['in'])){
    header("location:login.php");
}

if (!isset($_COOKIE['delete'])){
    ?>
    <style type="text/css">#deletealert{
            display: none;
        }</style>

    <?php
}else{
    setcookie("delete", "", time() - 3600);
}





$querycart = mysqli_query($connect, "SELECT * FROM cart where user_id = $id")

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-light " id="nav">
    <a class="navbar-brand" href="home.php" id>Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg> <span class="sr-only">(current)</span>
            <div class="nav-item dropdown">
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


<div class="alert alert-warning alert-dismissible fade show" role="alert" id="deletealert">
    <strong>Selamat!</strong> anda telah berhasil Delete item.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="container" style="margin: 0 auto ; margin-top: 50px ;">

    <table class="table table-striped" style="margin: 0 auto">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $x = 1;
        $total = 0;

        while($datacart = mysqli_fetch_array($querycart)){
        ?>
        <tr>
            <th scope="row"><?php echo $x ?></th>
            <?php $x++?>
            <td><?php echo $datacart['nama_barang'] ?></td>
            <td><?php echo $datacart['harga'] ?></td>
            <?php $total += $datacart['harga'] ?>
            <td><button onclick="location.href = 'deletefunc.php?id=<?php echo $datacart['id'] ?>' " type="button" class="btn btn-danger">Delete</button></td>
        </tr>

        <?php
        }
        ?>

        <tr>
            <th>total</th>
            <td></td>
            <td> <?php echo $total?></td>
            <td></td>

        </tr>

        </tbody>
    </table>

    <p align="center" style="margin-top: 40px"> @ 2020 copyright <a href="home.php">WAD 2020</a> </p>
</div>



</html>
