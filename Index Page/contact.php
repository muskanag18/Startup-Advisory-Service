<?php
 $insert = false;
 $not_insert = false;
 if(isset($_POST['name']))
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
    $subject=  $_POST['subject'];
    $message=  $_POST['message'];

    $sql= "INSERT INTO `contact`.`contact_form` (`Name`, `Email`, `Subject`, `Message`, `Date`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";

    // echo $sql;

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

