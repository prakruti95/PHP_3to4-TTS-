<?php

class Emp
{
    public static $name;
    public static $surname;
   
    public static function display()
    {
      echo "Name: " . self::$name . "<br>";
      echo "Surname: " . self::$surname . "<br>";

     
    }

}

Emp::$name = "khushi";
Emp::$surname="xyz";
Emp::display();

?>