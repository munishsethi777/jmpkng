<?php
class Users{
    public static $tableName = "users";
    public static $className = "User";
    private $seq,$email,$password,$name,$mobile,$signupdate,$iscommercial;
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    }
    public function setEmail($email_){
       $this->email = $email_;
    }
    public function getEamil(){
        return $this->email;
    } 
      
    public function setPassword($password_){
       $this->password = $password_;
    }
    public function getPassword(){
        return $this->password;
    }
       
    public function setName($name){
       $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    
    public function setMobile($mobile_){
       $this->mobile = $mobile_;
    }
    public function getMobile(){
        return $this->mobile;
    }
    
    public function setSignUpDate($signUpDate_){
       $this->signupdate = $signUpDate_;
    }
    public function getSignUpDate(){
        return $this->function;
    }
    
    public function setIsCommercial($flag_){
       $this->iscommercial = $flag_;
    }
    public function getIsCommercial(){
        return $this->iscommercial;
    }      
}   
?>
