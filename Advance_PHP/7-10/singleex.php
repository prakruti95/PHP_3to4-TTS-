<?php

class A
{
   
    public function a()
    {
            echo "A called";
    }
}

class B extends A
{
    public function b()
    {
            echo "B called";
    }
}

$obj2 = new B();

$obj2->a();
echo "<br>";
$obj2->b();
?>