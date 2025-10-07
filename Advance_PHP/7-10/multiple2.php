<?php

    trait A
    {
        public function display1() 
        {
                echo "A";
        }
    }
    trait B
    {
        public function display2() 
        {
              echo "B";
        }
    }
     trait D
    {
        public function display3() 
        {
              echo "D";
        }
    }
    class C
    {
        use A,B,D;
    }

    $obj=new C();
    $obj -> display1();
    $obj -> display2();
    $obj -> display3();
?>