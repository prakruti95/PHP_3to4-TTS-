<?php

class Person
{
        public $public="I am Public";
        private $private="I am Private";
        protected $protected="I am protected";


        public function display()
        {
             echo $this->public."<br>";
             echo $this->private."<br>";
             echo $this->protected."<br>";
        }

}

$p = new Person();
$p->display();
//echo $p->public."<br>";  //public will accessible
//echo $p->private."<br>"; // not assessible error
//echo $p->protected."<br>"; // not assessible error

?>