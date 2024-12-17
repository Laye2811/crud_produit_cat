<?php
class Product {
    private $conn;
    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllProducts() {
        $sql = "SELECT p.*, c.libelle AS categorie FROM products p LEFT JOIN categories c ON p.id_categorie = c.id ORDER BY p.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProduct($nom, $description, $prix, $quantite, $id_categorie) {
        $sql = "INSERT INTO products (nom, description, prix, quantite, id_categorie) VALUES (:nom, :description, :prix, :quantite, :id_categorie)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':description' => $description,
            ':prix' => $prix,
            ':quantite' => $quantite,
            ':id_categorie' => $id_categorie
        ]);
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}
?>
