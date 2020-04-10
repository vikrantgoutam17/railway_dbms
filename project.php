<?php
require_once "cong.php";
session_start();
$fr = null;
$fr_err = null;
$tt = null;
$tt_err = null;
$datt = null;
$datt_err = null;
$x = null;
$t_no = array();
$frr = null;
$sql1 ="";
$ttt = null;
$t_no1 = array();
$st_code = array();
$arr_time = array();
$dept_time = array();
$y = null;
$z = 0;
$counter = 0;
$dat = date("Y-m-d");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["from"]))){
        $fr_err = "This Field Is Compulsory.";
   } else{
         $x = trim($_POST["from"]);
        $sql = "SELECT * FROM stations WHERE sta_name = "."'".$x."'".';';
       
        $stmt = mysqli_prepare($link, $sql);
      
        if($stmt = mysqli_prepare($link, $sql)){
            if(mysqli_stmt_execute($stmt)){
                //echo "running user";
                /* store result */
                mysqli_stmt_store_result($stmt);
              
                if(mysqli_stmt_num_rows($stmt) == 0){
                
                    $fr_err = "Not a valid station.";
                } else{
                    $fr = trim($_POST["from"]);

                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
             mysqli_stmt_close($stmt);
        }
         
       
    }
     if(empty(trim($_POST["to"]))){
        $tt_err = "This Field Is Compulsory.";
    } else{
        $x = trim($_POST["to"]);
       
        $sql = "SELECT * FROM stations WHERE sta_name = "."'".$x."'".';';
        
        if($stmt = mysqli_prepare($link, $sql)){
           
            if(mysqli_stmt_execute($stmt)){
                //echo "running email";
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 0){
                   //   echo "errrrrr";
                    $tt_err = "Not a valid station";
                } else{
                    $tt = trim($_POST["to"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.email";
            }
             mysqli_stmt_close($stmt);
        }
         
       
       
    }
     if(empty($_POST["dat"])){
        $datt_err = "This Field Is Compulsory.";
    } else{
        $datt= trim($_POST["dat"]);
        $eff = date("Y-m-d", strtotime("+3 months", strtotime(date("Y-m-d"))));
        
        if($datt > $eff)
          $datt_err = "Please insert valid date.";
        else if($datt < date("Y-m-d"))
           $datt_err = "Date is already passed.";
        }
        
         
       //header("location: project.php");
       if($fr == $tt && $tt !== null){
   
    echo '<script type="text/javascript">',
     ' window.alert("Both stations cannot be same");',
     '</script>'
;
   }
    else{
// Check input errors before inserting in database
    if(empty($fr_err) && empty($tt_err) && empty($datt_err) ){
       // echo "query_runing";
        // Prepare an insert
       
                    //$password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash


        $sql = "select sta_code from stations where sta_name = "."'".$fr."'".";";
       //echo $sql;
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
        
           // mysqli_stmt_execute($stmt);
            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $frr);
                    mysqli_stmt_fetch($stmt);
                   // echo $frr;
                } else{
                    // Display an error message if username doesn't exist
                    $fr_err = "Not a valid station.";
                }
            } else{
                echo "Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }
         
        // Close statement
           $sql = "select sta_code from stations where sta_name = "."'".$tt."'".";";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
        
           // mysqli_stmt_execute($stmt);
            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $ttt);
                    mysqli_stmt_fetch($stmt);
                    
                } else{
                    // Display an error message if username doesn't exist
                    $fr_err = "Not a valid station.";
                }
            } else{
                echo "Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }
          $sql = "select * from ((select train_number from `sta_train` where sta_code = "."'".$frr."'"." ) as `vv` NATURAL JOIN (select train_number from `sta_train` where sta_code="."'".$ttt."'".") as `kk`);";
//echo $sql;
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
        
           // mysqli_stmt_execute($stmt);
            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);
               
                // Check if username exists, if yes then verify password
                                
                    // Bind result variables
                  for($i = 0; $i < mysqli_stmt_num_rows($stmt); $i++){
                    mysqli_stmt_bind_result($stmt, $t_no[$i]);
                    mysqli_stmt_fetch($stmt);
                   // echo $t_no[$i];
}
if(mysqli_stmt_num_rows($stmt) > 0 ){
  $z = mysqli_stmt_num_rows($stmt);
  //echo $z;
      for($i = 0; $i < $z; $i++){
                    $sql1 = $t_no[$i];
                 

                   $sql2 = $sql1." and sta_code ="."'".$ttt."'";
                  $sql1 = $sql1." and sta_code ="."'".$frr."'";
                 
                 $sql = "(select * from `sta_train` where train_number = ".$sql1.") ";

                 $sql = $sql."union (select * from `sta_train` where train_number = ".$sql2."); ";
                 //echo $sql." ";
                       if($stmt2 = mysqli_prepare($link, $sql)){
            
            if(mysqli_stmt_execute($stmt2)){
               mysqli_stmt_store_result($stmt2);
                /* store result */
                
              
                 mysqli_stmt_bind_result($stmt2, $st_code[$i], $t_no1[$i], $arr_time[$i], $dept_time[$i]);
                    mysqli_stmt_fetch($stmt2);
                    if ($st_code[$i] = $frr){
                      mysqli_stmt_bind_result($stmt2, $x, $t_no1[$i], $y, $dept_time[$i]);
                    mysqli_stmt_fetch($stmt2);
                    $st_code[$i] = $st_code[$i]." -> ".$x;
                    }
                    else{
                       mysqli_stmt_bind_result($stmt2, $x, $t_no1[i], $arr_time[$i], $y);
                    mysqli_stmt_fetch($stmt2);
                    $st_code[$i] = $x." -> ".$st_code[$i];
                    }
                    // echo $dept_time[$i]." ".$arr_time[$i]." ";
                    if($dept_time[$i] > $arr_time[$i]){
                     
                          $counter++;
                            }
                        
            } else{
                echo "Oops! Something went wrong. Please try again later.phonessssss";
            }
             mysqli_stmt_close($stmt2);
        }
        $sql = null;
        $sql1 = null;
       
      }                        
          // echo $z;                 
            }
//echo $counter;
             if ($counter == 0 || $z==0){
               // echo $x; 
              echo '<script type="text/javascript">',
     ' window.alert("NO TRAINS AVAILABLE");',
     '</script>';
            }
            else{
              session_start();
                            
                            // Store data in session variables
                            
                            $_SESSION["tf"] = $st_code;
                             $_SESSION["t_no"] = $t_no1;
                              $_SESSION["arr_time"] = $arr_time;
                               $_SESSION["dept_time"] = $dept_time;                            
                             $_SESSION["frr"] = $frr;
                             $_SESSION["ttt"] = $ttt;
                             $_SESSION["n"] = $z;
                             $_SESSION["dat"] = $datt;

echo $_SESSION["dat"];
                            // Redirect user to welcome page
                           // header("location: booking.php");
                          // Redirect user to welcome page
                            header("location: booking.php");
}
               
            } else{
                echo "Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }
      
    }
    }
    // Close connection
    mysqli_close($link);
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.png" />
    <title>IRCTC</title>
	<style>
    .body{
  width:90%;
}
		li{
			padding:2px;
		}
		.card{
		border:0px;
		}
		.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel .item{
    min-height: 400px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto;
	#99004d
}
	</style>
  </head>
  <body style="background-color: #ccccb3">
  <section style="background-color:white">
  <div class="container">
    <div class="card">
      <div class="row">

        <div class="col-md-1" >
           <br>
            <center><img src="rail.webp" height="80"></center>
          </div>
         
          <div class="col-md-10">
            <br>
            <div class="card-block" >
              <h1 class="card-title" style="margin-top:20px; font-weight:bold; font-family: Lucida Bright, Georgia, serif;"> <center>WELCOME TO INDIAN RAILWAYS</center></h1>
            </div>
          </div>

<div class="col-md-1">
  <br>
            <center><img src="logo.png" height="80"></center>
 
          </div>

        </div>
      </div>
    </div>
<br>
  </section>

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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight:bold;font-family: Lucida Bright, Georgia, serif;">
         TRAINS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <a class="dropdown-item" href="#cc" style="font-weight:bold;font-family: Lucida Bright, Georgia, serif;">BOOK TICKETS</a>
          <a class="dropdown-item" href="pnr.php" style="font-weight:bold;font-family: Lucida Bright, Georgia, serif;">PNR ENQIRY</a>
          <a class="dropdown-item" href="process.php" style="font-weight:bold;font-family: Lucida Bright, Georgia, serif;">CANCEL TICKETS</a>
		  
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" style="font-weight:bold;font-family: Lucida Bright, Georgia, serif;">MEALS</a>
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
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="width:100%; height:500px">
      <img class="d-block w-100" src="first.jpg" alt="First slide" style="width:100% ;height:100%;">
    </div>
    <div class="carousel-item" style="width:100%; height:500px">
      <img class="d-block w-100" src="second.jpg" alt="Second slide" style="width:100% ;height:100%;">
    </div>
    <div class="carousel-item" style="width:100%; height:500px">
      <img class="d-block w-100" src="cc.jpg" alt="Third slide" style="width:100% ;height:100%;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  <div style="background-color:#ccccb3">
<div class="row" style="margin:10px;" id="cc">

<div class ="col-md-4"></div>
  <div style="background-color:#a6a6a6;border:1px solid #dcdcd6;margin:10px;padding:5px; border-radius: 30px" class="col-md-4">
<div style=" background-color:#ccccb3; margin:20px; padding:10px; font-family: Lucida Bright, Georgia, serif;border:1px solid black; border-radius: 30px">
	<h5 style="margin-left:10px;"><center> BOOK YOUR TICKET :</h5>
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div >
                
                <input type="text" name="from" class="form-control" placeholder="From" id="f" list="source" value="<?php echo $fr; ?>">
                <datalist id="source">
                   <option value="Allahabad">
                    <option value="New Delhi">
                  <option value="Dhanbad">
                    <option value="Howrah">
                      <option value="Kanpur">
                         <option value="Asansol">
                          <option value="Ranchi">
                    <option value="Tatanagar">
                      <option value="Balasore">
                        <option value="Bhubaneswar">
                          <option value="Bhadrak">
                            <option value="Barkakana">
                              <option value="Bhopal">
                                <option value="Chennai">
                                  <option value="Mumbai-CST">
                                    <option value="Cuttack">
                                      <option value="PT.DD Upadhyaya">
                                        <option value="DURG">
                                          <option value="GAYA">
                                            <option value="Gandhinahgar">
                                              <option value="Netaji SC Bose Gomoh">
                                                <option value="Gondia">
                                                  <option value="Jhanshi">
                                                    <option value="Koderma">
                                                        <option value="Muri">
                                                          <option value="Nagpur">
                </datalist>
                <span class="help-block" style="color: red;"> <?php echo $fr_err ?> </span>
               
                <center><button id="demo" onclick="myFunction()" type="button" style="width:15% ;height:10%; margin:8px;" class="btn btn-outline-primary"><img class="d-block w-100" src="arrow.png"></button>
                   </center>  
<script>
function myFunction() {
 var x = document.getElementById("f").value;
  var y = document.getElementById("t").value;
  document.getElementById("t").value = x;
  document.getElementById("f").value = y;
}


</script>


                <input type="text" name="to" class="form-control" placeholder="To" id="t" list="source"  value="<?php echo $tt; ?>">
               
                <span class="help-block" style="color: red;"> <?php echo $tt_err; ?> </span>
                  <br>
                  <br>
                  
                <input type="date" name="dat" class="form-control" value="" id="da"  value="<?php echo $datt; ?>">
                <span class="help-block" style="color: red;"> <?php echo $datt_err; ?> </span> 
                  <br>
            </div>    
            
            <div class="form-group">
                <center><input type="submit" class="btn btn-outline-primary" value="FIND TRAINS" ></center>
            </div>
           
        </form>
</div>
</div>
<div class ="col-md-4"></div>
</div>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
 
</html>
