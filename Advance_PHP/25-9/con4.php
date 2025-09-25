<?php
class Data
{
    public $name;
    public $role;

    public function __construct($n="tops",$r="user")//default value
    {
        $this->name = $n;
        $this->role = $r;
    }

    public function display()
    {
         echo "Name: $this->name, Role: $this->role<br>";
    }


}

$d1 = new Data();
$d1->display();

$d2 = new Data("vivek","Admin");//overload
$d2->display();


?>