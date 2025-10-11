<?php

    interface A
    {
        public function a();
       
    }
    
    interface B
    {
        public function b();
       
    }
    
    interface C
    {
        public function c();
       
    }

    class D implements A,B,C
    {
          public function a()
    {
        echo "Hi prakruti"."<br>";
    }

    public function b()
    {
        echo "Hi Deep"."<br>";
    }

    public function c()
    {
        echo "Hi Rahul"."<br>";
    }
    }

    $d = new D();
    $d->a();
    $d->b();
    $d->c();

?>