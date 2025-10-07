<?php

    class RBI
    {
        public function getInterestRate()
        {
            echo "0.00";
          
        }
    }
    class SBI extends RBI
    {
         public function getInterestRate()
        {
            echo "7.00";
        }
    }
    class ICICI extends RBI
    {
         public function getInterestRate()
        {
             echo "8.00";
        }
    }
    class AXIS extends RBI
    {
         public function getInterestRate()
        {
             echo "9.00";
        }
    }

    // $s1 = new SBI();
    // $i1 = new ICICI();
    // $a1 = new AXIS();

    // $s1->getInterestRate();
    // echo "<br>";
    // $i1->getInterestRate();
    // echo "<br>";
    // $a1->getInterestRate();

    $bank = new SBI();
    $bank->getInterestRate();

    $bank = new ICICI();
    $bank->getInterestRate();

    $bank = new AXIS();
    $bank->getInterestRate();


?>