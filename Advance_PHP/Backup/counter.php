<?php
 
 class Counter
 {
    public static $count = 0;

    public function __construct()
    {
        self::$count++;
        echo self::$count;

    }

 }

 $c1 = new Counter();
 echo "<br>";
 $c2 = new Counter();
 echo "<br>";
 $c3 = new Counter();

?>