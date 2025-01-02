<?php
require_once '../models/RendezVous.php';

class RendezVousController {
    public function index() {
        $rendezvous = RendezVous::all();
        return '../views/rendezvous/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rendezvous = new RendezVous($_POST);
            $rendezvous->save();
            header('Location: /rendezvous');
        } else {
            require '../views/rendezvous/create.php';
        }
    }
}
