<?php


$file=fopen("tops.txt","r") or die('file does not exist');

echo fread($file,500);

?>