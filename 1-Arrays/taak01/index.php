<?php
// Numerieke arrays

$getallen = [45,6546,676,234,8765];
$namen = ['bart', 'david', 'emiel'];

// Associatieve arrays

$medewerker = [
  'voornaam' => 'Willem',
  'achternaam' => 'van Oranje',
  'functie'  => 'koning'
];

$frisdrank = [
  'naam' => 'Cola',
  'merk' => 'Coca Cola',
  'hoeveelheid'  => '1 liter'
];
// Multidimensionale array (hieronder zie je meerdere medewerkers in een array staan) 

$medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'functie'  => 'president'
  ]
];

/* De medewerkers-array heeft twee arrays. Een array op index 0 en een array op index 1
 *  Om een enkele waarde op het scherm te tonen doe je bijvoorbeeld dit.
 *
 *   <--medewerker-> */


 
echo $medewerkers[0]['voornaam'] . " " . $medewerkers[0]['achternaam'] . " is " . $medewerkers[0]['functie'];  // Willem
echo "<br>";
echo $medewerkers[1]['voornaam']. " " . $medewerkers[1]['achternaam'] . " is " . $medewerkers[1]['functie']; // Donald
?>

