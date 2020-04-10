<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.png" />
    <title>IRCTC</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body background="bb.jpg">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Indian Railways.</h1>
    </div>
    <br>
    <br>
    <br>
        <div class="row" style="margin:20px;" >
    <div class="col-md-4"></div>
       <div class="col-md-4">
    <form class="form-inline my-2 my-lg-0" >
     <p>
       
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> &nbsp &nbsp &nbsp
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a> <br> <br>
        <?php 
        echo "<a href=".'"'."project.php".'"'." class=".'"'."btn btn-success".'"'.">Book ticket</a>";

        
   ?>
    </p>
    </form>
</div>
<div class="col-md-4"></div>
</div>
</body>
</html>