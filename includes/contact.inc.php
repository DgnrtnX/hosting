<?php
if(isset($_POST['contact'])){
    require 'server.php';

    $username=$_POST['name'];
    $email=$_POST['email'];    
    
    $sql="INSERT INTO `info` (`Name`,Email) VALUES(?,?)";
    $statement=mysqli_stmt_init($conn);
     
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("Location: ../index.php?error=sqlerror");
        exit();
    }

    else{
        mysqli_stmt_bind_param($statement,"ss",$username,$email);
        mysqli_stmt_execute($statement);   
        header("Location: ../index.php?thankyou");
        exit();
    }
    
    mysqli_stmt_close($statement);
    mysqli_close($conn);
}

else{
    header("Location: ../index.php");
    exit();
}