<?php
include "databaseConfig.php";
session_start();
error_reporting(0);

if (isset($_SESSION['name'])){
    header("Location: hi.php");
    exit();
}

if (isset($_POST['submit'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE login='$login' AND password='$password' ";
    $r = mysqli_query($connection, $sql);
    if ($r->num_rows > 0 ){
        $row = mysqli_fetch_assoc($r);
        $_SESSION['name'] = $row['name'];
        header("Location: mainPage.php");
    }else{
        echo "<script>alert('Login or password is wrong')</script>";
    }
}
$_SESSION['type'] = 'type';
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

    <title>Login</title>
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
    <form action="" method="POST">
        <div class="row" style="margin-left: 190px; margin-right: 150px; margin-top: 15%">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <h2 style="text-shadow: 2px 2px #44454B; color: gray">Login</h2>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-7">
                <label style="font-size: 16px">Login:</label>
                <p><input type="text" placeholder="enter here" name="login" value="<?php echo $login; ?>" size="33" required/></p>
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
                <p><input type="password" placeholder="enter here" name="password" value="<?php echo $_POST['password']; ?>" size="33" required/></p>
                <a style="font-size: 14px"><input type="checkbox"> Remember me</a><a href="#" style="margin-left: 15%; font-size: 14px; color: #040F3E">Remind password</a>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <br>
        <div class="row" style="margin-left: 197px; margin-right: 150px;">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <button type="submit" name="submit" class="btn btn-dark" style="box-shadow: 3px 3px gray;">Log in</button>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        <br>
        <div class="row" style="margin-left: 150px; margin-right: 150px;">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <a style="font-size: 14px">You dont have accout yet?</a><a href="createAccount.php" style="margin-left: 18%; font-size: 14px; color: #040F3E">Sing in</a>
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
