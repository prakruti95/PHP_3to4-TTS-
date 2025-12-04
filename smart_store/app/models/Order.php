<?php

require_once "../app/core/Database.php";

class Order
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO orders(user_id) VALUES(?)");
        $stmt->execute([$data["user_id"]]);

        $orderId = $this->db->lastInsertId();

        foreach ($data["items"] as $item) {
            $itemStmt = $this->db->prepare("INSERT INTO order_items(order_id,product_id,quantity) VALUES(?,?,?)");
            $itemStmt->execute([$orderId, $item["product_id"], $item["quantity"]]);
        }

        return ["status" => true, "message" => "Order created", "order_id" => $orderId];
    }

    public function view($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM orders WHERE id=?");
        $stmt->execute([$id]);
        $order = $stmt->fetch(PDO::FETCH_ASSOC);

        $itemsStmt = $this->db->prepare("SELECT * FROM order_items WHERE order_id=?");
        $itemsStmt->execute([$id]);

        $order["items"] = $itemsStmt->fetchAll(PDO::FETCH_ASSOC);

        return $order;
    }

    public function listAll()
    {
        $stmt = $this->db->query("SELECT * FROM orders");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
