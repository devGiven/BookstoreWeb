<?php

session_start();
include "DBConn.php";

$book_title = $category = $price = null;
if(isset($_POST['logout'])){
    unset($_SESSION['admin_email']);
    session_destroy();
    header ('location: adminLogin.php');
}   


if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM tblusers WHERE UserID=$id");

    if (count($record) === 1 ) {
        $n = mysqli_fetch_array($record);
        $name = $n['Fname'];
        $surname = $n['Lname'];
        $email = $n['Email'];
        mysqli_query($conn, "UPDATE tblusers SET vStatus = 1  WHERE UserID=$id");
        //$_SESSION['message'] = "Address updated!"; 
        //header('location: home.php');
    
    }

}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM tblusers WHERE UserID=$id");
	//$_SESSION['message'] = "Address deleted!"; 
	//header('location: index.php');
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
        .frame{
            width:85%;
            border-radius:20px ;
            margin:auto;
            background-color: dimgrey;
            box-sizing:border-box;
            padding:40px;
            color: darkgray;
            margin-top:0px;
            margin-bottom: 30px;
            align-items: center;
            position: absolute;
            left: 5%;
            top: 15%;
            z-index: 1;
        }
        table{
            width: 79%;
            margin: 30px auto;
            border-collapse: collapse;
            text-align: left;
        }
        tr {
            border-bottom: 1px solid #cbcbcb;
        }
        th, td{
            border: none;
            height: 30px;
            padding: 2px;
        }
        #title:hover{
            background-color: #ffffff00;
        }
        tr:hover {
            background-color: #5050508e;
        }
        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            cursor: pointer;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
        }
        .edit_btn {
            text-decoration: none;
            padding: 2px 5px;
            background: #2E8B57;
            color: white;
            border-radius: 3px;
        }

        .del_btn {
            text-decoration: none;
            padding: 2px 5px;
            color: white;
            border-radius: 3px;
            background: #800000;
        }
        .msg {
            margin: 30px auto; 
            padding: 10px; 
            border-radius: 5px; 
            color: #3c763d; 
            background: #dff0d8; 
            border: 1px solid #3c763d;
            width: 50%;
            text-align: center;
        }
        #log{
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
                        <li><a href="admin_home.php" style="color: gray;">Administrate Books</a></li>
                        <li><a href="admin_verification.php" style="color: gray;">Administrate Users</a></li>
                        <input type="submit" name="logout" id="log" value="log out">
                    </ul>   

                    </form>
                </div>
            </nav>
            <div class="frame">
            <center><h1> Administrate Users </h1></center>
            <?php $results = mysqli_query($conn, "SELECT * FROM tblusers WHERE vStatus = 0"); ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['Fname']; ?></td>
                        <td><?php echo $row['Lname']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        
                        <td>
                            <a href="admin_verification.php?edit=<?php echo $row['UserID']; ?>" class="edit_btn" >Verify</a>
                        </td>
                        <td>
                            <a href="admin_verification.php?del=<?php echo $row['UserID']; ?>" class="del_btn">Decline</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    <div class="footer">
            Book Hub &copy; | Designed by the E-Bookstore Team 
        </div>
    </section>
    </body>
    
</html>