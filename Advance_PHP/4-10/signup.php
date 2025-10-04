<?php

    include('connect.php');

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];


    if($name=="" && $surname=="" && $email=="" && $pass=="")
    {
        echo '0';
    }
    else
    {
        
    $sql ="insert into users (name,surname,email,password) values ('$name','$surname','$email','$pass')";
    mysqli_query($con,$sql);
    }
 

?>