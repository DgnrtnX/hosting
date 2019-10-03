<?php
if(isset($_POST['reg'])){
    require 'server.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $adhar=$_POST['adhar'];
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    $room=$_POST['room'];
    $nr=$_POST['nr'];
    $city=$_POST['city'];


    if(empty($name) || empty($email) || empty($contact) || empty($adhar) || empty($cin) || empty($cout) || empty($room) || empty($city) || empty($nr) ){
        header("Location: ../booking.php?error=emptyfields");
        exit();
    }
    
    elseif(!preg_match("/^[a-z A-Z]*$/",$name)){
        header("Location: ../booking.php?error=invalidname");
        exit();
    }
    elseif(strlen((string)$adhar)!=12){
        header("Location: ../booking.php?error=invalidaadhar");
        exit();
    }
    elseif(strlen((string)$contact)!=10){
        header("Location: ../booking.php?error=invalidcontact");
        exit();
    }
    elseif($cin > $cout ){
        header("Location: ../booking.php?error=invaliddate");
        exit();
    }


  
    else{
            $sql="INSERT INTO `register` (`name`,email,contact,adhar,cin,cout,room,nr,city) VALUES(?,?,?,?,?,?,?,?,?)";
            $statement=mysqli_stmt_init($conn);
             
            if(!mysqli_stmt_prepare($statement,$sql)){
                header("Location: ../booking.php?error=sqlerror");
                exit();
            }

            else{
                mysqli_stmt_bind_param($statement,"ssiisssis",$name,$email,$contact,$adhar,$cin,$cout,$room,$nr,$city);
                mysqli_stmt_execute($statement);   
                header("Location: ../index.php?booking=success");

                switch($city){
                    case chennai:
                                $sql="INSERT INTO `chennai` (`name`,email,contact,adhar,cin,cout,room,nr,city) VALUES(?,?,?,?,?,?,?,?,?)";
                                $statement=mysqli_stmt_init($conn);
                            
                                if(!mysqli_stmt_prepare($statement,$sql)){
                                    header("Location: ../booking.php?error=sqlerror");
                                    exit();
                                }
                    
                                else{
                                    mysqli_stmt_bind_param($statement,"ssiisssis",$name,$email,$contact,$adhar,$cin,$cout,$room,$nr,$city);
                                    mysqli_stmt_execute($statement);   
                                    exit();
                                }
                    break;

                    case delhi:
                                $sql="INSERT INTO `delhi` (`name`,email,contact,adhar,cin,cout,room,nr,city) VALUES(?,?,?,?,?,?,?,?,?)";
                                $statement=mysqli_stmt_init($conn);
                                
                                if(!mysqli_stmt_prepare($statement,$sql)){
                                header("Location: ../booking.php?error=sqlerror");
                                exit();
                                }
                    
                                else{
                                    mysqli_stmt_bind_param($statement,"ssiisssis",$name,$email,$contact,$adhar,$cin,$cout,$room,$nr,$city);
                                    mysqli_stmt_execute($statement);   
                                    exit();
                                }
                    break;

                    case goa:
                            $sql="INSERT INTO `goa` (`name`,email,contact,adhar,cin,cout,room,nr,city) VALUES(?,?,?,?,?,?,?,?,?)";
                            $statement=mysqli_stmt_init($conn);
                                
                            if(!mysqli_stmt_prepare($statement,$sql)){
                            header("Location: ../booking.php?error=sqlerror");
                            exit();
                            }
            
                            else{
                            mysqli_stmt_bind_param($statement,"ssiisssis",$name,$email,$contact,$adhar,$cin,$cout,$room,$nr,$city);
                            mysqli_stmt_execute($statement);   
                            exit();
                            }
                    
                    break;

                    case manali:
                                $sql="INSERT INTO `manali` (`name`,email,contact,adhar,cin,cout,room,nr,city) VALUES(?,?,?,?,?,?,?,?,?)";
                                $statement=mysqli_stmt_init($conn);
                            
                                if(!mysqli_stmt_prepare($statement,$sql)){
                                    header("Location: ../booking.php?error=sqlerror");
                                    exit();
                                }
                
                                else{
                                    mysqli_stmt_bind_param($statement,"ssiisssis",$name,$email,$contact,$adhar,$cin,$cout,$room,$nr,$city);
                                    mysqli_stmt_execute($statement);   
                                    exit();
                                    }
                    
                    break;

                    case mumbai:
                                $sql="INSERT INTO `mumbai` (`name`,email,contact,adhar,cin,cout,room,nr,city) VALUES(?,?,?,?,?,?,?,?,?)";
                                $statement=mysqli_stmt_init($conn);
                            
                                if(!mysqli_stmt_prepare($statement,$sql)){
                                header("Location: ../booking.php?error=sqlerror");
                                exit();
                                }
                
                                else{
                                    mysqli_stmt_bind_param($statement,"ssiisssis",$name,$email,$contact,$adhar,$cin,$cout,$room,$nr,$city);
                                    mysqli_stmt_execute($statement);   
                                    exit();
                                }
                    break;

                    case pune:
                                $sql="INSERT INTO `pune` (`name`,email,contact,adhar,cin,cout,room,nr,city) VALUES(?,?,?,?,?,?,?,?,?)";
                                $statement=mysqli_stmt_init($conn);
                            
                                if(!mysqli_stmt_prepare($statement,$sql)){
                                    header("Location: ../booking.php?error=sqlerror");
                                    exit();
                                }
                
                                else{
                                    mysqli_stmt_bind_param($statement,"ssiisssis",$name,$email,$contact,$adhar,$cin,$cout,$room,$nr,$city);
                                    mysqli_stmt_execute($statement);   
                                    exit();
                                }
                    
                    break;
                }

                // if($city == chennai){
                    
                // }


                // elseif($city == delhi){
                    
                // }
                        
                // elseif($city == goa){
                       
                // }

                // elseif($city == kolkata){
                        
                // }

                // elseif($city == mumbai){
                        
                // }

                // elseif($city == surat){
                        
                // }
                    
            }
            mysqli_stmt_close($statement);
            mysqli_close($conn);   
        }
}
else {
    header("Location: ../index.php?error");
    exit();
}