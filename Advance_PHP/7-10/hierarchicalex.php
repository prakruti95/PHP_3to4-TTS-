<?php

    class Bank
    {
        public function bank()
        {
            echo "banking";
        }
    }

     class Current extends Bank
    {
        public function current()
        {
            echo "current";
        }
    }

     class Save extends Bank
    {
        public function save()
        {
            echo "saving";
        }
    }

    $c1 = new Current();
    $s1 = new Save();

    $c1 -> current();
    echo "<br>";
    $s1 -> save();
    echo "<br>";
    $s1 -> bank();


?>