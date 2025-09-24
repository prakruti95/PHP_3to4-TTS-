<?php
class Tops
{

    public function __construct($id,$name)
    {
        echo $id;
        echo "<br>";
        echo $name;
    }

    public function display()
    {
        echo "data";
    }
}

$a1 = new Tops(101,"shabbir");



?>