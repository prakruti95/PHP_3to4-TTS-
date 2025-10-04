<?php

    include('connect.php');
   
    $upload_path = 'images/';
    $upload_url = 'https://'.$_SERVER['SERVER_NAME'] . "/php-3to4/Advance_PHP/4-10/" . $upload_path;
   
    $category_name = $_REQUEST['category_name'];
    //$category_name = $_REQUEST['category_img'];

    $fileinfo = pathinfo($_FILES["category_img"]["category_name"]);

    $extension = $fileinfo["extension"];

    $random = 'image_' . rand(1000,9999);

    $file_url = $upload_url . $random . '.' . $extension;

    $file_path = $upload_path . $random . '.'. $extension;

    $profile_pic = "localhost/php-3to4/Advance_PHP/4-10/";

    move_uploaded_file($_FILES["profile_pic"]["tmp_name"],$file_path);

    $insert = "INSERT INTO category (category_name,category_img) VALUES ('$category_name','$profile_pic$file_path')";
    $result=mysqli_query($con,$insert);
   

  
 

?>