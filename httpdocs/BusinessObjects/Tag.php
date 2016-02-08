<?php
class Tag{
    public static $tableName = "tags";
    public static $className = "Tag";
    private $seq,$tag,$tagtype;
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    }
    
    public function setTag($tag){
       $this->tag = $tag;
    }
    public function getTag(){
        return $this->tag;
    }
    
    public function setTagType($tagType_){
       $this->tagtype = $tagType_;
    }
    public function getTagType(){
        return $this->tagtype;
    }   
}   
?>
