<?php
    class Student
    {
           //data member
            public $id;
            public $name;
            public $surname;

            public function display()
            {
                echo "Your id is : ".$this->id;
                echo "<br>";
                echo "Your name is : ".$this->name;
                echo "<br>";    
                echo "Your surname is : ".$this->surname;
            }


    }

    //object

    $s1 = new Student();
    $s1->id=101;
    $s1->name="Shabbir";
    $s1->surname="Xyz";
    $s1->display();
    
    $s2 = new Student();
    $s2->id=102;
    $s2->name="Faizan";
    $s2->surname="Xyz";
    $s2->display();
?>