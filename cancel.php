<?php
require_once "cong.php";
session_start();
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);


  $pnr = $_SESSION["pnrd"];
  $t_no = $_SESSION["t_nod"];
  $date = $_SESSION["dated"];
  $coach = $_SESSION["coachd"];      
  $sno =  $_SESSION["sno"];
   $n =  $_SESSION["no"];
      $radioVal = null;
     if($n == 0){
      echo '<script type="text/javascript">',
     ' window.alert("NO TICKETS HAS BEEN BOOKED");',
     'window.location= "project.php"
     </script> 

     '
;
//header("location: project.php");
     }
      if(empty($_POST["MyRadio"]));
        else{
          $radioVal = $_POST["MyRadio"];
      for($i = 1; $i <= $n; $i++){

if($radioVal == ($i))
{//echo $i;
   $sql = "delete from `pasanger` where pnr_no = ".$pnr[$i-1].";";
   //echo $sql;
$stmt2 = mysqli_prepare($link, $sql);
mysqli_stmt_execute($stmt2);
              mysqli_stmt_close($stmt2);
$sql = "update ".'`'.$t_no[$i-1].'`'." set seats = ".$sno[$i-1]." where coach = ".'"'.$coach[$i-1].'"'.";";
//echo " ".$sql;
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_execute($stmt);
              mysqli_stmt_close($stmt);
              echo '<script type="text/javascript">',
     ' window.alert("TICKET HAS BEEN CANCELED SUCCESSFULLY");',
     'window.location= "project.php"

     </script>'
;

}

}
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
              <h1 class="card-title" style="margin-top:20px; font-weight:bold; font-family: Lucida Bright, Georgia, serif;"> <center>BOOK YOUR TICKETS</center></h1>
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

  <div style="background-color:#ccccb3">
<div class="row" style="margin:10px;">

<div class ="col-md-1"></div>
  <div style="background-color:#a6a6a6;border:1px solid #dcdcd6;margin:10px;padding:5px; border-radius: 30px" class="col-md-10">
<div style=" background-color:#ccccb3; margin:20px; padding:10px; font-family: Lucida Bright, Georgia, serif;border:1px solid black; border-radius: 30px">
	<h4 style="margin-left:10px; color: red"><center><u> YOU HAVE BOOKED THESE TICKETS :</u></h4>
    <br>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      
                            <?php
for($i = 0; $i < $n; $i++){
  $x = $i + 1;
     
  echo "&nbsp &nbsp <input type=".'"radio"'." name=".'"MyRadio"'." value=".'"'.$x.'"'.">"."&nbsp".$pnr[$i]."   ( TRAIN NUMBER :".$t_no[$i]." DATE :".$date[$i]." COACH : ".$coach[$i]." )<br><br>";
}
                            ?>
                                          <center>  <input type="submit" class="btn btn-primary" value="SUBMIT"></center>


</form>

</div>
</div>
<div class ="col-md-1"></div>
</div>
</div>
  </body>
 
</html>