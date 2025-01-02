<?php
require_once '../database.php';
require_once '../controllers/RendezVousController.php';
require_once '../controllers/ClientController.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

if ($uri === 'rendezvous') {
    $controller = new RendezVousController();
    $controller->index();
} elseif ($uri === 'rendezvous/create') {
    $controller = new RendezVousController();
    $controller->create();
} elseif ($uri === 'clients') {
    $controller = new ClientController();
    $controller->index();
} elseif ($uri === 'clients/create') {
    $controller = new ClientController();
    $controller->create();
} else {
    http_response_code(404);
    echo "<h1>Page not found</h1>";
}
