<?php
    class Student
    {
           //data member
            // public $id;
            // public $name;
            // public $surname;

            public function display($id,$name,$surname)
            {
                echo "Your id is : ".$id;
                echo "<br>";
                echo "Your name is : ".$name;
                echo "<br>";    
                echo "Your surname is : ".$surname;
            }


    }

    //object

    $s1 = new Student();
    $s1->display(101,"Shabbir","Xyz");
    $s2 = new Student();
    $s2->display(102,"Faizan","Xyz");
?>