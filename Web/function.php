<?php

    function emptyInputRegi($un,$email,$psw,$conpsw){
        $result;
        if(empty($un) || empty($email) || empty($psw) || empty($conpsw)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function invalidEmailRgi($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function notpswMatchRegi($psw,$conpsw){
        $result;
        if($psw !== $conpsw){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function unExistRegi($conn,$un,$email){
        $sql="SELECT * FROM register WHERE user_name=? OR email=? ;";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:register.php?error=statementFaild");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $un, $email);
        mysqli_stmt_execute($stmt);

        $resultData=mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            return false;
        }
        mysqli_stmt_close($stmt);
    }
    function emptyInputLog($un,$psw){
        $result;
        if(empty($un) || empty($psw)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function checkUnPswLog($conn,$un,$psw){
        $details=unExistRegi($conn,$un,$un);

        if($details === false){
            header("Location:login.php?error=Wronglogininputs");
            exit();
        }
        $hashPsw=$details["password"];
        $checkPsw=password_verify($psw,$hashPsw);

        if($checkPsw === false){
            header("Location:login.php?error=Wronglogininputs");
            exit();
        }else if($checkPsw === true){
            session_start();
            $_SESSION["usernm"] = $details["user_name"];
            $_SESSION["useremail"] = $details["email"];
             header("Location:FirstPage.php?error=noneLogin");
            exit();
        }
    }
    function emptyInputdetls($name,$email,$dis,$contact,$address){
        $result;
        if(empty($name) || empty($email) || empty($dis) || empty($contact) || empty($address)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function unExistdetls($conn,$email){
        $sql="SELECT * FROM user_details WHERE email=? ;";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:userDetails.php?error=statementFaild");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData=mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            return false;
        }
        mysqli_stmt_close($stmt);
    }
    function invalidEmaildetls($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    