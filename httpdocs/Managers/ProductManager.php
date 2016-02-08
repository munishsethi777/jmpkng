<?php
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/Product.php");
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/ProductTag.php");
class ProductManager{
    private static $productManager;
    private static $productDataStore;
    private static $productTagDataStore;
    public static function getInstance()
        {
        if (!self::$productManager)
        {
            self::$productManager = new ProductManager();
            self::$productDataStore = new BeanDataStore(Product::$className,Product::$tableName);
            self::$productTagDataStore = new BeanDataStore(ProductTag::$className,ProductTag::$tableName);
            return self::$productManager;
        }
        return self::$offerManager;
    }
}   
?>
