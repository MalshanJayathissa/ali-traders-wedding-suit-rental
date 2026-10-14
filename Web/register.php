<?php 
    require_once 'DBConn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="registyle.css">

    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <h1>Register Account</h1>
        <div>
            <form action="regiinsert.php" method="POST">
                <div class="container">
                    <label for="un">User Name</label>
                    <input type="text" id="un" name="un" placeholder="User Name"><br>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="E-mail"><br>
                    <label for="psw">Password</label>
                    <input type="Password" id="psw" name="psw" placeholder="Password"><br>
                    <label for="conpsw">Confirm Password</label>
                    <input type="Password" id="conpsw" name="conpsw" placeholder="Confirm Password"><br>
                </div>
                <div class="underui">
                    <input type="checkbox" name="chkbx">
                    <label>I agree to the <b>Terms of User<b></label><br>
                </div>
                
                <div class="container">
                    <button type="submit" id="regibtn" name="regibtn">Sign Up</button><br>
                </div>
                <div class="container">
                    <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "EmptyInputs"){
                                echo "<script> alert('Please Fill The All Form Details');</script>";
                            }
                            if($_GET["error"] == "unExist"){
                                echo "<script> alert('Already Has UserName Or Email');</script>";
                            }
                            if($_GET["error"] == "invalidEmail"){
                                echo "<script> alert('Please Enter The Valied Email');</script>"; 
                            }
                            if($_GET["error"] == "notpswMatch"){
                                echo "<script> alert('Did Not Match The Password');</script>";
                            }
                            if($_GET["error"] == "terms"){
                                echo "<script> alert('You Did Not Agree Our <b>Terms of User</b>');</script>";
                            }
                        }
                    ?>
                </div>
                <p class="underregibtn">Already have an Account ? &nbsp;&nbsp;&nbsp;<a href="login.php" class="underregibtnp">Log In</a></p>
               
            </form>
        </div>
    </div>
</body>
</html>
   