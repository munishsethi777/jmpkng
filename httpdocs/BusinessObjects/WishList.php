<?php
class WishList{
    public static $tableName = "wishList";
    public static $className = "WishList";
    private $seq,$userseq,$createdon,$processingtype,$isprocessed,$processedon,$processremarks;
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    }
    
    public function setUserSeq($userSeq_){
       $this->userseq = $userSeq_;
    }
    public function getUserSeq(){
        return $this->userseq;
    }
    
    public function setCreatedOn($createdOn_){
       $this->createdon = $createdOn_;
    }
    public function getSeq(){
        return $this->createdon;
    }
    
    public function setProcessType($processType_){
       $this->processingtype = $processType_;
    }
    public function getProcessType(){
        return $this->processingtype;
    }
    
    public function setIsProcessed($isProcessed_){
       $this->isprocessed = $isProcessed_;
    }
    public function getIsProcessed(){
        return $this->isprocessed;
    }
    
    public function setProcessedOn($processedOn_){
       $this->processedon = $processedOn_;
    }
    public function getProcessedOn(){
        return $this->processedon;
    }
    
    public function setProcessedMarks($processedMarks_){
       $this->processremarks = $processedMarks_;
    }
    public function getProcessedMarks(){
        return $this->processremarks;
    }      
}
?>
