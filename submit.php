<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //retrieve data
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    //display submitted data
    echo "Name: ".$name."<br>";
    echo "Email: ".$email."<br>";
    echo "Message: ".$message."<br>";
}
?>