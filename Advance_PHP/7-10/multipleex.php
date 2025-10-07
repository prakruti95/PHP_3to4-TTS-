<?php

    class A
    {
        public function a()
        {
            echo "A called";
        }
    }

     class B
    {
        public function b()
        {
            echo "B called";
        }
    }

     class C extends A,B
    {
        public function c()
        {
            echo "C called";
        }
    }
?>