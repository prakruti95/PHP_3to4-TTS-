<?php

//class creation
class Student
{
    //data memebers
    public $name;
    public $surname;  

    //function//method
    public function displayinfo()
    {

       
         
         echo $name." ".$surname."<br>";
         
       
    }

}

//object creation
$s1 = new Student();
$s1->displayinfo("vivek","xyz");

$s2 = new Student();
$s2->displayinfo("harsh","xyz");

$s3 = new Student();
$s3->displayinfo("bhargav","xyz");
?>