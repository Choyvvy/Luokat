<?php
// 1. Luodaan Auto-luokka
class Auto {
    // 2. Lisätään julkiset ominaisuudet
    public $merkki;
    public $malli;
}

// 3. Luodaan luokasta olio
$auto1 = new Auto();

// 4. Annetaan oliolle merkki ja malli
$auto1->merkki = "Toyota";
$auto1->malli = "Corolla";

// Tulostetaan arvot
echo $auto1->merkki . "<br>";
echo $auto1->malli;
?>