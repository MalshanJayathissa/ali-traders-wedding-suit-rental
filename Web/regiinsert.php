<?php 
    require_once 'DBConn.php';
    require_once 'function.php';
    if(isset($_POST['chkbx'])){
        if(isset($_POST['regibtn'])){

            $un=$_POST['un'];
            $email=$_POST['email'];
            $psw=$_POST['psw'];
            $conpsw=$_POST['conpsw'];
            $btn=$_POST['btn'];

            $emptyInput=emptyInputRegi($un,$email,$psw,$conpsw);
            $invalidEmail=invalidEmailRgi($email);
            $notpswMatch=notpswMatchRegi($psw,$conpsw);
            $unExist=unExistRegi($conn,$un,$email);

            if($emptyInput !== false){
                header("Location:register.php?error=EmptyInputs");
                exit();
            }
            if($unExist !== false){
                header("Location:register.php?error=unExist");
                exit();
            }
            if($invalidEmail !== false){
                header("Location:register.php?error=invalidEmail");
                exit();
            }
            if($notpswMatch !== false){
                header("Location:register.php?error=notpswMatch");
                exit();
            }
            
            $hashpsw=password_hash($psw, PASSWORD_DEFAULT);
            $sql="INSERT INTO `register` (`user_name`, `email`, `password`) VALUES ('$un', '$email', '$hashpsw');";
            mysqli_query($conn,$sql);  
            echo "<script> alert('Register Successful');</script>";
            header("Location:login.php?error=none");
            exit();
        }
        else{
            header("Location:register.php?error=");
        }
    }
    else{
        header("Location:register.php?error=terms");
        exit();
    }

