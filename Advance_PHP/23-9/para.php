<?php

class Emp
{
   

    public function __construct($id,$name,$surname)
    {
        echo "Your id is ".$id;
        echo "<br>";
        echo "Your Name is ".$name;
        echo "<br>";
        echo "Your Surname is ".$surname;
    }
}
$e1 = new Emp(101,"abcd","pqrs");//para constructor


?>