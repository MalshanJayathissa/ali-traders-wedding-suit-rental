<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="logstyle.css"> 
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <h1>Login</h1>
        <p class="underh1">please fill in all details</p>
        <div>
            <form action="loginsert.php" method="POST">
                <div class="container">    
                    <label for="un">User Name</i></label>
                    <input type="text" id="un" name="un" placeholder="UserName OR Email"><br>
                    <label for="psw">Password </label>
                    <input type="password" id="psw" name="psw" placeholder="Password"><br>
                </div> 
                <div class="container">
                    <button class="logbtn" type="submit" name="submit">Log In</button><br>
                </div>  
            </form>
            <div class="container">
                    <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyInput"){
                                echo "<script> alert('Please Fill The All Form Details');</script>";
                            }
                            if($_GET["error"] == "Wronglogininputs"){
                                echo "<script> alert('Wroung Login Details');</script>";
                            }
                        }
                    ?>
                </div>
            <div>
                <p class="underlgbtn">Don't have an account?&nbsp;&nbsp;&nbsp;<a href="register.php" class="underlgbtnp">Register</a></p>     
            </div>
        </div>
    </div>
</body>
</html>