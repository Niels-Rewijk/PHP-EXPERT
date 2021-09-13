<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$firstname="Mohamed";
$sql = "SELECT * FROM users WHERE firstname = :firstname";
$statement = $database_connectie->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->bindParam(":firstname", $firstname);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);
//$user = $statement->fetch();

//var_dump($database_gegevens[0]["firstname"]);

echo "Voornaam: " . $database_gegevens[0]["firstname"] . "<br>";
echo "Achternaam: " . $database_gegevens[0]["lastname"] . "<br>";
echo "E-mail: " . $database_gegevens[0]["email"];
?>