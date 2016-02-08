<?php
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/Faq.php");
class FaqManager{
    private static $faqManager;
    private static $faqDataStore;
    public static function getInstance()
        {
        if (!self::$faqManager)
        {
            self::$faqManager = new FaqManager();
            self::$faqDataStore = new BeanDataStore(Faq::$className,Faq::$tableName);
            return self::$faqManager;
        }
        return self::$faqManager;
    }
}
?>
