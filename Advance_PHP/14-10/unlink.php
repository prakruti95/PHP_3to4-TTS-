<?php 
$file="test2.txt";
unlink($file);
if($file)
{
    echo "file removed from folders";
}

else 
{
    echo "something went wrong";
}

?>