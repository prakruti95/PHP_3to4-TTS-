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
class P2 extends Person
{
        public function display2()
        {
             echo $this->public."<br>";
             echo $this->private."<br>";
             echo $this->protected."<br>";
        }

}

$p = new P2();
$p->display2();
//echo $p->public."<br>";  //public will accessible
//echo $p->private."<br>"; // not assessible error
//echo $p->protected."<br>"; // not assessible error

?>