<?php

$conn = mysqli_connect("localhost","root","","test") or die("connection feild");

if(isset($_POST['sname']) && isset($_POST['lname'])){
   
    $fname =  mysqli_real_escape_string($conn,$_POST['sname']);

    $lname =  mysqli_real_escape_string($conn,$_POST['lname']);

    $sql = "INSERT INTO students(first_name, last_name) VALUES ( '{$fname}' , '{$lname}' ) ";
    if(mysqli_query($conn,$sql)){
        echo $fname.""."You are Data Saved";
    }

}else{
    echo "Record Not Inserted";
}