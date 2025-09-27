<?php
session_start(); 
date_default_timezone_set("Asia/Kolkata");
$_SESSION['username'] = "topstech";
setcookie("last_login", date("Y-m-d H:i:s"), time() + 3600);
echo "Welcome, " . $_SESSION['username']; 
?>