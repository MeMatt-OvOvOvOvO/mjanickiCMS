<?php

session_start();
error_reporting(0);
include "databaseConfig.php";
if (!isset($_SESSION['name'])){
    header("Location: index.php");
    exit();
}

$craete = "CREATE TABLE IF NOT EXISTS MainPage(
    id int,
    news1 varchar(255),   
    news2 varchar(255),   
    news3 varchar(255),   
    news4 varchar(255),   
    special1 varchar(255),   
    special2 varchar(255),   
    special3 varchar(255),   
    special4 varchar(255),   
    special5 varchar(255),   
    content1 varchar(255),   
    content2 varchar(255),   
    content3 varchar(255),   
    content4 varchar(255),   
    content5 varchar(255),   
    button1 varchar(255),   
    button2 varchar(255),   
    button3 varchar(255),   
    button4 varchar(255),   
    button5 varchar(255),   
    featured varchar(255),   
    featured1 varchar(255)   
);";
$r = mysqli_query($connection, $craete);

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Fonrt Awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Main Page</title>
    <style>
        /*#sthnice{*/
        /*    height: 969px;*/
        /*    background-image: linear-gradient(teal, red);*/
        /*}*/
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">


    <div class="container">

        <div class="col-lg-2">
            <a class="navbar-brand" href="mainPage.php" style="margin: auto;"><i class="fas fa-home"></i>Home</a>
        </div>

        <div class="col-lg-8">
            <ul class="navbar-nav">
                <li class="nav-item dropdown" style="margin-left: 10%;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Edits</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="hi.php">Edit user</a>
                        <a class="dropdown-item" href="editMainPage.php">Edit mainPage</a>
                    </div>
                </li>
                <li class="nav-item" style="margin-left: 10%;">
                </li>
            </ul>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
</nav>
<div class="container">
    <div class="row" style="margin-left: 100px; margin-right: 150px; margin-top: 5%">
        <div class="col-lg-0">
        </div>
        <div class="col-lg-12">
            <?php echo"<h2>Hi " . $_SESSION['name'] . " it's good to see you here!!" . "</h2>"; ?>
        </div>
        <div class="col-lg-0">
        </div>
    </div>
</div>
<div class="container">
    <div class="row" style="margin-left: 100px; margin-right: 150px; margin-top: 5%">
        <div class="col-lg-0">
        </div>
        <div class="col-lg-12">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card bg-secondary box-shadow">
                        <div class="card-header">
                            <?php
                                $sql = "SELECT * FROM mainpage where id = 1";
                                $r = mysqli_query($connection, $sql);
                                while ($row = mysqli_fetch_assoc($r)) {
                                    echo $row['news1']
                            ?>

                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['special1'] ?></h5>
                            <p class="card-text"><?php echo $row['content1'] ?></p>
                            <a href="#" class="btn btn-dark button-shadow"><?php echo $row['button1'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary box-shadow">
                        <div class="card-header">
                            <?php echo $row['news2'] ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['special2'] ?></h5>
                            <p class="card-text"><?php echo $row['content2'] ?></p>
                            <a href="#" class="btn btn-dark button-shadow"><?php echo $row['button2'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin-top: 15px">
                    <div class="card bg-secondary box-shadow">
                        <div class="card-header">
                            <?php echo $row['news3'] ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['special3'] ?></h5>
                            <p class="card-text"><?php echo $row['content3'] ?></p>
                            <a href="#" class="btn btn-dark button-shadow"><?php echo $row['button3'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin-top: 15px">
                    <div class="card bg-secondary box-shadow">
                        <div class="card-header">
                            <?php echo $row['news4'] ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['special4'] ?></h5>
                            <p class="card-text"><?php echo $row['content4'] ?></p>
                            <a href="#" class="btn btn-dark button-shadow"><?php echo $row['button4'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-0">
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-left: 100px; margin-right: 150px; margin-top: 5%">
            <div class="col-lg-0">
            </div>
            <div class="col-lg-12">
                <div class="card text-center box-shadow bg-secondary">
                    <div class="card-header bg-info">
                        <?php echo $row['featured'] ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['special5'] ?></h5>
                        <p class="card-text"><?php echo $row['content5'] ?></p>
                        <a href="#" class="btn btn-dark button-shadow"><?php echo $row['button5'] ?></a>
                    </div>
                    <div class="card-footer">
                        <?php echo $row['featured1'] ?>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="col-lg-0">
                <a class="btn btn-dark button-shadow my-margin" href="logout.php" role="button">Logout</a>
            </div>
        </div>
    </div>
</div>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">Have a nice day!!</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Links</h6>
                <ul class="footer-links">
                    <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>About me</h6>
                <ul class="footer-links">
                    <li><a href="https://www.facebook.com/mateusz.janicki.92798">Mateusz Janicki</a></li>
                    <li><a href="https://www.google.com/search?ei=EL3MX6mMIof1qwHV6IvIBA&q=S%C5%82owackiego+18%2C+My%C5%9Blenice&oq=myslenice+slowackiego+18&gs_lcp=CgZwc3ktYWIQARgAMgIIJlCoZVioZWC-cmgAcAB4AIAB5wGIAc8CkgEFMC4xLjGYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab">ul.Slowackiego 18, 32-400 Myślenice</a></li>
                    <li><a href="#"><i class="fas fa-phone"></i>502 750 256</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i>mj4nicki@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                    <a href="https://www.facebook.com/mateusz.janicki.92798">Mateusz Janicki</a>.
                </p>
            </div>
        </div>
    </div>
</footer>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>