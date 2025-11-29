<?php
header("Content-Type: application/json");
include "config.php";

$method = $_SERVER['REQUEST_METHOD'];

$data = json_decode(file_get_contents("php://input"), true);

switch ($method) 
{
    case "GET":
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM employees WHERE id = $id";
            $result = $conn->query($sql);
            echo json_encode($result->fetch_assoc());
        }
        else
        {
            $sql = "SELECT * FROM employees";
            $result = $conn->query($sql);
            $rows = [];
            while ($row = $result->fetch_assoc()) 
            {
                $rows[] = $row;
            }
            echo json_encode($rows);
        }
    break;

    case "POST":
         $name     = $data["name"];
        $email    = $data["email"];
        $position = $data["position"];
        $salary   = $data["salary"];

        $sql = "INSERT INTO employees (name, email, position, salary)
                VALUES ('$name', '$email', '$position', '$salary')";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Employee created successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }


    break;

    case "PUT":
         if (!isset($_GET['id'])) 
        {
            echo json_encode(["error" => "Employee ID required"]);
            exit;
        }

           $id = $_GET['id'];

        $name     = $data["name"];
        $email    = $data["email"];
        $position = $data["position"];
        $salary   = $data["salary"];

        $sql = "UPDATE employees SET
                name='$name',
                email='$email',
                position='$position',
                salary='$salary'
                WHERE id=$id";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Employee updated"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
      
    break;

    case "DELETE":
         if (!isset($_GET['id'])) {
            echo json_encode(["error" => "Employee ID required"]);
            exit;
        }

        $id = $_GET['id'];

        $sql = "DELETE FROM employees WHERE id=$id";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Employee deleted"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
    break;
     default:
        echo json_encode(["message" => "Invalid Request"]);
        break;
}

?>