<?php
require_once '../database.php';

class RendezVous {
    public $id;
    public $date;
    public $heure;
    public $description;
    public $clientId;

    public function __construct($data) {
        $this->date = $data['date'] ?? null;
        $this->heure = $data['heure'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->clientId = $data['clientId'] ?? null;
    }

    public static function all() {
        $db = Database::getInstance();
        $stmt = $db->query('SELECT * FROM rendezvous');
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function save() {
        $db = Database::getInstance();
        $stmt = $db->prepare('INSERT INTO rendezvous (date, heure, description, clientId) VALUES (?, ?, ?, ?)');
        $stmt->execute([$this->date, $this->heure, $this->description, $this->clientId]);
    }
}
