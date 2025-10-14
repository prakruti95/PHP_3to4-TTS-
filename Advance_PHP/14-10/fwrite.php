<?php

$file = fopen("tops.txt","w") or die('File does not exist');
$txt="Tops Technologies Rajkot - PHP Batch";
fwrite($file,$txt);
fclose($file);




?>