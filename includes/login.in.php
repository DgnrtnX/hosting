<?php

if(isset($_POST[ 'sign-in' ])) {
    
    require 'server.php';
    
    $mailuid=$_POST['email'];
    $password=$_POST['password'];

    if(empty($mailuid) || empty($password)){
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else{
        $sql="SELECT * FROM login WHERE username=? OR email=?;";
        $stmt=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $pwdCheck=password_verify($password,$row['pass']);
                if($pwdCheck == false){
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                else if($pwdCheck == true){
                    session_start();
                    $_SESSION['userId']=$row['id'];
                    $_SESSION['userUid']=$row['username'];

                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
            }
            else{
                header("Location: ../login.php?error=nouser");
            exit();
            }
        }
    }
}
else{
    header("Location: ../login.php");
    exit();
}