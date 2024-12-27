<?php 
class currentAccount{
protected $accountID;
protected $limitt;
public function __construct($accountID,$limitt){
    $this->accountID=$accountID;
    $this->limitt=$limitt;
  
}
public function getlimitt() {
    return $this->limitt;
}


public function getaccountID() {
    return $this->accountID;
}


};









?>
