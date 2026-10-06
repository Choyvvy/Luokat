<?php
class Opiskelija {
    public $nimi;
    public $ryhma;

    public function esittele() {
        echo $this->nimi .  " - " . $this->ryhma . "<br>";
    }
}

$opiskelija1 = new Opiskelija();
$opiskelija2 = new Opiskelija();

$opiskelija1->nimi = "Matti";
$opiskelija1->ryhma = "ICT1";

$opiskelija2->nimi = "Anna";
$opiskelija2->ryhma = "ICT2";

$opiskelija1->esittele();

echo "<br>";

$opiskelija2->esittele();
?>