<?php


setcookie("in","",time() - 3600);
setcookie("out","true");

header("location:login.php");
