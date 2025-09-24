<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $num = $_POST["number"];
      
         $ldigit = $num%10;
        
        while($num>0)
        {
            if($num>9)
            {
                $num = (int) $num/10;
            }
            else
            {
                $fdigit = $num;
                echo $fdigit;
                $num = (int) $num/10;
            }
        }

        
        echo "First digit is: ".$fdigit;
        echo "Last digit is: ".$ldigit;


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">

<p>
    Enter Number:<input type="text" name ="number"/>
</p>
<p>
  <input type="submit" value="submit"/>
</p>



</form>
    
</body>
</html>