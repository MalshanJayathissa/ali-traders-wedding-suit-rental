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

    <link rel="stylesheet" href="userDetails.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
        <h1>Details Form</h1>
        <div>
            <form action="detailsinsert.php" method="POST">
                <div class="container">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name"><br>
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="Address"><br>
                    <label for="dis">District</label>
                    <input type="text" id="dis" name="dis" placeholder="District"><br>
                    <label for="conpsw">Contact No</label>
                    <input type="text" id="contact" name="contact" placeholder="Contact No"><br>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="E-mail"><br>
                </div>
                
                <div class="container">
                    <button type="submit" id="delibtn" name="delibtn">Cash on Delivery</button><br>
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
                            if($_GET["error"] == "none"){
                                echo "<script> alert('Delivery Successful');</script>";
                            }
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>