<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Information - OOP Example</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .container 
        {
            width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 8px 0 4px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 14px;
        }
        button {
            width: 100%;
            background: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            background: #e9f7ef;
            border: 1px solid #c3e6cb;
        }
        .result h3 {
            margin-top: 0;
            color: #155724;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Car Information</h2>
      
        <form method="post">
            <label>Car Brand:</label>
            <input type="text" name="brand" required>

            <label>Car Model:</label>
            <input type="text" name="model" required>

            <label>Car Year:</label>
            <input type="number" name="year" required>

            <button type="submit">Submit</button>
        </form>
<?php
class Car
{
        public $brand;
        public $model;
        public $year;

         public function display()
        {
            echo "<div class='result'>";
            echo "<p> <strong>Brand:</strong>" . $this->brand. "</p>";    
            echo "<p> <strong>Model:</strong>" . $this->model. "</p>";    
            echo "<p> <strong>Year:</strong>" . $this->year. "</p>";    
            echo "</div>";
        }

     


}

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $c1 = new Car();
   $c1->brand = $_POST["brand"];
   $c1->model = $_POST["model"];
   $c1->year = $_POST["year"];
   $c1->display();
  }
  



?>



      
    </div>
</body>
</html>
