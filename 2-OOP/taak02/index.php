<?php
class Auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}
$nieuweAuto = new auto();
$nieuweAuto->merk = 'Tesla';
$nieuweAuto->kleur = 'rood';
$nieuweAuto->type  = 'model 3';
$nieuweAuto->uitvoering = 'cabrio';
$nieuweAuto->brandstof = 'elektrisch';
$nogEenAndereAuto = new auto();


echo $nieuweAuto->merk;
echo "<br>";
echo $nieuweAuto->kleur;
echo "<br>";
echo $nieuweAuto->type;
echo "<br>";
echo $nieuweAuto->uitvoering;
echo "<br>";
echo $nieuweAuto->brandstof;
?>