<?php

if (isset($_SESSION['name'])){
    $sql = "SELECT * FROM users ORDER BY id ASC";
    $r = mysqli_query($connection, $sql);
}else{
    header("Location: index.php");
}
?>
