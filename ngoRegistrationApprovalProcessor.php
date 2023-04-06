<?php
include "conn.php";

if(isset($_GET['nid'])){
    $nid = $_GET['nid'];
    $process = $_GET['process'];
    if($process == "True" || $process == True){
        $query = "SELECT * FROM `PendingNGOsApproval` WHERE NID = $nid";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
                $name = $row["Name"];
                $sector = $row["Sector"];
                $state = $row["State"];
                $website = $row["Website"];
                $address = $row["Address"];
                $username = $row["Username"];
                $password = $row["Password"];
                $query2 = "INSERT INTO `NGOs`(`Name`, `Sector`, `State`, `Website`, `Address`, `Username`, `Password`) VALUES ($name,$sector,$state,$website,$address,$username,$password)";
                $conn->query($query2);
            }
            $sql = "DELETE FROM `PendingNGOsApproval` WHERE NID = $nid";
            $conn->query($sql);
            header("location:ngoRegistrationApproval.php");
}
$conn->close();
?>