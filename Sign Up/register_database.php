<?php
 $insert = false;
 $not_insert = false;

if(isset($_POST['name']))
//  if(isset($_POST['accept']))
 {
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection failed..".mysqli_connect_error());
    }
    // echo "Successful connecting";

    $name=  $_POST['name'];
    $email=  $_POST['email'];
    $phone_no=  $_POST['phone_no'];
    $password=  $_POST['password'];
    $website=  $_POST['website'];
    $accept=  $_POST['accept'];


    // $sql= "INSERT INTO `contact`.`contact_form` (`Name`, `Email`, `Subject`, `Message`, `Date`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";

    $sql="INSERT INTO `registration`.`signup` (`FULL NAME`, `EMAIL`, `PHONE NO.`, `PASSWORD`, `WEBSITE`, `DATE`,`CheckBox`) VALUES ('$name', '$email','$phone_no', '$password','$website', current_timestamp(),'$accept');";
    
    echo $sql;

    if($con->query($sql)== true){
        $insert = true;
        echo "successfully inserted";
    }
    // else{
    //     echo "ERROR : $sql <br> $con->error";
    //     $not_insert = true;

    // }
    $con->close();
 } 
?> 

