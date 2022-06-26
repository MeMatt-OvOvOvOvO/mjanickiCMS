<?php

session_start();
include "databaseConfig.php";
if (!isset($_SESSION['name'])){
    header("Location: index.php");
    exit();
}
$hah = "DELETE FROM users WHERE ID=" . $_POST['delete'];
$r = mysqli_query($connection, $hah);

header("Location: hi.php");
?>
