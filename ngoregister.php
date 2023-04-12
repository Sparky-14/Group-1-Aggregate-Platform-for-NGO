<?php
if($_SESSION["user"]){
    header("location:service.php");
}
if(isset($_POST['name'])){
    $name = $_POST["name"];
    $sector = $_POST["sector"];
    $state = $_POST["state"];
    $website = $_POST["website"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $name = stripcslashes($name);
    $sector = stripcslashes($sector);
    $state = stripcslashes($state);
    $website = stripcslashes($website);
    $address = stripcslashes($address);
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    
    include "conn.php";
    $sql = "INSERT INTO `PendingNGOsApproval`(`Name`,`Sector`,`State`, `Website`,`Address`,`Username`,`Password`) VALUES ('$name','$sector','$state','$website','$address','$username','$password')";
    if ($conn->query($sql) == TRUE) {
        header("location:ngologin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eNGO - Registration</title>

    <!-- Custom fonts for this template-->
    <link href="admin/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" id="f1" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="name" id="Name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="sector" id="Sector"
                                            placeholder="Sector">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="state" id="State"
                                        placeholder="State">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="url" class="form-control form-control-user" name="website" id="website"
                                            placeholder="https://example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="address" id="address"
                                        placeholder="address">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="username"
                                            id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="password" class="form-control form-control-user" name="pass"
                                        id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" name="rpass" placeholder="Repeat Password">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="ngologin.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/jquery.min.js"></script>
    <script src="admin/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/sb-admin-2.min.js"></script>

</body>

</html>
