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
    function display($x, $y, $z = null) 
    {
        if ($z === null) 
            {
                // Call parent display if only 2 arguments passed
                parent::display($x, $y);
            } else {
            echo "Multiplication is: " . ($x * $y * $z);
        }
    }
}

$obj = new B();

$obj->display(2, 3, 4); // Output: Multiplication is: 24
echo "<br>";
$obj->display(10, 20,30);  // Output: Addition is: 30
?>
