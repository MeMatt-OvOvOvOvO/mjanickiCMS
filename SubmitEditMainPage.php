<?php
session_start();
error_reporting(0);
include "databaseConfig.php";

if (!isset($_SESSION['name'])){
    header("Location: index.php");
    exit();
}
$news1 = $_POST['news1'];
$news2 = $_POST['news2'];
$news3 = $_POST['news3'];
$news4 = $_POST['news4'];
$special1 = $_POST['special1'];
$special2 = $_POST['special2'];
$special3 = $_POST['special3'];
$special4 = $_POST['special4'];
$special5 = $_POST['special5'];
$content1 = $_POST['content1'];
$content2 = $_POST['content2'];
$content3 = $_POST['content3'];
$content4 = $_POST['content4'];
$content5 = $_POST['content5'];
$button1 = $_POST['button1'];
$button2 = $_POST['button2'];
$button3 = $_POST['button3'];
$button4 = $_POST['button4'];
$button5 = $_POST['button5'];
$featured = $_POST['featured'];
$featured1 = $_POST['featured1'];

$submit = "UPDATE MainPage SET news1="."'$news1'".", news2="."'$news2'".", news3="."'$news3'".", news4="."'$news4'".
    ", special1="."'$special1'".", special2="."'$special2'".", special3="."'$special3'".", special4="."'$special4'".", special5="."'$special5'".
    ", content1="."'$content1'".", content2="."'$content2'".", content3="."'$content3'".", content4="."'$content4'".", content5="."'$content5'".
    ", button1="."'$button1'".", button2="."'$button2'".", button3="."'$button3'".", button4="."'$button4'".", button5="."'$button5'".
    ", featured="."'$featured'".", featured1="."'$featured1'"."WHERE id = 1";

$r = mysqli_query($connection, $submit);
header("Location: mainPage.php");