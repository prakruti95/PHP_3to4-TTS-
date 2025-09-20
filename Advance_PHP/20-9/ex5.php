<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $num = $_POST["number"];//1234
        $max = 0;

        while($num>0)
        {
            $rem = $num%10;//1234
            if($rem>$max)
            {
                $max = $rem;
            }
            $num = (int) $num/10;
            
        }
        echo "Largest Digit is: ".$max;
         


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