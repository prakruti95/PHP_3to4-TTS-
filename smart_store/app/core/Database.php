<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "smart_store_db";

    public function connect()
    {
        try {
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->pass
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Exception $e) {
            die("DB Error: " . $e->getMessage());
        }
    }
}
