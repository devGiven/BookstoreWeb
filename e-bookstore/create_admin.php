<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }


   $check="SELECT * FROM tblusers WHERE Email = 'snow@admin.com'";
    $rs = mysqli_query($conn,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    if($data[0] > 1) {
        echo "User Already in Exists<br/>";
    }

else
{
    $sql = "INSERT INTO tblusers ( `Fname`, `Lname`, `Stnum`, `Email`, `Pass`, `UserType`,`vStatus`) VALUES 
    ('Tshiamo','Monageng','ST00000','snow@admin.com','a722c63db8ec8625af6cf71cb8c2d939','admin','1')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("New record created successfully!")</script>';
    } else {
    /* echo  "<br>" . mysqli_error($conn);*/
        echo '<script>alert(""Error: " . $defaultAdmin .!")</script>';
    }
}
    mysqli_close($conn);
?>