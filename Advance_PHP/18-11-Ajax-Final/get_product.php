<?php
$conn = new mysqli("localhost", "root", "", "test1");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
if($row = $result->fetch_assoc()){
    echo json_encode($row);
}
?>