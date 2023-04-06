<?php
include "conn.php";

if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $nid = $_GET['nid'];
            $query = "INSERT INTO `problemAssigned`(`PID`, `NID`) VALUES ($pid,$nid)";
            $conn->query($query);
            
            $sql = "DELETE FROM `NGOsProblemRequest` WHERE PID = $pid AND NID = $nid";
            $conn->query($sql);
            header("location:ngoProblemRequest.php");
}
$conn->close();
?>
