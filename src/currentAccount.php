<?php 
class currentAccount{
protected $accountID;
protected $limitt;
public function __construct($accountID,$limitt){
    $this->accountID=$accountID;
    $this->limitt=$limitt;
  
}
public function getLimitt() {
    return $this->limitt;
}


public function getAccountID() {
    return $this->accountID;
}


};









?>
