<?php
require_once "cong.php";
session_start();
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
if($_SESSION["loggedin"] == false){
    header("location: login.php");
}
else{
$pnr = array();
$date = array();
$t_no = array();
$coach = array();
$sno = array();
$n = null;

$sql = "select pnr_no,train_number,date,Coach,seat_no from `pasanger` where user_name=".'"'.$_SESSION["username"].'"'.";";
// $sql;
if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
        
           // mysqli_stmt_execute($stmt);
            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);
                  $n =  mysqli_stmt_num_rows($stmt);
                for($i = 0; $i < $n; $i++){
                 mysqli_stmt_bind_result($stmt, $pnr[$i], $t_no[$i], $date[$i], $coach[$i], $sno[$i]);
                    mysqli_stmt_fetch($stmt);
                    }
            } else{

                echo "Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }
      $_SESSION["pnrd"] = $pnr;
      $_SESSION["t_nod"] = $t_no;
      $_SESSION["dated"] = $date;
      $_SESSION["coachd"] = $coach;      
      $_SESSION["sno"] = $sno;
      $_SESSION["no"] = $n;
      //echo $n;
header("location: cancel.php");

}
?>