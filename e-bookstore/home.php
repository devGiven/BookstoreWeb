<?php

session_start();
include "DBConn.php";


if(!isset($_SESSION['email'])){
    header ('location: login.php');
}

if(isset($_POST['logout'])){
    session_destroy();
    session_unset();
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
        background:#ff0000;

        }
        #nav{
            color: white; 
            font-weight: bold;
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
                        <li><a href="#" id="nav">Dashboard</a></li>
                        <li><a href="#" id="nav">Home</a></li>
                        <li><a href="#" id="nav">Shop</a></li>
                        <li><a href="#" id="nav">Cart</a></li> 
                        <input type="submit" name="logout" value="log out">
                    </ul>   

                    </form>
                </div>
            </nav>
            <?php if (isset($_SESSION['home-message'])): ?>
                <div class="notification">
                    <?php echo $_SESSION['home-message']; 
                        unset($_SESSION['home-message']);  ?>
                </div>
            <?php endif ?>

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