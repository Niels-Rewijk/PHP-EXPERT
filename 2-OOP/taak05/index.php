<?php
class Lamp{
    public $kleur;
    public $helderheid;
    public $isAan;

    function setStatus($status){
        $this->isAan = $status;
    }
}

$woonkamerLamp = new Lamp();
$woonkamerLamp->kleur = 'geel';
$woonkamerLamp->helderheid = 'zacht';
$woonkamerLamp->setStatus(true);
echo $woonkamerLamp->isAan;
echo "<br>";
$keukenLamp = new Lamp();
$keukenLamp->kleur = 'wit';
$keukenLamp->helderheid = 'vel';
$keukenLamp->setStatus(true);
echo $keukenLamp->isAan;
?>