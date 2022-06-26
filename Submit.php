<?php
session_start();
error_reporting(0);
include "databaseConfig.php";

if (!isset($_SESSION['name'])){
    header("Location: index.php");
    exit();
}
$Name = $_POST['name'];
$Surname = $_POST['surname'];
$Mail = $_POST['mail'];
$Login = $_POST['login'];
$Password = $_POST['password'];
$Edit = $_POST['edit'];
$submit = "UPDATE users SET name="."'$Name'".", surname=" . "'$Surname'".", mail="."'$Mail'".", login="."'$Login'".", password="."'$Password'".
" WHERE ID="."$Edit";
$r = mysqli_query($connection, $submit);
header("Location: hi.php");