<?php
class Product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur; 
}
$dweil = new Product();
$dweil->merk = 'hema';
$dweil->prijs = 10;
$dweil->type = 'lang';
$dweil->kleur = 'rood';

$stofzuiger = new Product();
$stofzuiger->merk = 'aegon';
$stofzuiger->prijs = 50;
$stofzuiger->type = 'gfs505';
$stofzuiger->kleur= 'grijs';
echo $dweil->merk;
?>