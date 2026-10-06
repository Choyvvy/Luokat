<?php
class Auto {
    public $merkki;
    public $malli;
}

$auto1 = new Auto();

$auto1->merkki = "Toyota";
$auto1->malli = "Corolla";

echo $auto1->merkki . "<br>";
echo $auto1->malli;
?>