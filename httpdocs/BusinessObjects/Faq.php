<?php
   class Faq{
       public static $tableName = "faqs";
       public static $className = "Faq";
       private $seq,$faqtitle,$faqdescription;
       public function setSeq($seq){
           $this->seq = $seq;
       }
       public function getSeq(){
            return $this->seq;
       }
       public function setFaqTitle($title){
           $this->faqtitle = $title;
       }
       public function getFaqTitle(){
            return $this->faqtitle;
       }
       public function setFaqDescription($description){
           $this->faqdescription = $description;
       }
       public function getFaqDescription(){
            return $this->faqdescription;
       }
   }
?>
