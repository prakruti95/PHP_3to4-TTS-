<?php

class Emp
{
    public $name;
    public $surname;
   
    public function display()
    {
       echo "Name: " . $this->name . "<br>";
       echo "Surname: " . $this->surname . "<br>";

     
    }

}

$e1 = new Emp();
$e1->name = "a";
$e1->surname = "a";
$e1->display();
?>