<?php
class WishListDetail{
    public static $tableName = "wishlistdetails";
    public static $className = "WishListDetail";
    private $seq,$wishlistseq,$productseq,$productmodel,$productquantity;
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    }
    
    public function setWishListSeq($wishListSeq_){
       $this->wishlistseq = $wishListSeq_;
    }
    public function getWishListSeq(){
        return $this->wishlistseq;
    }
    
    public function setProductSeq($productSeq_){
       $this->productseq = $productSeq_;
    }
    public function getProductSeq(){
        return $this->productseq;
    }
    
    public function setProductModel($productModel_){
       $this->productmodel = $productModel_;
    }
    public function getProductModel(){
        return $this->productmodel;
    }
    
    public function setProductQuantity($qty){
       $this->productquantity = $qty;
    }
    public function getProductQuantity(){
        return $this->productquantity;
    }
}
?>
