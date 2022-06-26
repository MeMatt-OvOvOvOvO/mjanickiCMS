<?php

session_start();
include "databaseConfig.php";
error_reporting(0);

if (!isset($_SESSION['name'])){
    header("Location: index.php");
    exit();
}



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

    <title>Edit mainPage</title>
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
            <?php echo"<h2>Hi " . $_SESSION['name'] . ", you can edit here!!" . "</h2>"; ?>
        </div>
        <div class="col-lg-0">
        </div>
    </div>
</div>
<div class="container">
    <div class="row" style="margin-left: 100px; margin-right: 150px; margin-top: 5%">
        <form action="SubmitEditMainPage.php" method="POST">
            <div class="col-lg-0">
            </div>
            <div class="col-lg-12">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card bg-secondary box-shadow">
                            <div class="card-header">
                                <!-- News 1 input -->
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="news1" value="<?php echo $news1; ?>" placeholder="News 1">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <!-- Special title treatment input-->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="special1" value="<?php echo $special1; ?>" placeholder="Special title treatment">
                                    </div>
                                </h5>
                                <p class="card-text">
                                <!-- With supporting text below as a natural lead-in to additional content. input-->
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="content1" value="<?php echo $content1; ?>" placeholder="...">
                                </div>
                                </p>
                                <a href="#" class="btn btn-dark button-shadow">
                                <!-- Go somewhere input -->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="button1" value="<?php echo $button1; ?>" placeholder="...">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-secondary box-shadow">
                            <div class="card-header">
                                <!-- News 2 input -->
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="news2" value="<?php echo $news2; ?>" placeholder="News 2">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <!-- Special title treatment input-->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="special2" value="<?php echo $special2; ?>" placeholder="Special title treatment">
                                    </div>
                                </h5>
                                <p class="card-text">
                                    <!-- With supporting text below as a natural lead-in to additional content. input-->
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="content2" value="<?php echo $content2; ?>" placeholder="...">
                                </div>
                                </p>
                                <a href="#" class="btn btn-dark button-shadow">
                                    <!-- Go somewhere input -->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="button2" value="<?php echo $button2; ?>" placeholder="...">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="margin-top: 15px">
                        <div class="card bg-secondary box-shadow">
                            <div class="card-header">
                                <!-- News 3 input -->
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="news3" value="<?php echo $news3; ?>" placeholder="News 3">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <!-- Special title treatment input-->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="special3" value="<?php echo $special3; ?>" placeholder="Special title treatment">
                                    </div>
                                </h5>
                                <p class="card-text">
                                    <!-- With supporting text below as a natural lead-in to additional content. input-->
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="content3" value="<?php echo $content3; ?>" placeholder="...">
                                </div>
                                </p>
                                <a href="#" class="btn btn-dark button-shadow">
                                    <!-- Go somewhere input -->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="button3" value="<?php echo $button3; ?>" placeholder="...">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="margin-top: 15px">
                        <div class="card bg-secondary box-shadow">
                            <div class="card-header">
                                <!-- News 4 input -->
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="news4" value="<?php echo $news4; ?>" placeholder="News 4">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <!-- Special title treatment input-->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="special4" value="<?php echo $special4; ?>" placeholder="Special title treatment">
                                    </div>
                                </h5>
                                <p class="card-text">
                                    <!-- With supporting text below as a natural lead-in to additional content. input-->
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="content4" value="<?php echo $content4; ?>" placeholder="...">
                                </div>
                                </p>
                                <a href="#" class="btn btn-dark button-shadow">
                                    <!-- Go somewhere input -->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="button4" value="<?php echo $button4; ?>" placeholder="...">
                                    </div>
                                </a>
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
                        <!-- input Featured-->
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" name="featured" value="<?php echo $featured; ?>" placeholder="Featured">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- input Special title treatment-->
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" name="special5" value="<?php echo $special5; ?>" placeholder="Special title treatment">
                            </div>
                        </h5>
                        <p class="card-text">
                        <!-- input With supporting text below as a natural lead-in to additional content.-->
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" name="content5" value="<?php echo $content5; ?>" placeholder="...">
                        </div>
                        </p>
                        <a href="#" class="btn btn-dark button-shadow">
                        <!-- input More-->
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" name="button5" value="<?php echo $button5; ?>" placeholder="More">
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <!-- input 2 days ago-->
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" name="featured1" value="<?php echo $featured1; ?>" placeholder="2 days ago">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-0">
                <button type="submit" name="submit" class="btn btn-dark button-shadow my-margin" style="box-shadow: 3px 3px gray;">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">
                    Have a nice day!!
                </p>
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