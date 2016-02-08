<?php
class ProductTag{
    public static $tableName = "producttags";
    public static $className = "ProductTag";
    private $seq,$productseq,$tagseq;
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    }
    
    public function setProductSeq($productSeq_){
       $this->productseq = $productSeq_;
    }
    public function getProductSeq(){
        return $this->productseq;
    }
    
    public function setTagSeq($tagseq_){
       $this->tagseq = $tagseq_;
    }
    public function getTagSeq(){
        return $this->tagseq;
    }   
}  
?>
