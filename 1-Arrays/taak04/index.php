<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];


$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

foreach ($speelgoed as $x => $value) {
    echo "speelgoed " . $speelgoed[$x]["naam"] . " uit de categorie " . $speelgoed[$x]["soort"] . " kost " . $speelgoed[$x]["prijs"];
    echo "<br>";
}
foreach ($games as $x => $value) {
    echo "speelgoed " . $games[$x]["naam"] . " uit de categorie " . $games[$x]["uitgever"] . " kost " . $games[$x]["prijs"];
    echo "<br>";
}
?>