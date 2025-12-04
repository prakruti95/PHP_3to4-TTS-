<?php

require_once "../app/core/Database.php";

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO products(name,price,stock) VALUES(?,?,?)");
        $stmt->execute([$data["name"], $data["price"], $data["stock"]]);

        return ["status" => true, "message" => "Product created"];
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE products SET name=?, price=?, stock=? WHERE id=?");
        $stmt->execute([$data["name"], $data["price"], $data["stock"], $id]);

        return ["status" => true, "message" => "Product updated"];
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id=?");
        $stmt->execute([$id]);

        return ["status" => true, "message" => "Product deleted"];
    }

    public function view($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id=?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function listAll()
    {
        $stmt = $this->db->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
