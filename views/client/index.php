<?php
    include URL_CONTROLLER.'ProductController.php';
    $lay_ra = new ProductController;

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case "product":
                
                break;
        }
    }else{
        $lay_ra->lay_ra_san_pham();
    
    }

?>