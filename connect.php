<?php
    $con=new mysqli('localhost','root','','crudop');
    // if($con){
    //     echo "Connection Successful";
    // }
    // else{
    //     die(mysqli_error($con));
    // }
    if(!$con){
        die(mysqli_error($con));
    }
?>