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

    <title>Edit account</title>
    <style>
        #sthnice{
            height: 802px;
            width: 100%;
            background-image: linear-gradient(teal, red);
        }
    </style>
</head>
<body id="sthnice">
<div class="container">
    <form action="Submit.php" method="POST">
        <input type="hidden" name="edit" value="<?php echo $_POST['edit']?>">
        <div class="row" style="margin-left: 140px; margin-right: 150px; margin-top: 10%">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <h2 style="text-shadow: 1px 1px #44454B; color: gray">Edit accounts</h2>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <br>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-7">
                <label style="font-size: 16px">Edit name:</label>
                <p><input type="text" placeholder="enter here" name="name" size="33" value="<?php echo $name; ?>" required/></p>
                <br>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-7">
                <label style="font-size: 16px">Edit surname:</label>
                <p><input type="text" placeholder="enter here" name="surname" size="33" value="<?php echo $surname; ?>" required/></p>
                <br>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-7">
                <label style="font-size: 16px">Edit mail:</label>
                <p><input type="email" placeholder="enter here" name="mail" size="33" value="<?php echo $mail; ?>" required/></p>
                <br>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-7">
                <label style="font-size: 16px">Edit login:</label>
                <p><input type="text" placeholder="enter here" name="login" size="33" value="<?php echo $login; ?>" required/></p>
                <br>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <label style="font-size: 16px">Edit password:</label>
                <p><input type="password" placeholder="enter here" name="password" size="33" value="<?php echo $password; ?>" required/></p>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <div class="row" style="margin-left: 190px; margin-right: 150px; margin-top: 5%">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <button type="submit" name="submit" class="btn btn-dark" style="box-shadow: 3px 3px gray;">Submit</button>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </form>
    <div class="row" style="margin-left: 100px; margin-right: 150px; margin-top: 5%">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <a class="btn btn-dark" href="hi.php" role="button" style="box-shadow: 3px 3px gray;">Go back</a>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
</div>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>