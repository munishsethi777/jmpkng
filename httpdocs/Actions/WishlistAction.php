<?php
    require_once("../IConstants.inc");
    require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/WishList.php");
    require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/WishListDetails.php");
    require_once($ConstantsArray['dbServerUrl'] ."Managers/WishListManager.php");

    $success = 0;
    $message = "";
    $call =  "";
    $response= null;
    if(isset($_GET["call"])){
        $call = $_GET["call"];
    }

    if($call == "setWishListProduct"){
        try{
            $productManager = ProductManager::getInstance();
            $products = $productManager->getProducts();
            $response["products"] = $products;
            $success = 1;
        }catch(Exception $e){
            $message = "Some error occured while fetching products. Please try again";
        }

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
