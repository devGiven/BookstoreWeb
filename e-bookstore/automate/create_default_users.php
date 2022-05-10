<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";
    $pass = md5('pass1');

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }


   $check="SELECT * FROM tblusers WHERE Email = 'snow@email.com'";
    $rs = mysqli_query($conn,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    if($data[0] > 1) {
        echo "User Already in Exists<br/>";
    } else{
        $sql_s = "INSERT INTO tblusers ( `Fname`, `Lname`, `Stnum`, `Email`, `Pass`, `UserType`,`vStatus`) VALUES 
        ('Tshiamo','Monageng','ST101254734','snow@email.com','$pass','user','1');";

        $sql_e = "INSERT INTO tblusers ( `Fname`, `Lname`, `Stnum`, `Email`, `Pass`, `UserType`,`vStatus`) VALUES
        ('Thabang','Madzii','ST10165899','tbng@email.com','$pass','user','0');";

        $sql_a = "INSERT INTO tblusers ( `Fname`, `Lname`, `Stnum`, `Email`, `Pass`, `UserType`,`vStatus`) VALUES
        ('Lebogang','Madzivhandila','ST10134577','lebo@email.com','$pass','user','0');";

        if (mysqli_query($conn, $sql_s) && mysqli_query($conn, $sql_e) && mysqli_query($conn, $sql_a)) {
            echo '<script>alert("New record created successfully!")</script>';
        } else {
        /* echo  "<br>" . mysqli_error($conn);*/
            echo '<script>alert(""Error: " . $defaultAdmin .!")</script>';
        }
}
    mysqli_close($conn);
?>