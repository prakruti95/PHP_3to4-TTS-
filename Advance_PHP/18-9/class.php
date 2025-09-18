<?php

//class creation
class Student
{
    //data memebers
    // public $name;
    // public $surname;  

    //function//method
    public function displayinfo($name,$surname)
    {

        //echo "success";
         
         echo $name." ".$surname."<br>";
         
         //echo $surname."<br>";
    }

    public function a()
    {
         echo $name." ".$surname."<br>";
    }

}

//object creation
$s1 = new Student();
$s1->displayinfo("vivek","xyz");
//$s1->a();

$s2 = new Student();
$s2->displayinfo("harsh","xyz");

$s3 = new Student();
$s3->displayinfo("bhargav","xyz");
?>