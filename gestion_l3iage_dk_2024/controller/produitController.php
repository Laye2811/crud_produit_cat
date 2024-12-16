<?php
    require_once('./model/produitModel.php');

    function index(){
       $produits = getAll();
       require_once './view/produit/list.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=produit');
    }

    function pageAdd(){
        require_once './view/produit/add.php';
    }

    function save(){
        $libelle =$_POST['libelle'];
        $qt = $_POST['quantite'];
        $pu = $_POST['prix'];
        add($libelle,$qt,$pu);
        header('location:index.php?controller=produit');
    }


?>