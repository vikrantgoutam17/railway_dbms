<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
else if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
     $content .="<font size='3px' color='white'>PNR NUMBER: ".$_SESSION["pnr_no"]."<br>TRAIN NUMBER: ".$_SESSION["t_no"]."<br>TRAIN NAME: ".$_SESSION["t_name"]."<br>COACH: ".$_SESSION["cc_type"]."<br>SEAT NUMBER: ".$_SESSION["s_no"]."<br>FROM: ".$_SESSION["frr"]."<br>TO: ".$_SESSION["ttt"]."<br>DATE: ".$_SESSION["dat"]."<br>BOARDING TIME: ".$_SESSION["arr_tim"]."<br>DESTINATION TIME: ".$_SESSION["dd_time"]."<br>FARE:  Rs.".$_SESSION["fare"]."<br>PASSENGER NAME: ".$_SESSION["name"]."<br>PASSENGER SEX: ".$_SESSION["sex"]."<br>PASSENGER AGE: ".$_SESSION["age"]."<br>PHONE NUMBER: ".$_SESSION["phone"]."<br>EMAIL: ".$_SESSION["email"]."<br>status: CONFIRMED"."<br>USERNAME: ".$_SESSION["username"];
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>confirmation</title>
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
     <a href=".'"'."reset_password.php".'"'."class=".'"'."btn btn-outline-warning my-2 my-sm-0".'"'. ">CHANGE PASSWORD</a> &nbsp &nbsp &nbsp &nbsp 
     <a href=".'"'."logout.php".'"'."class=".'"'."btn btn-outline-danger my-2 my-sm-0".'"'. ">LOGOUT</a> 
    </form>";
    }
    ?>
  </div>
</nav>
    <div class="page-header">
        <br>
        <h1><b>YOU TICKET BOOKING WAS SUCCESSFUL.<b></h1>
    </div>

    <br>
   

        <div class="row" style="margin:20px;" >
    <div class="col-md-2"></div>
       <div class="col-md-8" style="background-color: #0052cc; border-radius: 30px; opacity: 0.8;">
   
     <p style="text-align:left; ">
       
        
        <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
        echo "<font size='3px' color='white'>PNR NUMBER: ".$_SESSION["pnr_no"]."<br>TRAIN NUMBER: ".$_SESSION["t_no"]."<br>TRAIN NAME: ".$_SESSION["t_name"]."<br>COACH: ".$_SESSION["cc_type"]."<br>SEAT NUMBER: ".$_SESSION["s_no"]."<br>FROM: ".$_SESSION["frr"]."<br>TO: ".$_SESSION["ttt"]."<br>DATE: ".$_SESSION["dat"]."<br>BOARDING TIME: ".$_SESSION["arr_tim"]."<br>DESTINATION TIME: ".$_SESSION["dd_time"]."<br>FARE:  &#8377;".$_SESSION["fare"]."<br>PASSENGER NAME: ".$_SESSION["name"]."<br>PASSENGER SEX: ".$_SESSION["sex"]."<br>PASSENGER AGE: ".$_SESSION["age"]."<br>PHONE NUMBER: ".$_SESSION["phone"]."<br>EMAIL: ".$_SESSION["email"]."<br>status: CONFIRMED"."<br>USERNAME: ".$_SESSION["username"];
        }
   ?>
    </p>
   <form  method="post">
           <div>
                <center><input type="submit" class="btn btn-success" value="DOWNLOAD TICKET" name="create_pdf" ></center>
            </div>
           
        </form>
</div>
<div class="col-md-2"></div>
  <br> <br>
   
</div>
 
</div>
</body>
</html>