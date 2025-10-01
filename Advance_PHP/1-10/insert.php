<?php

 include('connect.php');

 $pname = $_POST["p_name"];
 $pprice = $_POST["p_price"];

 if($pname=="" && $pprice=="")
 {
    echo '0';
 }
 else
{
 $sql = "insert into products (p_name,p_price) values ('$pname','$pprice')";
 mysqli_query($con,$sql);
 mysqli_close($con);
}


?>