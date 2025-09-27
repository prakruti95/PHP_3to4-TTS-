<?php
session_start(); // Start the session again to access $_SESSION data

if (isset($_SESSION['username'])) 
    {
    echo "Logged in as: " . $_SESSION['username'] . "<br>";

    if (isset($_COOKIE['last_login'])) {
        echo "Last login was at: " . $_COOKIE['last_login'];
    } else {
        echo "No previous login time found.";
    }
}
 else 
{
    echo "You are not logged in.";
}
?>
