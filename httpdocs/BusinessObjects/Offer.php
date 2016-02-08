<?php
class Offer{
    public static $tableName = "offers";
    public static $className = "Offer";
    private $seq,$productseq,$title,$details,$addedon;
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    } 
    public function setProuctSeq($productSeq_){
       $this->productseq = $productSeq_;
    }
    public function getProductSeq(){
        return $this->productseq;
    }   
    public function setTitle($title_){
       $this->title = $title_;
    }
    public function getTitle(){
        return $this->title;
    }   
    public function setDetails($details_){
       $this->details = $details_;
    }
    public function getDetails(){
        return $this->details;
    }
    public function setAddedOn($addedOn_){
       $this->addedon = $addedOn_;
    }
    public function getAddedon(){
        return $this->addedon;
    }     
}

?>
