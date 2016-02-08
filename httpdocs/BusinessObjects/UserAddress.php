<?php
class UserAddress{
    public static $tableName = "useraddresses";
    public static $className = "UserAddress";
    private $seq,$userseq,$addresstype,$issameforshipping,$address,$city,$state,$country,$pincode;
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    }
    
    public function setUserSeq($userSeq){
       $this->userseq = $userSeq;
    }
    public function getUserSeq(){
        return $this->userseq;
    }
    
    public function setAddressType($addtype){
       $this->addresstype = $addtype;
    }
    public function getAddressType(){
        return $this->addresstype;
    }
    
    public function setIsSameForShipping($isSameForShipping){
       $this->issameforshipping = $isSameForShipping;
    }
    public function getIsSameForShipping(){
        return $this->issameforshipping;
    }
    
    public function setAddress($address_){
       $this->address = $address_;
    }
    public function getAddress(){
        return $this->address;
    }
    
    public function setCity($city_){
       $this->city = $city_;
    }
    public function getCity(){
        return $this->city;
    }
    
    public function setState($state_){
       $this->state = $state_;
    }
    public function getState(){
        return $this->state;
    }
    
    public function setCountry($country_){
       $this->country = $country_;
    }
    public function getCountry(){
        return $this->country;
    }
    
    public function setPinCode($pinCode_){
       $this->pincode = $pinCode_;
    }
    public function getPinCode(){
        return $this->pincode;
    }   
}   
?>
