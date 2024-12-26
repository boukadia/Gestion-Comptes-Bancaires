<?php 
class account{
protected $nom;
protected $numCompte;
protected $balance;
protected $accountType;
public function __construct($nom,$numCompte,$balance,$accountType){
    $this->nom=$nom;
    $this->numCompte=$numCompte;
    $this->balance=$balance;
    $this->accountType=$accountType;
}


};
$test= new account("mohame","h21565dc","2000dh","savins");
print_r($test) ;

// $stmt=$pdo->prepare("insert into account(nom,numCompte,balance,account_type) values(:nom,:numCompte, :balance,:accountType) ");
// $stmt->execute([
//     ':nom' => $nom,
//     ':numCompte' => $numCompte,
//     ':balance' => $balance,
//     ':accountType' => $accountType
// ]);





?>