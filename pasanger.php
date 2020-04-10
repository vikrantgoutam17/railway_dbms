<?php
//ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
session_start();


if($_SESSION["loggedin"] == false){
    header("location: login.php");
}
require_once "cong.php";
$t_no =  $_SESSION["tain_number"];
//echo $t_no;
$t_name = $_SESSION["train_name"];
$b_time = $_SESSION["arr_tim"];
$d_time = $_SESSION["dd_time"];
$s_no = null;
$coach_type = null;
$name = null;
$sex = null;
$name_err = null;
$age = null;
$sex_err = null;
$age_err = null;
$email = null;
$phone = null;
$email_err = null;
$phone_err = null;
$pnr_no = null;
$x = null;
$coach = null;
$coach_err = null;
$zz = null;
$fare = mt_rand(1000,2000);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";
   }
   else{
    $name = $_POST["name"];
   } 
     if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email id.";
    } else{
       $email = $_POST["email"];
       
    }
    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter a phone number.";
    }elseif(strlen(trim($_POST["phone"])) != 10){
        $phone_err = "Enter a valid phone number";
    } 
    else{
       $phone = $_POST["phone"];
    }
   
    if(empty(trim($_POST["age"]))){
        $age_err = "Please enter a password.";     
    } 
     else{
        $age = trim($_POST["age"]);
    }
    
    
    $radioVal = $_POST["sex"];
    if($radioVal == "M")
        $sex = "M";
    else if($radioVal == "F")
        $sex = "F";
    else
        $sex_err = "please select sex";
     
    $radioVal = $_POST["cc"];
    if($radioVal == "first")
        $coach = "first";
    else if($radioVal == "second")
        $coach = "second";
    else if($radioVal == "third")
        $coach = "third";
    else
        $coach_err = "please select sex";
   // echo $coach;
    // Check input errors before inserting in database
   // echo "fs";
    if(empty($name_err) && empty($age_err) && empty($sex_err) && empty($email_err) && empty($phone_err) && empty($coach_err) ){
       // echo "query_runing";
        // Prepare an insert
        
                    //$password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash


        $sql = "select seats,coach from `".$t_no."` where c_type = ".'"'.$coach.'"'." and seats <> 0 ;";
        //echo $sql;

        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
        
           // mysqli_stmt_execute($stmt);
            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) >= 1){   
               // echo "running";                 
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $s_no, $coach_type);

                    mysqli_stmt_fetch($stmt);
                    //'echo $s_no;
                    if($s_no > 0){
                        $sql = "INSERT INTO `pasanger` (`pnr_no`, `train_number`, `train_name`, `Coach`, `seat_no`, `fr`, `tt`, `b_time`, `d_time`, `Fare`, `name`, `sex`,`age`, `phone`, `email`, `status`, `date`, `user_name`) VALUES (NULL,".$t_no.",".'"'.$t_name.'"'.",".'"'.$coach_type.'"'.",".'"'.$s_no.'"'.",".'"'.$_SESSION["frr"].'"'.",".'"'.$_SESSION["ttt"].'"'.",".'"'.$b_time.'"'.",".'"'.$d_time.'"'.",".'"'.$fare.'"'.",".'"'.$name.'"'.",".'"'.$sex.'"'.",".'"'.$age.'"'.",".'"'.$phone.'"'.",".'"'.$email.'"'.",".'"'."CONFIRMED".'"'.",".'"'.$_SESSION["dat"].'"'.",".'"'.$_SESSION["username"].'"'.");";
                        //echo $sql;
                      

$sql2 = "select sta_name from `stations` where sta_code =".'"'.$_SESSION["frr"].'";';
                        $stmt3 = mysqli_prepare($link, $sql2);
                                mysqli_stmt_execute($stmt3);
                                
                                 mysqli_stmt_bind_result($stmt3, $frr);
                                 mysqli_stmt_fetch($stmt3);
                                 mysqli_stmt_close($stmt3);

$sql2 = "select sta_name from `stations` where sta_code =".'"'.$_SESSION["ttt"].'";';
                        $stmt3 = mysqli_prepare($link, $sql2);
                                mysqli_stmt_execute($stmt3);
                                
                                 mysqli_stmt_bind_result($stmt3, $ttt);
                                 mysqli_stmt_fetch($stmt3);
                                 mysqli_stmt_close($stmt3);


                        if($stmt2 = mysqli_prepare($link, $sql)){
                            if(mysqli_stmt_execute($stmt2)){

                                $xxx = $s_no - 1;
                                $sql = "update `".$t_no."` set seats = ".$xxx." where coach =".'"'.$coach_type.'"'." and seats =".$s_no.";";
                               // echo $sql;
                                $stmt3 = mysqli_prepare($link, $sql);
                                mysqli_stmt_execute($stmt3);
                                 mysqli_stmt_close($stmt3);
                                   $sql2 = "select pnr_no from `pasanger` order by pnr_no desc limit 1;";
                        $stmt3 = mysqli_prepare($link, $sql2);
                                mysqli_stmt_execute($stmt3);
                                
                                 mysqli_stmt_bind_result($stmt3, $pnr_no);
                                 mysqli_stmt_fetch($stmt3);
                                 mysqli_stmt_close($stmt3);

$_SESSION["frr"] = $frr;
$_SESSION["ttt"] = $ttt;
$_SESSION["t_no"] = $t_no;
$_SESSION["pnr_no"] = $pnr_no;
$_SESSION["t_name"] = $t_name;
$_SESSION["cc_type"] = $coach_type;
$_SESSION["s_no"] = $s_no;
$_SESSION["arr_tim"] = $b_time;
$_SESSION["dd_time"] = $d_time;
$_SESSION["fare"] = $fare;
$_SESSION["name"] = $name;
$_SESSION["sex"] = $sex;
$_SESSION["age"] = $age;
$_SESSION["phone"] = $phone;
$_SESSION["email"] = $email;


                                 header("location: confirm.php");
                            }
         }
          mysqli_stmt_close($stmt2);
                        }
                    }
                }
            } else{
                echo "Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }
         
        // Close statement
      
    
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.png" />
     <title>passanger</title>
    <style type="text/css">
        
        body, html {
  height: 100%;
}

.bg { 
  /* The image used */
  background-image: url("bb.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
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
     <a href=".'"'."#".'"'."class=".'"'."btn btn-outline-success my-2 my-sm-0".'"'. ">LOGINED AS ".strtoupper($_SESSION["username"])."</a> &nbsp &nbsp &nbsp &nbsp
     <a href=".'"'."reset-password.php".'"'."class=".'"'."btn btn-outline-warning my-2 my-sm-0".'"'. ">CHANGE PASSWORD</a> &nbsp &nbsp &nbsp &nbsp 
     <a href=".'"'."logout.php".'"'."class=".'"'."btn btn-outline-danger my-2 my-sm-0".'"'. ">LOGOUT</a> 
    </form>";
    }
    ?>
  </div>
</nav>
    <div class="row" style="margin:20px;" >
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:  #004080; color: white ;border-radius: 30px; opacity: 0.8;">
        <h2>SUBMIT YOUR DETAILS</h2>
        <p>Please fill this form to book your ticket.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Enter your name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($age_err)) ? 'has-error' : ''; ?>">
                <label>Enter your age</label>
                <input type="number" name="age" class="form-control" value="<?php echo $age; ?>">
                <span class="help-block"><?php echo $age_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>  
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone Number</label>
                <input type="tel" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>  
            <div class="form-group <?php echo (!empty($sex_err)) ? 'has-error' : ''; ?>">
                               <center> <label>Sex</label><br>

                <input type="radio" name="sex"  value="M"> <b>male</b> &nbsp
                <input type="radio" name="sex" value="F"> <b>female </b>
                
                <span class="help-block"><?php echo $sex_err; ?></span>
            </center>
            </div>
            <div class="form-group <?php echo (!empty($sex_err)) ? 'has-error' : ''; ?>">
                                <center><label>Select Class</label><br>
                <input type="radio" name="cc"  value="first"> <b>First Class</b> &nbsp
                <input type="radio" name="cc" value="second"> <b>Second Class</b>
                <input type="radio" name="cc" value="third"> <b>Third Class </b>

                <span class="help-block"><?php echo $sex_err; ?></span>
            </center>
            </div>
            <div class="form-group">
               <center> <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset"></center>
            </div>
           
        </form>
    </div> 
    <div class="col-md-4"></div>  
    </div> 
   
</body>
</html>