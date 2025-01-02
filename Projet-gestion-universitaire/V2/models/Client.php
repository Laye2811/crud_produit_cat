<?php
require_once '../database.php';

class Client {
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $telephone;

    public function __construct($data) {
        $this->nom = $data['nom'] ?? null;
        $this->prenom = $data['prenom'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->telephone = $data['telephone'] ?? null;
    }

    public static function all() {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM clients");
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function save() {
        $db = Database::getInstance();
        $stmt = $db->prepare('INSERT INTO clients (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)');
        $stmt->execute([$this->nom, $this->prenom, $this->email, $this->telephone]);
    }
}
