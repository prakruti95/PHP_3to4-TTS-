<?php
 
 class Emp
 {
    public static $count = 0;

    public function __construct()
    {
           self::$count++;
           echo self::$count;
    }

    // public function data()
    // {
    //         echo "Hii";
    // }
 }

$e1 = new Emp();
echo "<br>";
$e2 = new Emp();

echo "<br>";
$e3 = new Emp();

echo "<br>";
 $e4 = new Emp();



?>