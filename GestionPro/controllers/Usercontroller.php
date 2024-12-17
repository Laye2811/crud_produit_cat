<?php
include_once 'models/User.php';

class UserController {
    private $userModel;
    public function __construct($db) {
        $this->userModel = new User($db);
    }

    public function listUsers() {
        $users = $this->userModel->getAllUsers();
        include 'views/users/list.php';
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->userModel->addUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password']);
            header('Location: index.php?action=listUsers');
        }
        include 'views/users/add.php';
    }

    public function deleteUser($id) {
        $this->userModel->deleteUser($id);
        header('Location: index.php?action=listUsers');
    }
}
?>