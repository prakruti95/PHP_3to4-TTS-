<?php

    header("Content-Type: application/json");

    $products = 
    [
        ["id" => 1, "name" => "Laptop", "price" => 45000],
        ["id" => 2, "name" => "Mouse", "price" => 500]
    ];

    $response = 
    [
        "status" => "success",
        "data" => $products
       
    ];

    echo json_encode($products);
?>