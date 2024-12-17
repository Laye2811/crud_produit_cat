<?php
include_once 'models/Product.php';

class ProductController {
    private $productModel;
    public function __construct($db) {
        $this->productModel = new Product($db);
    }

    public function listProducts() {
        $products = $this->productModel->getAllProducts();
        include 'views/products/list.php';
    }

    public function addProduct() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->productModel->addProduct(
                $_POST['nom'],
                $_POST['description'],
                $_POST['prix'],
                $_POST['quantite'],
                $_POST['id_categorie']
            );
            header('Location: index.php?action=listProducts');
        }
        include 'views/products/add.php';
    }

    public function deleteProduct($id) {
        $this->productModel->deleteProduct($id);
        header('Location: index.php?action=listProducts');
    }
}
?>

