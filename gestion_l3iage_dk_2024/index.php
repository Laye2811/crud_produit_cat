<?php



    $controller = $_GET["controller"];

    if($controller == 'produit'){
        require_once './controller/produitController.php';
    }else{
        require_once './controller/categorieController.php';
    }

    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='add'){
            pageAdd();
        }
        
        if($_GET['action']=='delete'){
            remove();
        }
        if($_GET['action']=='save'){
            save();
        }
        if($_GET['action']=='edit'){
            getCategorie();
        }
        if($_GET['action']=='update'){
            update();
        }
    }else{
        index();
    }
    
 
  
?>