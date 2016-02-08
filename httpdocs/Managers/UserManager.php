<?php
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/User.php");
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/UserAddress.php"); 
class UserManager{
    private static $userManager;
    private static $userDataStore;
    private static $userAddressDataStore; 
    public static function getInstance()
        {
        if (!self::$userManager)
        {
            self::$userManager = new TagManager();
            self::$userDataStore = new BeanDataStore(User::$className,User::$tableName);
            self::$userAddressDataStore = new BeanDataStore(UserAddress::$className,UserAddress::$tableName);
            return self::$userManager;
        }
        return self::$userManager;
    }
}
?>