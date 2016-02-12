<?php
    require_once("../IConstants.inc");
    require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/Product.php");
    require_once($ConstantsArray['dbServerUrl'] ."Managers/ProductManager.php");

    $success = 0;
    $message = "";
    $call =  "";
    $response= null;
    if(isset($_GET["call"])){
        $call = $_GET["call"];
    }

    if($call == "getProducts"){
        try{
            $productManager = ProductManager::getInstance();
            $products = $productManager->getProducts();
            $response["products"] = $products;
            $success = 1;
        }catch(Exception $e){
            $message = "Some error occured while fetching products. Please try again";
        }

    }

    if($call == "getNewProducts"){
        try{
            $productManager = ProductManager::getInstance();
            $products = $productManager->getNewProducts();
            $response["products"] = $products;
            $success = 1;
        }catch(Exception $e){
            $message = "Some error occured while fetching products. Please try again";
        }

    }

    if($call == "getProductsByTag"){
        $searchingTag = $_GET["tag"];
        try{
            $productManager = ProductManager::getInstance();
            $products = $productManager->getProductsByTag($searchingTag);
            $response["products"] = $products;
            $success = 1;
        }catch(Exception $e){
            $message = "Some error occured while fetching products. Please try again";
        }
    }

    if($call == "getProductOffers"){
        try{
            $productManager = ProductManager::getInstance();
            $products = $productManager->getProductOffers();
            $response["products"] = $products;
            $success = 1;
        }catch(Exception $e){
            $message = "Some error occured while fetching products. Please try again";
        }
    }

    if($call == "getAllProductsForAdminPanel"){
        $productManager = ProductManager::getInstance();
        $products = $productManager->getAllProductsForAdminPanel();
        echo json_encode($users);
        return;
    }

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
    header("Content-type: application/json");
    $response["success"] = $success;
    $response["message"] = $message;
    echo json_encode($response);
    return;

?>
