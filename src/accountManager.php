<?php 
include "../setting/database.php";
include "account.php";
include "currentAccount.php";
include "savingAccount.php";
include "businessAccount.php";


$client= new account($_POST["nom"],$_POST["balance"],accountType: $_POST["accountType"]);

$stmt=$pdo->prepare("insert into account(nom,balance) values(:nom, :balance) ");
$stmt->execute([
    ':nom' => $client->getNom(),
    ':balance' => $client->getBalance()
    
]);
$lastId=$pdo->lastInsertId();

// echo $lastId;
if($client->getAccountType()==="current")
{
$currentAccount=new currentAccount($lastId, $_POST["limitt"]);

    $stmt=$pdo->prepare("insert into currentaccount(accountID,limitt) values(:accountID, :limitt) ");
$stmt->execute([
    ':accountID' => $currentAccount->getAccountID(),
    ':limitt' => $currentAccount->getLimitt()
    
]);
}

else if($client->getAccountType()==="saving")
{
    $savingAccount=new savingAccount($lastId, $_POST["interet"]);
    
        $stmt=$pdo->prepare("insert into savingAccount(accountID,interet) values(:accountID, :interet) ");
    $stmt->execute([
        ':accountID' => $savingAccount->getAccountID(),
        ':interet' => $savingAccount->getInteret()
        
    ]);
    }
    else{
        $businessAccount=new businessAccount($lastId, $_POST["interet"]);
        $stmt=$pdo->prepare("insert into businessAccount(accountID,fee) values(:accountID, :fee) ");
    $stmt->execute([
        ':accountID' => $businessAccount->getAccountID(),
        ':fee' => $businessAccount->getFee()
    ]);
    }




// print_r( $savingAccount->getaccountID());



?>
