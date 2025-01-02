<?php
require_once '../V1/database.php'; 

// Définir le module par défaut (etudiants ou cours)
$module = $_GET['module'] ?? 'etudiants';
$action = $_GET['action'] ?? 'index';

// Charger le contrôleur correspondant
if ($module === 'etudiants') {
    require_once '../V1/controllers/EtudiantController.php';
} elseif ($module === 'cours') {
    require_once '../V1/controllers/CoursController.php';
} else {
    echo "Module non reconnu.";
    exit;
}
?>
