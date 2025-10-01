<?php

include('connect.php');

$id = $_POST["id"];
$pname = $_POST["p_name"];
$pprice = $_POST["p_price"];

$sql = "update products set p_name='$pname',p_price ='$pprice' where id = '$id'";
mysqli_query($con,$sql);

if(mysqli_query($con,$sql))
{
    echo 'Updated Successfully';
}
else
{
    echo 'Something Went Wrong';
}





?>