<?php

class A
{
     public $nm;
    public $ag;

    public function __construct($name,$age)
    {
         $this->nm=$name."<br>";
         $this->ag=$age."<br>";
    }
    //set
     public function setAge($a)
    {
        $this->a=$a;  
    }

    public function display()
    {
        echo  "welcome ".$this->nm."<br/>";  
          //get  
        return $this->ag - $this->a; 
    }
}

$a = new A("tops","15");
//$a->setAge(3);
echo "You are :".$a->display()."Years Old";

?>