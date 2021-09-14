<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$city="Groningen";
$sql = "SELECT * FROM locations WHERE city = :city";
$statement = $database_connectie->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->bindParam(":city", $city);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "Naam: " . $database_gegevens[0]["name"] . "<br>";
echo "Adres: " . $database_gegevens[0]["address"] . "<br>";
echo "Stad: " . $database_gegevens[0]["city"] . "<br>";

?>