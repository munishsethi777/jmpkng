<?php
require_once($ConstantsArray['dbServerUrl'] ."BusinessObjects/Order.php");
class TagManager{
    private static $tagManager;
    private static $tagDataStore;
    public static function getInstance()
        {
        if (!self::$orderManager)
        {
            self::$tagManager = new TagManager();
            self::$tagDataStore = new BeanDataStore(Tag::$className,Tag::$tableName);
            return self::$tagManager;
        }
        return self::$tagManager;
    }
}
?>