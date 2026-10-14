<?php 
    require_once 'DBConn.php';
    require_once 'function.php';

        if(isset($_POST['delibtn'])){

            $name=$_POST['name'];
            $email=$_POST['email'];
            $dis=$_POST['dis'];
            $contact=$_POST['contact'];
            $address=$_POST['address'];

            $emptyInput=emptyInputdetls($name,$email,$dis,$contact,$address);
            $invalidEmail=invalidEmaildetls($email);
            $unExist=unExistdetls($conn,$email);

            if($emptyInput !== false){
                header("Location:userDetails.php?error=EmptyInputs");
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
            
            $sql="INSERT INTO `user_details`(`name`, `address`, `district`, `contact_no`, `email`) VALUES ('$name','$address','$dis','$contact','$email');";
            mysqli_query($conn,$sql); 

            header("Location:FirstPage.php?error=noneDelivery");

            exit();
        }
        else{
            header("Location:userDetails.php?error=");
        }
