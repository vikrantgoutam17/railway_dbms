<?php
require_once "cong.php";
$username = null;
$password = null;
$username_err = null;
$confirm_password = null;
$password_err = null;
$confirm_password_err = null;
$email = null;
$phone = null;
$email_err = null;
$phone_err = null;
$x = null;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
   } else{
         $x = trim($_POST["username"]);
        $sql = "SELECT * FROM user WHERE user_name = "."'".$x."'".';';
       
        $stmt = mysqli_prepare($link, $sql);
      
        if($stmt = mysqli_prepare($link, $sql)){
            if(mysqli_stmt_execute($stmt)){
                echo "running user";
                /* store result */
                mysqli_stmt_store_result($stmt);
              
                if(mysqli_stmt_num_rows($stmt) == 1){
                
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);

                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
             mysqli_stmt_close($stmt);
        }
         
       
    }
     if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email id.";
    } else{
        $x = trim($_POST["email"]);
       
        $sql = "SELECT * FROM user WHERE email = "."'".$x."'".';';
        
        if($stmt = mysqli_prepare($link, $sql)){
           
            if(mysqli_stmt_execute($stmt)){
                echo "running email";
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) >= 1){
                      echo "errrrrr";
                    $email_err = "This email id is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.email";
            }
             mysqli_stmt_close($stmt);
        }
         
       
       
    }
    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter a phone number.";
    }elseif(strlen(trim($_POST["phone"])) != 10){
        $phone_err = "Enter a valid phone number";
    } 
    else{
        $x = trim($_POST["phone"]);
       
        $sql = "SELECT * FROM user WHERE phone = ".$x.';';
      
        if($stmt = mysqli_prepare($link, $sql)){
            
            if(mysqli_stmt_execute($stmt)){
              echo "running phone";
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) >= 1){
                    $phone_err = "This phone number is already taken.";
                } else{
                    $phone = trim($_POST["phone"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.phonessssss";
            }
             mysqli_stmt_close($stmt);
        }
         
        
       
    }
   
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($phone_err)){
        echo "query_runing";
        // Prepare an insert
        echo $password;
                    //$password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash


        $sql = "INSERT INTO user (user_name, password, phone, email) VALUES ("."'".$username."'".','."'".$password."'".','.$phone.','."'".$email."'".');';

         echo $password;
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
        
           // mysqli_stmt_execute($stmt);
            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }
         
        // Close statement
      
    }
    
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
     <a href=".'"'."#".'"'."class=".'"'."btn btn-outline-success my-2 my-sm-0".'"'. ">LOGGED IN AS ".strtoupper($_SESSION["username"])."</a> &nbsp &nbsp &nbsp &nbsp
     <a href=".'"'."reset-password.php".'"'."class=".'"'."btn btn-outline-warning my-2 my-sm-0".'"'. ">CHANGE PASSWORD</a> &nbsp &nbsp &nbsp &nbsp 
     <a href=".'"'."logout.php".'"'."class=".'"'."btn btn-outline-danger my-2 my-sm-0".'"'. ">LOGOUT</a> 
    </form>";
    }
    ?>
  </div>
</nav>
     <div class="row" style="margin:20px;" >
    <div class="col-md-4"></div>
       <div class="col-md-4" style="background-color:  #004080; color: white; border-radius: 30px; opacity: 0.8; ">

        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>  
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone Number</label>
                <input type="number" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>  
            <div class="form-group">
                <center>
                <input type="submit" class="btn btn-outline-success" value="Submit">
                &nbsp &nbsp
                <input type="reset" class="btn btn-outline-warning" value="Reset"></center>
            </div>
            <p>Already have an account? <a href="login.php" style="color: red">Login here</a>.</p>
        </form>
    </div>
 </div>
   
    <div class="col-md-4"></div>  </body>
</html>