<?php
class Database {
    private static $instance = null;

    private function __construct() {}
    private function __clone() {}

    public static function getInstance() {
        if (self::$instance === null) {
            try {
                $host = 'localhost'; 
                $dbname = 'gestion_rendez_vous'; 
                $username = 'root';
                $password = ''; 

                $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
                self::$instance = new PDO($dsn, $username, $password);

                // Configuration des options PDO
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}
