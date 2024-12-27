<?php 
include "../setting/database.php";
include "account.php";
include "currentAccount.php";


$client= new account($_POST["nom"],$_POST["balance"],accountType: $_POST["accountType"]);

$stmt=$pdo->prepare("insert into account(nom,balance) values(:nom, :balance) ");
$stmt->execute([
    ':nom' => $client->getNom(),
    ':balance' => $client->getBalance()
    
]);
$lastId=$pdo->lastInsertId();

// echo $lastId;

{
$currentAccount=new currentAccount($lastId, $_POST["limitt"]);

    $stmt=$pdo->prepare("insert into currentaccount(accountID,limitt) values(:accountID, :limitt) ");
$stmt->execute([
    ':accountID' => $currentAccount->getaccountID(),
    ':limitt' => $currentAccount->getlimitt()
    
]);
}



?>






















<!-- try {
            $query = "INSERT INTO account (holderName, balance) 
                  VALUES (:holderName, :balance)";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':holderName', $this->holderName);
            $stmt->bindValue(':balance', $this->balance);
            if ($stmt->execute()) {
                $id = $conn->lastInsertId();

                if($typeAcc === "currentaccount"){
                    $query1 = "INSERT INTO currentaccount (accountID,overdraftLimit) VALUES ($id,$val)";
                    $stmt1 = $conn->prepare($query1);
                    $stmt1->execute();
                }
                elseif($typeAcc == "savingaccount"){
                    $query1 = "INSERT INTO savingaccount (accountID,interestRate) VALUES ($id,$val)";
                    $stmt1 = $conn->prepare($query1);
                    $stmt1->execute();
                }
                elseif($typeAcc == "businessaccount"){
                    $query1 = "INSERT INTO businessaccount (accountID,transactionFee) VALUES ($id,$val)";
                    $stmt1 = $conn->prepare($query1);
                    $stmt1->execute();
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        } -->