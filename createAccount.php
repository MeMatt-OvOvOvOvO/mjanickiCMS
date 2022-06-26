<?php
include 'databaseConfig.php';

error_reporting(0);
session_start();
if (isset($_SESSION['name'])){
    header("Location: index.php");
    exit();
}
//var_dump($_POST);

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mail = $_POST['mail'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $type = $_POST['type'];

    if ($password == $confirmPassword){
        $sql = "SELECT * from users WHERE mail= '$mail'";
        $r = mysqli_query($connection, $sql);
        if (!$r-> num_rows > 0){
            $sql = "INSERT INTO users (name, surname, mail, login, password, type)
                VALUES ('$name', '$surname', '$mail', '$login', '$password', '$type')";
            $r = mysqli_query($connection, $sql);
            if ($r){
                echo "<script>alert('Good job, You have account')</script>";
                $name = "";
                $surname = "";
                $mail = "";
                $login = "";
                $_POST['password'] = "";
                $_POST['confirmPassword'] = "";
                $type = "";
            }else{
                echo "<script>alert('Something wrong')</script>";
            }
        }else{
            echo "<script>alert('This email has account here')</script>";
        }
    }else{
        echo "<script>alert('Password is wrong')</script>";
    }
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

    <title>Create account</title>
</head>
<body id="sthnice">
<div class="container">
    <form action="" method="POST">
        <div class="row" style="margin-left: 140px; margin-right: 150px; margin-top: 10%">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <h2 style="text-shadow: 1px 1px #44454B; color: gray">Create your account</h2>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <br>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-7">
                <label style="font-size: 16px">Name:</label>
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
                <label style="font-size: 16px">Surname:</label>
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
                <label style="font-size: 16px">Mail:</label>
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
                <label style="font-size: 16px">Login:</label>
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
                <label style="font-size: 16px">Password:</label>
                <p><input type="password" placeholder="enter here" name="password" size="33" value="<?php echo $_POST['password']; ?>" required/></p>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <br>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <label style="font-size: 16px">Confirm password:</label>
                <p><input type="password" placeholder="enter here" name="confirmPassword" size="33" value="<?php echo $_POST['confirmPassword']; ?>" required/></p>
                <input type="radio" id="User" name="type" value="User" checked style="margin-left: 5%">
                <label for="User">User</label>
                <input type="radio" id="Admin" name="type" value="Admin">
                <label for="Admin">Admin</label>
                <input type="radio" id="Superadmin" name="type" value="Superadmin">
                <label for="Superadmin">Superadmin</label>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <br>
        <div class="row" style="margin-left: 190px; margin-right: 150px;">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <button type="submit" name="submit" class="btn btn-dark" style="box-shadow: 3px 3px gray;">Register</button>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        <br>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <a style="font-size: 14px">You have accout?</a><a href="index.php" style="margin-left: 27%; font-size: 14px; color: #040F3E">Click here</a>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </form>
</div>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>