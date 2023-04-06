<?php
include "conn.php";

if(isset($_GET['uid'])){
    $uid = $_GET['uid'];
    $process = $_GET['process'];
    if($process == "True" || $process == True){
        $query = "SELECT * FROM `PendingUsersApproval` WHERE UID = $uid";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
                $name = $row["Name"];
                $username = $row["Username"];
                $password = $row["Password"];
                $mobile = $row["Mobile"];
                $email = $row["Email"];
                $query2 = "INSERT INTO `Users`(`Name`, `Username`, `Password`, `Email`, `Mobile`) VALUES ('$name','$username','$password','$email', $mobile)";
                $conn->query($query2);
            }
            $sql = "DELETE FROM `PendingUsersApproval` WHERE UID = $uid";
            $conn->query($sql);
            header("location:userRegistration.php");
}
$conn->close();
?>
