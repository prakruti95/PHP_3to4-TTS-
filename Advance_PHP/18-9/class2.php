<?php

    class Emp
    {
        public function displaydetail($name,$surname,$email,$password,$mobile)
        {
                echo "<br>----------------";
                echo "Name is ".$name;
                echo "Surname is ".$surname;
                echo "Email is ".$email;
                echo "Mobile is ".$mobile;
                echo "Password is ".$password;
                echo "<br>----------------";
        }
    }

    $e1 = new Emp();
    $e1->displaydetail("a","a","a@gmail.com","1234","9999999999");

     $e2 = new Emp();
    $e2->displaydetail("b","a","a@gmail.com","1234","9999999999");

     $e3 = new Emp();
    $e3->displaydetail("c","a","a@gmail.com","1234","9999999999");

     $e4 = new Emp();
    $e4->displaydetail("d","a","a@gmail.com","1234","9999999999");

     $e5 = new Emp();
    $e5->displaydetail("e","a","a@gmail.com","1234","9999999999");



?>