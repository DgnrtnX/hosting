<?php
if(isset($_POST['sign-up'])){
    require 'server.php';

    $username=$_POST['Name'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $passwordRep=$_POST['Password-rep'];


    if(empty($username) || empty($email) || empty($password) || empty($passwordRep)){
        header("Location: ../login.php?error=emptyfields&Name=".$username."&mail=".$email);
        exit();
    }
    
    elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../login.php?error=invalidname&email=".$email);
        exit();
    }

    elseif($password !== $passwordRep){
        header("Location: ../login.php?error=checkpassword&Name=".$username."&email=".$email);
        exit();
    }

    else{
        $sql="SELECT username FROM login WHERE username=?";
        $statement=mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($statement,$sql)){
            header("Location: ../login.php?error=sqlerror");
            exit();
        }

        else{
            mysqli_stmt_bind_param($statement,"s",$username);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            $result=mysqli_stmt_num_rows($statement);

            if($result>0){
                header("Location: ../login.php?error=usertaken");
                exit();
            }

            else{
                $sql="INSERT INTO login (username,email,pass) VALUES(?,?,?)";
                $statement=mysqli_stmt_init($conn);
             
                if(!mysqli_stmt_prepare($statement,$sql)){
                    header("Location: ../login.php?error=sqlerror");
                    exit();
                }

                else{
                    $hashpass=password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($statement,"sss",$username,$email,$hashpass);
                    mysqli_stmt_execute($statement);   
                    header("Location: ../login.php?signup=success");
                    exit();
                }
       
            }
        
        }
    mysqli_stmt_close($statement);
    mysqli_close($conn);
    }

}
else {
    header("Location: ../login.php");
    exit();
}