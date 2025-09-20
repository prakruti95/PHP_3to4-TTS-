<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $num = $_POST["number"];
        $sum = 0;
        while($num>0)
        {
               $rem = $num%10;
               $sum+=$rem;
               $num=$num/10;

        }
        echo "Sum of all digits are :".$sum;


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