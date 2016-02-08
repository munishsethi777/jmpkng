<?php
class Order{
    public static $tableName = "orders";
    public static $className = "Order";
    private $seq,$ordernumber,$orderdetails,$orderdate,$orderstatus,$shippingcourier,$shippingdate,$shippingtrackingcode;
    
    public function setSeq($seq){
       $this->seq = $seq;
    }
    public function getSeq(){
        return $this->seq;
    }
    
    public function setOrderNumber($number){
       $this->ordernumber = $number;
    }
    public function getOrderNumber(){
        return $this->ordernumber;
    }
    
    public function setOrderDetails($details){
       $this->orderdetails = $details;
    }
    public function getOrderDetails(){
        return $this->orderdetails;
    }
    
    public function setOrderDate($date){
       $this->orderdate = $date;
    }
    public function getOrderDate(){
        return $this->orderdate;
    }
    
    public function setOrderStatus($status){
       $this->orderstatus = $status;
    }
    public function getOrderStatus(){
        return $this->orderstatus;
    }
    
    public function setShippingCourier($shippingCourier_){
       $this->shippingcourier = $shippingCourier_;
    }
    public function getShippingCourier(){
        return $this->shippingcourier;
    }
    
    public function setShippingDate($shippingDate_){
       $this->shippingDate = $shippingDate_;
    }
    public function getShippingDate(){
        return $this->shippingDate;
    }
    
    public function setShippingTrackingCode($trackingCode){
       $this->shippingtrackingcode = $trackingCode;
    }
    public function getShippingTrackingCode(){
        return $this->shippingtrackingcode;
    }                        
}
?>
