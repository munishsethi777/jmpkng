<?php
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/WishList.php"); 
class WishListManager{
    private static $wishListManager;
    private static $wishListDataStore;
    public static function getInstance()
    {
        if (!self::$wishListManager)
        {
            self::$wishListManager = new TagManager();
            self::$wishListDataStore = new BeanDataStore(WishList::$className,WishList::$tableName);
            return self::$wishListManager;
        }
        return self::$wishListManager;
    }
}
?>