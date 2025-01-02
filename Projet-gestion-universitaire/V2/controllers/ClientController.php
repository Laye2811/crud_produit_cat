<?php
require_once '../models/Client.php';

class ClientController {
    public function index() {
        $clients = Client::all();
        
        require '../views/clients/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $client = new Client($_POST);
            $client->save();
            header('Location: /clients');
        } else {
            require '../views/clients/create.php';
        }
    }
}
