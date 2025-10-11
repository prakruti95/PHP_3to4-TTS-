<?php

    class A
    {
        public $name="tops tech";    
        public function __construct()
        {
            echo $this->name;
        }  
    }
    class B extends A
    {
         public function __destruct()
        {
             echo "Hi i am destruct a constructor";
        }  
    }


    $b = new B();
    
?>