 session_start();
                            
                            // Store data in session variables
                            
                            $_SESSION["tf"] = $st_code;
                             $_SESSION["t_no"] = $t_no1;
                              $_SESSION["arr_time"] = $arr_time;
                               $_SESSION["dept_time"] = $dept_time;                            
                             $_SESSION["frr"] = $frr;
                             $_SESSION["ttt"] = $ttt;
                             $_SESSION["n"] = $z;

                            // Redirect user to welcome page
                            header("location: booking.php");