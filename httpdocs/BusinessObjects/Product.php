<?php
class Product{
    public static $tableName = "products";
    public static $className = "Product";
    private $seq,$name,$details,$imagepath,$producttype,$productmodel,$isnew,$addedon;
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    }
    
    public function setName($name_){
       $this->name = $name_;
    }
    public function getName(){
        return $this->name;
    }
    
    public function setDetails($details_){
       $this->details = $details_;
    }
    public function getDetails(){
        return $this->details;
    }
    
    public function setImagePath($imagePath_){
       $this->imagepath = $imagePath_;
    }
    public function getImagePath(){
        return $this->imagepath;
    }
    
    public function setProductType($produceType_){
       $this->producttype = $produceType_;
    }
    public function getProductType(){
        return $this->producttype;
    }
    
    public function setProductModel($model){
       $this->productmodel = $model;
    }
    public function getProductModel(){
        return $this->productmodel;
    }
    
    public function setIsNew($isNew_){
       $this->isnew = $isNew_;
    }
    public function getIsNew(){
        return $this->isnew;
    }
    
    public function setAddedOn($addedOn_){
       $this->addedon = $addedOn_;
    }
    public function getAddedon(){
        return $this->addedon;
    }     
} 
?>
