<?php
$server = "localhost";
$user = "root";
$pass= "";
$database = "mjanicki";

$connection = mysqli_connect($server, $user, $pass, $database);

if (!$connection){
    die("Cannot connect to database");
}
