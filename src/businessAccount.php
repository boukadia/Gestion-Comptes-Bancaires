<?php 
class businessAccount{
protected $accountID;
protected $fee;
public function __construct($accountID,$fee){
    $this->accountID=$accountID;
    $this->fee=$fee;
  
}
public function getFee() {
    return $this->fee;
}


public function getAccountID() {
    return $this->accountID;
}


};









?>
