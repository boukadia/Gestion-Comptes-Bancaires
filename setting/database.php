<?php 
$serverHost="localhost";
$serverUser="root";
$password="";
$database="gestionBank";
try {
    // connect databases
    $dns="mysql:host=".$serverHost.";dbname=".$database;
    $pdo= new PDO($dns,$serverUser,$password);
} catch (PDOException $e ) {
    //throw $th;
    echo "failed";
}

?>