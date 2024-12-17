<?php
class Category {
    private $conn;
    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllCategories() {
        $sql = "SELECT * FROM categories ORDER BY id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCategory($libelle) {
        $sql = "INSERT INTO categories (libelle) VALUES (:libelle)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':libelle' => $libelle]);
    }

    public function deleteCategory($id) {
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}
?>
