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
    $record = mysqli_query($db, "SELECT * FROM tblbooks WHERE bookID=$id");

    if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $name = $n['name'];
        $surname = $n['surname'];
        $email = $n['email'];
    }
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
            top: 35%;
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
                        <li><a href="#" style="color: gray;">Administrate Books</a></li>
                        <li><a href="admin_verification.php" style="color: gray;">Administrate Users</a></li>
                        <input type="submit" name="logout" id="log" value="log out">
                    </ul>   

                    </form>
                </div>
            </nav>
            <div class="frame">
            <h2>Administrate Books</h2>
            <?php if (isset($_SESSION['message'])): ?>
            <div class="msg">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
		
            <?php $results = mysqli_query($conn, "SELECT * FROM tblbooks"); ?>
            <table>
                <thead>
                    <tr id="title">
                        <th>Book Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        
                        <td>
                            <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Update</a>
                        </td>
                        <td>
                            <a href="dbConn.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

            <form method="POST" action="">
            <label>Book Title</label>
                <input type="text" placeholder="E.g The Tales of Love" name="book_title" value="<?php echo $book_title; ?>">
            <label>Category</label>
                <input type="text" placeholder="E.g Romance" name="category" value="<?php echo $category; ?>">
            <label>Price</label>
                <input type="text" placeholder="E.g 5 000" name="price" value="<?php echo $price; ?>">

            <div class="input-group">
                <?php if ($update == true): ?>
                    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                <?php else: ?>
                    <button class="btn" type="submit" name="save" >Save</button>
                <?php endif ?>
		    </div>
            </form>
        </div>

    <div>
        <p  id="sign">Welcome <br> </p>
        <p id="sign3"><?php echo $_SESSION['admin_email']; ?></p>
    </div>
    <div class="footer">
            Book Hub &copy; | Designed by the E-Bookstore Team 
        </div>
    </section>
    </body>
    
</html>