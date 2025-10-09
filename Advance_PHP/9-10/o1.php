<?php
class A 
{
    function display($a, $b) 
    {
        echo "Addition is: " . ($a + $b);
    }
}

class B extends A 
{
    function multiply($x, $y, $z) 
    {
        echo "Multiplication is: " . ($x * $y * $z);
    }

    function callParentAddition($a, $b) 
    {
        parent::display($a, $b);//
    }
}

$obj = new B();

$obj->multiply(2, 3, 4); // Output: Multiplication is: 24
echo "<br>";
$obj->callParentAddition(10, 20); // Output: Addition is: 30
?>
