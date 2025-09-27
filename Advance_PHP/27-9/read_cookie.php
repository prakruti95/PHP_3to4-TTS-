<?php
if (isset($_COOKIE["user"])) 
{
    echo "Welcome back, " . $_COOKIE["user"] . "!<br>";
}
 else 
    {
    echo "User cookie not found.<br>";
}

if (isset($_COOKIE["visit_time"])) 
{
    echo "Your last visit was on: " . $_COOKIE["visit_time"];
} 
else 
{
    echo "Visit time not available.";
}
?>
