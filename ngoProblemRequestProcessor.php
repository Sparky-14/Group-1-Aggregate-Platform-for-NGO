<?php
include "conn.php";

if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $nid = $_GET['nid'];
            $query = "INSERT INTO `problemAssigned`(`PID`, `NID`) VALUES ($pid,$nid)";
            if($conn->query($query)== TRUE){
                $status = "UPDATE `Problems` SET `status`= 'assigned' WHERE pid = $pid";
                $conn->query($status);
            }
            
            $sql = "DELETE FROM `NGOsProblemRequest` WHERE PID = $pid AND NID = $nid";
            $conn->query($sql);
            header("location:ngoProblemRequest.php");
}
$conn->close();
?>
