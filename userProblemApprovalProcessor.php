<?php
include "conn.php";

if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $process = $_GET['process'];
    if($process == "True" || $process == True){
        $query = "SELECT * FROM `UsersProblemApproval` WHERE PID = $pid";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
                $title = $row["Title"];
                $problem = $row["Problem"];
                $mobile = $row["Contact"];
                $location = $row["Location"];
                $sector = $row["Sector"];
                $createdby = $row["CreatedBy"];
                $createdon = $row["CreatedOn"];
                $query2 = "INSERT INTO `Problems`(`Title`, `Location`, `Sector`, `Problem`, `Mobile`, `CreatedBy`, `CreatedOn`) VALUES ('$title','$location','$sector','$problem','$mobile','$createdby','$createdon')";
                $conn->query($query2);
            }
            $sql = "DELETE FROM `UsersProblemApproval` WHERE PID = $pid";
            $conn->query($sql);
            header("location:userProblemApproval.php");
}
$conn->close();
?>
