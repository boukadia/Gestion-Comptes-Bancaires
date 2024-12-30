
<?php 
include "../setting/database.php";
include "account.php";
require_once "../head.php";

class Saving extends Account {
    protected $savingAccountID;
    public $interet;

    public function __construct( $savingAccountID, $nom, $balance, $accountType, $interet) {
        parent::__construct($nom, $balance, $accountType);
      
        $this->savingAccountID = $savingAccountID;
        $this->interet = $interet;
    }

    public function getSavingId() {
        return $this->savingAccountID;
    }

    public function getInteret() {
        return $this->interet;
    }
}


 
    $query = $pdo->query("
        SELECT 
            account.accountID, 
            account.nom, 
            account.balance, 
            savingAccount.interet, 
            savingAccount.savingAccountID
        FROM 
            account
        INNER JOIN 
            savingAccount
        ON 
            account.accountID = savingAccount.accountID
    ");
    echo '<div class="container mt-5">';
    echo '<div class="row">';
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-md-4">';
        echo '    <div class="card mb-4">';
        echo '        <div class="card-body">';
        echo '            <h5 class="card-title">saving Account</h5>';
        echo '            <p class="card-text">Nom : ' . htmlspecialchars($row['nom']) . '</p>';
        echo '            <p class="card-text">Balance : ' . htmlspecialchars($row['balance']) . ' DH</p>';
        echo '            <p class="card-text">interet : ' . htmlspecialchars($row['interet']) . ' %</p>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';

?>
