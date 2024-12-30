<?php 
require_once "../setting/database.php";
class account{

protected $nom;
protected $balance;
protected $accountType;
public function __construct($nom,$balance,$accountType){
    $this->nom=$nom;
    $this->balance=$balance;
    $this->accountType=$accountType;
}
public function getNom() {
    return $this->nom;
}


public function getBalance() {
    return $this->balance;
}


public function getAccountType() {
    return $this->accountType;
}

};









?>
