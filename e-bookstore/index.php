<?php

session_start();
include "DBConn.php";
include_once "createTable.php";
include_once "/automate/create_admins.php";
include_once "/automate/create_default_users.php";



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
        #nav{
            color: white; 
            font-weight: bold;
        }
        .loader{
            width:120px;
            height:75px;
            display:flex;
            align-items:flex-end;
            justify-content:space-between;
            margin-top:10%;
        }
        .loader span{
            font-size:22px;
            color:black;
            text-transform:uppercase;
            margin-left:45%;
        }
        .ball{
            width:25px;
            height:25px;
            margin-left:45%;
            border-radius:50%;
            background-color:white;
            animation: bounce .5s alternate infinite;
        }
        .ball:nth-child(2){
            animation: bounce .5 .1s alternate infinite;
            margin-left:48%;

        }
        .ball:nth-child(3){
            animation: bounce .5 .10s alternate infinite;
            margin-left:51%;
        }
        @keyframes bounce {
            from{
                transform:scaleX(1.25);
            }
            to{
                transform:translateY(-50px) scaleX(1);
            }
        }

        .slogan{
        /* Learn easily anywhere anytime */
            position: absolute;
            width: 1214px;
            height: 412px;
            left: 168px;
            top: 273px;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 120px;
            line-height: 145px;

            color: #FFFFFF;
        }
        .lower-text{
            /* Buy a book and learn effectively or Sell used books */
                position: absolute;
                width: 507px;
                height: 48px;
                left: 62%;
                top: 50%;
                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 24px;
                color: #FFFFFF;
                text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .category-top-deco{
            /* Educational Business */
                position: absolute;
                width: 274px;
                height: 29px;
                left: 42%;
                top: 8%;

                font-style: thin;
                font-weight: 100;
                font-size: 24px;
                line-height: 29px;
                /* identical to box height */


                color: #FFFFFF;
        }
    </style>
    <script>
        function redirect(){
        window.location = "home.php";
        }
       setTimeout('redirect()',10500);
    </script>
</head>
    <body style="background-image: url(img/502079.jpg)">
        <section class="web-body" style="background-size: cover;">
            <nav>
                <a href="#"><img src="img/Book-icon.png" alt="logo" class="logo"></a>
            </nav>
    
    <div>
        <p class="category-top-deco"> Educational - Business</p>
        <p class="slogan">Learn easily anywhere anytime</p>
        <p class="lower-text">Buy a book and learn effectively or Sell used books</p>
        <!-- <p  id="sign">Book Hub <br> </p> -->
    </div>
    <div class="footer">
            Book Hub &copy; | Designed by the E-Bookstore Team 
        </div>

    </section>
    
    </body>
    
</html>