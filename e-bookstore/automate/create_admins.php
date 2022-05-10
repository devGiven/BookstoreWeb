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


   $check="SELECT * FROM tblusers WHERE Email = 'snow@admin.com'";
    $rs = mysqli_query($conn,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    if($data[0] > 1) {
        echo "User Already in Exists<br/>";
    } else{
        $sql_s = "INSERT INTO tblusers ( `Fname`, `Lname`, `Stnum`, `Email`, `Pass`, `UserType`,`vStatus`) VALUES 
        ('Tshiamo','Monageng','ST10131311','snow@admin.com','$pass','admin','1');";

        $sql_e = "INSERT INTO tblusers ( `Fname`, `Lname`, `Stnum`, `Email`, `Pass`, `UserType`,`vStatus`) VALUES
        ('Enoch','Adeyenju','ST10131311','enoch@admin.com','$pass','admin','1');";

        $sql_a = "INSERT INTO tblusers ( `Fname`, `Lname`, `Stnum`, `Email`, `Pass`, `UserType`,`vStatus`) VALUES
        ('Aluwani','Madzivhandila','ST10131946','alu@admin.com','$pass','admin','1');";

        if (mysqli_query($conn, $sql_s) && mysqli_query($conn, $sql_e) && mysqli_query($conn, $sql_a)) {
            echo '<script>alert("New record created successfully!")</script>';
        } else {
        /* echo  "<br>" . mysqli_error($conn);*/
            echo '<script>alert(""Error: " . $defaultAdmin .!")</script>';
        }
}
    mysqli_close($conn);
?>