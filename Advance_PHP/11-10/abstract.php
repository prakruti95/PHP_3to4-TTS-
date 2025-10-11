<?php

  
 abstract class A 
{
    public function display()
    {
        $name="hi i am sumeet"."<br>";
        echo $name;
    }

    public abstract function a2();
}

 class B extends A
{
    public function display2()
    {
        $name="hi i am sumeet2"."<br>";
        echo $name;
    }
    public function a2()
    {
        $name="hi i am sumeet2"."<br>";
        echo $name;
    }
}


$b = new B();
$b->display();
$b->display2();

?>