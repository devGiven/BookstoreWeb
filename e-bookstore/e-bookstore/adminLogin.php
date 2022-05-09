<?php
session_start();
include "DBConn.php";


$email = $pass = $hpass = $output = NULL;

if(isset($_POST['btnLogin'])){


 $email = $_POST['email'];
 $pass = $_POST['password'];
 $hpass = md5($pass);


 $check="SELECT * FROM tblusers WHERE Email = '$email' && pass = '$hpass' && UserType = 'admin'";
 $rs = mysqli_query($conn,$check);
 $data = mysqli_fetch_array($rs, MYSQLI_NUM);
 if($data[0] > 1) {
     $_SESSION['admin_email'] = $email;
    header('location:admin_home.php');
 }

}
if(isset($_POST['btnBack'])){
       header('location:login.php');
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
     
        #btnLogin{
            width:80%;
        }
        #btnBack{
            width:15%;
        }

    </style>
</head>
    <body style="background-image: url(img/502079.jpg)">
        <section class="web-body" style="background-size: cover;">
            <nav>
                <a href="#"><img src="img/Book-icon.png" alt="logo" class="logo"></a>
            </nav>
    
            <div class="wrap">
            <h2>Administration Sign in</h2>
            <form method="POST" action="">
                <input type="email" placeholder="Username" name="email" value="<?php echo $email; ?>">
                <input type="password" placeholder="Password" name="password" >
                <input type="submit" value="Login" name="btnLogin" id="btnLogin">
                <input type="submit" value="Back" name="btnBack" id="btnBack"> 

            </form>
        </div>
    <div>
        <p  id="sign">Administration <br> </p>
        <p id="sign2">     Login only!</p>
    </div>
    <div class="footer">
            Book Hub &copy; | Designed by the E-Bookstore Team 
        </div>
    </section>
    </body>
    
</html>