<?php 
include "../setting/database.php";
include "account.php";
require_once "../head.php";

class current extends Account {
    protected $currentAccountID;
    public $limitt;

    public function __construct($currentAccountID, $nom, $balance, $accountType, $limitt) {
        parent::__construct($nom, $balance, $accountType);
        
        $this->currentAccountID = $currentAccountID;
        $this->limitt = $limitt;
    }

    public function geturrentId() {
        return $this->currentAccountID;
    }

    public function getLimitt() {
        return $this->limitt;
    }
}

    $query = $pdo->query("
        SELECT 
            account.accountID, 
            account.nom, 
            account.balance, 
            currentAccount.limitt, 
            currentAccount.currentAccountID
        FROM 
            account
        INNER JOIN 
            currentaccount
        ON 
            account.accountID = currentAccount.accountID
    ");
   
    echo '<div class="container mt-5">';
    echo '<div class="row">';
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-md-4">';
        echo '    <div class="card mb-4">';
        echo '        <div class="card-body">';
        echo '            <h5 class="card-title">current account</h5>';
        echo '            <p class="card-text">Nom : ' . htmlspecialchars($row['nom']) . '</p>';
        echo '            <p class="card-text">Balance : ' . htmlspecialchars($row['balance']) . ' DH</p>';
        echo '            <p class="card-text">Limite : ' . htmlspecialchars($row['limitt']) . ' DH</p>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';


?>