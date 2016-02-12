<?php
    require_once("../IConstants.inc");
    require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/User.php");
    require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/UserAddress.php");
    require_once($ConstantsArray['dbServerUrl'] ."Managers/UserManager.php");
    $success = 0;
    $message = "";
    $call =  "";
    $response= null;

    If(isset($_GET["call"])){
        $call = $_GET["call"];
    }

    if($call == "register"){
        $userManager = UserManager::getInstance();
        $email = $_GET["email"];
        $password = $_GET["password"];
        $name = $_GET["name"];
        $mobile = $_GET["mobile"];
        if($email != "" && $password != ""){
            try{
                $user = $userManager->RegisterNewUser($email,$password,$name,$mobile);
                $response["userseq"] = $user->getSeq();
                $success = 1;
            }catch(Exception $e){
                $bool = isDuplicateMobileError($e);
                if($bool == true){
                    $message  = "User already exists with this email id, Please try a different email id";
                }else{
                    $message  = $e->getMessage();
                }
            }
        }else{
            $message = "Insufficient information provided";
        }
    }

    if($call == "loginUser"){
        $userManager = UserManager::getInstance();
        $email = $_GET["email"];
        $password = $_GET["password"];
        if($email != "" && $password != ""){
            try{
                $user = $userManager->ValidateUserLogin($emai,$password);
                if($user != null){
                    $success = 1;
                    $response["userseq"] = $user->getSeq();
                }
            }catch(Exception $e){
                $message  = "Exception occured. Please try again";
            }
        }else{
            $message = "Insufficient information provided.";
        }
    }

    if($call == "saveUserAddress"){
        $userSeq = $_GET["userSeq"];
        $addressType = $_GET["addressType"];
        $isSameForShipping = $_GET["isSameForShipping"];
        $address = $_GET["address"];
        $city = $_GET["city"];
        $state = $_GET["state"];
        $country = $_GET["country"];
        $pincode = $_GET["pincode"];

        if($userSeq != null){
            try{
                $userAddress = new UserAddress();
                $userAddress->setUserSeq($userSeq);
                $userAddress->setAddressType($addressType);
                $userAddress->setAddress($address);
                $userAddress->setCity($city);
                $userAddress->setState($state);
                $userAddress->setCountry($country);
                $userAddress->setPinCode($pincode);
                $userAddress->setIsSameForShipping($isSameForShipping);
                $userAddressSeq = $userManager->SaveUserAddress($userAddress);
                if($userAddressSeq != null){
                    $success = 1;
                    $message = "Address saved successfully";
                }
            }catch(Exception $e){
                $message  = "Exception occured. Please try again.";
            }

        }



    }

    if($call == "getAllUsersForGrid"){
        $userManager = UserManager::getInstance();
        $users = $userManager->getAllUsersForGrid();
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


    function isDuplicateMobileError($e){
        $arr = explode('Duplicate', $e->getMessage());
        return !is_null($arr[1]);
    }

?>
