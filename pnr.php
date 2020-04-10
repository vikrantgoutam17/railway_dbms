<?php
session_start();
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
$pnr = null;
$pnr_err = null;
$train_number = null;
$train_name = null;
$coach = null;
$seat_no = null;
$fr = null;
$tt = null;
$date = null;
$user_name = null;
$b_time = null;
$d_time = null;
$fare = null;
$name = null;
$sex = null;
$age = null;
$phone = null;
$email = null;
$status = null;
if(empty(trim($_POST["pnr"]))){
        $phone_err = "Please enter a pnr number.";
    }elseif(strlen(trim($_POST["pnr"])) != 10){
        $pnr_err = "Enter a valid pnr number";
    } 
    else{
       $pnr = $_POST["pnr"];
    }
    if(empty($pnr_err)){
    
      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "indian_railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "select * from `pasanger` where `pnr_no` = ".$pnr.";";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $pnr = $row["pnr_no"];
$train_number =  $row["train_number"];
$train_name = $row["train_name"];
$coach = $row["Coach"];
$seat_no = $row["seat_no"];
$fr = $row["fr"];
$tt = $row["tt"];
$date = $row["date"];
$user_name = $row["user_name"];
$b_time = $row["b_time"];
$d_time = $row["d_time"];
$fare = $row["Fare"];
$name = $row["name"];
$sex = $row["sex"];
$age = $row["age"];
$phone = $row["phone"];
$email = $row["email"];
$status = $row["status"];
    }
    
} else {
    $pnr_err = "invalid pnr Please check the pnr";
    $pnr = null;
}
$conn->close();
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>pnr status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.png" />
    <title>IRCTC</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body background="bb.jpg">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="team.html"><img src="logo1.png" width="30" height="30" alt="" style="border-radius:50%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="project.php" style="font-weight:bold; font-family: Lucida Bright, Georgia, serif;">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <?php 
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<form class=".'"'."form-inline my-2 my-lg-0".'"'." >
     <a href=".'"'."login.php".'"'."class=".'"'."btn btn-outline-success my-2 my-sm-0".'"'. ">LOGIN</a> &nbsp &nbsp &nbsp &nbsp
      <a href=".'"'."register.php".'"'."class=".'"'."btn btn-outline-success my-2 my-sm-0".'"'.">REGISTER</a>
    </form>";}
    else{
echo "<form class=".'"'."form-inline my-2 my-lg-0".'"'." >
     <a href=".'"'."#".'"'."class=".'"'."btn btn-outline-success my-2 my-sm-0".'"'. ">LOGGED IN AS ".strtoupper($_SESSION["username"])."</a> &nbsp &nbsp &nbsp &nbsp
     <a href=".'"'."reset-password.php".'"'."class=".'"'."btn btn-outline-warning my-2 my-sm-0".'"'. ">CHANGE PASSWORD</a> &nbsp &nbsp &nbsp &nbsp 
     <a href=".'"'."logout.php".'"'."class=".'"'."btn btn-outline-danger my-2 my-sm-0".'"'. ">LOGOUT</a> 
    </form>";
    }
    ?>
  </div>
</nav> 
    <div class="page-header">
        <h1><b>CHECK YOU PNR STATUS</b></h1>
    </div>
    <br>
    <br>
    <br>

        <div class="row" style="margin:20px;" >
    <div class="col-md-2"></div>
       <div class="col-md-8" style="background-color: #0052cc; border-radius: 30px; opacity: 0.8;">
   
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="row" style="margin:20px;" >
    <div class="col-md-4"></div>
       <div class="col-md-4" style="background-color: #0052cc; border-radius: 30px">
   
                
                <input type="text" name="pnr" class="form-control" placeholder="ENTER YOUR PNR"  value="<?php echo $pnr; ?>">
               
                <span class="help-block" style="color: red;"> <?php echo $pnr_err ?> </span>
               
                
            </div>  
                  <div class="col-md-4"></div>
</div>
            
            <div class="form-group">
                <center><input type="submit" class="btn btn-success" value="CHECK STATUS" ></center>
            </div>
           
        </form>
   <p style="text-align:left; ">
       
        
        <?php if(empty($pnr_err)){
        echo "<font size='3px' color='white'>PNR NUMBER: ".$pnr."<br>TRAIN NUMBER: ".$train_number."<br>TRAIN NAME: ".$train_name."<br>COACH: ".$coach."<br>SEAT NUMBER: ".$seat_no."<br>FROM: ".$fr."<br>TO: ".$tt."<br>DATE: ".$date."<br>BOARDING TIME: ".$b_time."<br>DESTINATION TIME: ".$d_time."<br>FARE:  &#8377;".$fare."<br>PASSENGER NAME: ".$name."<br>PASSENGER SEX: ".$sex."<br>PASSENGER AGE: ".$age."<br>PHONE NUMBER: ".$phone."<br>EMAIL: ".$email."<br>status: ".$status."<br>USERNAME: ".$user_name;
        }
   ?>
    </p>
</div>
<div class="col-md-2"></div>
  <br> <br>
</div>
  
</body>
</html>