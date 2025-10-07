<?php

    class A
    {
        public function a()
        {
            echo "A Called";
        }
    }
    class B extends A
    {
        public function b()
        {
            echo "B Called";
        }
    }
    trait C 
    {
        public function c()
        {
            echo "C Called";
        }
    }
    class D extends B
    {
        use C;
        public function d()
        {
            echo "D Called";
        }
    }

    $d = new D();
    $d->a();
    $d->b();
    $d->c();
    $d->d();

?>