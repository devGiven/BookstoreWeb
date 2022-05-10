<?php
include "DBConn.php";


mysqli_query($conn, "DROP TABLE IF EXISTS `tblusers`;");
$tblusers = "CREATE TABLE IF NOT EXISTS  `tblusers` (
	`UserID` int(10) NOT NULL AUTO_INCREMENT,
	`Fname` varchar(30) NOT NULL,
	`Lname` varchar(30) NOT NULL,
	`Stnum` varchar(30) NOT NULL,
	`Email` varchar(50) NOT NULL,
	`Pass` varchar(50) NOT NULL,
	`UserType` varchar(10) NOT NULL DEFAULT 'user',
	`vStatus` int NOT NULL DEFAULT b'0',
	PRIMARY KEY (`UserID`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  
 
  mysqli_query($conn, "DROP TABLE IF EXISTS `tblbooks`;");
  $tblbooks = "CREATE TABLE IF NOT EXISTS  `tblbooks` (
	`bookID` int(10) NOT NULL AUTO_INCREMENT,
	`bookTitle` varchar(50) NOT NULL,
	`category` varchar(50) NOT NULL,
	`image` varchar(50) NOT NULL,
	`price` decimal(10,0) NOT NULL,
	`qty` int(10) NOT NULL,
	PRIMARY KEY (`bookID`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  
  mysqli_query($conn, "DROP TABLE IF EXISTS `tblorders`;");
  $tblorders= "CREATE TABLE IF NOT EXISTS  `tblorders` (
	`orderID` int(10) NOT NULL,
	`userID` int(10) NOT NULL,
	`orderDate` date NOT NULL,
	PRIMARY KEY (`orderID`),
	CONSTRAINT `tblorders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tblusers` (`UserID`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  
  mysqli_query($conn, "DROP TABLE IF EXISTS `tblorderbooks`;");
  $tblorderbooks = "CREATE TABLE IF NOT EXISTS  `tblorderbooks` (
	`orderID` int(10) NOT NULL,
	`bookID` int(10) NOT NULL,
	`price` decimal(10,0) NOT NULL,
	`qty` int(10) NOT NULL,
	 PRIMARY KEY (`orderID`,`bookID`),
	 CONSTRAINT `tblorderbooks_ibfk_1` FOREIGN KEY (`bookID`) REFERENCES `tblbooks` (`bookID`),
	 CONSTRAINT `tblorderbooks_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `tblorders` (`orderID`)  
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
  

  $create_tbl1 = mysqli_query($conn, $tblusers);
  $create_tbl2 = mysqli_query($conn, $tblbooks);
  $create_tbl3 = mysqli_query($conn, $tblorders);
  $create_tbl4 = mysqli_query($conn, $tblorderbooks);


  if ($create_tbl1 && $create_tbl2 && $create_tbl3 && $create_tbl4) {
			echo '<script>alert("The tables were created successfully!")</script>';
		}else{

			}


?>