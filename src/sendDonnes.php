<?php 
include "../setting/database.php";
include "account.php";


$client= new account($_POST["nom"],$_POST["balance"],$_POST["accountType"]);

$stmt=$pdo->prepare("insert into account(nom,balance,account_type) values(:nom, :balance,:accountType) ");
$stmt->execute([
    ':nom' => $client->getNom(),
    ':balance' => $client->getBalance(),
    
    ':accountType' => $client->getAccountType()
]);
// echo($client->getAccountType())

?>