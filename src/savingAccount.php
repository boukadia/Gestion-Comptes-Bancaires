<?php 
class savingAccount{
protected $accountID;
protected $interet;
public function __construct($accountID,$interet){
    $this->accountID=$accountID;
    $this->interet=$interet;
  
}
public function getInteret() {
    return $this->interet;
}


public function getAccountID() {
    return $this->accountID;
}


};









?>
