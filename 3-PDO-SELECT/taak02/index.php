<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT * FROM locations";
$statement = $database_connectie->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $gebruiker){  
    echo "<h1>" . $gebruiker['name'] . "</h1>";
    echo "<h3> Adress: " . $gebruiker['address'] . "</h3> ";
    echo "<h3> Stad: " . $gebruiker['city'] . "</h3> <br>";
  }
?>