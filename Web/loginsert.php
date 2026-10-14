<?php

    session_start();

if(isset($_POST['submit'])){
    

    require_once 'DBConn.php';
    require_once 'function.php';

    $un=$_POST['un'];
    $psw=$_POST['psw'];

    $checkUnPsw=emptyInputLog($un,$psw);

    if($checkUnPsw !== false){
        header("Location:login.php?error=emptyInput");
        exit();
    }
    $_SESSION['username']=$un;
    
    checkUnPswLog($conn,$un,$psw);
}
else{
    header("Location:login.php");
    exit();
}