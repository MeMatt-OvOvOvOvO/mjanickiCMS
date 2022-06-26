<?php

session_start();
error_reporting(0);
include "databaseConfig.php";
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

    <title>Edit center</title>
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

        <div class="row" style="margin-left: 80px; margin-right: 150px; margin-top: 10%">
            <div class="col-lg-0">
            </div>
            <div class="col-lg-12">
                <?php echo"<h2>You are loggen in as " . $_SESSION['name'] . "</h2>"; ?>
                <?php include "members.php";
                if (mysqli_num_rows($r) > 0)
                ?>
                <h2 style="text-shadow: 1px 1px #44454B; color: gray">Members</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Login</th>
                        <th scope="col">Password</th>
                        <th scope="col">Type</th>
                        <th scope="col">Edycja</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($r)) {?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['surname']?></td>
                        <td><?=$row['mail']?></td>
                        <td><?=$row['login']?></td>
                        <td><?=$row['password']?></td>
                        <td><?=$row['type']?></td>
                        <td>
                            <form action="edit.php" method="POST" style="display: inline">
                                <button type="submit" name="edit" class="btn btn-primary" value="<?php echo $row['id']; ?>">Edit</button>
                            </form>
                            <form action="delete.php" method="POST" style="display: inline">
                                <button type="submit" name="delete" class="btn btn-danger" value="<?php echo $row['id']; ?>">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-0">
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