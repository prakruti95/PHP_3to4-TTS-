<?php
    class Student
    {
           //data member
            public static $id;
            public static $name;
            public static $surname;

            public static function display()
            {
                echo "Your id is : ".self::$id;
                echo "<br>";
                echo "Your name is : ".self::$name;
                echo "<br>";    
                echo "Your surname is : ".self::$surname;
            }


    }

    Student :: $id = 101;
    Student :: $name = "Shabbir";    
    Student :: $surname = "Xyz";
    Student :: display();
?>