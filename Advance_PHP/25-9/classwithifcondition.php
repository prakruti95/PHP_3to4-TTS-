<?php

class Data
{
    public $name;
    public $marks;


    public function __construct($name,$marks)
    {
        $this->name = $name;
        $this->marks = $marks;
    }
    
    public function checkresult()
    {
        if($this->marks>=70)
        {
            echo "A Grade";
        }
        else if($this->marks>=60)
        {
            echo "B Grade";
        }
        else if($this->marks>=50)
        {
            echo "C Grade";
        }
        else if($this->marks>=40)
        {
            echo "D Grade";
        }
        else
        {
            echo "Fail";
        }
    }


}

$d1 = new Data("a","75");
$d1->checkresult();



?>