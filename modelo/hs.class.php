<?php
require_once dirname(__FILE__) . '/../conexion/connection.class.php';
$con = new Connection();

class HS
{
    public function getAll()
    {
        global $con;
        $result = [];
        $sql = "SELECT * FROM responses";
        try {
            $stmt = $con->connect()->prepare($sql);
            $stmt->execute();
            $result["data"] = $stmt->fetchAll();
            $con->disconnect();
        } catch (PDOException $e) {
            $con->disconnect();
            die("Error: " . $e->getMessage());
        }
        return $result;
    }

    public function saveHS($json)
    {
        global $con;
        $result = false;
        $sql = "INSERT INTO responses(response) VALUES (:n1);";
        try {
            $stmt = $con->connect()->prepare($sql);
            $stmt->bindParam(':n1', $json, PDO::PARAM_STR);
            $stmt->execute();
            $result = true;
            $con->disconnect();
        } catch (PDOException $e) {
            $con->disconnect();
            die("Error: " . $e->getMessage());
        }
        return $result;
    }
}
