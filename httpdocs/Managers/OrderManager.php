<?php
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/Order.php");
class OrderManager{
    private static $orderManager;
    private static $orderDataStore;
    public static function getInstance()
        {
        if (!self::$orderManager)
        {
            self::$orderManager = new ProductManager();
            self::$orderDataStore = new BeanDataStore(Order::$className,Order::$tableName);
            return self::$orderManager;
        }
        return self::$orderManager;
    }
}
?>
