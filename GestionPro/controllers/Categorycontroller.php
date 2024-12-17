<?php
include_once 'models/Category.php';

class CategoryController {
    private $categoryModel;
    public function __construct($db) {
        $this->categoryModel = new Category($db);
    }

    public function listCategories() {
        $categories = $this->categoryModel->getAllCategories();
        include 'views/categories/list.php';
    }

    public function addCategory() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->categoryModel->addCategory($_POST['libelle']);
            header('Location: index.php?action=listCategories');
        }
        include 'views/categories/add.php';
    }

    public function deleteCategory($id) {
        $this->categoryModel->deleteCategory($id);
        header('Location: index.php?action=listCategories');
    }
}
?>
