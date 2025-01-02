<?php
require_once '../V1/models/Etudiant.php';
require_once '../V1/database.php';

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $etudiants = getAllEtudiants($conn);
        require '../V1/views/etudiants/index.php';
        break;
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            addEtudiant($conn, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['filiere']);
            header('Location: index.php?action=index');
        }
        require '../V1/views/etudiants/create.php';
        break;
    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            updateEtudiant($conn, $_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['filiere']);
            header('Location: index.php?action=index');
        }
        require '../V1/views/etudiants/edit.php';
        break;
    case 'delete':
        deleteEtudiant($conn, $_GET['id']);
        header('Location: index.php?action=index');
        break;
}
?>
