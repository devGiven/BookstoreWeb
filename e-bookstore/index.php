<?php

session_start();
include "DBConn.php";
include_once "createTable.php";
include_once "create_admin.php";

if(!isset($_SESSION['email'])){
    header ('location: login.php');
}

if(isset($_POST['logout'])){
    unset($_SESSION["email"]);
    session_destroy();
    header ('location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <link rel="icon" href="/img/Book-icon.png">
    <title>Book Hub</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        input[type=submit], input[type=reset]{
        width:10%;
        font-size:15px;
        font-family:;
        }
    </style>
</head>
    <body style="background-image: url(img/502079.jpg)">
        <section class="web-body" style="background-size: cover;">
            <nav>
                <a href="#"><img src="img/Book-icon.png" alt="logo" class="logo"></a>
                
                <div class="navigation">
                    <form action="" method="post">
                    <ul>
                        <li><a href="#" style="color: gray;">Dashboard</a></li>
                        <li><a href="#" style="color: gray;">Home</a></li>
                        <li><a href="#" style="color: gray;">Shop</a></li>
                        <li><a href="#" style="color: gray;">Cart</a></li> 
                        <input type="submit" name="logout" value="log out">
                    </ul>   

                    </form>
                </div>
            </nav>
    
    <div>
        <p  id="sign">Welcome <br> </p>
        <p id="sign3"><?php echo $_SESSION['email']; ?></p>
    </div>
    <div class="footer">
            Book Hub &copy; | Designed by the E-Bookstore Team 
        </div>
    </section>
    </body>
    
</html>