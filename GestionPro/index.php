<?php
// Inclure la configuration et les contrôleurs
include 'models/config.php';
include 'controllers/UserController.php';
include 'controllers/CategoryController.php';
include 'controllers/ProductController.php';

// Initialiser les contrôleurs
$userController = new UserController($conn);
$categoryController = new CategoryController($conn);
$productController = new ProductController($conn);

// Récupérer l'action
$action = isset($_GET['action']) ? $_GET['action'] : null;

// Router les actions
switch ($action) {
    // Gestion des utilisateurs
    case 'listUsers':
        $userController->listUsers();
        break;
    case 'addUser':
        $userController->addUser();
        break;
    case 'deleteUser':
        if (isset($_GET['id'])) {
            $userController->deleteUser($_GET['id']);
        }
        break;

    // Gestion des catégories
    case 'listCategories':
        $categoryController->listCategories();
        break;
    case 'addCategory':
        $categoryController->addCategory();
        break;
    case 'deleteCategory':
        if (isset($_GET['id'])) {
            $categoryController->deleteCategory($_GET['id']);
        }
        break;

    // Gestion des produits
    case 'listProducts':
        $productController->listProducts();
        break;
    case 'addProduct':
        $productController->addProduct();
        break;
    case 'editProduct':
        if (isset($_GET['id'])) {
            $productController->editProduct($_GET['id']);
        }
        break;
    case 'deleteProduct':
        if (isset($_GET['id'])) {
            $productController->deleteProduct($_GET['id']);
        }
        break;

    // Page d'accueil par défaut
    default:
        echo '<h1>Bienvenue dans l\'application de gestion !</h1>';
        echo '<ul>
                <li><a href="index.php?action=listUsers">Gérer les Utilisateurs</a></li>
                <li><a href="index.php?action=listCategories">Gérer les Catégories</a></li>
                <li><a href="index.php?action=listProducts">Gérer les Produits</a></li>
              </ul>';
        break;
}
?>
