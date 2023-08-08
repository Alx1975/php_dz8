<?php
session_start();
if (!(trim($_POST["username"])==null)) {
    $_SESSION['username'] =$_POST["username"];
} 
header('Location: index.php');