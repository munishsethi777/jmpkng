<?php
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/Offer.php");
class OfferManager{
    private static $offerManager;
    private static $offerDataStore;
    public static function getInstance()
        {
        if (!self::$offerManager)
        {
            self::$offerManager = new OfferManager();
            self::$offerDataStore = new BeanDataStore(Offer::$className,Offer::$tableName);
            return self::$offerManager;
        }
        return self::$offerManager;
    }
}  
?>
