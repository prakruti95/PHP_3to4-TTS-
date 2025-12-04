<?php

require_once "../app/core/Database.php";

class User
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function register($data)
    {
        $stmt = $this->db->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
        $stmt->execute([
            $data["name"],
            $data["email"],
            password_hash($data["password"], PASSWORD_DEFAULT)
        ]);

        return ["status" => true, "message" => "User registered"];
    }

    public function login($data)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$data["email"]]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($data["password"], $user["password"])) {
            return ["status" => false, "message" => "Invalid credentials"];
        }

        return ["status" => true, "token" => "TOKEN_" . $user["id"]];
    }
}
