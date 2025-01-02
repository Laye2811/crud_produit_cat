<?php
require_once '../models/Cours.php';
require_once '../database.php';

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $cours = getAllCours($conn);
        require '../views/cours/index.php';
        break;
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            addCours($conn, $_POST['nom_cours'], $_POST['code_cours'], $_POST['nombre_heures']);
            header('Location: index.php?action=index');
        }
        require '../views/cours/create.php';
        break;
    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            updateCours($conn, $_POST['id'], $_POST['nom_cours'], $_POST['code_cours'], $_POST['nombre_heures']);
            header('Location: index.php?action=index');
        }
        require '../views/cours/edit.php';
        break;
    case 'delete':
        deleteCours($conn, $_GET['id']);
        header('Location: index.php?action=index');
        break;
}
?>
