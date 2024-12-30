<?php 
include "../setting/database.php";
include "account.php";
require_once "../head.php";
class business extends Account {
    protected $businessAccountID;
    public $fee;

    public function __construct( $businessAccountID, $nom, $balance, $accountType, $fee) {
        parent::__construct($nom, $balance, $accountType);
     
        $this->businessAccountID = $businessAccountID;
        $this->fee = $fee;
    }

    public function getBusinessId() {
        return $this->businessAccountID;
    }

    public function getFee() {
        return $this->fee;
    }
}
    $query = $pdo->query("
        SELECT 
            account.accountID, 
            account.nom, 
            account.balance, 
            businessaccount.fee, 
            businessaccount.businessaccountID
        FROM 
            account
        INNER JOIN 
            businessaccount
        ON 
            account.accountID = businessaccount.accountID
    ");
    echo '<div class="container mt-5">';
    echo '<div class="row">';
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        
        echo '<div class="col-md-4">';
        echo '    <div class="card mb-4">';
        echo '        <div class="card-body">';
        echo '            <h5 class="card-title">business account</h5>';
        echo '            <p class="card-text">Nom : ' . htmlspecialchars($row['nom']) . '</p>';
        echo '            <p class="card-text">Balance : ' . htmlspecialchars($row['balance']) . ' DH</p>';
        echo '            <p class="card-text">Fee : ' . htmlspecialchars($row['fee']) . ' %</p>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';

?>