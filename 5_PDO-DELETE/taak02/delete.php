<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$id = $_GET['id'];// Het cijfer 1 moet jij vervangen voor een waarde uit de GET array. $_GET

//VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
$sql = "DELETE FROM users WHERE id = :ph_id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_id", $id );
$stmt->execute()
?>