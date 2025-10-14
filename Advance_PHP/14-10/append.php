<?php 
$file=fopen("test1.txt","a") or die('File is not exist');

if($file)
{
    echo "file opened successfully";
    $txt="Tops Technologies Rajkot - PHP Batch";
    fwrite($file,$txt);
    fclose($file);
}
else 
{
    echo "something went wrong";
}

?>